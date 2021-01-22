<?php

use App\Http\Controllers\HomeController;
?>
@extends('layout.master')

@section('content')
<section class="container">
    <div class="row">
        <div class="col-9 mt-row">
            <div class="content-navi d-flex justify-content-between align-items-center">
                <b class="col">TẤT CẢ PHIM</b>
                <span class="d-flex align-items-center justify-content-between">
                    <ul class="d-flex justify-content-between" style="margin: 0; list-style: none">
                        <li><a href="a-w" class="a-w">Phim Hot</a></li>
                        <li>
                            <a href="a-w" class="a-w" style="margin: 0 10px">Phim lẻ</a>
                        </li>
                        <li><a href="a-w" class="a-w">TV Show</a></li>
                    </ul>
                    <a href="" class="btn btn-danger" style="margin-left: 10px; padding: 0 5px; font-size: 0.9rem">xem tất cả</a>
                </span>
            </div>
            <div class="movies-container">
                @foreach($filmtheloai as $tl)
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="/storage/img/{{ $tl->wallpaper }}" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0 0 16
                                                16">
                            <path d="M3.612
                                                    15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                    6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                    0l2.184 4.327
                                                    4.898.696c.441.062.612.636.283.95l-3.523
                                                    3.356.83
                                                    4.73c.078.443-.36.79-.746.592L8
                                                    13.187l-4.389 2.256z" />
                        </svg>
                        {{$tl->imdb}}
                    </div>
                    <div class="movie-title p-2">
                        <a href="{{action([HomeController::class, 'detail'],[$tl->id])}}" class="a-w">{{ Str::substr($tl->title, 0,17) }}</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">{{$tl->time}} Phút</small>
                    <div class="movie-popup">
                        <div class="p-2">{{$tl->title}} </div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: {{$tl->imdb}}</span>
                            <small>{{$tl->year_release}}</small>
                            <small>{{$tl->time}} phút</small>
                            <small>{{$tl->view}}lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                {{ Str::substr($tl->content, 0,100) }}...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                @endforeach
                <!-- <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0 0
                                                    16 16">
                            <path d="M3.612
                                                        15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                        6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                        0l2.184 4.327
                                                        4.898.696c.441.062.612.636.283.95l-3.523
                                                        3.356.83
                                                        4.73c.078.443-.36.79-.746.592L8
                                                        13.187l-4.389 2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0
                                                        0 16 16">
                            <path d="M3.612
                                                            15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                            6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                            0l2.184 4.327
                                                            4.898.696c.441.062.612.636.283.95l-3.523
                                                            3.356.83
                                                            4.73c.078.443-.36.79-.746.592L8
                                                            13.187l-4.389
                                                            2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612
                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                0l2.184 4.327
                                                                4.898.696c.441.062.612.636.283.95l-3.523
                                                                3.356.83
                                                                4.73c.078.443-.36.79-.746.592L8
                                                                13.187l-4.389
                                                                2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0 0 16
                                                                16">
                            <path d="M3.612
                                                                    15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                    6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                    0l2.184
                                                                    4.327
                                                                    4.898.696c.441.062.612.636.283.95l-3.523
                                                                    3.356.83
                                                                    4.73c.078.443-.36.79-.746.592L8
                                                                    13.187l-4.389
                                                                    2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0 0
                                                                    16 16">
                            <path d="M3.612
                                                                        15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                        6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                        0l2.184
                                                                        4.327
                                                                        4.898.696c.441.062.612.636.283.95l-3.523
                                                                        3.356.83
                                                                        4.73c.078.443-.36.79-.746.592L8
                                                                        13.187l-4.389
                                                                        2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0
                                                                        0 16
                                                                        16">
                            <path d="M3.612
                                                                            15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                            6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                            0l2.184
                                                                            4.327
                                                                            4.898.696c.441.062.612.636.283.95l-3.523
                                                                            3.356.83
                                                                            4.73c.078.443-.36.79-.746.592L8
                                                                            13.187l-4.389
                                                                            2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0
                                                                            0 16
                                                                            16">
                            <path d="M3.612
                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                0l2.184
                                                                                4.327
                                                                                4.898.696c.441.062.612.636.283.95l-3.523
                                                                                3.356.83
                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                13.187l-4.389
                                                                                2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0
                                                                                0
                                                                                16
                                                                                16">
                            <path d="M3.612
                                                                                    15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                    6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                    0l2.184
                                                                                    4.327
                                                                                    4.898.696c.441.062.612.636.283.95l-3.523
                                                                                    3.356.83
                                                                                    4.73c.078.443-.36.79-.746.592L8
                                                                                    13.187l-4.389
                                                                                    2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0
                                                                                    0
                                                                                    16
                                                                                    16">
                            <path d="M3.612
                                                                                        15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                        6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                        0l2.184
                                                                                        4.327
                                                                                        4.898.696c.441.062.612.636.283.95l-3.523
                                                                                        3.356.83
                                                                                        4.73c.078.443-.36.79-.746.592L8
                                                                                        13.187l-4.389
                                                                                        2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0 0 16
                                                16">
                            <path d="M3.612
                                                    15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                    6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                    0l2.184 4.327
                                                    4.898.696c.441.062.612.636.283.95l-3.523
                                                    3.356.83
                                                    4.73c.078.443-.36.79-.746.592L8
                                                    13.187l-4.389 2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0 0
                                                    16 16">
                            <path d="M3.612
                                                        15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                        6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                        0l2.184 4.327
                                                        4.898.696c.441.062.612.636.283.95l-3.523
                                                        3.356.83
                                                        4.73c.078.443-.36.79-.746.592L8
                                                        13.187l-4.389 2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0
                                                        0 16 16">
                            <path d="M3.612
                                                            15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                            6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                            0l2.184 4.327
                                                            4.898.696c.441.062.612.636.283.95l-3.523
                                                            3.356.83
                                                            4.73c.078.443-.36.79-.746.592L8
                                                            13.187l-4.389
                                                            2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612
                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                0l2.184 4.327
                                                                4.898.696c.441.062.612.636.283.95l-3.523
                                                                3.356.83
                                                                4.73c.078.443-.36.79-.746.592L8
                                                                13.187l-4.389
                                                                2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0 0 16
                                                                16">
                            <path d="M3.612
                                                                    15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                    6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                    0l2.184
                                                                    4.327
                                                                    4.898.696c.441.062.612.636.283.95l-3.523
                                                                    3.356.83
                                                                    4.73c.078.443-.36.79-.746.592L8
                                                                    13.187l-4.389
                                                                    2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0 0
                                                                    16 16">
                            <path d="M3.612
                                                                        15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                        6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                        0l2.184
                                                                        4.327
                                                                        4.898.696c.441.062.612.636.283.95l-3.523
                                                                        3.356.83
                                                                        4.73c.078.443-.36.79-.746.592L8
                                                                        13.187l-4.389
                                                                        2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0
                                                                        0 16
                                                                        16">
                            <path d="M3.612
                                                                            15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                            6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                            0l2.184
                                                                            4.327
                                                                            4.898.696c.441.062.612.636.283.95l-3.523
                                                                            3.356.83
                                                                            4.73c.078.443-.36.79-.746.592L8
                                                                            13.187l-4.389
                                                                            2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0
                                                                            0 16
                                                                            16">
                            <path d="M3.612
                                                                                15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                0l2.184
                                                                                4.327
                                                                                4.898.696c.441.062.612.636.283.95l-3.523
                                                                                3.356.83
                                                                                4.73c.078.443-.36.79-.746.592L8
                                                                                13.187l-4.389
                                                                                2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0
                                                                                0
                                                                                16
                                                                                16">
                            <path d="M3.612
                                                                                    15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                    6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                    0l2.184
                                                                                    4.327
                                                                                    4.898.696c.441.062.612.636.283.95l-3.523
                                                                                    3.356.83
                                                                                    4.73c.078.443-.36.79-.746.592L8
                                                                                    13.187l-4.389
                                                                                    2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="img/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg" alt="" />
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0
                                                                                    0
                                                                                    16
                                                                                    16">
                            <path d="M3.612
                                                                                        15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173
                                                                                        6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927
                                                                                        0l2.184
                                                                                        4.327
                                                                                        4.898.696c.441.062.612.636.283.95l-3.523
                                                                                        3.356.83
                                                                                        4.73c.078.443-.36.79-.746.592L8
                                                                                        13.187l-4.389
                                                                                        2.256z" />
                        </svg>
                        8.3
                    </div>
                    <div class="movie-title p-2">
                        <a href="" class="a-w">Trận chiến năm 1917</a>
                    </div>
                    <small class="movie-year p-2" style="color: #95a5a6">Nov-13-2020</small>
                    <div class="movie-popup">
                        <div class="p-2">Trận Chiến Năm 1917</div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark">IMDB: 7.9</span>
                            <small>2019</small>
                            <small>119 phút</small>
                            <small>600 lượt xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6">
                                Bộ phim “1917” kể về hai binh sĩ Anh trong Chiến tranh Thế
                                giới thứ nhất (do George MacKay và ...
                            </p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w">Hành động</a></li>
                            <li><a href="" class="a-w">Giật gân</a></li>
                            <li><a href="" class="a-w">Tâm lí</a></li>
                        </ul>
                    </div>
                </div> -->
            </div>

            <!-- <div class="pagination-div">
                <div aria-label="Page navigation example" class="news_pagination">
                    <ul class="news_pagi">
                        <li class="page-item">
                            <a class="page-link" href="#">Trước</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Sau</a></li>
                    </ul>
                </div>
            </div> -->
        </div>
        <div class="col-3 mt-row">
            <div class="filter-main">
                <div class="content-navi d-flex justify-content-between align-items-center">
                    <b>Bộ lọc</b>
                </div>
                <section class="clearfix facet">
                    <p class="a-w">Thể loại</p>
                    <div class="filter-div">
                        @foreach($genres1 as $gen1)
                        <div>
                            <label class="facet-label">
                                <span class="custom-checkbox">
                                    <input id="{{$gen1->id}}" type="checkbox" />
                                    <label class="js-search-link a-w" for="{{$gen1->id}}">{{$gen1->name}}</label>
                                </span>
                                <!-- <a href="#" ></a> -->
                            </label>
                        </div>
                        @endforeach
                        <!-- <div>
                            <label class="facet-label">
                                <span class="custom-checkbox">
                                    <input id="id2" type="checkbox" />
                                    <label class="js-search-link a-w" for="id2">Tình cảm</label>
                                </span>
                            </label>
                        </div>
                        <div>
                            <label class="facet-label">
                                <span class="custom-checkbox">
                                    <input id="id3" type="checkbox" />
                                    <label class="js-search-link a-w" for="id3">Phim Hài</label>
                                </span>
                               
                            </label>
                        </div> -->
                        @foreach($genres2 as $gen2)
                        <div id="hidens" class="hiden" name="hidden" style="display: none">
                            <label class="facet-label">
                                <span class="custom-checkbox">
                                    <input id="{{$gen2->id}}" type="checkbox" />
                                    <label class="js-search-link a-w" for="{{$gen2->id}}">{{$gen2->name}}</label>
                                </span>
                            </label>
                        </div>
                        @endforeach
                        <!-- <div id="hidens" class="hiden" name="hidden" style="display: none">
                            <label class="facet-label">
                                <span class="custom-checkbox">
                                    <input id="id5" type="checkbox" />
                                    <label class="js-search-link a-w" for="id5">Phim Hài</label>
                                </span>
                              
                            </label>
                        </div> -->
                    </div>
                    <span id="show-all-tl" class="a-w show-all-tl" onclick="hideShow( )">Xem tất cả</span>
                </section>
                <section class="clearfix facet">
                    <p class="a-w">Hình thức</p>
                    <div class="filter-div">
                        <div>
                            <label class="facet-label">
                                <span class="custom-checkbox">
                                    <input id="idht1" type="checkbox" />
                                    <label class="js-search-link a-w" for="idht1">Phim bộ</label>
                                </span>
                                <!-- <a href="#" class="js-search-link"></a> -->
                            </label>
                        </div>
                        <div>
                            <label class="facet-label">
                                <span class="custom-checkbox">
                                    <input id="idht2" type="checkbox" />
                                    <label class="js-search-link a-w" for="idht2">Phim lẽ</label>
                                </span>
                                <!-- <a href="#" class="js-search-link"></a> -->
                            </label>
                        </div>
                        <div>
                            <label class="facet-label">
                                <span class="custom-checkbox">
                                    <input id="idht3" type="checkbox" />
                                    <label class="js-search-link a-w" for="idht3">Phim chiếu rạp</label>
                                </span>
                                <!-- <a href="#" class="js-search-link"></a> -->
                            </label>
                        </div>
                    </div>
                </section>
                <section class="clearfix facet">
                    <p class="a-w">Theo quốc gia</p>
                    <div class="filter-div">
                        <div>
                            <label class="facet-label">
                                <span class="custom-checkbox">
                                    <input id="idqg1" type="checkbox" />
                                    <label class="js-search-link a-w" for="idqg1">Mỹ</label>
                                </span>
                                <!-- <a href="#" class="js-search-link">Mỹ</a> -->
                            </label>
                        </div>
                        <div>
                            <label class="facet-label">
                                <span class="custom-checkbox">
                                    <input id="idqg2" type="checkbox" />
                                    <label class="js-search-link a-w" for="idqg2">Việt Nam</label>
                                </span>
                                <!-- <a href="#" class="js-search-link">Việt Nam</a> -->
                            </label>
                        </div>
                        <div>
                            <label class="facet-label">
                                <span class="custom-checkbox">
                                    <input id="idqg3" type="checkbox" />
                                    <label class="js-search-link a-w" for="idqg3">Trung Quốc</label>
                                </span>
                                <!-- <a href="#" class="js-search-link">Trung Quốc</a> -->
                            </label>
                        </div>
                        <div id="hidenQG" class="hiden" name="hidenQG">
                            <label class="facet-label">
                                <span class="custom-checkbox">
                                    <input id="idqg4" type="checkbox" />
                                    <label class="js-search-link a-w" for="idqg4">Hàn Quốc</label>
                                </span>
                                <!-- <a href="#" class="js-search-link">Hàn Quốc</a> -->
                            </label>
                        </div>
                        <div id="hidenQG" class="hiden" name="hidenQG">
                            <label class="facet-label">
                                <span class="custom-checkbox">
                                    <input id="idqg5" type="checkbox" />
                                    <label class="js-search-link a-w" for="idqg5">Nhật</label>
                                </span>
                                <!-- <a href="#" class="js-search-link">Nhật</a> -->
                            </label>
                        </div>
                    </div>
                    <span id="show-all-qg" class="a-w show-all-tl" onclick="hideShowQG()">Xem tất cả</span>
                </section>
                <button class="filter-button btn-danger">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    <span>Xóa</span>
                </button>
            </div>
        </div>
    </div>
</section>
@endsection