<?php $curr = 'about';?>
@extends('master-page')
@section('title')Giới thiệu | Kiến trúc LS
@stop
@section('define-css')
<link rel="stylesheet" href="{{asset('css/header-page.css')}}">
<link rel="stylesheet" href="{{asset('css/about1.css')}}">

@stop
@section('main-content')
    <!--Main content-->
        <section class="main-content">
            <!--Banner-->
            <section class="page-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="page-title">Giới thiệu</h3>
                        </div>
                        <div class="col-md-6">
                            <ul class="breadcumb-menu">
                                <li>
                                    <a href="#">Trang chủ</a>
                                </li>
                                <li class="separator">/</li>
                                <li>Giới thiệu</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--Introduction-->
            <section class="introduction">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="author-wrap">
                                <img src="{{asset('img/about/author.png')}}" alt="" class="img-responsive">
                                <div class="author-info">
                                    <h4 class="author-name">PETER KUELKER </h4>
                                    <span class="author-pos">Nhà sáng lập</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h2 class="home-title about-title">Kien Truc lS Ltd.</h2>
                            <div class="about-hr"></div>
                            <div class="intro-txt">
                                <p>Công ty Cổ phần tư vấn thiết kế xây dựng và thương mại Không Gian Lớn và Nhỏ được thành lập từ
                                    năm 2009 với lòng yêu nghề và tâm huyết của những kiến trúc sư, kĩ sư trẻ và đội ngũ nhân
                                    viên lành nghề, Công ty Không Gian Lớn và Nhỏ đã không ngừng đổi mới, phát triển, nhanh chóng
                                    khẳng định được thương hiệu công ty kiến trúc nội thất uy tín và phong cách thiết kế của
                                    riêng mình. Công ty Không Gian Lớn và Nhỏ luôn luôn đổi mới để đáp ứng tốt nhất nhu cầu ngày
                                    càng cao của khách hàng trong môi trường cạnh tranh ngày nay. </p>
                                <p>Đến với Công ty Không Gian Lớn và Nhỏ, Quý khách hàng sẽ được cung cấp những dịch vụ toàn diện
                                    nhất bởi sự nhiệt tình chu đáo, đam mê sáng tạo, làm việc hết mình với chuyên môn cao của
                                    đội ngũ nhân viên của công ty.</p>
                                <p>Chúng tôi làm việc với phương châm: KHÔNG GIAN CỦA BẠN DÙ LỚN HAY NHỎ CŨNG PHẢI ĐẸP! Vì vậy Quý
                                    khách hàng sẽ hoàn toàn hài lòng với chất lượng sản phẩm và dịch vụ của Công ty. Chúng tôi
                                    sẽ đem lại tính thẩm mỹ cao nhất cho cả những chi tiết nhỏ nhất.</p>
                                <p>
                                    Công ty Không Gian Lớn và Nhỏ luôn sẵn sàng lắng nghe ý kiến đóng góp của quý khách hàng. Hãy liên hệ với chúng tôi bất cứ
                                    khi nào bạn cần đến.
                                </p>
                                <p>NHỮNG HOẠT ĐỘNG CHÍNH CỦA Công ty Cổ phần Tư vấn thiết kế xây dựng và thương mại Không Gian Lớn
                                    và Nhỏ.
                                </p>
                                Bao gồm:
                                <ul class="">
                                    <li>
                                        Thiết kế công trình giao thông, Hạ tầng kỹ thuật.
                                    </li>
                                    <li>
                                        Tư vấn thiết kế nội thất, ngoại thất, cảnh quan các công trình dân dụng và công nghiệp.
                                    </li>
                                    <li>
                                        Tư vấn, thiết kế cấp thoát nước, hệ thống điện các công trình dân dụng và công nghiệp. - Tư vấn thiết kế kiến trúc, kết cấu
                                        các công trình dân dụng và công nghiệp.
                                    </li>
                                    <li>Tư vấn, cung cấp đồ dùng nội thất, vật liệu xây dựng</li>
                                    <li>Thi công xây dựng công trình dân dụng và công nghiệp.</li>
                                    <li>Tư vấn quản lý dự án, quản lý xây dựng (tư vấn giám sát) công trình dân dụng và công nghiệp.
                                        - Thẩm tra thiết kế xây dựng công trình</li>
                                    <li> Cung cấp vật liệu xây dựng, trang thiết bị nội ngoại thất</li>
                                    <li>Sản xuất , cung cấp, lắp đặt giường, tủ, bàn ghế và các sản phẩm đồ gỗ khác - Mọi yêu cầu
                                        tư vấn và sử dụng dịch vụ của quí khách hàng</li>
                                </ul>
                            </div>
                        </div>
    
                    </div>
                    <div class="intro-hr"></div>
                </div>
            </section>
            <!--end Introduction-->
    
        </section>
    <!--end Main content-->
@stop