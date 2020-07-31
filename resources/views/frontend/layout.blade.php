<!DOCTYPE html>
<html lang="vi" class="no-js">
<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <link rel="stylesheet" href="{{ url('frontend/css/vitaminc.css') }}" type="text/css"/>
    <title>Home</title>
    <!--[if lte IE 9]>
    <script src="{{ url('frontend/js/html5.js') }}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{ url('frontend/css/ie9.css') }}" type="text/css"/>
    <![endif]-->
    <script src="{{ url('frontend/js/modernizr.js') }}" type="text/javascript"></script>
</head>
<body>
<div class="menuIcon pc">
    <div class="listIcons">
        <ul>
            <li>
                <a href="#" class="iSearch">Search</a>
                <div class="box-find" id="box-find">
                    <form>
                        <input type="text" placeholder="Từ khóa tìm kiếm" name="keyword" class="txt"/>
                        <input type="submit" value="" name="submit" class="btn-find"/>
                    </form>
                </div>
            </li>
            <li><a href="#" class="iYou">Youtube</a></li>
            <li><a href="#" class="iSkype">Skype</a></li>
            <li><a href="#" class="iGoogle">Google</a></li>
        </ul>
    </div>
</div>
<div class="hotLine sp">
    <img src="{{ url('frontend/imgs/hot.png') }}" alt="Hot">
</div>
<header class="header">
    <div class="container">
        <h1 class="clearFix">
            <a href="#" class="logo" title="Logo">
                <img src="{{ url('frontend/imgs/logo.png') }}" alt="Vitamin C" width="225" height="125" class="pc">
                <img src="{{ url('frontend/imgs/logosp.png') }}" alt="Vitamin C" width="295" height="100" class="sp">
            </a>
        </h1>
        <ul id="globalNav" class="pc">
            <li><a href="/" class="active">Trang chủ</a></li>
            <li><a href="/">VITAMIN C<br>TỰ NHIÊN</a></li>
            <li>
                <a href="/">Vitamin C</a>
                <ul>
                    <li><a href="/">C NATTU</a></li>
                    <li><a href="/">C NATTU KIDS</a></li>
                </ul>
            </li>
            <li><a href="/">Tin tức</a></li>
            <li>
                <a href="/">GÓC MẸ <br>THÔNG THÁI</a>
                <ul>
                    <li><a href="">Bệnh trẻ thường gặp</a></li>
                    <li><a href="">Dược liệu</a></li>
                    <li><a href="">Nghiên cứu lâm sàng</a></li>
                </ul>
            </li>
            <li><a href="/">Videos</a></li>
            <li><a href="/">CÂU HỎI <br>THƯỜNG GẶP</a></li>
            <li><a href="/">Liên hệ</a></li>
        </ul>
        <a href="#" title="Menu" class="sp btnMenu" id="btnMenu">Menu</a>
    </div>
</header>
<!-- /endHeader -->

@include('frontend.index_slider')

<!-- /endboxSlidePage -->
<section class="section mb0">
    <div class="container">
        <div class="contentLeft">
            @yield('content')
        </div>
        <div class="contentRight">
            <div class="boxVideo">
                <h3 class="globalTitle">
                    <a href="#">Góc Video</a>
                </h3>
                <div class="content">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/4QEmJ3sPHIg" frameborder="0" allowfullscreen></iframe>
                    <ul class="listVideo">
                        <li><a href="#">Giải đáp các thắc mắc của Mẹ trong quá  trình mang thai và chăm </a></li>
                        <li><a href="#">Giải đáp các thắc mắc của Mẹ trong quá  trình mang thai và chăm </a></li>
                        <li><a href="#">Giải đáp các thắc mắc của Mẹ trong quá  trình mang thai và chăm </a></li>
                    </ul>
                </div>
            </div>
            <!-- /endVideo -->
            <div class="boxSale">
                <h3 class="globalTitle">
                    <a href="#">Cộng đồng mẹ thông thái</a>
                </h3>
                <div class="Social">
                    <div class="fb-page" data-href="https://www.facebook.com/tuelinh.vn" data-width="100%" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/tuelinh.vn"><a href="https://www.facebook.com/tuelinh.vn">Tuệ Linh</a></blockquote></div></div>
                </div>
            </div>
            <!-- /endSale -->
        </div>
    </div>
</section>
<!-- /endSection -->
<footer class="footer">
    <div class="container">
        <div class="boxFooter clearFix">
            <div class="areaSocial">
                <ul class="listSocial clearFix">
                    <li><a href="#" class="se">Search</a></li>
                    <li><a href="#" class="yu">Youtube</a></li>
                    <li><a href="#" class="sk">Skype</a></li>
                    <li><a href="#" class="go">googleplus</a></li>
                </ul>
            </div>
            <div class="areaLink">
                <ul class="listCategory clearFix">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">VITAMIN C TỰ NHIÊN</a></li>
                    <li><a href="#">Vitamin C</a></li>
                    <li><a href="#">TIN TỨC</a></li>
                    <li><a href="#">GÓC MẸ THÔNG THÁI</a></li>
                    <li><a href="#">Video</a></li>
                    <li><a href="#">CÂU HỎI THƯỜNG GẶP</a></li>
                    <li><a href="#">LIÊN HỆ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyRight">
        <div class="container">
            <p class="copy">MỌI THÔNG TIN ĐỀU BẢN QUYỀN ĐỀU THUỘC VỀ CÔNG TY TNHH TUỆ LINH</p>
            <p class="address">
                Tầng 5, Tòa nhà 29 T1 - Hoàng Đạo Thúy - Trung Hòa - Cầu Giấy - Hà Nội- Điện thoại: (04) 62824344 - Fax: 04.62824263
            </p>
        </div>
    </div>
</footer>
<script type="text/javascript" src="{{ url('frontend/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ url('frontend/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ url('frontend/js/jquery.matchHeight-min.js') }}"></script>
<script type="text/javascript" src="{{ url('frontend/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ url('frontend/js/scrollReveal.js') }}"></script>
<script type="text/javascript" src="{{ url('frontend/js/common.js') }}"></script>
@yield('after_scripts')
</body>
</html>