@extends('menu')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Check Out</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Check Out</span>
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
                            <h6 class="coupon__code">!!! Special price for each coupon code !!!</h6>
                            <h6 class="checkout__title">Billing Details</h6>
                            <div class="checkout__input">
                                <p>Fullname<span>*</span></p>
                                <input type="text" name="fullname" placeholder="Fullname" class="checkout__input__add">
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" name="address" placeholder="Address" class="checkout__input__add">
                            </div>
                            <div class="checkout__input">
                                <p>Phone<span>*</span></p>
                                <input type="text" name="phone" placeholder="0123..." class="checkout__input__add">
                            </div>
                            <div class="checkout__input">
                                <p>Note<span>*</span></p>
                                <textarea class="checkout__input__add form-control" name="note" placeholder="something here..." aria-label="With textarea"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
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
                                    <li>Subtotal <span>$ <?php echo $total ?></span></li>
                                    <li>Total <span>$ <?php echo $total ?></span></li>
                                </ul>
                                <h5>Payment Methods</h5>
                                <p>Choose a transactions</p>
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
                                        <input type="radio" class="mr-3" value="cashOnDelivery"  name="paymentMethod" id="Cash On Delivery">
                                        Cash On Delivery
                                    </div>
                                </div>
                                <br>
                                @if (Illuminate\Support\Facades\Auth::check() === true)
                                    <button type="submit" class="site-btn">PLACE ORDER</button>
                                @else
                                    <a class="site-btn text-center" href="{{asset('../login')}}">You need to sign in</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                        <a href="#"><img src="img/payment.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Clothing Store</a></li>
                            <li><a href="#">Trending Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivary</a></li>
                            <li><a href="#">Return & Exchanges</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Be the first to know about new arrivals, look books, sales & promos!</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2020
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

@endsection