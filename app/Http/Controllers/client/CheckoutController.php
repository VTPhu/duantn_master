<?php

namespace App\Http\Controllers\client;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Session;
use App\Models\City;
use App\Models\District;
use App\Models\Ward;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {

        $city = City::all();


        $district = District::all();
        $ward = Ward::all();
        return view('client.index.checkout', compact('city', 'ward', 'district'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_order' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'email' => 'required|email:rfc,dns',
            // 'city' => 'required',
            // 'district' => 'required',
            // 'ward' => 'required',
            'note' => 'required',


        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        // dd(Session::get('Cart')->products);

        //insert payment method
        $data = array();
        $data['payment_method'] = $request->name = "payment_option";
        $data['payment_status'] = 'Đang chờ xử lý';
        $payment_id = DB::table('payment')->insertGetId($data);
        //insert order
        $order_data = array();
        $order_data['user_id'] = Session::get('user_id');
        $order_data['sipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] = $payment_id;
        $order_data['total_price'] = Session::get('Cart')->totaPrice;
        $order_data['status'] = '0';
        $order_data['name_order'] = $request->name_order;
        $order_data['phone'] = $request->phone;
        $order_data['address'] = $request->address;
        $order_data['email'] = $request->email;
        $order_data['city'] = $request->city;
        $order_data['district'] = $request->district;
        $order_data['ward'] = $request->ward;
        $order_data['note'] = $request->name;
        $order_data['order_date'] = new \DateTime('Asia/Ho_Chi_Minh');
        $order_data['updated_at'] = new \DateTime('Asia/Ho_Chi_Minh');
        $order_data['created_at'] = new \DateTime('Asia/Ho_Chi_Minh');
        $order_id = DB::table('orders')->insertGetId($order_data);
        Session::put('order_id',  $order_id);
        //insert orderdetai
        $produ  = Session::get('Cart')->products;
        foreach ($produ as $n) {
            $order_d_data = array();
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $n['productInfo']->id;
            $order_d_data['product_name'] = $n['productInfo']->title;
            $order_d_data['product_price'] = Session::get('Cart')->totaPrice;
            $order_d_data['size_detail'] = $n['sized'];
            $order_d_data['color_detail'] = $n['color'];
            $order_d_data['quantily_order'] = $n['quantily'];
            $order_d_data['total_pro_detail'] = $n['price'];
            $orderdetail_id = DB::table('order_details')->insert($order_d_data);
        }

        if ($data['payment_method'] == 1) {
            echo 'Thanh toán khi giao hàng';
        } else {
            echo 'Thanh toán ATM';
        }
        return redirect('/checkout')->with('message', 'Thêm thành công');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
