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
                    <h3 class="card-title">Kho hàng</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Tìm kiếm ...">

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
                            <th>ID</th>
                            <th>Sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Số lượng còn lại</th>
                            <th>Số lượng đã bán</th>
                            <th>Cập nhật</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=0 ?>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td><img height="100px" width="100px" src="{{$product->get_url_image()}}"></td>

                                <td>{{$product->quantity}}</td>
                                <td>{{$total_qty[$i++]}}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{route('admin-inventory-edit',parameters: ['id'=>$product->id])}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Cập nhật kho
                                    </a>
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

@endsection
<!-- ./wrapper -->


