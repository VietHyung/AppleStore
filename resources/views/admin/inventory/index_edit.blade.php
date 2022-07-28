@extends('admin.master')

@section('content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
  
        <!-- /.content-header -->

        <!-- Main content -->

        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Product {{$product->name}}</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <form id="form-create-product" method="POST" action="{{route('admin-inventory-update',parameters: ['id'=>$product->id])}}" enctype="multipart/form-data">
                            @csrf

                                <div class="form-group">
                                    <label for="graphic_card">Số lượng hiện có</label>
                                    <input value="{{$product->quantity}}" type="text" name="quantity" class="form-control">
                                </div>

                        </form>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <div class="row">
                <div class="col-12">

                    <input form="form-create-product" type="submit" value="Update product" class="btn btn-success float-center">
                </div>
            </div>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->




@endsection
