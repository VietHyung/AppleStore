@extends('admin.master')

@section('content')

    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Đơn hàng</h3>

                    <div class="card-tools">



                        <div class="input-group input-group-sm" style="width: 250px;">

                            <div  style="margin-right:50px;">

                            </div>

                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: auto;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>ID</th>
                            <th>Khách hàng</th>
                            <th>Tổng đơn hàng</th>
                            <th>Địa chỉ</th>
                            <th>Thanh toán qua</th>
                            <th>Trạng thái đơn</th>
                            <th>Thời gian tạo đơn</th>
                            <th>Xác nhận</th>
                            <th>Xem chi tiết</th>
                            <th>Hủy đơn</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $stt=1; ?>
                        @foreach($order_list as $item)
                            <tr>
                                <td>{{$stt++}}</td>
                                <td>{{$item->id_order}}</td>
                                <td>{{$item->fullname}}</td>
                                <td>{{$item->total_price}}</td>
                                <td >{{$item->address}}</td>
                                <td>{{$item->payment_method}}</td>

                                <td>@if($item->status  === 0) {{"Đã hủy đơn"}} @elseif($item->status === 1) {{"Chờ xác nhận"}} @elseif($item->status === 2) {{"Đã xác nhận"}} @elseif($item->status === 3) {{"Đã thanh toán"}} @endif </td>

                                <td>{{$item->created_at}}</td>
                                <td>
                                    @if($item->status === 3)
                                        <div>{{"Đã thanh toán"}}</div>
                                    @elseif($item->status === 0)
                                        <div>{{"Đã hủy"}}</div>
                                    @else
                                    <button class="btn btn-info btn-sm" href="">
                                        <i class="fas fa-pencil-alt">
                                            <a href="{{route('admin-update-status-bill',parameters:['id'=>$item->id_order, 'status' =>$item->status])}}"class="btn btn-">
                                                @if($item->status === 1) {{"Xác nhận"}} @elseif($item->status === 2) {{"Hoàn thành"}} @endif
                                            </a>

                                        </i>

                                    </button>
                                    @endif

                                </td>


                                <td>  <button   class=" btn btn-danger btn-sm">
                                        <i class="fas fa-view"></i>
                                        <a href="{{route('admin-detail-bill',parameters:['id'=>$item->id_order])}}"class="btn btn-">View</a>
                                    </button></td>
                                <td>

                                    @if($item->status === 1)
                                    <button onclick="return window.confirm('Bạn chắc chắn muốn hủy đơn hàng này')"  data-id=""  class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash">
                                        </i>
                                        <a  href="{{route('admin-destroy-status-bill',parameters:['id'=>$item->id_order, 'status' =>$item->status])}}"class="btn btn-"> Hủy đơn hàng</a>

                                    </button>
                                        @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <script src="{{asset("js/jquery-3.3.1.min.js")}}"></script>
    <script src="{{asset("js/bootstrap.min.js")}}"></script>
    <script src="{{asset("js/jquery.nice-select.min.js")}}"></script>
    <script src="{{asset("js/jquery.nicescroll.min.js")}}"></script>
    <script src="{{asset("js/jquery.magnific-popup.min.js")}}"></script>
    <script src="{{asset("js/jquery.countdown.min.js")}}"></script>
    <script src="{{asset("js/jquery.slicknav.js")}}"></script>
    <script src="{{asset("js/mixitup.min.js")}}"></script>
    <script src="{{asset("js/owl.carousel.min.js")}}"></script>
    <script src="{{asset("js/main.js")}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            $(".btn_click_delete").click(function() {
                let btn_delete = $(this);
                let id = $(this).data('id');
                var r = confirm("Bạn có chắc chắn muốn xóa sản phẩm này không ?");
                if (r == true) {
                    $.ajax({
                        url: '{{route('admin-product-delete')}}',
                        type: 'GET',
                        data: {id}
                    }).done(function () {
                        let parent_tr = btn_delete.parents('tr');
                        parent_tr.remove();
                    }).fail(function () {
                        alert("Xóa sản phẩm thất bại ");
                    });
                } else {
                    //x = "You pressed Cancel!";
                }


            });
        });
    </script>
@endsection
<!-- ./wrapper -->


