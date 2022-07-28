<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use App\Models\OrderList;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Inventory extends Controller
{
    //
    function index(Request $request)
    {
//        products = Product::join('order_detail', 'id_product', '=', 'product.id')->select('product.id', DB::raw('SUM(qty) as total_qty'))->groupBy('id_product')->get();
        $products = Product::query()->get();
        $total_qty = [];
        foreach ($products as $product){
            $tmp =0;
            $product_order = OrderDetail::query()->where('id_product','=',$product->id)->get();
            foreach ($product_order as $p)
                $tmp += $p->qty;
            $total_qty[] = $tmp;
        }
       // dd($total_qty[0]);
        return view('admin.inventory.index',[
            'products' => $products,
            'total_qty' =>$total_qty
        ]);


    }

    function update(Request $request)
    {
//        products = Product::join('order_detail', 'id_product', '=', 'product.id')->select('product.id', DB::raw('SUM(qty) as total_qty'))->groupBy('id_product')->get();
       if($request->has('id') && $request->has('quantity'))
        // dd($total_qty[0]);
           Product::where('id', $request->input('id'))->update(['quantity'=>$request->input('quantity')] );
        return redirect()->route('admin-inventory');


    }

    function edit(Request $request)
    {
//        products = Product::join('order_detail', 'id_product', '=', 'product.id')->select('product.id', DB::raw('SUM(qty) as total_qty'))->groupBy('id_product')->get();
        if($request->has('id'))
            // dd($total_qty[0]);
            $product = Product::query()->where('id', $request->input('id'))->first();
            return view('admin.inventory.index_edit',[
                'product' => $product

            ]);


    }
}
