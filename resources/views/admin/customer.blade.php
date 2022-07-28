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
                    <h3 class="card-title">Khách hàng</h3>

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
                            <th>Tên tài khoản</th>
                            <th>Họ và tên</th>
                            <th>Quyền</th>
                            <th>Email</th>
                            <th>Trạng thái</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->fullname}}</td>
                                <td>
                                    @if($user->lv ===1 )
                                        {{'Admin'}}
                                    @elseif($user->lv ===15)
                                        {{'Staff'}}
                                    @else
                                        {{'Customer'}}
                                    @endif
                                </td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->status}}</td>
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


