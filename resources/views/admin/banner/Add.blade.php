

    <body class="fixed-left" >

        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar" >
        
                <!-- LOGO -->
                <div class="topbar-left" >
                    <a href="/admin/dashboard" class="logo"><span>Genz<span>Fashion</span></span><i class="mdi mdi-layers"></i></a>
                    <!-- Image logo -->
                    <!--<a href="index.html" class="logo">-->
                        <!--<span>-->
                            <!--<img src="assets/images/logo.png" alt="" height="30">-->
                        <!--</span>-->
                        <!--<i>-->
                            <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
                        <!--</i>-->
                    <!--</a>-->
                </div>
        
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
        
                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            
                            
                        </ul>
        
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="/admin/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                </a>
        
                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                            <li>
                                                <h5> {{ Auth::user()->name }}</h5>
                                            </li>
                                            <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Th??ng tin</a></li>
                                            <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> C??i ?????t</a></li>
                                            <li><a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();"><i class="ti-power-off m-r-5"></i>  {{ __('????ng xu???t') }}</a>
                                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form></li>
                                        </ul>
                            </li>
        
                        </ul> <!-- end navbar-right -->
        
                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->
        
        
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
        
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                            
        
                            <li class="has_sub">
                                <a href="/admin/dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span class="label label-success pull-right"></span> <span> TH???NG K?? </span> </a>
        
                            </li>
        
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> S???N PH???M</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-product">Li???t k??</a></li>
                                    <li><a href="/admin/product">Th??m s???n ph???m</a></li>
        
                                </ul>
                            </li>
        
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span>DANH M???C</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-category"> Li???t k??</a></li>
                                    <li><a href="/admin/category"> Th??m danh m???c</a></li>
        
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span>TH????NG HI???U</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-brand"> Li???t k??</a></li>
                                    <li><a href="/admin/brand"> Th??m Th????ng Hi???u</a></li>
        
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-arc"></i><span>????N H??NG</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-order"> Li???t k??</a></li>
                                    
        
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-diamond"></i><span>CHI TI???T ????N </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-orderDetail"> Li???t k??</a></li>
                                    
        
                                </ul>
                            </li>
        
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-gift"></i><span>M?? GI???M GI??</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-coupon"> Li???t k??</a></li>
                                    <li><a href="/admin/coupon"> Th??m coupon</a></li>
        
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-user"></i><span>T??I KHO???N</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-user"> Li???t k??</a></li>
                                    
        
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-user"></i><span>BANNER</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-banner"> Li???t k??</a></li>
                               
    
                                </ul>
                            </li>
        
        
        
        
        
        
        
        
        
        
        
        
                        </ul>
                    </div>
        
        
        
        
                </div>
                <!-- Sidebar -left -->
        
            </div>
            <!-- Left Sidebar End -->
        
        
        
        
              {{-- copy --}}
        
              <div class="content-page" >
                <!-- Start content -->
                <div class="content" >
                    <div class="container" >
        
        
        
                        <!-- end row -->
        
        
        
                        <div class="row" style="margin-top:10px;padding-left:150px; ">
                            <div class="col-sm-9" >
                                <div class="card-box" >
                                    <div class="row">
                                        <div class="col-lg-12" >
                                            <h1 class="text-center" style="font-family: system-ui;">Th??m ???nh b??a</h1>
                                            <div class="demo-box">
                                                <form action="/admin/banner" method ="POST"  data-parsley-validate novalidate enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="userName">T??n<span class="text-danger">*</span></label>
                                                        <input type="text" name="name" parsley-trigger="change" required
                                                               placeholder="T??n" class="form-control" id="userName" value="{{old('name')}}">
                                                               @if($errors->has('name'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('name') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">???nh 1</label>
                                                        <input type="file" name="image_l"  class="filestyle" data-buttonname="btn-default" value="{{old('image_l')}}">
                                                        @if($errors->has('image_l'))
                                                        <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('image_l') }}</strong>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">???nh 2</label>
                                                        <input type="file" name="image_n"  class="filestyle" data-buttonname="btn-default" value="{{old('image_n')}}">
                                                        @if($errors->has('image_n'))
                                                        <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('image_n') }}</strong>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">???nh 3</label>
                                                        <input type="file" name="image_t"  class="filestyle" data-buttonname="btn-default" value="{{old('image_t')}}">
                                                        @if($errors->has('image_t'))
                                                        <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('image_t') }}</strong>
                                                        @endif
                                                    </div>
        
                                                    <div class="form-group text-right m-b-0">
                                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                            Th??m
                                                        </button>
                                                        <button class="btn btn-danger btn-sm" style="height:33.7px"><a href="/admin/show-brand"   style="color:white;height:50px">H???y b???</a></button>                                                            
        
                                                    </div>
        
                                                </form>
        
        
                                            </div>
        
                                        </div>
        
        
                                    </div>
        
        
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
        
        
        
                    </div> <!-- container -->
        
                </div> <!-- content -->
        
        
        
            </div>
        
        
            </div>
        
        
        </div>
        
        
        </body>
        </html>
        