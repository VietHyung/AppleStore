@extends('menu')

@section('content')


<!-- Header Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Đơn đặt hàng</h4>
                    <div class="breadcrumb__links">
                        <a href="./index.html">Trang chủ</a>
                        <a href="./shop.html">Cửa hàng</a>
                        <span>Đơn đặt hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                        <tr>
                            <th>Mã đơn</th>
                            <th>Hàng</th>
                            <th>Được giao</th>
                            <th>Phương thức trả</th>
                            <th></th>
                            <th>Tổng</th>
                            <th>Trạng thái</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;
                            ?>
                        @foreach($order as $orders)
                            <tr>
                                <td class="quantity__item" >
                                    <div class="quantity">
                                        <div class="row">
                                            <div style="margin-left:40px;" ><span class="span-quantity">{{$orders->id_order}}</span></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                            @foreach($orderDetail[$i++] as $product)
                                                <h6>{{$product->name}}</h6>
                                            @endforeach
                                    </div>
                                </td>
                                <td class="quantity__item"><span class="quantity">{{$orders->address}}</span></td>
                                <td class="quantity__item"><span class="quantity">{{$orders->payment_method}}</span></td>
                                <td></td>
                                <td class="quantity__item"><span class="quantity">{{$orders->total_price}}</span></td>
                                <td class="quantity__item">
                                    <span class="quantity">
                                        @if($orders->status  === 0) 
                                            {{"Đã hủy"}} 
                                        @elseif($orders->status === 1) 
                                            {{"Chờ xác nhận"}} 
                                        @elseif($orders->status === 2) 
                                            {{"Đã xác nhận"}} 
                                        @elseif($orders->status === 3) 
                                            {{"Đã thanh toán"}} 
                                        @endif
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="{{route('shop')}}">Tiếp tục mua sắm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->
@endsection
