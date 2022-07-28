@extends('menu')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Thanh toán</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Trang chủ</a>
                            <a href="./shop.html">Cửa hàng</a>
                            <span>Thanh toán</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="{{route('addOrder')}}" method="POST">
                    @csrf
                    <div class="row" >
                        <div class="col-lg-8 col-md-6">
                            <h6 class="coupon__code">!!! Giá đặc biệt cho mỗi mã phiếu giảm giá !!!</h6>
                            <h6 class="checkout__title">Chi tiết thanh toán</h6>
                            <div class="checkout__input">
                                <p>Họ và tên<span>*</span></p>
                                <input type="text" name="fullname" placeholder="Họ và tên" class="checkout__input__add">
                            </div>
                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input type="text" name="address" placeholder="Địa chỉ" class="checkout__input__add">
                            </div>
                            <div class="checkout__input">
                                <p>Số điện thoại<span>*</span></p>
                                <input type="text" name="phone" placeholder="0123..." class="checkout__input__add">
                            </div>
                            <div class="checkout__input">
                                <p>Ghi chú<span>*</span></p>
                                <textarea class="checkout__input__add form-control" name="note" placeholder="ghi chú ..." aria-label="With textarea"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Đơn của bạn</h4>
                                <div class="checkout__order__products">Sản phẩm <span>Tổng cộng</span></div>
                                <ul class="checkout__total__products">
                                    <?php $total=0 ?>
                                    @foreach($products_in_cart as $product)
                                        <li>
                                            {{$product->name}} ({{$cart[$product->id]}})
                                            <span>$ {{$product->price*$cart[$product->id]}}</span>
                                        </li>
                                        <?php
                                        $total += $product->price*$cart[$product->id];
                                        ?>
                                    @endforeach
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Tổng phụ <span>$ <?php echo $total ?></span></li>
                                    <li>Tổng cộng <span>$ <?php echo $total ?></span></li>
                                </ul>
                                <h5>Phương thức thanh toán</h5>
                                <p>Chọn một giao dịch</p>
                                <div class="checkout__input__checkbox">
                                    <div class="">
                                        <input type="radio" class="mr-3" value="Visa" name="paymentMethod" id="visa">
                                        Visa
                                    </div>
                                    <div class="">
                                        <input type="radio" class="mr-3" value="paypal" name="paymentMethod" id="paypal">
                                        Paypal
                                    </div>
                                    <div class="">
                                        <input checked type="radio" class="mr-3" value="Thanh toán khi nhận hàng"  name="paymentMethod" id="Cash On Delivery">
                                        Thanh toán khi nhận hàng
                                    </div>
                                </div>
                                <br>
                                @if (Illuminate\Support\Facades\Auth::check() === true)
                                    <button type="submit" class="site-btn">ĐẶT HÀNG TẬN NƠI</button>
                                @else
                                    <a class="site-btn text-center" href="{{asset('../login')}}">Bạn cần đăng nhập</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection
