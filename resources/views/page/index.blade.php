<?php

use App\Http\Controllers\HomeController;
?>

@extends('layout.master')

@section('content')

@include('inc.banner')
<!-- === opening content === -->
<section class="container">
    <div class="row">
        <div class="col-9">
            <div class="content-navi d-flex justify-content-between align-items-center">
                <b class="col">PHIM HOT</b>
                <span class="d-flex align-items-center  justify-content-between">
                    <ul class="d-flex  justify-content-between" style="margin: 0; list-style: none;">
                        <li><a href="a-w" class="a-w">Phim Hot</a></li>
                        <li><a href="a-w" class="a-w" style="margin: 0 10px;">Phim lẻ</a></li>
                        <li><a href="a-w" class="a-w">TV Show</a></li>
                    </ul>
                    <a href="" class="btn btn-danger" style="margin-left: 10px; padding: 0 5px; font-size: 0.9rem;">xem tất cả</a>
                </span>
            </div>
            <!-- @yield('content') -->

            <div class="movies-container">

                @foreach($film as $key)
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="/storage/img/{{ $key->wallpaper }}" alt="">
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <?= $key->imdb ?>
                    </div>
                    <div class="movie-title p-2"><a href="{{action([HomeController::class, 'detail'],[$key->id])}}" class="a-w">{{ Str::substr($key->title, 0, 17) }}</a></div>
                    <small class="movie-year p-2" style="color: #95a5a6;"><?= $key->time ?> Phút</small>
                    <div class="movie-popup">
                        <div class="p-2">
                            <div class="movie-title p-2"><a href="" class="a-w"><?= $key->title ?> </a></div>
                        </div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark"><?= $key->imdb ?> </span>
                            <small><?= $key->year_release ?></small>
                            <small><?= $key->time ?> Phút</small>
                            <small><?= $key->view ?> lược xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6;">{{ Str::substr($key->content, 0, 100) }} ...</p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w"></a></li>

                        </ul>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
        <div class="col-3">
            <div class="content-navi d-flex justify-content-between align-items-center">
                <b>PHIM HOT TRONG TUẦN</b>
            </div>
            <div class="movie-sidebar">
                @foreach($film as $i => $bar)
                <div class="movie-sidebar-item">
                    <div class="movie-img">
                        <img src="/storage/img/<?= $bar->wallpaper ?>" alt="">
                    </div>
                    <div class="sidebar-item-content">
                        <div class="movie-title p-2"><a href="{{action([HomeController::class, 'detail'],[$bar->id])}}" class="a-w">{{ Str::substr($bar->title, 0, 20) }}</a></div>
                        <small class="movie-year p-2" style="color: #95a5a6;"><?= $bar->time ?> Phút</small>
                    </div>
                    <div class="sidebar-number">{{$i+1}}</div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- ==== close content ==== -->

<!-- === opening content === -->
<section class="container">
    <div class="row">
        <div class="col-9">
            <div class="content-navi d-flex justify-content-between align-items-center">
                <b>PHIM BỘ</b>
                <span class="d-flex align-items-center">
                    <p class="m-0" style="color: gray;">1101</p>
                    <a href="" class="btn btn-danger" style="margin-left: 10px; padding: 0 5px; font-size: 0.9rem;">xem tất cả</a>
                </span>
            </div>
            <!-- @yield('content') -->
            <div class="movies-container">

                @foreach($film1 as $key)
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="/storage/img/<?= $key->wallpaper ?>" alt="">
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <?= $key->imdb ?>
                    </div>
                    <div class="movie-title p-2"><a href="{{action([HomeController::class, 'detail'],[$key->id])}}" class="a-w">{{ Str::substr($key->title, 0, 17) }}</a></div>
                    <small class="movie-year p-2" style="color: #95a5a6;"><?= $key->time ?> Phút</small>
                    <div class="movie-popup">
                        <div class="p-2">
                            <div class="movie-title p-2"><a href="" class="a-w"><?= $key->title ?> </a></div>
                        </div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark"><?= $key->imdb ?> </span>
                            <small><?= $key->year_release ?></small>
                            <small><?= $key->time ?> Phút</small>
                            <small><?= $key->view ?> lược xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6;">{{ Str::substr($key->content, 0, 100) }} ...</p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w"></a></li>

                        </ul>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="col-3">
            <div class="content-navi d-flex justify-content-between align-items-center">
                <b>TOP PHIM CHIẾU RẠP</b>
            </div>
            <!-- @yield('sidebar') -->

            <div class="movie-sidebar">
                @foreach($film1 as $i=>$bar1)
                <div class="movie-sidebar-item">
                    <div class="movie-img">
                        <img src="/storage/img/{{$bar1->wallpaper}} " alt="">
                    </div>
                    <div class="sidebar-item-content">
                        <div class="movie-title p-2"><a href="{{action([HomeController::class, 'detail'],[$bar1->id])}}" class="a-w">{{ Str::substr($bar1->title, 0, 17) }}</a></div>
                        <small class="movie-year p-2" style="color: #95a5a6;">{{$bar1->time}} Phút</small>
                    </div>
                    <div class="sidebar-number">{{$i+1}}</div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
