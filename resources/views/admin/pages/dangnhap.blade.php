<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng nhập</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <style>
        * {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: url(resources/frontend/assets/img/banner01.jpg) no-repeat;
  background-size: cover;
  background-position: center;
}

.container {
  width: 420px;
  background: transparent;
  border: 2px solid rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(18px);
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  color: #fff;
  border-radius: 10px;
  padding: 30px 40px;
}

.container h1 {
  font-size: 36px;
  text-align: center;
}

.container .input-box {
  position: relative;
  width: 100%;
  height: 50px;
  margin: 30px 0px;
}

.input-box input {
  width: 100%;
  height: 100%;
  background: transparent;
  border: none;
  outline: none;
  border: 2px solid rgb(255, 255, 255, 0.2);
  border-radius: 5px;
  font-size: 16px;
  color: #fff;
  padding: 20px 45px 20px 20px;
}

.input-box input::placeholder {
  color: #fff;
}

.input-box i {
  position: absolute;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 20px;
}

.container .remember-forgot {
  display: flex;
  justify-content: space-between;
  font-size: 14.5px;
  margin: -15px 0px 15px;
}

.remember-forgot label input {
  color: #fff;
  margin-right: 3px;
}

.remember-forgot a {
  color: #fff;
  text-decoration: none;
}

.remember-forgot a:hover {
  text-decoration: underline;
}

.container .btn {
  width: 100%;
  height: 45px;
  background: #fff;
  border: none;
  outline: none;
  border-radius: 5px;
  box-decoration-break: 0px 0px 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  font-size: 16px;
  font-weight: 600;
  color: #333;
}

.container .register-link {
  font-size: 14.5px;
  text-align: center;
  margin: 20px 0px 15px;
}

.register-link p a {
  color: #fff;
  text-decoration: none;
  font-weight: 600;
}

.register-link p a:hover {
  text-decoration: underline;
}

    </style>
  </head>
  <body>
    <div class="container">
    <div class="panel-heading">
                @if(Session::has('matb')) 
                @if(Session::get('matb')=='0')
                <div class="alert alert-danger">
                  {{Session::get('noidung')}}
                </div>
                @endif
                @endif
          </div>
      <form action="dang-nhap-admin" method="post">
        <h1>Đăng nhập</h1>
        {{csrf_field()}}
        <div class="input-box">
          <input type="text" placeholder="email" name="email" required />
          <!-- <i class="bx bxs-user"></i> -->
        </div>
        <div class="input-box">
          <input type="password" placeholder="password" name="password" required />
          <!-- <i class="bx bxs-lock-alt"></i> -->
        </div>

        <div class="remember-forgot">
          <label><input type="checkbox" /> Nhớ mật khẩu</label>
          <a href="#">Quên mật khẩu?</a>
        </div>

        <button type="submit" class="btn">Đăng nhập</button>

        <div class="register-link">
          <p>Bạn đã có tài khoản? <a href="#">Đăng ký !</a></p>
        </div>
      </form>
    </div>
  </body>
</html>
