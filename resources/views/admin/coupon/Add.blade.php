

    <body class="fixed-left" >

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar" >

                <!-- LOGO -->
                <div class="topbar-left" >
                    <a href="/admin/dashboard" class="logo"><span>GENZ<span>FASHION</span></span><i class="mdi mdi-layers"></i></a>
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
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span>DANH M???C </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-category"> Li???t k??</a></li>
                                    <li><a href="/admin/category"> Th??m danh m???c</a></li>
                                   
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span> B??I VI???T </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-posts"> Li???t k??</a></li>
                                    <li><a href="/admin/posts"> Th??m b??i vi???t</a></li>
                                   
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
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-arc"></i><span> ????N H??NG</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-order"> Li???t k??</a></li>
                                    
    
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
                                            <h1 class="text-center" style="font-family: system-ui;">TH??M M?? GI???M GI??</h1>
											<div class="demo-box">
                                                <form action="/admin/coupon" method ="POST"  data-parsley-validate novalidate enctype="multipart/form-data">
                                                    @csrf
                                                   
                
                                                    <div class="form-group">
                                                        <label for="slug">T??n<span class="text-danger">*</span></label>
                                                        <input type="text" name="coupon_name" parsley-trigger="change" required
                                                               placeholder="Name " class="form-control" id="slug" value="{{old('coupon_name')}}">
                                                               @if($errors->has('coupon_name'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('coupon_name') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">M?? gi???m gi??<span class="text-danger">*</span></label>
                                                        <input type="text" name="coupon_code" parsley-trigger="change" required
                                                               placeholder="coupon_code" class="form-control" id="userName" value="{{old('coupon_code')}}">
                                                               @if($errors->has('coupon_code'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('coupon_code') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">S??? l?????ng m??<span class="text-danger">*</span></label>
                                                        <input type="number" name="coupon_time" parsley-trigger="change" required
                                                               placeholder="coupon_time" class="form-control" id="userName" value="{{old('coupon_time')}}">
                                                               @if($errors->has('coupon_time'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('coupon_time') }}</strong>
                                                               @endif
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="userName">T??nh n??ng m??<span class="text-danger">*</span></label><br>
                                                        <select style="width: 140px;height: 30px;border-radius:10px;text-align:center;font-size:15px" class="form-select"  name="coupon_condition" aria-label="Default select example">
                                                            <option value="1">Gi???m theo %</option>    
                                                            <option value="2">Gi???m theo ti???n</option>                                                    
                                                          @if($errors->has('coupon_condition'))
                                                          <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('coupon_condition') }}</strong>
                                                          @endif 
                                                          
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Nh???p s??? % ho???c s??? ti???n<span class="text-danger">*</span></label>
                                                        <input type="text" name="coupon_number" parsley-trigger="change" required
                                                               placeholder="coupon_number" class="form-control" id="userName" value="{{old('coupon_number')}}">
                                                               @if($errors->has('coupon_number'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('coupon_number') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Tr???ng th??i<span class="text-danger">*</span></label><br>    
                                                               <select style="width: 140px;height: 30px;border-radius:10px;text-align:center;font-size:15px" class="form-select"  name="status" aria-label="Default select example">
                                                                <option value="0">Hi???n</option>    
                                                                <option value="1">???n</option>                                                    
                                                              @if($errors->has('status'))
                                                              <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('status') }}</strong>
                                                              @endif 
                                                              
                                                            </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Ng??y b???t ?????u<span class="text-danger">*</span></label>
                                                        <input type="date" name="start_at" parsley-trigger="change" required
                                                               placeholder="gi??" class="form-control" id="userName" value="{{old('start_at')}}">
                                                               @if($errors->has('start_at'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('start_at') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Ng??y k???t th??c<span class="text-danger">*</span></label>
                                                        <input type="date" name="expired_at" parsley-trigger="change" required
                                                               placeholder="s??? l?????ng" class="form-control" id="userName" value="{{old('expired_at')}}">
                                                               @if($errors->has('expired_at'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('expired_at') }}</strong>
                                                               @endif
                                                    </div>
                
                                                    <div class="form-group text-right m-b-0">
                                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                            Th??m
                                                        </button>
                                                        <button class="btn btn-danger btn-sm" style="height:34px"><a href="/admin/show-coupon"   style="color:white;height:50px">H???y b???</a></button>                                                            

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