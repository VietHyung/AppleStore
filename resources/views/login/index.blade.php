<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css" type="text/css">
</head>
<body>
    <div class="main">
        <form method="POST" class="form" id="login-form" action="{{route('postLogin')}}">
            @csrf
            <h3 class="heading">ĐĂNG NHẬP</h3>
            <p class="desc">Tham gia để có thông báo mới nhất ! ❤️</p>
            
            <div class="spacer"></div>
            
            <div class="form-group">
                <label for="username" class="form-label">Tên đăng nhập</label>
                <input id="username" name="usernamein" rules="required" type="text" placeholder="VD: Việt Hưng" class="form-control">
                <span class="form-message"></span>
            </div>
            
            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input id="password" name="passwordin" rules="required|min:3" type="password" placeholder="Nhập mật khẩu" class="form-control">
                <span class="form-message"></span>
            </div>
            <button class="form-submit" style="font-size:20px">Đăng nhập</button>
            <br>
            <br>
            @if(isset($check))
                <div style="color:red;font-size:13px" role="alert">
                    Đăng nhập sai !!!
                </div>
            @endif
            <br>
            <br>
            <p>Bạn chưa có tài khoản ?  <a style="color:orange;font-weight:bold;text-decoration:none; font-size:12px" href="{{asset('../register')}}">Đăng ký</a></p>
            <br>
            <br>
            <a style="text-decoration:none; font-size:12px" href="{{asset('../')}}">Quay lại trang chủ</a>
        </form>
    </div>

    <script src="js/login.js"></script>
    <script>
        var form = new Validator('#login-form');
        form.onsubmit = function(fomrData){
            console.log(fomrData);                                                                                                                          
        }
        
    </script>
</body>
</html>