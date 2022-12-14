

    <body class="fixed-left" >

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar" >

                <!-- LOGO -->
                <div class="topbar-left" >
                    <a href="index.html" class="logo"><span>GENZ<span>FASHION</span></span><i class="mdi mdi-layers"></i></a>
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
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span> DANH M???C </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-category"> Li???t k??</a></li>
                                    <li><a href="/admin/category"> Th??m danh m???c</a></li>
                                   
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span>B??I VI???T </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-posts"> Li???t k??</a></li>
                                    <li><a href="/admin/posts"> Th??m b??i vi???t</a></li>
                                   
                                </ul>
                            </li>
                           
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span> TH????NG HI???U</span> <span class="menu-arrow"></span></a>
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
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-gift"></i><span> M?? GI???M GI??</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-coupon"> Li???t k??</a></li>
                                    <li><a href="/admin/coupon"> Th??m coupon</a></li>
    
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-user"></i><span> T??I KHO???N</span> <span class="menu-arrow"></span></a>
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
                                            <h1 class="text-center" style="font-family: system-ui;">S???A B??I VI???T</h1>
                                            @if (session('status'))
                                            <h6 class="alert alert-success">{{session('status')}}</h6>
                                            @endif
											<div class="demo-box">
                                                <form method ="POST"  data-parsley-validate novalidate enctype="multipart/form-data">
                                                @csrf
                                             
                                                    <div class="form-group">
                                                        <label for="userName">Ti??u ?????<span class="text-danger">*</span></label>
                                                        <input type="text" name="title" parsley-trigger="change" required
                                                               placeholder="Ti??u ?????" class="form-control" id="userName" value="{{$posts->title}}">
                                                               @if($errors->has('title'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('title') }}</strong>
                                                               @endif
                                                    </div>
                
                                                    <div class="form-group">
                                                        <label for="slug">???????ng d???n<span class="text-danger">*</span></label>
                                                        <input type="slug" name="slug" parsley-trigger="change" required
                                                               placeholder="slug " class="form-control" id="slug" value="{{$posts->slug}}">
                                                               @if($errors->has('slug'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('slug') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">T??m t???t<span class="text-danger">*</span></label>
                                                        <input type="text" name="sumary" parsley-trigger="change" required
                                                               placeholder="s??? l?????ng" class="form-control" id="userName" value="{{$posts->sumary}}">
                                                               @if($errors->has('sumary'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('sumary') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">N???i dung<span class="text-danger">*</span></label>
                                                        <textarea id="ckeditor1"  style="resize:none" name="content" parsley-trigger="change" required
                                                               placeholder="N???i dung b??i vi???t" class="form-control" value="{{$posts->content}}">{{$posts->content}}</textarea>

                                                               @if($errors->has('content'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('content') }}</strong>
                                                               @endif
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="userName">Ng??y ????ng<span class="text-danger">*</span></label>
                                                        <input type="date" name="date" parsley-trigger="change" required
                                                        placeholder="ng??y" class="form-control" id="userName" value="{{date('Y-m-d', strtotime($posts->date))}}">
                                                               @if($errors->has('date'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('date') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">H??nh ???nh</label>
                                                        <input type="file" name="thumnail_url"  class="filestyle" data-buttonname="btn-default" value="{{$posts->thumnail_url}}"><br>
                                                        <img src="{{asset('uploads/images/'.$posts->thumnail_url)}}" alt="" width="100px" height="80px"> 
                                                        @if($errors->has('thumnail_url'))
                                                        <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('thumnail_url') }}</strong>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">T??i kho???n<span class="text-danger">*</span></label><br>
                                                               <select style="width: 170px;height: 33px;border-radius:4px;text-align:center;font-size:15px" class="form-select"  name="user_id" aria-label="Default select example">
                                                                @foreach( $user as $u) 
                                                                    @if ($u->id == $posts->user_id)
                                                                        <option selected value="{{$u->id}}">{{$u->name}}</option>          
                                                                    @else
                                                                        <option  value="{{$u->id}}">{{$u->name}}</option> 
                                                                    @endif
                                                                                                           
                                                                    @if($errors->has('user_id'))
                                                                    <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('user_id') }}</strong>
                                                                    @endif
                                                              @endforeach
                                                            </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Danh m???c<span class="text-danger">*</span></label><br>                                                   
                                                            <select style="width: 170px;height: 33px;border-radius:4px;text-align:center;font-size:15px" class="form-select"  name="category_id" aria-label="Default select example">
                                                                @foreach( $category as $c) 
                                                                    @if ($c->id ==  $posts->category_id)
                                                                        <option selected value="{{$c->id}}">{{$c->name}}</option>          
                                                                    @else
                                                                        <option  value="{{$c->id}}">{{$c->name}}</option> 
                                                                    @endif
                                                                                                           
                                                                 @if($errors->has('category_id'))
                                                              <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('category_id') }}</strong>
                                                              @endif 
                                                              @endforeach
                                                            </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">T??? kh??a<span class="text-danger">*</span></label>
                                                        <input type="text" name="tags" parsley-trigger="change" required
                                                               placeholder="tags" class="form-control" id="userName" value="{{$posts->tags}}">
                                                               @if($errors->has('tags'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('tags') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Tr???ng th??i<span class="text-danger">*</span></label><br>    
                                                            <select style="width: 170px;height: 30px;border-radius:4px;text-align:center;font-size:15px" class="form-select"  name="status" aria-label="Default select example">
                                                            <?php 
                                                                 $trangThai = array('0'=>'Hi???n','1'=>'???n');
                                                             ?>
                                                             @foreach ( $trangThai as $row => $item)
                                                                 
                                                                 @if ($row == $posts->status)
                                                                     <option selected value="{{$row}}">{{$item}}</option>
                                                                 @else
                                                                     <option value="{{$row}}">{{$item}}</option>
                                                                 @endif

                                                             @endforeach
                                                         
                                                         </select>
                                                    </div>
                                                    
                
                                                    <div class="form-group text-right m-b-0">
                                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                            S???a
                                                        </button>
                                                        <button class="btn btn-danger btn-sm" style="height:34px"><a href="/admin/show-posts"   style="color:white;height:50px">H???y b???</a></button>                                                            

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
        <script src="/admin/ckeditor/ckeditor.js"></script>
    <script> 
    CKEDITOR.replace('ckeditor1')
    </script>
    </body>

    </body>
</html>