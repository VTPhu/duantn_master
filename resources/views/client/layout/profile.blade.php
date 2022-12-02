<?php
use Carbon\Carbon;
use app\Http\Controllers\client\ClientController;

?>
<body>
    
    <!-- preloader start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <svg viewBox="0 0 58 58" id="mustard" class="product">
                <g>
                  <path style="fill:#ED7161;" d="M39.869,58H18.131C16.954,58,16,57.046,16,55.869V12.621C16,11.726,16.726,11,17.621,11h22.757
                    C41.274,11,42,11.726,42,12.621v43.248C42,57.046,41.046,58,39.869,58z" />
                  <polygon style="fill:#D13834;" points="35,11 23,11 27.615,0 30.385,0 	" />
                  <rect x="16" y="16" style="fill:#D75A4A;" width="26" height="2" />
                  <rect x="20" y="11" style="fill:#D75A4A;" width="2" height="6" />
                  <rect x="25" y="11" style="fill:#D75A4A;" width="2" height="6" />
                  <rect x="30" y="11" style="fill:#D75A4A;" width="2" height="6" />
                  <rect x="36" y="11" style="fill:#D75A4A;" width="2" height="6" />
                  <circle style="fill:#D13834;" cx="29" cy="36" r="10" />
                </g>
                </svg>
                <svg viewBox="0 0 49.818 49.818" id="meat" class="product">
                    <g>
                    <path style="fill:#994530;" d="M0.953,38.891c0,0,3.184,6.921,11.405,9.64c1.827,0.604,3.751,0.751,5.667,0.922
                        c7.866,0.703,26.714-0.971,31.066-18.976c1.367-5.656,0.76-11.612-1.429-17.003C44.51,5.711,37.447-4.233,22.831,2.427
                        c-8.328,3.795-7.696,10.279-5.913,14.787c2.157,5.456-2.243,11.081-8.06,10.316C1.669,26.584-1.825,30.904,0.953,38.891z" />
                    <g>
                        <path style="fill:#D75A4A;" d="M4.69,37.18c0.402,0.785,3.058,5.552,9.111,7.554c1.335,0.441,2.863,0.577,4.482,0.72l0.282,0.025
                            c0.818,0.073,1.698,0.11,2.617,0.11c18.18,0,22.854-11.218,24.02-16.041c1.134-4.693,0.706-9.703-1.235-14.488
                            C41.049,7.874,36.856,4.229,31.506,4.229c-2.21,0-4.683,0.615-7.349,1.83c-2.992,1.364-6.676,3.921-4.13,10.36
                            c1.284,3.25,0.912,6.746-1.023,9.591c-2.17,3.191-6.002,4.901-9.895,4.39c-0.493-0.065-0.966-0.099-1.404-0.099
                            c-1.077,0-2.502,0.198-3.173,1.143C3.765,32.524,3.823,34.609,4.69,37.18z" />
                        <path style="fill:#C64940;" d="M21.184,46.589c-0.948,0-1.858-0.038-2.706-0.114l-0.283-0.025
                            c-1.674-0.147-3.257-0.287-4.706-0.767c-6.376-2.108-9.188-7.073-9.688-8.047l-0.058-0.137c-0.984-2.917-0.993-5.273-0.026-6.635
                            c0.912-1.285,2.89-1.807,5.524-1.456c3.537,0.466,6.959-1.054,8.936-3.961c1.746-2.565,2.082-5.723,0.921-8.661
                            c-3.189-8.065,2.707-10.754,4.645-11.638c9.68-4.407,16.81-1.155,21.152,9.535c2.021,4.981,2.464,10.202,1.28,15.099
                            C44.953,34.836,40.073,46.589,21.184,46.589z M5.613,36.787c0.401,0.758,2.936,5.155,8.503,6.997
                            c1.229,0.406,2.699,0.536,4.256,0.673l0.284,0.025c0.788,0.07,1.639,0.106,2.527,0.106c17.469,0,21.938-10.683,23.048-15.276
                            c1.084-4.487,0.672-9.286-1.19-13.877C40.29,8.663,36.409,5.229,31.506,5.229c-2.067,0-4.4,0.585-6.934,1.74
                            c-3.02,1.376-5.81,3.532-3.615,9.083c1.408,3.563,0.998,7.398-1.126,10.521c-2.404,3.534-6.563,5.386-10.852,4.818
                            c-1.793-0.236-3.197,0.019-3.632,0.632C4.912,32.636,4.756,34.207,5.613,36.787z" />
                    </g>
                    <g>
                        <circle style="fill:#E6E6E6;" cx="32.455" cy="12.779" r="4" />
                        <path style="fill:#7A3726;" d="M32.455,17.779c-2.757,0-5-2.243-5-5s2.243-5,5-5s5,2.243,5,5S35.212,17.779,32.455,17.779z
                            M32.455,9.779c-1.654,0-3,1.346-3,3s1.346,3,3,3s3-1.346,3-3S34.109,9.779,32.455,9.779z" />
                    </g>
                    <path style="fill:#C64940;" d="M25.617,45.684l-1.941-0.479c0.435-1.761-1.063-3.216-3.446-4.859
                        c-2.875-1.984-4.817-5.117-5.327-8.595c-0.186-1.266-0.425-2.285-0.428-2.295l1.922-0.548c0.01,0.028,1.09,3.104,3.978,4.314
                        c2.094,0.877,4.667,0.598,7.648-0.832c11.578-5.554,17.102-2.646,17.332-2.52l-0.967,1.752c-0.04-0.021-4.97-2.48-15.5,2.57
                        c-3.53,1.694-6.662,1.984-9.312,0.863c-0.801-0.339-1.49-0.779-2.078-1.265c0.769,1.974,2.11,3.695,3.867,4.907
                        C23.149,39.931,26.472,42.222,25.617,45.684z" />
                    <path style="fill:#C64940;" d="M27.074,27.586c-5.37,0-7.605-3.694-7.633-3.74l1.727-1.01l-0.863,0.505l0.859-0.511
                        c0.108,0.179,2.714,4.335,9.738,2.105c1.54-0.794,12.038-6.002,15.619-2.289l-1.439,1.389c-1.979-2.052-9.229,0.576-13.332,2.714
                        l-0.154,0.064C29.892,27.364,28.389,27.586,27.074,27.586z" />
                    </g>
                </svg>
                <svg viewBox="0 0 49 49" id="soda" class="product">
                    <g>
                    <path style="fill:#E22F37;" d="M9.5,27V5.918c0-1.362,0.829-2.587,2.094-3.093l0,0C12.642,2.406,13.5,1.14,13.5,0.011L13.5,0v0
                        l11,0l11,0v0v0.011c0,1.129,0.858,2.395,1.906,2.814l0,0c1.265,0.506,2.094,1.73,2.094,3.093V27v-5v21.082
                        c0,1.362-0.829,2.587-2.094,3.093h0c-1.048,0.419-1.906,1.686-1.906,2.814V49l0,0h-11h-11l0,0l0-0.011
                        c0-1.129-0.858-2.395-1.906-2.814h0c-1.265-0.506-2.094-1.73-2.094-3.093V22" />
                    <path style="fill:#F75B57;" d="M18.5,7h-5c-0.553,0-1-0.447-1-1s0.447-1,1-1h5c0.553,0,1,0.447,1,1S19.053,7,18.5,7z" />
                    <path style="fill:#F75B57;" d="M35.5,7h-13c-0.553,0-1-0.447-1-1s0.447-1,1-1h13c0.553,0,1,0.447,1,1S36.053,7,35.5,7z" />
                    <path style="fill:#994530;" d="M18.5,45h-5c-0.553,0-1-0.447-1-1s0.447-1,1-1h5c0.553,0,1,0.447,1,1S19.053,45,18.5,45z" />
                    <path style="fill:#994530;" d="M35.5,45h-13c-0.553,0-1-0.447-1-1s0.447-1,1-1h13c0.553,0,1,0.447,1,1S36.053,45,35.5,45z" />
                    <polygon style="fill:#E6E6E6;" points="39.5,32 9.5,42 9.5,20 39.5,10 	" />
                    <polygon style="fill:#F9D70B;" points="39.5,28 9.5,38 9.5,24 39.5,14 	" />
                    </g>
                </svg>
                <div class="cart-container">
                    <svg viewBox="0 0 512 512" id="cart">
                    <circle cx="376.8" cy="440" r="55" />
                    <circle cx="192" cy="440" r="55" />
                    <polygon points="128,0 0.8,0 0.8,32 104.8,32 136.8,124.8 170.4,124.8 " />
                    <polygon style="fill:#ED7161;" points="250.4,49.6 224,124.8 411.2,124.8 " />
                    <polygon style="fill:#ee5a46;" points="411.2,124.8 224,124.8 170.4,124.8 136.8,124.8 68,124.8 141.6,361.6 427.2,361.6 
                    511.2,124.8 " />
                    <g>
                        <rect x="166.4" y="185.6" style="fill:#FFFFFF;" width="255.2" height="16" />
                        <rect x="166.4" y="237.6" style="fill:#FFFFFF;" width="166.4" height="16" />
                    </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header area start -->
    <header >
        <div class="header-area">
            <div class="header-top pl-60 pr-60 d-none d-md-block">
                <div class="row align-items-center">
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-4">
                        
                       
                    </div>
                    <div class="col-xxl-4 col-xl-4 d-none d-xl-block">
                        <p class="white-text center-text">GIẢM GIÁ CỰC LỚN VÀO NGÀY 11.11</p>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-8">
                        
                    </div>
                </div>
            </div>
            <div id="header-sticky" class="header-main header-main-2 header-padding-2 pl-60 pr-60 header-sticky header-sticky-white">
                <div class="row align-items-center">
                    <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-4 col-sm-6 col-4">
                        <div class="header-left">
                            <div class="logo pr-55 d-inline-block">
                                <a href="index.html"><img src="client/assets/img/logo/logo.png" alt="#"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-8 col-lg-8 d-none d-lg-block">
                        <div class="main-menu p-rel d-flex align-items-center justify-content-center">
                            <nav id="mobile-menu">
                                <ul>
                                    <li ><a style="font-family: 'Archivo';font-size: 16px;" href="/">Trang chủ</a>
                                       
                                    </li>
                                    <li class="static">
                                        <a style="font-family: 'Archivo';font-size: 16px;" href="shop.html">Cửa hàng<i class="icon-arrow-down"></i></a>
                                       
                                     </li>                                                                   
                                    <li>
                                        <a style="font-family: 'Archivo';font-size: 16px;" href="blog.html">Tin tức</a>
                                       
                                    </li>
                                    <li>
                                        <a style="font-family: 'Archivo';font-size: 16px;" href="about-us.html">Giới thiệu</a>
                                        
                                    </li>
                                    <li><a style="font-family: 'Archivo';font-size: 16px;" href="contact.html">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-8 col-sm-6 col-8">
                        <div class="header-right-wrapper d-flex align-items-center justify-content-end">
                            <div class="header-right header-right-2 d-flex align-items-center justify-content-end">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="d-none d-xxl-inline-block">{{ __('Đăng nhập/') }}</a>
                            @endif

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="d-none d-xxl-inline-block">{{ __('Đăng ký') }}</a>
                            @endif
                        @else
                        <div class="navigation">
                            <div class="userBx">
                              <div class="imgBx">
                                <img src="dangnhap/assets/img/avatar.svg">
                                  </div>
                              <p class="username">Xin chào ! {{ Auth::user()->name }}</p>
                        </div>
                        <div class="menuToggle"> </div>
                             <ul class="menu">
                                <li><a href=""><ion-icon name="person-outline"></ion-icon> Thông tin</a></li>
                                @if (Auth::user()->role == '2')
                                 <li><a href="http://localhost:8000/admin/dashboard"><ion-icon name="server-outline"></ion-icon> Quản trị hệ thống</a></li>
                                 @else
                                 <li><a href="#"><ion-icon name="cart-outline"></ion-icon> Lịch sử đơn hàng</a></li>
                                 @endif
                                 <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><ion-icon name="log-out-outline"></ion-icon>  {{ __('Đăng xuất') }}</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
                            </ul>
                        </div>
                            </div>
                        <script>
                            let menuToggle = document.querySelector('.menuToggle');
                        let navigation = document.querySelector('.navigation');
                    menuToggle.onclick = function(){
                      navigation.classList.toggle('active')
 }
                        </script>
                        @endguest
                                <div class="header-icon header-icon-2 d-inline-block ml-30">
                                    <a href="javascript:void(0)" class="search-toggle"><i class="fal fa-search"></i></a>
                                    <a href="wishlist.html" class="d-none d-xl-inline-block"><i class="fal fa-heart"></i><span>2</span></a>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#cartMiniModal"><i class="fal fa-shopping-cart"></i><span>2</span></button>
                                </div>
                            </div>
                            <div class="header-bar ml-20 d-lg-none">
                                <button type="button" class="header-bar-btn header-bar-btn-black" data-bs-toggle="modal" data-bs-target="#offCanvasModal">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    
    <!-- cart mini area start -->
    <div class="cartmini__area">
        <div class="modal fade" id="cartMiniModal" tabindex="-1" aria-labelledby="cartMiniModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="cartmini__wrapper">
                    <div class="cartmini__top d-flex align-items-center justify-content-between">
                        <h4>Your Cart</h4>
                        <div class="cartminit__close">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#cartMiniModal" class="cartmini__close-btn"> <i class="fal fa-times"></i></button>
                        </div>
                    </div>
                    <div class="cartmini__list">
                        <ul>
                            <li class="cartmini__item p-rel d-flex align-items-start">
                                <div class="cartmini__thumb mr-15">
                                    <a href="product-details.html">
                                        <img src="client/assets/img/products/product-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="cartmini__content">
                                    <h3 class="cartmini__title">
                                        <a href="product-details.html">Form Armchair Walnut Base</a>
                                    </h3>
                                    <span class="cartmini__price">
                                        <span class="price">1 × $70.00</span>
                                    </span>
                                </div>
                                <a href="#" class="cartmini__remove">
                                    <i class="fal fa-times"></i>
                                </a>
                            </li>
                            <li class="cartmini__item p-rel d-flex align-items-start">
                                <div class="cartmini__thumb mr-15">
                                    <a href="product-details.html">
                                        <img src="client/assets/img/products/product-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="cartmini__content">
                                    <h3 class="cartmini__title">
                                        <a href="product-details.html">Form Armchair Simon Legald</a>
                                    </h3>
                                    <span class="cartmini__price">
                                        <span class="price">1 × $95.99</span>
                                    </span>
                                </div>
                                <a href="#" class="cartmini__remove">
                                    <i class="fal fa-times"></i>
                                </a>
                            </li>
                            <li class="cartmini__item p-rel d-flex align-items-start">
                                <div class="cartmini__thumb mr-15">
                                    <a href="product-details.html">
                                        <img src="client/assets/img/products/product-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="cartmini__content">
                                    <h3 class="cartmini__title">
                                        <a href="product-details.html">Antique Chinese Armchairs</a>
                                    </h3>
                                    <span class="cartmini__price">
                                        <span class="price">1 × $120.00</span>
                                    </span>
                                </div>
                                <a href="#" class="cartmini__remove">
                                    <i class="fal fa-times"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="cartmini__total d-flex align-items-center justify-content-between">
                        <h5>Total</h5>
                        <span>$180.00</span>
                    </div>
                    <div class="cartmini__bottom">
                        <a href="cart.html" class="s-btn w-100 mb-20">view cart</a>
                        <a href="checkout.html" class="s-btn s-btn-2 w-100">checkout</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- cart mini area end -->

    <!-- search area start -->
    <div class="search__area">
        <div class="search__close">
            <button type="button" class="search__close-btn search-close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="search__wrapper">
            <h4>Searching</h4>
            <div class="search__form">
                <form action="#">
                    <div class="search__input">
                        <input type="text" placeholder="Search Products">
                        <button type="submit">
                            <i class="far fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- search area end -->


    <!-- sidebar area start -->
    <section class="offcanvas__area">
        <div class="modal fade" id="offCanvasModal" tabindex="-1" aria-labelledby="offCanvasModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="offcanvas__wrapper">
                        <div class="offcanvas__top d-flex align-items-center mb-60 justify-content-between">
                            <div class="logo">
                                <a href="index.html">
                                   <img src="client/assets/img/logo/logo-black.png" alt="">
                                </a>
                             </div>
                           <div class="offcanvas__close">
                              <button class="offcanvas__close-btn" data-bs-toggle="modal" data-bs-target="#offCanvasModal">
                                 <svg viewBox="0 0 22 22">
                                    <path d="M12.41,11l5.29-5.29c0.39-0.39,0.39-1.02,0-1.41s-1.02-0.39-1.41,0L11,9.59L5.71,4.29c-0.39-0.39-1.02-0.39-1.41,0
                                    s-0.39,1.02,0,1.41L9.59,11l-5.29,5.29c-0.39,0.39-0.39,1.02,0,1.41C4.49,17.9,4.74,18,5,18s0.51-0.1,0.71-0.29L11,12.41l5.29,5.29
                                    C16.49,17.9,16.74,18,17,18s0.51-0.1,0.71-0.29c0.39-0.39,0.39-1.02,0-1.41L12.41,11z"/>
                                 </svg>
                              </button>
                           </div>
                        </div>
                        <div class="offcanvas__content p-relative z-index-1">
                           <div class="canvas__menu fix ">
                              <div class="mobile-menu"></div>
                           </div>
                           <div class="offcanvas__action mb-15">
                              <a href="login.html">Login</a>
                           </div>
                           <div class="offcanvas__action mb-15 ">
                              <a href="wishlist.html" class="has-tag">
                                 <svg viewBox="0 0 22 22">
                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                    L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                    c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                    C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                    c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                    c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                    c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                    c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                    c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                 </svg>
                                 <span class="tag">2</span>
                              </a>
                           </div>
                           <div class="offcanvas__action mb-15 d-sm-block">
                              <a href="cart.html" class="has-tag">
                                <i class="far fa-shopping-bag"></i>
                                <span class="tag">4</span>
                              </a>
                           </div>
                           <div class="offcanvas__social mt-15">
                              <ul>
                                 <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
        
     </section>
     <!-- sidebar area end -->

