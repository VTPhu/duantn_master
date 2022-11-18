<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Posts;
use App\Models\Order;
use App\Models\Users;
use App\Models\Statistical;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dauthangnay = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $total_sales = Statistical::whereBetween('order_date', [$dauthangnay, $now])->orderBy('order_date', 'ASC')->sum('sales');
        $total_profit = Statistical::whereBetween('order_date', [$dauthangnay, $now])->orderBy('order_date', 'ASC')->sum('profit');
        $order = Statistical::whereBetween('order_date', [$dauthangnay, $now])->orderBy('order_date', 'ASC')->sum('total_order');
        $total_quantity = Statistical::whereBetween('order_date', [$dauthangnay, $now])->orderBy('order_date', 'ASC')->sum('quantity');
        $user = Users::where('role', '=', '1')->count();
        $admin = Users::where('role', '=', '2')->count();
        return view('admin.dashboard.dashboard', compact('total_sales', 'total_profit', 'total_quantity', 'order', 'user', 'admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {

        $input = $request->all();
        $from_date = $input['from_date'];
        $to_date = $input['to_date'];

        $get = Statistical::whereBetween('order_date', [$from_date, $to_date])->orderBy('order_date', 'ASC')->get();


        foreach ($get as $key => $val) {
            $chart_data[] = array(

                'period' => $val->order_date,
                'order' => $val->total_order,
                'sales' => $val->sales,
                'profit' => $val->profit,
                'quantity' => $val->quantity
            );
        }
        echo $data = json_encode($chart_data);
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
    public function dashboard_filter(Request $request)
    {

        $data = $request->all();
        $dauthangnay = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
        $dathangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
        $cuoithangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
        $sub7days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(7)->toDateString();
        $sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $dauthang9 = Carbon::now('Asia/Ho_Chi_Minh')->subMonth(2)->toDateString();
        $cuoithang9 = Carbon::now('Asia/Ho_Chi_Minh')->subMonth(2)->endOfMonth()->toDateString();
        if ($data['dashboard_value'] == 'thangtruoc') {
            $get = Statistical::whereBetween('order_date', [$dathangtruoc, $cuoithangtruoc])->orderBy('order_date', 'ASC')->get();
        } elseif ($data['dashboard_value'] == 'thangnay') {
            $get = Statistical::whereBetween('order_date', [$dauthangnay,  $now])->orderBy('order_date', 'ASC')->get();
        } elseif ($data['dashboard_value'] == '365ngayqua') {
            $get = Statistical::whereBetween('order_date', [$sub365days,  $now])->orderBy('order_date', 'ASC')->get();
        } elseif ($data['dashboard_value'] == 'thang9') {
            $get = Statistical::whereBetween('order_date', [$dauthang9,  $cuoithang9])->orderBy('order_date', 'ASC')->get();
        } else {
            $get = Statistical::whereBetween('order_date', [$sub7days, $now])->orderBy('order_date', 'ASC')->get();
        }

        foreach ($get as $key => $val) {
            $chart_data[] = array(

                'period' => $val->order_date,
                'order' => $val->total_order,
                'sales' => $val->sales,
                'profit' => $val->profit,
                'quantity' => $val->quantity
            );
        }
        echo $data = json_encode($chart_data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dayorder()
    {
        $sub30days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(30)->toDateString();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $get = Statistical::whereBetween('order_date', [$sub30days,  $now])->orderBy('order_date', 'ASC')->get();
        foreach ($get as $key => $val) {
            $chart_data[] = array(

                'period' => $val->order_date,
                'order' => $val->total_order,
                'sales' => $val->sales,
                'profit' => $val->profit,
                'quantity' => $val->quantity
            );
        }
        echo $data = json_encode($chart_data);
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
        //
    }
}
