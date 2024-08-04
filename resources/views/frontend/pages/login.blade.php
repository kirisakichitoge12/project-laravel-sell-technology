<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="resources/frontend/assets/css/login.css">
    <title>Đăng nhập</title>
    <base href="{{ asset('') }}">
    <link rel="icon" href="https://shopfront-cdn.tekoapis.com/static/phongvu/logo.svg">
    <script src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css"></script>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="dang-ki" method="post" class="dangki">
            {{csrf_field()}}
                <h1>Tạo tài khoản</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>hoặc sử dụng email của bạn để đăng ký</span>
                <input type="text" placeholder="Name" name="name" id="name1" oninput="onchangevalForm()">
                <span id="nameval" style="align-items: start;"></span>
                <input type="email" placeholder="Email" name="email" id="email1" oninput="onchangevalForm()">
                <span id="emailval"></span>
                <input type="password" placeholder="Password" name="password" id="password1" oninput="onchangevalForm()">
                <span id="passwordval"></span>
                <button onclick="validateForm(event)">Đăng kí</button>
            </form>
        </div>
        <div class="form-container  sign-in">
            <form  action="dang-nhap" method="post" class="formlogin">
            {{csrf_field()}}
                <h1>Đăng nhập</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>hoặc sử dụng mật khẩu email của bạn</span>
                <input type="email" placeholder="E-mail" name="emaillg" id="emaillg"  oninput="onchangevalFormlg()">
                <span id="emaillogin" style="align-items: start;"></span>
                <input type="password" placeholder="Mật khẩu" name="passwordlg" id="passwordlg" oninput="onchangevalFormlg()">
                <span id="passwordlogin" style="align-items: start;"></span>
                <a href="#">Quên mật khẩu của bạn?</a>
                <button onclick="validateFormlogin(event)">Đăng nhập</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Chào mừng trở lại!</h1>
                    <p>Nhập thông tin cá nhân của bạn để sử dụng tất cả các tính năng của trang web</p>
                    <button class="hidden" id="login">Đăng nhập</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Chào bạn!</h1>
                    <p>Đăng ký với thông tin cá nhân của bạn để sử dụng tất cả các tính năng của trang web</p>
                    <button class="hidden" id="register">Đăng kí</button>
                </div>
            </div>
        </div>
    </div>
    
    @if(Session::has('matb') && Session::get('matb') == 'success')
        <script>
            document.addEventListener("DOMContentLoaded", function() {

                Swal.fire({
                    icon: 'success',
                    title: 'Thành công',
                    html: 'Đăng kí thành công',
                    customClass: {
                        title: 'swal-title',
                        htmlContainer: 'swal-text',
                        confirmButton: 'swal-button',
                        popup: 'custom-popup-class',
                    },
                    width: '300px',
                    height: '250px',
                    showConfirmButton: false,
                    timer: 2000
                });
            });
        </script>
    @elseif(Session::has('matb') && Session::get('matb') == 'error')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var message = "{{ Session::get('noidung') }}";

                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi',
                    text: message,
                    customClass: {
                        title: 'swal-title',
                        htmlContainer: 'swal-text',
                        confirmButton: 'swal-button',
                        popup: 'custom-popup-class',
                    },
                    width: '300px',
                    height: '250px',
                    showConfirmButton: false,
                    timer: 2000
                });
            });
        </script>
    @endif
    <script>
        function validateForm(event) {
            event.preventDefault(); // Ngăn chặn submit form mặc định

            // Lấy giá trị của các input
            var name = document.getElementById("name1").value;
            var email = document.getElementById("email1").value;
            var password = document.getElementById("password1").value;

            var valid = true;

            // Kiểm tra định dạng email
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                document.getElementById("emailval").innerText = "Email không hợp lệ";
                document.getElementById("emailval").style.color = "rgb(72, 152, 214)";
                valid = false;
            } else {
                document.getElementById("emailval").innerText = "";
              
            }

            // Kiểm tra độ dài mật khẩu
            if (password.length < 8) {
                document.getElementById("passwordval").innerText = "Mật khẩu phải có ít nhất 8 kí tự";
                document.getElementById("passwordval").style.color = "rgb(72, 152, 214)";
                valid = false;
            } else {
                document.getElementById("passwordval").innerText = "";
            }

            // Kiểm tra độ dài tên
            if (name.length < 6) {
                document.getElementById("nameval").innerText = "Tên phải có ít nhất 6 kí tự";
                document.getElementById("nameval").style.color = "rgb(72, 152, 214)";
                valid = false;
            } else {
                document.getElementById("nameval").innerText = "";
            }

            // Nếu mọi thứ đều hợp lệ, submit form
            if (valid) {
                document.querySelector('.dangki').submit();
            }
        }


        function onchangevalForm() {

            // Lấy giá trị của các input
            var name = document.getElementById("name1").value;
            var email = document.getElementById("email1").value;
            var password = document.getElementById("password1").value;

            var valid = true;

            // Kiểm tra định dạng email
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                document.getElementById("emailval").innerText = "Email không hợp lệ";
                document.getElementById("emailval").style.color = "rgb(72, 152, 214)";
                valid = false;
            } else {
                document.getElementById("emailval").innerText = "";
              
            }

            // Kiểm tra độ dài mật khẩu
            if (password.length < 8) {
                document.getElementById("passwordval").innerText = "Mật khẩu phải có ít nhất 8 kí tự";
                document.getElementById("passwordval").style.color = "rgb(72, 152, 214)";
                valid = false;
            } else {
                document.getElementById("passwordval").innerText = "";
            }

            // Kiểm tra độ dài tên
            if (name.length < 6) {
                document.getElementById("nameval").innerText = "Tên phải có ít nhất 6 kí tự";
                document.getElementById("nameval").style.color = "rgb(72, 152, 214)";
                valid = false;
            } else {
                document.getElementById("nameval").innerText = "";
            }
        }


        function validateFormlogin(event) {
            event.preventDefault(); // Ngăn chặn submit form mặc định

            // Lấy giá trị của các input
            var email = document.getElementById("emaillg").value;
            var password = document.getElementById("passwordlg").value;

            var valid = true;

            // Kiểm tra định dạng email
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                document.getElementById("emaillogin").innerText = "Email không hợp lệ";
                document.getElementById("emaillogin").style.color = "rgb(72, 152, 214)";
                valid = false;
            } else {
                document.getElementById("emaillogin").innerText = "";
              
            }

            // Kiểm tra độ dài mật khẩu
            if (password.length < 8) {
                document.getElementById("passwordlogin").innerText = "Mật khẩu phải có ít nhất 8 kí tự";
                document.getElementById("passwordlogin").style.color = "rgb(72, 152, 214)";
                valid = false;
            } else {
                document.getElementById("passwordlogin").innerText = "";
            }
            // Nếu mọi thứ đều hợp lệ, submit form
            if (valid) {
                document.querySelector('.formlogin').submit();
            }
        }

        
        function onchangevalFormlg() {

            // Lấy giá trị của các input
            var email = document.getElementById("emaillg").value;
            var password = document.getElementById("passwordlg").value;

            var valid = true;

            // Kiểm tra định dạng email
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                document.getElementById("emaillogin").innerText = "Email không hợp lệ";
                document.getElementById("emaillogin").style.color = "rgb(72, 152, 214)";
                valid = false;
            } else {
                document.getElementById("emaillogin").innerText = "";
              
            }

            // Kiểm tra độ dài mật khẩu
            if (password.length < 8) {
                document.getElementById("passwordlogin").innerText = "Mật khẩu phải có ít nhất 8 kí tự";
                document.getElementById("passwordlogin").style.color = "rgb(72, 152, 214)";
                valid = false;
            } else {
                document.getElementById("passwordlogin").innerText = "";
            }
            // Nếu mọi thứ đều hợp lệ, submit form
        }
    
  </script>
    <script src="resources/frontend/assets/js/login.js"></script>
</body>

</html> 