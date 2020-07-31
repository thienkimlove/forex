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
            <li><a href="{{ url('/') }}" class="{{ isset($page) && $page == 'index' ? 'active' : '' }}">Trang chủ</a></li>

            @foreach (\App\Models\Category::whereNull('parent_id')->get() as $parentCategory)

            <li>
                <a href="{{ url($parentCategory->slug) }}" class="{{ isset($page) && \App\Helpers::pActive($page, $parentCategory) ? 'active' : '' }}">{{ $parentCategory->name }}</a>

                @if ($parentCategory->subCategories->count() > 0)
                    <ul>
                        @foreach ($parentCategory->subCategories as $subCate)
                            <li><a href="{{ url($subCate->slug) }}" class="{{ isset($page) && \App\Helpers::pActive($page, $subCate) ? 'active' : '' }}">{{ $subCate->name }}</a></li>
                        @endforeach
                    </ul>
                @endif
            </li>

            @endforeach

            <li><a href="{{ url('lien-he') }}" class="{{ isset($page) && $page == 'lien-he' ? 'active' : '' }}">Liên hệ</a></li>
        </ul>
        <a href="javascript:void(0)" title="Menu" class="sp btnMenu" id="btnMenu">Menu</a>
    </div>
</header>
<!-- /endHeader -->

@if (isset($page) && $page == 'index')
    @include('frontend.index_slider')
@endif

<!-- /endboxSlidePage -->
<section class="section mb0">
    <div class="container">
        <div class="contentLeft">
            @yield('content')
        </div>
        @include('frontend.right')
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
                    @foreach (\App\Models\Category::whereNull('parent_id')->get() as $parentCategory)
                        <li><a href="{{ url($parentCategory->slug) }}">{{ $parentCategory->name }}</a></li>
                     @endforeach
                    <li><a href="#">LIÊN HỆ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyRight">
        <div class="container">
            <p class="copy">MỌI THÔNG TIN ĐỀU BẢN QUYỀN ĐỀU THUỘC VỀ CÔNG TY TNHH HOA QUAN</p>
            <p class="address">
                P 801A - Chung cư 197 Trần Phú - Hà Đông - Hà Nội- Điện thoại: 0903347191
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