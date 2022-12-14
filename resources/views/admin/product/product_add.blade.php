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
                                <h3 class="card-title">Sản phẩm mới</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <form id="form-create-product" method="POST" action="{{route('admin-product-store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName">Tên sản phẩm</label>
                                        <input required type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Mô tả</label>
                                        <textarea  name="description" class="form-control" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Loại sản phẩm</label>
                                        <select name="type" class="form-control custom-select">
                                        @foreach($categories as $category)
{{--                                                <option selected="" disabled="">Select one</option>--}}
                                                <option value="{{ $category->id}}">{{$category->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputClientCompany">Giá sản phẩm</label>
                                        <input required type="number" min="0" name="price" class="form-control">
                                    </div>


                                    <div class="form-group">
                                        <label for="inputProductQuantity">Số lượng</label>
                                        <input required type="number" min="0" name="quantity" class="form-control">
                                    </div>

{{--                                    atribute of table product infor--}}

                                    <div class="form-group">
                                        <label for="display">Màn hình</label>
                                        <input  type="text" name="display" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="operating_system">Hệ điều hành</label>
                                        <input  type="text" name="operating_system" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="front_camera">Camera trước</label>
                                        <input  type="number" min="0" name="front_camera" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="rear_camera">Camrera sau</label>
                                        <input  type="text" name="rear_camera" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="cpu">CPU</label>
                                        <input  type="text" name="cpu" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="ram">Ram</label>
                                        <input  type="text" name="ram" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="ram">Rom</label>
                                        <input  type="number" min="0" name="rom" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="battery">Pin</label>
                                        <input  type="number" min="0" name="battery" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="security">Bảo mật</label>
                                        <input  type="text" name="security" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="charging_port">Cổng sạc</label>
                                        <input  type="text" name="charging_port" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="compatible">Tương thích</label>
                                        <input  type="text" name="compatible" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="sound_technology">Công nghệ âm thanh</label>
                                        <input  type="text" name="sound_technology" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="used_time">Thời gian sử dụng</label>
                                        <input  type="text" name="used_time" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="connect">Kết nối</label>
                                        <input  type="text" name="connect" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="weight">Khối lượng</label>
                                        <input  type="text" name="weight" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="brand">Nhãn hiệu</label>
                                        <input  type="text" name="brand" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="made_in">Sản xuất tại</label>
                                        <input  type="text" name="made_in" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="hard_drive">Ổ cứng</label>
                                        <input  type="text" name="hard_drive" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="graphic_card">Card đồ họa</label>
                                        <input  type="text" name="graphic_card" class="form-control">
                                    </div>
                                </div>
                            </form>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Thêm hình ảnh</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">


                                <table border="1" cellspacing="10px" cellpadding="10px">
                                    <tr>
                                        <td><label>Ảnh chính</label></td>
                                        <td><input form="form-create-product" name='image' type="file" onchange="readURL(this,'image_preview_main');" /></td>
                                        <td> <img height="100px" width="100px" id="image_preview_main" src="#" alt="your image" /></td>
                                    </tr>

                                    <tr>
                                        <td><label>Ảnh phụ</label></td>
                                        <td> <input form="form-create-product" name='image_1' type="file" onchange="readURL(this,'image_preview_1');" /></td>
                                        <td>  <img height="100px" width="100px" id="image_preview_1" src="#" alt="your image" /></td>
                                    </tr>

                                    <tr>
                                        <td><label>Ảnh phụ</label></td>
                                        <td> <input form="form-create-product" name='image_2' type="file" onchange="readURL(this,'image_preview_2')" /></td>
                                        <td>  <img height="100px" width="100px" id="image_preview_2" src="#" alt="your image" /></td>
                                    </tr>

                                    <tr>
                                        <td><label>Ảnh phụ</label></td>
                                        <td> <input form="form-create-product" name='image_3'  type="file" onchange="readURL(this,'image_preview_3')" /></td>
                                        <td>  <img height="100px" width="100px" id="image_preview_3" src="#" alt="your image" /></td>
                                    </tr>
                                </table>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="btn btn-secondary">Hủy</a>
                        <input form="form-create-product" type="submit" value="Thêm sản phẩm" class="btn btn-success float-right">
                    </div>
                </div>
            </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <script type="text/javascript">
        function readURL(input,id) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#'+id).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


    </script>


@endsection
