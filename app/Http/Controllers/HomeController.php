<?php

namespace App\Http\Controllers;

use App\Models\film;
use App\Models\genres;
use App\Models\film_actor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $film = film::all();
        $genres = genres::all();
        $film2 = film::orderby('time', 'desc')->get();
        $film1 = film::orderby('title', 'desc')->get();
        $banner = film::orderby('time', 'desc')->limit(4)->get();
        return view('page.index', ["film" => $film, "genres" => $genres, "film1" => $film1, 'film2' => $film2, "banner" => $banner]);
    }

    public function slug($s)
    {
<<<<<<< HEAD
        $f = film::where('slug', $s)->first();
        // if ($f == null) {
        //     return 
        // }
=======
        $f = film::where('slug', $s)->first();        
        if (!$f) {
            abort(404);
        }
>>>>>>> e64b9cf0ead39db9f4784947aa83c6f2e95940d1

        return dd($f);
        // return view('page.index', ["genres" => $genres]);
    }

    public function detail($id)
    {
        $detail = film::where('id', $id)->first();
        $viewfilm = film::orderby('view', 'desc')->limit(10)->get();
        $detailsesion = film::where('id', $id)->get();
        $genres = genres::all();
        if ($detail == null) {
            echo 'Phim không tồn tại';
            return;
        }

        // return dd($viewfilm);
        return view('page.detail', [
            'detail' => $detail,
            'genres' => $genres,
            'detailsesion' => $detailsesion,
            'viewfilm' => $viewfilm,

        ]);
    }
    public function theloai($id)
    {
        $theloai = genres::where('id', $id)->paginate(5);
        $genres = genres::all();
        $filmtheloai = film::where('id', $id)->get();
        $filmshowall = film::all();
        $genres1 = genres::offset(0)->limit(3)->get();
        $genres2 = genres::offset(3)->limit(9)->get();
        return view('page.showall', [
            'theloai' => $theloai,
            'genres' => $genres,
            'filmtheloai' => $filmtheloai,
            'filmshowall' => $filmshowall,
            'genres1' => $genres1,
            'genres2' => $genres2
        ]);
    }

    public function lienhe()
    {
        $genres = genres::all();
        $d = array('title' => 'Liên hệ');
        return view('page.lienhe', $d, ['genres' => $genres]);
    }
    public function baocao()
    {
        $genres = genres::all();
        return view('page.baocao', ['genres' => $genres]);
    }
}
