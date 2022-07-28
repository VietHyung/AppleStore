<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\OrderList;
use Illuminate\Support\Facades\Auth;
use function Sodium\add;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(){

        $userId = Auth::user()->username;
        
        $orderMore=[];
        $orderUser = DB::table("order_list")->where("username",$userId)->get();
        
        
        foreach($orderUser as $orders){
            $order_id = $orders->id_order;

            $orderDetail = DB::table("order_detail")
            ->join('product', 'order_detail.id_product', '=', 'product.id')
            ->where("id_order",$order_id)->get();
            $orderMore[] = $orderDetail;
        }
        

        return view('order.index',data:['order'=>$orderUser,'orderDetail'=>$orderMore]);




        // if(!isset($_SESSION))
        // {
        //     session_start();
        // }
        // $cart = [];
        // if(!empty($_SESSION['cart'])){
        //     $cart = $_SESSION['cart'];
        // }
        // $products_in_cart = [];
        // foreach ($cart as $id => $quantity){
        //     $order = OrderList::query()->where('id_order', $id)->first();
        //     if($order !== null){
        //         $products_in_cart[] = $order;
        //     }
        // }

        // return view('order.index',data:['cart'=>$cart, 'products_in_cart'=>$products_in_cart]);
    }
}
