<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use App\Models\OrderList;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\ProductInformation;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BillManagerController extends Controller
{
    function index(Request $request)
    {
        $view_mode = 1;
        if($request->has('view_mode'))
            $view_mode = $request->input('view_mode');

        $order_list = OrderList::query()->orderBy('created_at','desc')->get();
        return view('admin.bill.bill',data:[
            'order_list' => $order_list
        ]);


    }

    function view(Request $request)
    {

        if($request->has('id'))
        {
            $id = $request->input('id');
            $bill = OrderList::query()->where('id_order',$id)->first();
            $str ="SELECT * FROM order_detail INNER JOIN product ON  product.id = id_product where id_order =$id";
           // $list_bill = OrderDetail::query()->where('id_order',$id)->get();
            $list_products = DB::SELECT($str);

            return view('admin.bill.bill_detail',data:[
                'bill'=> $bill,
                'list_products'=>$list_products
            ]);
        }else{
            return redirect()->route('admin-bill');
        }

    }

    function update_status(Request $request)
    {

        if($request->has('id') && $request->has('status') ) {
            $id = $request->input('id');
            $status = (int)$request->input('status');
            if($status === 1){  // neu bill đang chờ -> thành xác nhận
                $status = 2;
            }else if($status === 2){ // bill đã xác nhận -> thành hoàn thành
                $status = 3;
            }
            OrderList::where('id_order',$id)->update(['status' =>$status]);
        }
        return redirect()->route('admin-bill');
    }

    function destroy(Request $request)
    {

        if($request->has('id') && $request->has('status') ) {
            $id = $request->input('id');
            $status = (int)$request->input('status');
            if($status === 1){  // neu bill đang chờ -> thành xác nhận
                $status = 0;
            }
            OrderList::where('id_order',$id)->update(['status' =>$status]);
        }
        return redirect()->route('admin-bill');
    }


}
