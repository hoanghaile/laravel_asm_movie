<?php

use APP\Http\Controllers\HomeController;
?>
@extends('layout.master')
@section('content')
<section class="container detail">
    <div id="single" class="row">
        <div class="detail-content detail-left col-9">
            <div class="sheader">
                <div class="detail-poster">
                    <img src="/storage/img/{{ $detail->wallpaper }}" />
                </div>
                <div class="detail-data ml">
                    <h1>{{ $detail->title }} </h1>
                    <div class="detail-extra">
                        <span class="extra-date" itemprop="dataCreated">{{$detail->year_release}}</span>
                        <span class="detail-extra-span"><a href="#" rel="tag">JTBC</a></span>
                        <span class="detail-extra-span"><a href="#" rel="tag">Netflix</a></span>
                    </div>
                    <div class="starstruck-ptype">
                        <div class="starstruck-wrap">
                            <div class="dt_rating_data">
                                <div class="starstruck">
                                    <ul class="rating">
                                        <li class="rating-item" data-rate="1"></li>
                                        <li class="rating-item" data-rate="2"></li>
                                        <li class="rating-item active" data-rate="3"></li>
                                        <li class="rating-item" data-rate="4"></li>
                                        <li class="rating-item" data-rate="5"></li>
                                    </ul>
                                    <!-- <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i> -->
                                </div>
                                <div class="starstruck-rating">
                                    <span class="dt_rating_vgs">0</span>
                                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    <span class="rating-count">1</span>
                                    <span class="rating-text">Danh gia</span>
                                </div>
                            </div>
                            <div class="starstruck-rating-wrap">
                                <h3>Danh gia cua ban: <span>0</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="sgeneros">
                        <a class="tag-theloai a-w" href="#" ref="tag">The loai</a>
                        <a class="tag-theloai a-w" href="#" ref="tag">The loai</a>
                        <a class="tag-theloai a-w" href="#" ref="tag">The loai</a>
                    </div>
                </div>
            </div>
            <div class="single_tabs">
                <div class="button-tabs">
                    <a id="defaultOpen" class="tab-links a-b" onclick="openTab(event,
                                            'seeMovie')">Xem Phim</a>
                    <a class="tab-links a-b" onclick="openTab(event,
                                            'infoMovie')">Thong tin</a>
                    <a class="tab-links a-b" onclick="openTab(event,
                                            'castMovie')">Dien Vien</a>
                    <a class="tab-links a-b" onclick="openTab(event,
                                            'trailerMovie')">Trailers</a>
                    <a class="tab-links a-b" onclick="openTab(event,
                                            'commentMovie')">Comments</a>
                </div>
                <div id="seeMovie" class="fixidtab sbox">
                    <h2>Xem phim</h2>
                    <div class="serie_contenido">
                        <div class="seasons">
                            <div class="se-c">
                                <div class="se-q">
                                    <span class="se-t se-o">1</span>
                                    <span class="title-se">Seasons <i>10/01/2021</i></span>
                                </div>
                                <div class="se-a">
                                    <ul class="episodios">
                                        @foreach($detailsesion as $de)
                                        <li class="">
                                            <div class="imagen">
                                                <img src="/storage/img/{{ $de->wallpaper }}" />
                                            </div>
                                            <div class="numerando">1-1</div>
                                            <div class="episodiotitle">
                                                <a href="#">{{$de->title}}</a>
                                                <span class="extra-date" itemprop="dataCreated">{{$de->year_release}}</span>
                                            </div>
                                        </li>
                                        @endforeach
                                        <!-- <li class="">
                                            <div class="imagen">
                                                <img src="img/rita1.jpg" />
                                            </div>
                                            <div class="numerando">1-1</div>
                                            <div class="episodiotitle">
                                                <a href="#">Episode-1</a>
                                                <span class="extra-date" itemprop="dataCreated">14/01/2021</span>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class="imagen">
                                                <img src="img/rita1.jpg" />
                                            </div>
                                            <div class="numerando">1-1</div>
                                            <div class="episodiotitle">
                                                <a href="#">Episode-1</a>
                                                <span class="extra-date" itemprop="dataCreated">14/01/2021</span>
                                            </div>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="infoMovie" class="fixidtab sbox">
                    <h2>Nội dung phim</h2>
                    <div class="wp-content">
                        <p><strong>{{$de->title}}</strong></p>
                        <p class="content-p">
                            {{$de->content}}
                        </p>
                    </div>
                    <div class="custom_fields">
                        <b class="variante">Tên phim: </b>
                        <span class="valor">{{$de->title}}</span>
                    </div>
                    <div class="custom_fields">
                        <b class="variante">Diễn viên: </b>
                        <span class="valor">Fallen Rosemary</span>
                    </div>
                    <div class="custom_fields">
                        <b class="variante">Thời lượng: </b>
                        <span class="valor">{{$de->time}} Phút</span>
                    </div>
                    <div class="custom_fields">
                        <b class="variante">Ngày phát hành: </b>
                        <span class="valor">{{$de->year_release}}</span>
                    </div>
                </div>
                <div id="castMovie" class="fixidtab sbox">
                    <h2>Diễn viên</h2>
                        <div class="persons">

                    @foreach ($actor as $item)
                            <div class="person">
                                <div class="person-img">
                                    <a href="#">
                                        <img src="/storage/img/{{ $item->image }}" />
                                    </a>
                                </div>
                                <div class="person-data">
                                    <div class="person-data-name">
                                        <a href="#">{{$item->name}}</a>
                                    </div>
                                    {{-- <div class="caracter">Rita Rosemary</div> --}}
                                </div>
                            </div>
                        
                    @endforeach
                    </div>
                    
                </div>
                <div id="trailerMovie" class="fixidtab sbox">
                    <h2>Video Trailers</h2>
                    <div class="videobox">
                        <div class="embed">
                            @php
                            echo $de->link_youtube
                            @endphp
                        </div>
                    </div>
                </div>
                <div id="commentMovie" class="fixidtab sbox container">
                    <div class="img-comment">
                        <img src="img/joke.jpg" />
                        <h3 class="">Tên User</h3>
                    </div>
                    <div class="comment-movie row">
                        <textarea rows="3" cols="7" placeholder="Comment">
                       Comment</textarea>\
                    </div>
                    <button class="send-comment a-b" rows="2">Gửi</button>
                    <div class="see-comment">
                        <div class="see-comment-img">
                            <img src="img/rita.jpg" />
                        </div>
                        <div class="see-comment-content">
                            <h4>Rita Rosemary</h4>
                            <p class="content-comment">
                                Tối 15/1, Wayne Rooney quyết định treo giày ở tuổi 35 để
                                chuyển sang làm HLV trưởng Derby County theo hợp đồng kéo
                                dài 2 năm rưỡi, đến tháng 6 năm 2023. Trước đó, cựu tiền đạo
                                M.U đã được Derby County bổ nhiệm làm HLV tạm quyền thay thế
                                Phillip Cocu từ tháng 11 năm ngoái.
                            </p>
                            <span class="data-comment">14/01/2021</span>
                        </div>
                    </div>
                    <div class="see-comment">
                        <div class="see-comment-img">
                            <img src="img/rita.jpg" />
                        </div>
                        <div class="see-comment-content">
                            <h4>Rita Rosemary</h4>
                            <p class="content-comment">
                                Tối 15/1, Wayne Rooney quyết định treo giày ở tuổi 35 để
                                chuyển sang làm HLV trưởng Derby County theo hợp đồng kéo
                                dài 2 năm rưỡi, đến tháng 6 năm 2023.
                            </p>
                            <span class="data-comment">14/01/2021</span>
                        </div>
                    </div>
                </div>
                <div class="sbox">
                    <div class="dt_social_single">
                        <span class="dt_social_single-span">Đã chia sẽ: <b id="social_count">0</b></span>
                        <a href="#" class="icon-face"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a>
                        <a href="#" class="icon-twitter"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a>
                    </div>
                </div>
                <div class="sbox srelacionados">
                    <h2>Có thể bạn muốn xem</h2>
                    <div class="owl-wrapper-outer">
                        <div class="carousel-album">
                            <div class="owl-carousel owl-theme">

                                @foreach($viewfilm as $item)
                                <div class="item">
                                    <div class="owl-carousel-img">
                                        <img src="{{ asset('storage/img/'. $item->poster) }}" alt="" />
                                    </div>
                                    <div class="sidebar-item-content">
                                        <div class="movie-title p-2">
                                            <a href="" class="a-w">{{ Str::substr($item->title, 0, 17) }}</a>
                                        </div>
                                        <small class="movie-year p-2" style="color: #95a5a6">{{$item->year_release}}</small>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-content detail-right col-3">
            <div class="content-navi d-flex justify-content-between align-items-center">
                <b>PHIM XEM NHIỀU</b>
            </div>
            <div class="movie-sidebar">

                @foreach($viewfilm as $key => $item)
                <div class="movie-sidebar-item">
                    <div class="movie-img">
                        <img src="{{ asset('storage/img/'. $item->poster) }}" alt="" />
                    </div>
                    <div class="sidebar-item-content">
                        <div class="movie-title p-2">
                            <a href="" class="a-w">{{ Str::substr($item->title, 0, 17) }}</a>
                        </div>
                        <small class="movie-year p-2" style="color: #95a5a6">{{$item->year_release}}</small>
                    </div>
                    <div class="sidebar-number">{{$key + 1}}</div>
                </div>
                @endforeach



            </div>
        </div>
    </div>
</section>
@endsection