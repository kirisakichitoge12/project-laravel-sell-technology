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


    <div class="container active" id="container">
            
        <div class="form-container sign-up">
            <form action="xac-nhan" method="post" class="xacnhan">
            {{csrf_field()}}
                <h1>Nhập mã xác nhận của bạn</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <input type="text" placeholder="Mã xác nhận" name="code" id="name1" oninput="onchangevalForm()">
                <span id="nameval" style="align-items: start;"></span>
                <button onclick="validateForm(event)">Xác nhận</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Chào mừng trở lại!</h1>
                    <p>Nhập thông tin cá nhân của bạn để sử dụng tất cả các tính năng của trang web</p>
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
                var name = "{{ Session::get('name') }}";
                var age = "{{ Session::get('age') }}";

                Swal.fire({
                    icon: 'success',
                    title: 'Thành công',
                    html: '<b>Name:</b> ' + name + '<br>' + '<b>Age:</b> ' + age,
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

            var valid = true;

            // Kiểm tra độ dài tên
            if (name.length < 5) {
                document.getElementById("nameval").innerText = "Mã xác nhận phải có 6 số";
                document.getElementById("nameval").style.color = "rgb(72, 152, 214)";
                valid = false;
            } else {
                document.getElementById("nameval").innerText = "";
            }

            // Nếu mọi thứ đều hợp lệ, submit form
            if (valid) {
                document.querySelector('.xacnhan').submit();
            }
        }


        function onchangevalForm() {

            // Lấy giá trị của các input
            var name = document.getElementById("name1").value;

            var valid = true;
            // Kiểm tra độ dài tên
            if (name.length < 5) {
                document.getElementById("nameval").innerText = "Mã xác nhận phải có 6 số";
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html> 