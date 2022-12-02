
<div class="table-content table-responsive" >
    @if(Session::has('Cart')!=null)
<table class="table">
    <thead>
        <tr>
            <th class="product-thumbnail">ảnh</th>
            <th class="cart-product-name">Sản phẩm</th>
            <th class="cart-product-name">Kích thước</th>
            <th class="product-price">Gía tiền</th>
            <th class="product-quantity">Số lượng</th>
            <th class="product-subtotal">Tổng tiền</th>
            <th class="product-remove">lưu</th>
            <th class="product-remove">Xóa</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach(Session::get('Cart')->products as $n)
        <tr>
            <td class="product-thumbnail"><a href="product-details.html">                           
                 <img src="{{asset('uploads/images/'.$n['productInfo']->thumnail)}}" alt="">
            </a></td>
            <td class="product-name"><a href="product-details.html">{{$n['productInfo']->title}}</a></td>
            <td class="product-name"><a href="product-details.html">{{ $n['sized']}}</a></td>
            <td class="product-price"><span class="amount">{{number_format($n['productInfo']->price)}}đ</span></td>
            <td class="product-quantity">
                <div class="cart-plus-minus"><input id="quanty-item-{{$n['productInfo']->id}}" type="text" value="{{$n['quantily']}}" /></div>
            </td>
            <td class="product-subtotal"><span class="amount">{{number_format($n['price'])}}đ</span></td>

            <td class="product-remove"><a href="#"><i class="fa fa-save" onclick="SaveListCart({{$n['productInfo']->id}})"  ></i></a></td>

            <td class="product-remove"><a href="#"><i class="fa fa-times" onclick="DeleteListCart({{$n['productInfo']->id}})"></i></a></td>

        </tr>
        
        @endforeach
        @endif
    </tbody>
</table>
</div>
<div class="row">
    @if(Session::has('Cart')!=null)
<div class="col-12">
    <div class="coupon-all">
        <div class="coupon">
            <input id="coupon_code" class="input-text" name="coupon_code" value=""
                placeholder="Nhập mã giảm giá" type="text">
            <button class="s-btn s-btn-2" name="apply_coupon" type="submit">Kích hoạt</button>
        </div>
        <div class="coupon2">
            <button class="s-btn s-btn-2" name="update_cart" type="submit" onclick="SaveListCart({{$n['productInfo']->id}})">Lưu giỏ hàng</button>
        </div>
    </div>
</div>
</div>

<div class="row justify-content-end">
<div class="col-md-5 ml-auto">
   
    <div class="cart-page-total">
        <h2>Tổng số giỏ hàng</h2>
        <ul class="mb-20">
            <li>Tổng số lượng <span>{{Session::get('Cart')->totalQuanty}}</span></li>
            <li>Tổng tiền <span>{{number_format(Session::get('Cart')->totaPrice)}}đ</span></li>
        </ul>
        <a class="s-btn s-btn-2" href="checkout.html">Thanh toán</a>
    </div>
    
    
</div>
@else

<div class="table-content table-responsive" >
   
<table class="table">
    <thead>
        <tr>
            <th class="product-thumbnail">ảnh</th>
            <th class="cart-product-name">Sản phẩm</th>
            <th class="product-price">Gía tiền</th>
            <th class="product-quantity">Số lượng</th>
            <th class="product-subtotal">Tổng tiền</th>
            <th class="product-remove">lưu</th>
            <th class="product-remove">Xóa</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
       
    </tbody>
</table>
</div>
<div class="row">
    
<div class="col-12">
    <div class="coupon-all">
        <div class="coupon">
            <input id="coupon_code" class="input-text" name="coupon_code" value=""
                placeholder="Nhập mã giảm giá" type="text">
            <button class="s-btn s-btn-2" name="apply_coupon" type="submit">Kích hoạt</button>
        </div>
        <div class="coupon2">
            <button class="s-btn s-btn-2" name="update_cart" type="submit" >Lưu giỏ hàng</button>
        </div>
    </div>
</div>
</div>

<div class="row justify-content-end">
<div class="col-md-5 ml-auto">
   
    <div class="cart-page-total">
        <h2>Tổng số giỏ hàng</h2>
        <ul class="mb-20">
            <li>Tổng số lượng <span>0</span></li>
            <li>Tổng tiền <span>0đ</span></li>
        </ul>
        <a class="s-btn s-btn-2" href="checkout.html">Thanh toán</a>
    </div>
    
    
</div>
    
</div>
@endif
</div>
</div>

