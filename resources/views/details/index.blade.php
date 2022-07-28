@extends('menu')
@section('content')
    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="{{route('home')}}">Trang chủ</a>
                            <a href="{{route('shop')}}">Cửa hàng</a>
                            <span>Chi tiết sản phẩm</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{$product->get_url_image()}}">
                                    </div>
                                </a>
                            </li>
                            <?php $i=2; ?>
                            @foreach($products_img as $product_img)
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-{{$i++}}" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{$product_img->get_url_image_by_image_name()}}">
                                    </div>
                                </a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{$product->get_url_image()}}" alt="">
                                </div>
                            </div>
                            <?php $j=2; ?>
                            @foreach($products_img as $product_img)
                            <div class="tab-pane" id="tabs-{{$j++}}" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{$product_img->get_url_image_by_image_name()}}" alt="">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4>{{$product->name}}</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span> - 555 Đánh giá</span>
                            </div>
                            <h3>${{$product->price}}</h3>
                            <p>{{$product->decription}}</p>
                            <div class="product__details__cart__option">
{{--                                <div class="quantity">--}}
{{--                                    <div class="pro-qty">--}}
{{--                                        <input type="text" value="1">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <button data-name_add_to_cart ="{{$product->name}}"   data-id_add_to_cart="{{$product->id}}" class="add-cart primary-btn">Thêm vào giỏ</button>
                            </div>
                            <div class="product__details__last__option">
                                <h5><span>Đảm bảo thanh toán an toàn</span></h5>
                                <img src="img/shop-details/details-payment.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                    role="tab">Mô tả</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Thông tin thêm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Đánh giá của khách hàng</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">
                                            <h5>Thông tin sản phẩm</h5>
                                            <div class="container pb-5 mb-2">
                                            <div class="comparison-table">
                                                <table class="table table-bordered">
                                                    <tbody id="summary" data-filter="target">
                                                        <tr class="bg-secondary">
                                                            <th class="text-uppercase">Sản phẩm</th>
                                                            <td><span class="text-dark font-weight-semibold">{{$product->name}}</span></td>
                                                        </tr>
                                                        <tr @if(strcmp($product_inf->display,'0') ===0) hidden @endif>
                                                            <th>Màn hình</th>
                                                            <td>{{$product_inf->display}}</td>
                                                        </tr>
                                                        <tr @if(strcmp($product_inf->operating_system,'0') ===0) hidden @endif>
                                                            <th>Hệ điều hành</th>
                                                            <td>{{$product_inf->operating_system}}</td>
                                                        </tr>
                                                        <tr @if(strcmp($product_inf->front_camera,'0') ===0) hidden @endif>
                                                            <th>Camera trước</th>
                                                            <td>{{$product_inf->front_camera}}MP</td>
                                                        </tr>
                                                        <tr @if(strcmp($product_inf->rear_camera,'0') ===0) hidden @endif>
                                                            <th>Camera sau</th>
                                                            <td>{{$product_inf->rear_camera}}</td>
                                                        </tr>
                                                        <tr @if(strcmp($product_inf->cpu,'0') ===0) hidden @endif>
                                                            <th>Chip</th>
                                                            <td>{{$product_inf->cpu}}</td>
                                                        </tr>
                                                        <tr @if(strcmp($product_inf->ram,'0') ===0) hidden @endif>
                                                            <th>RAM</th>
                                                            <td>{{$product_inf->ram}}</td>
                                                        </tr>
                                                        <tr @if(strcmp($product_inf->rom,'0') ===0) hidden @endif>
                                                            <th>ROM</th>
                                                            <td>{{$product_inf->rom}}GB</td>
                                                        </tr>
                                                        <tr @if(strcmp($product_inf->battery,'0') ===0) hidden @endif>
                                                            <th>Pin</th>
                                                            <td>{{$product_inf->battery}} mAh</td>
                                                        </tr>
                                                        <tr @if(strcmp($product_inf->security,'0') ===0) hidden @endif>
                                                            <th>Bảo mật</th>
                                                            <td>{{$product_inf->security}}</td>
                                                        </tr>
                                                        <tr @if(strcmp($product_inf->charging_port,'0') ===0) hidden @endif>
                                                            <th>Cổng sạc</th>
                                                            <td>{{$product_inf->charging_port}}</td>
                                                        </tr>
                                                        <tr  @if(strcmp($product_inf->compatible,'0') ===0) hidden @endif >
                                                            <th>Tương thích</th>
                                                            <td>{{$product_inf->compatible}}</td>
                                                        </tr>
                                                        <tr @if(strcmp($product_inf->sound_technology,'0') ===0) hidden @endif>
                                                            <th>Công nghệ âm thanh</th>
                                                            <td>{{$product_inf->sound_technology}}</td>
                                                        </tr>
                                                        <tr @if(strcmp($product_inf->used_time,'0') ===0) hidden @endif>
                                                            <th>Thời gian sử dụng</th>
                                                            <td>{{$product_inf->used_time}}</td>
                                                        </tr>
                                                        <tr @if(strcmp($product_inf->connect,'0') ===0) hidden @endif>
                                                            <th>Kết nối</th>
                                                            <td>{{$product_inf->connect}}</td>
                                                        </tr>
                                                        <tr @if(strcmp($product_inf->weight,'0') ===0) hidden @endif>
                                                            <th>Cân nặng</th>
                                                            <td>{{$product_inf->weight}}</td>
                                                        </tr>
                                                        <tr @if(strcmp($product_inf->made_in,'0') ===0) hidden @endif>
                                                            <th>Nơi sản xuất</th>
                                                            <td>{{$product_inf->made_in}}</td>
                                                        </tr>
                                                        <tr @if(strcmp($product_inf->hard_drive,'0') ===0) hidden @endif>
                                                            <th>Ổ cứng</th>
                                                            <td>{{$product_inf->hard_drive}}</td>
                                                        </tr>
                                                        <tr @if(strcmp($product_inf->graphic_card,'0') ===0) hidden @endif>
                                                            <th>Card đồ họa</th>
                                                            <td>{{$product_inf->graphic_card}}</td>
                                                        </tr>
                                                        <tr >
                                                            <th>Thương hiệu</th>
                                                            <td>Apple</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-6" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">
                                            <p>Chưa có bất kỳ đánh giá nào của khách hàng về sản phẩm này.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-7" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">
                                           <p>{{$product->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Sản phẩm liên quan</h3>
                </div>
            </div>
            <div class="row">
                @foreach($products_related as $product_related)
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        <a href="{{route('details',parameters:['id'=>$product_related->id])}}">
                            <div  class="product__item__pic set-bg" data-setbg="{{$product_related->get_url_image()}}">
                                {{--                <ul class="product__hover">--}}
                                {{--                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>--}}
                                {{--                    <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>So sánh</span></a>--}}
                                {{--                    </li>--}}
                                {{--                    <li><a href="{{route('details',parameters:['id'=>$product->id])}}"><img src="img/icon/search.png" alt=""></a></li>--}}
                                {{--                </ul>--}}
                            </div>
                        </a>
                        <div class="product__item__text">
                            <h6>{{$product_related->name}}</h6>
                            <a  class="add-cart shadow p-1 mb-5  rounded btn btn-outline-secondary" data-id_add_to_cart ="{{$product_related->id}}" data-name_add_to_cart ="{{$product_related->name}}">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>${{$product_related->price}}</h5>
                            <div class="product__color__select">
                                <label for="pc-1">
                                    <input type="radio" id="pc-1">
                                </label>
                                <label class="active black" for="pc-2">
                                    <input type="radio" id="pc-2">
                                </label>
                                <label class="grey" for="pc-3">
                                    <input type="radio" id="pc-3">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Section End -->
@endsection
