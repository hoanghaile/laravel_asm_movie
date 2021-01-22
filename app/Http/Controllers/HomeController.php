<?php

namespace App\Http\Controllers;

use App\Models\actor;
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
        $f = film::where('slug', $s)->first();
        if (!$f) {
            abort(404);
        }

        return dd($f);
        // return view('page.index', ["genres" => $genres]);
    }

    public function detail($id)
    {
        $detail = film::where('id', $id)->first();
        $viewfilm = film::orderby('view', 'desc')->limit(10)->get();
        $detailsesion = film::where('id', $id)->get();
        $genres = genres::all();
        $actor = $detail->actor;
        if ($detail == null) {
            echo 'Phim không tồn tại';
            return;
        }

        // return dd($actor);
        return view('page.detail', [
            'detail' => $detail,
            'genres' => $genres,
            'actor' => $actor,
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
