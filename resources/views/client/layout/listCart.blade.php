<body>

    <?php
    use Carbon\Carbon;
    use app\Http\Controllers\client\ClientController;
    ?>
    <body>
        <?php 
        // dd(Session::get('Cart')->products);
    ?>
        <!-- preloader start -->
       
        <!-- preloader end -->
    
        <!-- header area start -->
        <header >
            <div class="header-area">
                <div class=" pl-60 pr-60 d-none d-md-block">
                    <div class="row align-items-center">
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-4">
                            
                           
                        </div>
                        <marquee behavior="alternate"
                                        style="background:white; color:rgb(12, 12, 12); font-size: 20px;">
                                        <h3 class="nhapnhay">GIẢM GIÁ LỚN VÀO NGÀY 11.11</h3>
                                    </marquee>
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-8">
                            
                        </div>
                    </div>
                </div>
                <div id="header-sticky" class="header-main header-main-2 header-padding-2 pl-60 pr-60 header-sticky header-sticky-white">
                    <div class="row align-items-center">
                        <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-4 col-sm-6 col-4">
                            <div class="header-left">
                                <div class="logo pr-55 d-inline-block">
                                    <a href="/" class="logo" style=";
                                    font-size: 24px;
                                    text-transform: uppercase;
                                    font-family: 'Hind Madurai', sans-serif;
                                    font-weight: 600;
                                    letter-spacing: 1px;
                                    line-height: 70px;"><span>GENZ<span style="color: #7fc1fc;">FASHION</span></span><i class="mdi mdi-layers"></i></a>
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
                                            <a style="font-family: 'Archivo';font-size: 16px;" href="/shop">Cửa hàng<i class="icon-arrow-down"></i></a>
                                           
                                         </li>                                                                   
                                        <li>
                                            <a style="font-family: 'Archivo';font-size: 16px;" href="/blog">Tin tức</a>
                                           
                                        </li>
                                        <li>
                                            <a style="font-family: 'Archivo';font-size: 16px;" href="/about-us">Giới thiệu</a>
                                            
                                        </li>
                                        <li><a style="font-family: 'Archivo';font-size: 16px;" href="/contact">Liên hệ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-8 col-sm-6 col-8">
                            <div class="header-right-wrapper d-flex align-items-center justify-content-end">
                                @guest
                            @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="d-none d-xxl-inline-block">{{ __('Đăng nhập/') }}</a>
                            @endif

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="d-none d-xxl-inline-block">{{ __('Đăng ký') }}</a>
                            @endif
                        @else
                        <div class="action">
                  <div class="profile" onclick="menuToggle()">
                        <img src="{{Auth::user()->picture}}" alt="">
                     </div>
       
                         <div class="menu">
                         <h3 class="user_name">{{Auth::user()->name}}
                             <br>
                             @if(Auth::user()->role == '2')
                             <span>(Admin)</span>
                             @else
                             <span>(Khách hàng)</span>
                             @endif
                          </h3>
                      <ul>
                        <li>
                             <i class="fa fa-user"></i>
                                   <a href="/profile/edit_profile">Thông tin </a>
                          </li>
                          @if (Auth::user()->role == '2')
                         <li>
                            <i class="fa fa-database"></i>
                                 <a href="/admin/dashboard">Quản lý hệ thống</a>
                          </li>
               @endif
               @if(Auth::user()->id_google == '')
               <li>
                   <i class="fa fa-cog"></i>
                   <a href="/profile/change-password">Thay đổi mật khẩu</a>
               </li>
               @endif
               <li>
                   <i class="fa fa-sign-out"></i>
                   <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">{{ __('Đăng xuất') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
               </li>
           </ul>
       </div>
       
   </div>
     </div>
                        @endguest
                                <div class="header-right header-right-2 d-flex align-items-center justify-content-end">
                                    <div class="header-icon header-icon-2 d-inline-block ml-30">
                                      
                                         
                                         @if(Session::has('Cart') != null)
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#cartMiniModal"><i class="fal fa-shopping-cart"></i><span id="total-quantily-show">{{Session::get('Cart')->totalQuanty}}</span></button>
                                         @else
                                         <button type="button" data-bs-toggle="modal" data-bs-target="#cartMiniModal"><i class="fal fa-shopping-cart"></i><span id="total-quantily-show">0</span></button>
                                         @endif
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
                <h4>GIỎ HÀNG</h4>
                <div class="cartminit__close">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#cartMiniModal" class="cartmini__close-btn"> <i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="div" id="change-item-cart">
                @if(Session::has('Cart')!=null)
            <div class="cartmini__list" style="line-height:30px; height:472px">
                
                <ul>
                    
                    
                        
                    @foreach(Session::get('Cart')->products as $n)
    
                    <li class="cartmini__item p-rel d-flex align-items-start">
                        <div class="cartmini__thumb mr-15">
                            <a href="/productDetail/{{$n['productInfo']->id}}">
                                <img   src="{{asset('uploads/images/'.$n['productInfo']->thumnail)}}" alt="">
                            </a>
                        </div>
                        <div class="cartmini__content">
                            <h3 class="cartmini__title">
                                <a href="/productDetail/{{$n['productInfo']->id}}">{{$n['productInfo']->title}}</a>
                            </h3>
                            Kích thước:<span style="font-size:15px"> {{$n['sized']}}</span><br>
                            Màu sắc:<span style="font-size:15px"> {{$n['color']}}</span><br>
    
                            <span class="cartmini__price">
                                <span class="price">{{$n['quantily']}} × {{number_format($n['productInfo']->price)}}đ</span>
                            </span>
                        </div>
                        <a href="#" class="cartmini__remove" data-id="{{$n['productInfo']->id.$n['sized'].$n['color']}}">
                            <i class="fal fa-times"></i>
                        </a>
                    </li>
                    @endforeach
                   
                </ul>
                
               
            </div>
            
            <div class="cartmini__total d-flex align-items-center justify-content-between">
                <h5>Tổng tiền:</h5>
                <span>{{number_format(Session::get('Cart')->totaPrice)}}đ</span>
            </div>
           
            @endif
           
                
           
            
            
           
            <div class="cartmini__bottom">
                <a href="/listCart" class="s-btn w-100 mb-20">Xem giỏ hàng</a>
                <a href="/checkout" class="s-btn s-btn-2 w-100">Thanh toán</a>
            </div>
            
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

        <!-- breadcrumb area start -->
        <div class="breadcrumb-area-3 pt-215 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">     
                        <div class="breadcrumb-wrapper-2 text-center">
                            <h3>Chi tiết giỏ hàng</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                  <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                                </ol>
                            </nav>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- Cart Area Strat-->
        <section class="cart-area pt-100 pb-100">
            <div class="container">
            <div class="row">
                <div class="col-12">
                    @if(Session::has('message'))
                    <p class="alert " style="color:green;background: antiquewhite;font-size:18px;">{{ Session::get('message') }}</p>
                    @endif
                    <form action="#" id="list-cart">
                       
                        <div class="table-content table-responsive" >
                            
                            @if(Session::has('Cart')!=null)
                            <table class="table">
                                
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">ảnh</th>
                                        <th class="cart-product-name">Sản phẩm</th>
                                        <th class="cart-product-name">Kích thước</th>
                                        <th class="cart-product-name">Màu sắc</th>
                                        <th class="product-price">Giá tiền</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Tổng tiền</th>
                                        <th class="product-remove">lưu</th>
                                        <th class="product-remove">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @foreach(Session::get('Cart')->products as $n)
                                    <tr>
                                        <td class="product-thumbnail"><a href="/productDetail/{{$n['productInfo']->id}}">                           
                                             <img src="{{asset('uploads/images/'.$n['productInfo']->thumnail)}}" alt="">
                                        </a></td>
                                        <td class="product-name"><a href="/productDetail/{{$n['productInfo']->id}}">{{$n['productInfo']->title}}</a></td>
                                        <td class="product-name"><a href="" >{{ $n['sized']}}</a></td>
                                        <td class="product-name"><a href="" >{{ $n['color']}}</a></td>

                                        <td class="product-price"><span class="amount">{{number_format($n['productInfo']->price)}}đ</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus"><input id="quanty-item" type="text" value="{{$n['quantily']}}" /></div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">{{number_format($n['price'])}}đ</span></td>
                                        <td class="product-remove"><i style="font-size:23px" class="fa fa-save" onclick="SaveListCart('{{$n['productInfo']->id.$n['sized'].$n['color']}}',this)"  ></i></td>

                                        <td class="product-remove"><i  class="fa fa-times" onclick="DeleteListCart('{{$n['productInfo']->id.$n['sized'].$n['color']}}')"></i></td>

                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                                
                            </table>
                           
                        </div>
                    
                        {{-- <div class="row">
                            @if(Session::has('message'))
                    <p class="alert " style="color:green;background: antiquewhite;font-size:18px;">{{ Session::get('message') }}</p>
                    @endif
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon">
                                        
                                        <form action="/checkout_coupon" method ="POST"  data-parsley-validate novalidate enctype="multipart/form-data" >
                                            @csrf
                                        <input id="coupon" class="input-text" name="coupon" 
                                            placeholder="Coupon code" type="text">
                                        <button  class="s-btn s-btn-2" onclick="checkout_coupon()" type="submit">Mã giảm giá
                                            </button>
                                        </form>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                            
                            
                        </div> --}}
                         
                    
                        <div class="row justify-content-end">
                           
                            <div class="col-md-5 ml-auto">
                                
                                <div class="cart-page-total">
                                    <h2>Tổng số giỏ hàng</h2>
                                    <ul class="mb-20">
                                        <li>Tổng số lượng <span>{{Session::get('Cart')->totalQuanty}}</span></li>
                                        <li>Tạm tính <span>{{number_format(Session::get('Cart')->totaPrice)}}đ</span></li>
                                       

                                    </ul>
                                    
                                    <a class="s-btn s-btn-2" href="/checkout">Thanh toán</a>
                                </div>
                               
                            </div>
                           
                        </div>
                    </div>
                    @endif
                    </form>
                </div>
            </div>
            </div>
            
        </section>
        <!-- Cart Area End-->

        <!-- product modal area start -->
        <div class="product__modal-area modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="product__modal-inner position-relative">
                    <div class="product__modal-close">
                        <button data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti-close"></i>
                        </button>
                    </div>
                    <div class="product__modal-left">
                        <div class="tab-content mb-10" id="productModalThumb">
                            <div class="tab-pane fade show active" id="pro-1" role="tabpanel" aria-labelledby="pro-1-tab">
                                <div class="product__modal-thumb w-img">
                                    <img src="assets/img/products/modal/product-modal-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-2" role="tabpanel" aria-labelledby="pro-2-tab">
                                <div class="product__modal-thumb w-img">
                                    <img src="assets/img/products/modal/product-modal-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-3" role="tabpanel" aria-labelledby="pro-3-tab">
                                <div class="product__modal-thumb w-img">
                                    <img src="assets/img/products/modal/product-modal-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-4" role="tabpanel" aria-labelledby="pro-4-tab">
                                <div class="product__modal-thumb w-img">
                                    <img src="assets/img/products/modal/product-modal-4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="product__modal-nav">
                            <ul class="nav nav-tabs" id="productModalNav" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="pro-1-tab" data-bs-toggle="tab" data-bs-target="#pro-1" type="button" role="tab" aria-controls="pro-1" aria-selected="true">
                                      <img src="assets/img/products/modal/product-modal-sm-1.jpg" alt="">
                                  </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="pro-2-tab" data-bs-toggle="tab" data-bs-target="#pro-2" type="button" role="tab" aria-controls="pro-2" aria-selected="false">
                                    <img src="assets/img/products/modal/product-modal-sm-2.jpg" alt="">
                                  </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="pro-3-tab" data-bs-toggle="tab" data-bs-target="#pro-3" type="button" role="tab" aria-controls="pro-3" aria-selected="false">
                                    <img src="assets/img/products/modal/product-modal-sm-3.jpg" alt="">
                                  </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pro-4-tab" data-bs-toggle="tab" data-bs-target="#pro-4" type="button" role="tab" aria-controls="pro-4" aria-selected="false">
                                      <img src="assets/img/products/modal/product-modal-sm-4.jpg" alt="">
                                    </button>
                                </li>
                              </ul>
                        </div>
                    </div>
                    <div class="product__modal-right">
                        <h3 class="product__modal-title">
                            <a href="product-details.html">Living Room Lighting</a>
                        </h3>
                        <div class="product__modal-rating d-flex align-items-center">
                            <ul class="mr-10">
                                <li>
                                    <a href="#"><i class="ti-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-star"></i></a>
                                </li>
                            </ul>
                            <div class="customer-review">
                                <a href="#">(1 customer review)</a>
                            </div>
                        </div>
                        <div class="product__modal-price mb-10">
                            <span class="price new-price">$700.00</span>

                            <span class="price old-price">$899.99</span>
                        </div>
                        <div class="product__modal-available">
                            <p> Availability: <span>In Stock</span> </p>
                        </div>
                        <div class="product__modal-sku">
                            <p> Sku: <span> 0026AG90-1</span> </p>
                        </div>
                        <div class="product__modal-des">
                            <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod legunt saepius.…</p>
                        </div>
                        <div class="product__modal-quantity mb-15">
                            <h5>Quantity:</h5>
                            <form action="#">
                                <div class="pro-quan-area d-lg-flex align-items-center">
                                    <div class="product-quantity mr-20 mb-25">
                                        <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                                    </div>
                                    <div class="product__modal-cart mb-25">
                                        <button class="product-modal-cart-btn " type="submit">Add to cart</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="product__modal-categories d-flex align-items-center">
                            <span>Categories: </span>
                            <ul>
                                <li><a href="#">Decor, </a></li>
                                <li><a href="#">Lamp, </a></li>
                                <li><a href="#">Lighting</a></li>
                            </ul>
                        </div>
                        <div class="product__modal-categories d-flex align-items-center">
                            <span>Tags: </span>
                            <ul>
                                <li><a href="#">Furniture, </a></li>
                                <li><a href="#">Lighting, </a></li>
                                <li><a href="#">Living Room, </a></li>
                                <li><a href="#">Table</a></li>
                            </ul>
                        </div>
                        <div class="product__modal-share d-flex align-items-center">
                            <span>Share this product: </span>
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
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
        <!-- product modal area start -->

        <!-- subscribe area start -->
     
        <!-- subscribe area end -->

        <!-- popup area start -->
      
        <!-- popup area end -->
        
</main>
<script>
    function DeleteListCart(id){
       
        $.ajax({
        url:'/DeleteListCart/'+ id,
        type:'GET',
    }).done(function(response){
        RenderListCart(response);
       
    })
    }
    function SaveListCart(id,obj){
      
        let quantity = $(obj).parent().parent().find('.product-quantity input').val();
    
        $.ajax({
        url:'/SaveListCart/'+id+'/'+quantity,
        type:'GET',
    }).done(function(response){
        RenderListCart(response);
       
    })
}
    




    
    function RenderListCart(response){
        $("#list-cart").empty();
        $("#list-cart").html(response);
        $(".cart-plus-minus").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
	$(".qtybutton").on("click", function () {
		var $button = $(this);
		var oldValue = $button.parent().find("input").val();
		if ($button.text() == "+") {
			var newVal = parseFloat(oldValue) + 1;
		} else {
			// Don't allow decrementing below zero
			if (oldValue > 0) {
				var newVal = parseFloat(oldValue) - 1;
			} else {
				newVal = 0;
			}
		}
		$button.parent().find("input").val(newVal);
	});

    }
   
 
</script>
<script>
    function menuToggle(){
        document.querySelector('.menu').classList.toggle('active');
        
    }
    
</script>
      