<main>
<div class="layout-info-account">
	<div class="row">
		<div class="title-infor-account">
			<h1 class="lang" keyLanguage="tai_khoan_cua_ban">Tài khoản của bạn</h1>
		</div>
			<div class="col-xs-12 col-sm-2 sidebar-account">
				<div class="AccountSidebar">
	<div class="AccountContent">
		<div class="AccountList">
			<ul class="list-unstyled">			
				<li class="current"><a href="/account" class="lang" keyLanguage="thong_tin_tai_khoan">Thông tin tài khoản</a></li>
				<li><a href="/account/addresses" class="lang" keyLanguage="danh_sach_dia_chi">Danh sách địa chỉ</a></li>
				<li class="last"><a href="/account/logout" class="lang" keyLanguage="dang_xuat">Đăng xuất</a></li>
			</ul>
		</div>
	</div>
</div>
			</div>
			<div class="col-xs-12 col-sm-10" >
				<div class="row">
					<div class="col-xs-12" id="customer_sidebar">
						<p class="title-detail lang" keyLanguage="thong_tin_tai_khoan">Thông tin tài khoản</p>
						
						<h2 class="name_account">Võ Lâm Đoan(FB)</h2>
						

						<p class="email ">volamdoanzxc1@gmail.com</p>
						<div class="address ">
							
							<p>KTX Hải Đăng, Tổ 11KP1</p>
							
							<p></p>
							
							<p> </p>
							<p>0915491540</p>
							
							<a id="view_address" href="/account/addresses" class="lang" keyLanguage="xem_dia_chi">Xem địa chỉ</a>
						</div>
					</div>
					<div class="col-xs-12" id="customer_orders">	
						<div class="customer-table-wrap">
							<div class="customer_order customer-table-bg">		
								
								<p class="title-detail lang" keyLanguage="danh_sach_moi_nhat">
									Danh sách đơn hàng mới nhất
								</p>
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th class="order_number text-center lang" keyLanguage="ma_don_hang">Mã đơn hàng</th>
												<th class="date text-center lang" keyLanguage="ngay_dat">Ngày đặt</th>
												<th class="total text-right lang" keyLanguage="thanh_tien">Thành tiền</th>
												<th class="payment_status text-center lang" keyLanguage="trang_thai_thanh_toan">Trạng thái thanh toán</th>
												<th class="fulfillment_status text-center lang" keyLanguage="van_chuyen">Vận chuyển</th>

											</tr>
										</thead>
										<tbody>
											
											<tr class="odd ">
												<td class="text-center"><a href="/account/orders/fbecc9ceb8bb429c84ac7b74c51d34c2" title="">#hd495424</a></td>

												<td class="text-center"><span>12/08/2022</span></td>
												<td class="text-right"><span class="total money">480,000₫</span></td>
												<td class="text-center"><span class="status_paid">paid</span></td>
												<td class="text-center"><span class="status_fulfilled">fulfilled</span></td>

											</tr>
											
											<tr class="even ">
												<td class="text-center"><a href="/account/orders/29e7c869ea94469d8ec42afc2486c021" title="">#hd201912</a></td>

												<td class="text-center"><span>17/12/2019</span></td>
												<td class="text-right"><span class="total money">290,000₫</span></td>
												<td class="text-center"><span class="status_paid">paid</span></td>
												<td class="text-center"><span class="status_fulfilled">fulfilled</span></td>

											</tr>
											
										</tbody>
									</table>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
</main>
   