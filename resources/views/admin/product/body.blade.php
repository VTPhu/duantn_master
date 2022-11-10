<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
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

                    <!-- Right(Notification) -->
                    <ul class="nav navbar-nav navbar-right">
                       

                        <li>
                           
                            <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                               
                                
                                
                            </ul>
                        </li>

                        
                        <li class="dropdown user-box">
                            <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                <img src="/admin/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                <li>
                                    <h5>Hi, John</h5>
                                </li>
                                <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
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
                        <li class="menu-title">Navigation</li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span class="label label-success pull-right">2</span> <span> Dashboard </span> </a>

                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> Product</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="/admin/show-product">Liệt kê</a></li>
                                <li><a href="/admin/product">Thêm sản phẩm</a></li>

                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span> Category </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="/admin/show-category"> Liệt kê</a></li>
                                <li><a href="/admin/category"> Thêm danh mục</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="#" class="waves-effect"><i class="mdi mdi-calendar"></i><span> Post </span><span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="/admin/show-posts"> Liệt kê</a></li>
                                <li><a href="/admin/posts"> Thêm bài viết</a></li>

                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span> Brand</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="/admin/show-brand"> Liệt kê</a></li>
                                <li><a href="/admin/brand"> Thêm Thương Hiệu</a></li>

                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-arc"></i><span> Order</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="/admin/show-order"> Liệt kê</a></li>
                                

                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-diamond"></i><span> OrderDetail</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="/admin/show-orderDetail"> Liệt kê</a></li>
                                

                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i><span> Coupon</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="/admin/show-coupon"> Liệt kê</a></li>
                                <li><a href="/admin/coupon"> Thêm coupon</a></li>

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
                                                <input type="text" class="form-control" placeholder="Tìm kiếm" name="key">
                                                <button style="background-color:#36404e;" type="submit" class="btn btn- "><i style="color:white;" class="fas fa fa-search"></i></button>
                                            </form>
                                            <hr>
                                            <table id="dt-opt" class="table table-striped add-edit-table table-bordered">
                                                <thead>
                                                    <tr style="background-color:#36404e;color:white;">
                                                        <th style="text-align: center;font-size:18px;">Id</th>
                                                        <th style="text-align: center;font-size:18px;"> Title</th>

                                                        <th style="text-align: center;font-size:18px;">Quantily</th>
                                                        <th style="text-align: center;font-size:18px;">Price</th>
                                                        <th style="text-align: center;font-size:18px;">Size</th>
                                                        <th style="text-align: center;font-size:18px;">Date</th>
                                                        <th style="text-align: center;font-size:18px;">Thumnail</th>


                                                        <th style="text-align: center;font-size:18px;">Description</th>
                                                        <th style="text-align: center;font-size:18px;">Tags</th>
                                                        <th style="text-align: center;font-size:18px;">Status</th>
                                                        <th style="text-align: center;font-size:18px;"> Action</th>
                                                    </tr>
                                                </thead>
                                                @foreach( $product as $p)

                                                <tbody>
                                                    <tr>
                                                        <td>{{$p->id}}</td>
                                                        <th style="font-size:17px;">{{$p->title}}</th>


                                                        <td>{{$p->quantily}}</td>
                                                        <th>{{$p->price}}</th>
                                                        <th style="width:143px;">{!! !empty($p->size) ?'<button class="btn btn-success btn-sm">M</button><button class="btn btn-danger btn-sm">L</button><button class="btn btn-warning btn-sm">XL</button><button class="btn btn-info btn-sm">S</button>': 0 !!}</th>
                                                        <th>{{$p->date}}</th>
                                                        <td>
                                                            <image width="60px" height="80px" src="{{asset('uploads/images/'.$p->thumnail)}}">
                                                         </td>


                                                        <th style="font-size:17px;">{{$p->description}}</th>
                                                        <th>{{$p->tags}}</th>

                                                        <th>{!! $p->status==0?'<button class="btn btn-success btn-sm">hiện</button>':'<button class="btn btn-danger btn-sm ">ẩn</button>'!!}</th>
                                                        <td class=" text-center font-size-10" style="width:98px">
                                                            <button class="btn btn-primary btn-sm "><a href="/admin/product/{{$p->id}}" class="text-gray m-r-5"><i style="color:white" class="ti-pencil"></i></a></button>
                                                            <button class="btn btn-danger btn-sm"><a href="/admin/deletedProduct/{{$p->id}}" onclick="alert(event,{{$p->id}})" class="text-gray"><i style="color:white" class="ti-trash"></i></a></button>
                                                            
                                                        </td>
                                                    </tr>
                                                </tbody>

                                                @endforeach
                                            </table>

                                        </div>

                                    </div>


                                </div>
                                <div class="form-group " style="padding-left:600px;font-size:20px">
                                    <!-- phân trang  -->
                                    {{$product->appends(request()->all())->links()}}
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
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
                // xóa
                window.location.href ='deletedProduct/'+id;

            }
        })
    }
</script>

</html>
