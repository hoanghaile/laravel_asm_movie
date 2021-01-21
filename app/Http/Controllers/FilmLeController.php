<?php

namespace App\Http\Controllers;

use App\Models\director;
use App\Models\film;
use App\Models\genres;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class FilmLeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film = film::paginate(5);
        $genres = genres::all();
        $dir = director::all();
        return view('admin.page.film.filmle', ['film' => $film, 'genres' => $genres, 'dir' => $dir]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tenfilm' => 'required|unique:film,title',
            'namphathanh' => 'required',
            'diemimdb' => 'required',
            'thoiluong' => 'required',
            'noidung' => 'required',
            'poster' => 'required',
            'wallpaper' => 'required',

        ],[
            'tenfilm.required' => 'Tên phim không được phép để trống',
            'tenfilm.unique' => 'Tên phim đã bị trùng',
            'namphathanh.required' => 'Năm phát hành không được phép để trống',
            'diemimdb.required' => 'Điểm imdb không được phép để trống',
            'thoiluong.required' => 'Thời lượng không được phép để trống',
            'noidung.required' => 'Nội dung không được phép để trống',
            'poster.required' => 'Poster không được phép để trống',
            'wallpaper.required' => 'Wallpaper không được phép để trống',
        ]);

        $film = new film;
        $film->title = $request->tenfilm;
        $film->slug = Str::of($request->tenfilm)->slug('-');
        $film->year_release	= $request->namphathanh;
        $film->imdb = $request->diemimdb;
        $film->time = $request->thoiluong;
        $film->link_youtube = $request->linkyoutube;
        $film->link = $request->link;
        $film->content = $request->noidung;

        $film->dir_id = $request->daodien;

        if ($request->hasFile('poster')) {
            $mypath = 'public/img';
            $imagename = $request->file('poster')->getClientOriginalName();
            $request->file('poster')->storeAs($mypath,$imagename);
            $film->poster = $imagename;
        }

        if ($request->hasFile('wallpaper')) {
            $mypath = 'public/img';
            $imagename = $request->file('wallpaper')->getClientOriginalName();
            $request->file('wallpaper')->storeAs($mypath,$imagename);
            $film->wallpaper = $imagename;
        }

        $film->save();
        $film->genres()->attach($request->theloai);

        
        return redirect('admin/filmle')->with('msg', 'Thêm phim thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = film::find($id);
        $dir = director::find($film->dir_id);
        $gen = $film->genres;
        // return dd($gen);
        return view('admin.page.film.filmledetail', ['film' => $film , 'dir' => $dir, 'gen' => $gen]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = film::find($id);
        $dir = director::all();
        $gen = genres::all();
        $filmgenres = $film->genres;
        $data = ['film' => $film, 'dir' => $dir, 'gen' => $gen, 'filmgenres' => $filmgenres];
        return view('admin.page.film.editfilmle', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $film = film::find($id);

        $request->validate([
            'tenphim' => 'required',
            'namphathanh' => 'required',
            'imdb' => 'required',
            'thoiluong' => 'required',
            'noidung' => 'required',

        ],[
            'tenphim.required' => 'Tên phim không được phép để trống',
            'namphathanh.required' => 'Năm phát hành không được phép để trống',
            'imdb.required' => 'Điểm imdb không được phép để trống',
            'thoiluong.required' => 'Thời lượng không được phép để trống',
            'noidung.required' => 'Nội dung không được phép để trống',
        ]);        

        $film->title = $request->tenphim;
        $film->slug = Str::of($request->tenphim)->slug('-');
        $film->year_release	= $request->namphathanh;
        $film->imdb = $request->imdb;
        $film->time = $request->thoiluong;
        $film->link_youtube = $request->linkyoutube;
        $film->link = $request->link;
        $film->content = $request->noidung;

        $film->dir_id = $request->daodien;

        if ($request->hasFile('poster')) {
            $mypath = 'public/img';
            $imagename = $request->file('poster')->getClientOriginalName();
            $request->file('poster')->storeAs($mypath,$imagename);
            $film->poster = $imagename;
        }

        if ($request->hasFile('wallpaper')) {
            $mypath = 'public/img';
            $imagename = $request->file('wallpaper')->getClientOriginalName();
            $request->file('wallpaper')->storeAs($mypath,$imagename);
            $film->wallpaper = $imagename;
        }

        
        $film->genres()->sync($request->theloai);
        $film->update();
        // return dd($hasGenres);
        return redirect('admin/filmle')->with('msg', 'Sửa phim thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        film::find($id)->delete();
        return redirect('admin/filmle')->with('msg', 'Xóa phim thành công');
    }
}
