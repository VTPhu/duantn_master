

        <!-- breadcrumb area start -->
        <div class="breadcrumb-area-3 pt-215 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">     
                        <div class="breadcrumb-wrapper-2 text-center">
                            <h3>Thanh toán</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                  <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
                                </ol>
                            </nav>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

         <!-- coupon-area start -->
         <section class="coupon-area pt-100 pb-30">
            <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="coupon-accordion">
                        <!-- ACCORDION START -->
                        <h3>Bạn đã có tài khoản? <a><span style="color:blue" id="showlogin">đăng nhập</span></a></h3>
                        
                        <!-- ACCORDION END -->
                  </div>
               </div>
               <div class="col-md-6">
                  
               </div>
            </div>
         </div>
         </section>
         <!-- coupon-area end -->

         <!-- checkout-area start -->
         <section class="checkout-area pb-70">
          
               <div class="container">
                  @if(Session::has('message'))
                  <p class="alert " style="color:green;background: antiquewhite;font-size:18px;">{{ Session::get('message') }}</p>
                  @endif
                  <form action="/checkout" method ="POST"  data-parsley-validate novalidate enctype="multipart/form-data">
                    @csrf
                     <div class="row">
                           <div class="col-lg-6">
                              <div class="checkbox-form">
                                 <h3>Chi tiết thanh toán</h3>
                                 <div class="row">
                                       <div class="col-md-12">
                                          
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>Họ và tên <span class="required">*</span></label>
                                             <input type="text" name="name_order" value="{{old('name')}}"/>
                                             @if($errors->has('name_order'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('name_order') }}</strong>
                                                               @endif
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>Số điện thoại<span class="required">*</span></label>
                                             <input type="text"  name="phone" value="{{old('phone')}}"/>
                                             @if($errors->has('phone'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('phone') }}</strong>
                                                               @endif
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="checkout-form-list">
                                             <label>Email</label>
                                             <input type="email"  name="email" value="{{old('email')}}"/>
                                             @if($errors->has('email'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('email') }}</strong>
                                                               @endif
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="checkout-form-list">
                                             <label>Địa chỉ <span class="required">*</span></label>
                                             <input type="text"  name="address" value="{{old('address')}}"/>
                                             @if($errors->has('address'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('address') }}</strong>
                                                               @endif
                                          </div>
                                       </div>
                                    
                                    <div class="col-md-6">
                                        <div class="country-select">
                                           <label>Tỉnh / Thành <span class="required">*</span></label>
                                           
                                           <select name="city" onchange="cityList()" id="ma_tp">
                                             
                                             @foreach($city as $city)
                                              <option    value="{{$city->matp < 10  ? '0' . $city->matp : $city->matp}}">{{ $city->name}}</option>
                                             @endforeach
                                           </select>
                                           
                                           @if($errors->has('city'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('city') }}</strong>
                                                               @endif
                                        </div>
                                       
                                  </div>
                                 
                                  <div class="col-md-6">
                                    <div class="country-select">
                                       <label>Quận / Huyện <span class="required">*</span></label>
                                       <select name="district" id="district" onchange="districtList()" >
                                         
                                         
                                          @foreach($district as $dis)
                                         
                                          <option  value="{{$dis->maqh< 016  ? '00' . $dis->maqh : $dis->maqh}}">{{$dis->name}}</option>
                                         @endforeach
                                       </select>
                                       @if($errors->has('district'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('district') }}</strong>
                                                               @endif
                                    </div>
                              </div>
                              <div class="col-md-6">
                                <div class="country-select">
                                   <label>Phường / Xã <span class="required">*</span></label>

                                   <select name="ward" id="dislist">
                                  
                                    @foreach($ward as $w)

                                      <option value="{{$w->maqh}}">{{$w->name}}</option>
                                     @endforeach
                                   </select>
                                   @if($errors->has('ward'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('ward') }}</strong>
                                                               @endif
                                </div>
                          </div>
                                      
                                 </div>
                                 <div class="different-address">
                                       
                                       <div class="order-notes">
                                          <div class="checkout-form-list">
                                             <label>Ghi chú</label>
                                             <textarea name="note" id="checkout-mess" cols="30" rows="10"
                                                   placeholder="" value="{{old('note')}}"></textarea>
                                                   @if($errors->has('note'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('note') }}</strong>
                                                               @endif
                                          </div>
                                       </div>
                                 </div>
                              </div>
                             
                           </div>
                           <div class="col-lg-6">
                              <div class="your-order mb-30 ">
                                 <h3>Đơn hàng</h3>
                                 <div class="your-order-table table-responsive">
                                       <table>
                                        @if(Session::has('Cart')!=null)
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">ảnh</th>
                                                <th class="cart-product-name">Sản phẩm</th>
                                                <th class="cart-product-name">Kích thước</th>
                                                <th class="cart-product-name">Màu sắc</th>
                                                <th class="cart-product-name">Giá</th>
                                            </tr>
                                        </thead>
                                          <tbody>
                                            @foreach(Session::get('Cart')->products as $n)
                                             <tr class="cart_item">
                                                <td class="product-thumbnail"><a href="product-details.html">                           
                                                    <img style="width:100px" src="{{asset('uploads/images/'.$n['productInfo']->thumnail)}}" alt="">
                                               </a></td>
                                           
                                                <td class="amount"><a href="">{{$n['productInfo']->title}}</a></td>
                                                <td class="amount"><a style="padding-left:35px" href="" >{{ $n['sized']}}</a></td>
                                                <td class="amount"><a href="" >{{ $n['color']}}</a></td>
                                                <td class="product-subtotal"><span class="amount">{{number_format($n['price'])}}đ</span></td>

                                              
                                                  
                                             </tr>
                                             @endforeach
                                          </tbody>
                                        
                                          <tfoot>
                                             <tr class="cart-subtotal">
                                                   <th>Số lượng</th>
                                                   <td><span class="amount">{{Session::get('Cart')->totalQuanty}}</span></td>
                                             </tr>
                                             <tr class="shipping">
                                                   <th>Tạm tính</th>
                                                   <td>
                                                      <ul>
                                                         <li>
                                                              
                                                                <span class="amount">{{number_format(Session::get('Cart')->totaPrice)}}đ</span>
                                                               
                                                         </li>
                                                         
                                                      </ul>
                                                      
                                                   </td>
                                                   
                                             </tr>
                                             <tr class="shipping">
                                                <th>Vận chuyển</th>
                                                <td>
                                                   <ul>
                                                      <li>
                                                           
                                                             <span class="amount">Miễn Phí</span>
                                                            
                                                      </li>
                                                      
                                                   </ul>
                                                   
                                                </td>
                                             </tr>
                                             <tr class="shipping">
                                                <th>Giảm giá</th>
                                                <td>
                                                   <ul>
                                                      <li>
                                                           
                                                             <span class="amount"></span>
                                                            
                                                      </li>
                                                      
                                                   </ul>
                                                   
                                                </td>
                                             </tr>
                                                
                                          </tr>
                                             <tr class="order-total">
                                                   <th>Tổng tiền</th>
                                                   <td><strong><span class="amount">{{number_format(Session::get('Cart')->totaPrice)}}đ</span></strong>
                                                   </td>
                                             </tr>
                                             
                                          </tfoot>
                                          
                                       </table>
                                       @endif
                                 </div>

                                 <div class="payment-method">
                                    <h5>Chọn hình thức thanh toán</h3>
                                       
                                          @csrf
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="payment_option" id="flexRadioDefault1" value="1" checked>
                                       <label class="form-check-label" for="flexRadioDefault1"> 
                                          <i class="fa fa-money" style="font-size:29px"></i> Thanh toán khi giao hàng (COD)
                                       </label>
                                     </div>
                                     <div class="form-check">
                                       <input class="form-check-input" type="radio" name="payment_option" id="flexRadioDefault2" value="2">
                                       <label class="form-check-label" for="flexRadioDefault2">
                                          <i class="fa fa-cc-visa"style="font-size:29px"></i> Thanh toán ATM
                                       </label>
                                     </div>
                                    
                                    {{-- <div class="card">
                                      

                                       <div class="card-body">
                                          <i class="fa fa-money" style="font-size:29px"></i> Thanh toán khi giao hàng (COD)
                                       </div>
                                       <div class="card-body">
                                          <i class="fa fa-cc-visa"style="font-size:29px"></i> Thanh toán ATM
                                       </div>
                                     </div> --}}
                                    <div class="order-button-payment mt-20">
                                       <button type="submit" class="s-btn s-btn-2">Hoàn tất đơn hàng</button>
                                    </div>
                                   
                                 </div>
                              </div>
                           </div>
                     </div>
                  </form>
               </div>
         </section>
         <!-- checkout-area end -->

    

</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
   
       function cityList(){
      
        var matp = document.getElementById("ma_tp").value;
      
             $.ajax({
                url:"/city"+'/'+matp,
                type:"post",
                data: {
                  "_token": "{{ csrf_token() }}",
                  "matp":matp,
                  },
                success:function(data){
                  let kq = '';
                  $.each(data, function (index, value) { 
                     kq  += `<option value="${value.maqh}">${value.name}</option>`;
                  });
                  $("#district").html(kq);
                },                
            })
       }
           
       function districtList(){
      
      var maqh = document.getElementById("district").value;
   
           $.ajax({
              url:"/district"+'/'+maqh,
              type:"post",
              data: {
                "_token": "{{ csrf_token() }}",
                "maqh":maqh,
                },
              success:function(data){
            
                let dis = '';
                $.each(data, function (index, value) { 
                  dis  += `<option value="${value.maqh}">${value.name}</option>`;
                });
                $("#dislist").html(dis);
                console.log(dis);
              },                
          })
     }
    

   </script>
        
   