<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
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
                            <a href="/admin/dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span class="label label-success pull-right">2</span> <span> TH???NG K?? </span> </a>

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
                        <li>
                            <a href="#" class="waves-effect"><i class="mdi mdi-calendar"></i><span> B??I VI???T </span><span class="menu-arrow"></span></a>
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
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-gift"></i><span> M?? GI???M GI??</span> <span class="menu-arrow"></span></a>
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







        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">



                    <!-- end row -->



                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-lg-12">
                                        @if(Session::has('message'))
                                        <p class="alert " style="color:green;background: antiquewhite;font-size:18px;">{{ Session::get('message') }}</p>
                                        @endif
                                        <div class="demo-box">
                                            <form action="" class="form-inline" role="form">
                                                <input type="text" class="form-control" placeholder="T??m ki???m" name="key" value="{{request()->key}}">
                                                <button style="background-color:#36404e;" type="submit" class="btn btn- "><i style="color:white;" class="fas fa fa-search"></i></button>
                                            </form>
                                            <hr>
                                            <table id="dt-opt" class="table table-striped add-edit-table table-bordered ">
                                                <thead style="background-color:#36404e;color:white;">
                                                    <tr>
                                                        <th style="text-align: center;font-size:18px">Th??? t???</th>
                                                        <th style="text-align: center;font-size:18px">T??n</th>
                                                        <th style="text-align: center;font-size:18px">M?? gi???m gi??</th>
                                                        <th style="text-align: center;font-size:18px">T??nh n??ng m??</th>
                                                        <th style="text-align: center;font-size:18px">S??? l?????ng</th>
                                                        <th style="text-align: center;font-size:18px">s??? % ho???c vnd</th>

                                                        <th style="text-align: center;font-size:18px">Tr???ng th??i</th>
                                                        <th style="text-align: center;font-size:18px">Ng??y b???t ?????u</th>
                                                        <th style="text-align: center;font-size:18px">Ng??y k???t th??c</th>
                                                        <th style="text-align: center;font-size:18px">H??nh ?????ng</th>
                                                    </tr>
                                                </thead>
                                                @foreach( $coupon as $c)
                                                <tbody>
                                                    <tr>
                                                        <th style="text-align: center">{{$c->id}}</td>
                                                        <td style="text-align: center">{{$c->coupon_name}}</td>
                                                        <th style="text-align: center">{{$c->coupon_code}}</th>
                                                        <th style="text-align: center">{{$c->coupon_condition}}</td>
                                                        <th style="text-align: center">{{$c->coupon_time}}</th>
                                                        <td style="text-align: center">{{$c->coupon_number}}</td>
                                                        <th style="text-align: center">{!! $c->status==0?'<button class="btn btn-success btn-sm"><h5 style="color:white;">Hi???n</h5></button>':'<button class="btn btn-danger btn-sm " "><h5 style="color:white;">???n</h5></button>'!!}</th>
                                                        <th style="text-align: center">{{date('d-m-Y', strtotime($c->start_atdate))}}</td>
                                                        <th style="text-align: center">{{date('d-m-Y', strtotime($c->expired_at))}}</td>
                                                            <td class=" text-center font-size-10">
                                                               
                                                                <a href="/admin/deleteCoupon/{{$c->id}}" onclick="alert(event,{{$c->id}})" class="btn btn-danger btn-sm" type="submit"><h5 style="color:white;">X??a</h5></a>
                                                                </td>
                                                    </tr>
                                                </tbody>

                                                @endforeach
                                            </table>

                                        </div>

                                    </div>


                                </div>
                                <div class="form-group " style="padding-left:600px;font-size:20px">
                                    <!-- ph??n trang  -->
                                    {{$coupon->appends(request()->all())->links()}}
                                </div>

                            </div> <!-- end card-box -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->



                </div> <!-- container -->

            </div> <!-- content -->



        </div>










</body>
<script type="text/javascript">
    function alert(event,id) {
        event.preventDefault();
        Swal.fire({
            title: 'B???n c?? ch???c kh??ng?',
            text: "B???n s??? kh??ng th??? tr??? l???i ban ?????u!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'C??, x??a n??!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'X??a!',
                    '???? b??? x??a',
                    'Th??nh c??ng'
                )
                // x??a
                window.location.href ='deleteCoupon/'+id;
            
            }
        })
    }
</script>

</html>