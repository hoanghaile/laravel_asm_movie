<?php

use App\Http\Controllers\TinController;
use App\Http\Controllers\GuimailController;
?>
@extends('layout.master')
@section('content')
<section class="container">
    <div class="row">
        <div class="col-9 mt-row report">
            <div class="wrap-contact100">
                <div class="contact100-form-title">
                    <span class="contact100-form-title-1"> Liên Hệ </span>
                    <span class="contact100-form-title-2"> Ý kiến của các bạn </span>
                </div>
                <form class="contact100-form validate-form" action="{{Route('lienhe')}}" method="post">
                    {{ csrf_field()}}
                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <span class="label-input100">Họ và Tên:</span>
                        <input class="input100" type="text" name="name" placeholder="Tên của bạn" />
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <span class="label-input100">Email:</span>
                        <input class="input100" type="text" name="email" placeholder="Email của bạn" />
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Phone is required">
                        <span class="label-input100">Điện thoại:</span>
                        <input class="input100" type="text" name="phone" placeholder="Số điện thoại" />
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Message is required">
                        <span class="label-input100">Nội dung:</span>
                        <textarea class="input100" name="message" placeholder="Nội dung của bạn"></textarea>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn">
                            <span>
                                Gửi
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-3 mt-row">
            <div class="logo-raven">
                <img src="img/logo2.png" />
            </div>
        </div>
    </div>
</section>
@endsection