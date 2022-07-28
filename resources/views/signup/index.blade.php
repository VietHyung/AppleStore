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
        <form method="POST" class="form" id="register-form" action="{{route('register')}}">
            @csrf
            <h3 class="heading">ĐĂNG KÝ</h3>
            <p class="desc">Hãy trở thành thành viên để nhận được những ưu đãi tốt nhất !!! ❤️</p>
            
            <div class="spacer"></div>
            
            <div class="form-group">
                <label for="username" class="form-label">Tên đăng nhập</label>
                <input id="username" name="username" rules="required" type="text" placeholder="VD: viethyung" class="form-control">
                <span class="form-message"></span>
            </div>
            
            <div class="form-group">
                <label for="fullname" class="form-label">Họ và tên</label>
                <input id="fullname" name="fullname" rules="required" type="text" placeholder="VD: Việt Hưng" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" name="email" rules="required" type="text" placeholder="VD: email@gmail.com" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input id="password" name="password" rules="required|min:3" type="text" placeholder="Nhập mật khẩu" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="confirmPassword" class="form-label">Nhập lại mật khẩu</label>
                <input id="confirmPassword" name="confirmPassword" rules="required" type="text" placeholder="Nhập lại mật khẩu" class="form-control">
                <span class="form-message"></span>
            </div>
            <button class="form-submit" style="font-size:20px">Đăng ký</button>
            <br>
            <br>
            <p>Bạn đã có tài khoản ?  <a style="color:orange;font-weight:bold;text-decoration:none; font-size:12px" href="{{asset('../login')}}">Đăng nhập</a></p>
            <br>
            <br>
            <a style="text-decoration:none; font-size:12px" href="{{asset('../')}}">Quay lại trang chủ</a>
        </form>
    </div>
    

    <script src="js/login.js"></script>
    <script>
        var form = new Validator('#register-form');
        form.onsubmit = function(fomrData){
            console.log(fomrData);                                                                                                                          
        }
        
    </script>
</body>
</html>