<!-- ==== close content ==== -->

<!-- === opening content === -->
<section class="container">
    <div class="row">
        <div class="col-9">
            <div class="content-navi d-flex justify-content-between align-items-center">
                <b>PHIM CHIẾU RẠP</b>
                <span class="d-flex align-items-center">
                    <p class="m-0" style="color: gray;">1101</p>
                    <a href="" class="btn btn-danger" style="margin-left: 10px; padding: 0 5px; font-size: 0.9rem;">xem tất cả</a>
                </span>
            </div>
            <!-- @yield('content') -->
            <div class="movies-container">
                @foreach($film2 as $key2)
                <div class="movie-item">
                    <div class="movie-img">
                        <img src="/storage/img/<?= $key2->wallpaper ?>" alt="">
                    </div>
                    <div class="movie-ratingavg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <?= $key2->imdb ?>
                    </div>
                    <div class="movie-title p-2"><a href="{{action([HomeController::class, 'detail'],[$key2->id])}}" class="a-w">{{ Str::substr($key2->title, 0, 17) }}</a></div>
                    <small class="movie-year p-2" style="color: #95a5a6;"><?= $key2->time ?> Phút</small>
                    <div class="movie-popup">
                        <div class="p-2">
                            <div class="movie-title p-2"><a href="" class="a-w">{{ Str::substr($key2->title, 0, 17) }} </a></div>
                        </div>
                        <div class="popup-imdb d-flex align-items-center justify-content-around">
                            <span class="btn btn-dark"><?= $key2->imdb ?> </span>
                            <small><?= $key2->year_release ?></small>
                            <small><?= $key2->time ?> Phút</small>
                            <small><?= $key2->view ?> lược xem</small>
                        </div>
                        <div class="p-2">
                            <p style="color: #95a5a6;">{{ Str::substr($key2->content, 0, 100) }} ...</p>
                        </div>
                        <ul class="popup-genres">
                            <li><a href="" class="a-w"></a></li>

                        </ul>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="col-3">
            <div class="content-navi d-flex justify-content-between align-items-center">
                <b>TOP PHIM TRUYỀN HÌNH</b>
            </div>
            <!-- @yield('sidebar') -->
            <div class="movie-sidebar">
                @foreach($film2 as $i => $bar2)
                <div class="movie-sidebar-item">
                    <div class="movie-img">
                        <img src="/storage/img/{{$bar2->wallpaper}} " alt="">
                    </div>
                    <div class="sidebar-item-content">
                        <div class="movie-title p-2"><a href="{{action([HomeController::class, 'detail'],[$bar2->id])}}" class="a-w">{{ Str::substr($bar2->title, 0, 20) }} </a></div>
                        <small class="movie-year p-2" style="color: #95a5a6;">{{$bar->time}} Phút</small>
                    </div>
                    <div class="sidebar-number">{{$i+1}}</div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- ==== close content ==== -->
@endsection