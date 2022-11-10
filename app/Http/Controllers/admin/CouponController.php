<?php

namespace App\Http\Controllers\admin;

use App\Models\Coupon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupon = Coupon::paginate(5);
        if ($key = request()->key) {
            $coupon = Coupon::where('code', 'like',   $key . '%')->paginate(5);
        }
        return view('admin.coupon.list', compact('coupon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coupon.addCoupon');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|unique:coupons',
            'name' => 'required',
            'content' => 'required',
            'quantily' => 'required',
            'type' => 'required|in:F,P',
            'status' => 'required|in:0,1',
            'start_at' => 'required|date',
            'expired_at' =>  'required|date|after:start_at'

        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $input = $request->all();
        $coupon = Coupon::create($input);
        if ($coupon) {
            return redirect('/admin/show-coupon')->with('message', 'Thêm thành công');;
        } else {
            //thông báo lỗi thêm sản phẩm
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

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
        $coupon = Coupon::find($id);
        $coupon->delete();
        return redirect('/admin/show-coupon');
    }
}
