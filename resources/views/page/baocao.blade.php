@extends('layout.master')
@section('content')
<section class="container">
    <div class="row">
        <div class="col-12 mt-row">
            <div class="report baocao">
                <h3>Cao Đẵng thực hành FPT Polytechnic</h3>
                <img src="img/logo_tthpfptc.png" />
                <h1 class="a-w">Assingment</h1>
                <p>Môn: Lập trình php3</p>
                <p>
                    Giảng viên: <span>Nguyễn Văn Long</span><br /><a href="https://longnv.name.vn/">(longnv.name.vn)</a>
                </p>
            </div>
        </div>
        <div class="col-12 all-content">
            <div class="col-6">
                <div class="asm-name">
                    <div class="asm-name-img">
                        <a class="hover-img">
                            <img src="img/sakura.jpg" />
                        </a>
                    </div>
                    <div class="asm-name-content">
                        <p>Họ Tên: Lê Hoàng hải</p>
                        <p>MSSV: PS11105</p>
                        <p>Lớp: WD 15202</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="asm-name">
                    <div class="asm-name-img">
                        <a class="hover-img">
                            <img src="img/joke.jpg" />
                        </a>
                    </div>
                    <div class="asm-name-content">
                        <p>Họ Tên: Võ Minh Trí</p>
                        <p>MSSV: 11154</p>
                        <p>Lớp: WD 15202</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="report-view">
                <div class="report-view-1">
                    <h2 class="a-w">Báo cáo</h2>
                    <p>Chức năng:</p>
                    <ul>
                        <li>Migrate</li>
                        <li>seed</li>
                        <li>
                            <p>Show trang chủ, trang chi tiết, show theo thê loại, liên hệ</p>
                        </li>
                        <li>
                            <p>Admin, thêm xóa sửa, thể loại, phim, đạo diễn, diễn viên</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection