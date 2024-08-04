<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Internship</title>  
  <base href="{{ asset('') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="icon" href="https://shopfront-cdn.tekoapis.com/static/phongvu/logo.svg">
  <link rel="stylesheet" href="resources/frontend/assets/css/detail.css">
  <link rel="stylesheet" href="resources/frontend/assets/css/search.css">
  <link rel="stylesheet" href="resources/frontend/assets/css/paginate.css">
  <link rel="stylesheet" href="resources/frontend/assets/bootstrap/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css"></script>
  
 <style>
   link[rel="icon"] {
            width: 100px; /* Đặt chiều rộng của icon */
            height: 100px; /* Đặt chiều cao của icon */
        }
    @media (max-width: 768px) {
    .banner02 {
      display: none;
    }
    .carousel-item > img{
      width:100%;
    }
    .banner{
      display: none;
  
}
.carousel-inner{
      position: relative;
      z-index:0;
      
  }
  }
  .main{
      background-color: #f8f8fc;
      margin: 0px;
      padding: 0px;
  }
  .position-relative {
          position: relative;
      }

      .search-input {
          padding-right: 40px; /* Để chứa nút search */
          width:245px;
          
      }

      .search-button {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          width: 40px; /* Chiều rộng của nút */
          border: none;
          background: none;
          cursor: pointer;
      
      }

      .search-icon {
          color: #aaa;
      }
      .dangnhap {
          text-decoration: none ;
          font-weight: 100;
          font-size: 20px;
          margin-bottom: 5px;
          color:rgb(130, 134, 158);
      }

      .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      width: 300px;
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      padding: 12px 16px;
      z-index: 1;
}

.content:hover .dropdown-content {
  display: block;
}
.silde{
  position: relative;
}
.banner{
  display: block;
  position: absolute;
  bottom:-50px;
  z-index:99;
}

@media (max-width: 768px) {
    .banner{
     display: none;

     
}
.carousel-item{
      width:100%;
      height:100%;
      
    }
}
.banner01{
  max-width:240px;
  max-height:150px;
  transition: 0.5s;
}
.banner01:hover
{
  transform:scale(1.2);
  box-shadow: 2px 2px 2px #f3f2f2;
  z-index: 2;
}

@media (max-width:1200px) {
    .banner01{
      max-width:200px;
      max-height:140px;
     
    }
}

.products{
  display: block;
  background-image: url("resources/frontend/assets/img/bg01.jpg");
  background-size: cover;
  background-repeat: none;
  min-height: 350px;
}

  .nav-link.active {
      background-color: rgb(104, 14, 251) !important;
      color: rgb(232, 229, 229); /* Thay đổi màu chữ nếu cần */
  }
  .nav-tabs .nav-link {
  border-bottom: none;
}
.card-text,
.price,
.old-price,
.discount {
  margin: 0; /* Xóa margin */
  padding: 0; /* Xóa padding */
}
@media (max-width:500px) {
  .products{
  min-height: 350px;
  background-image: none;
}
}
.carousel-control-next-icon {
      color: #343a40 !important; /* Thay đổi màu sắc tại đây */
  }
#countdown {
font-size: 24px;
font-weight: bold;
color: rgb(243, 234, 234);
}
.time{
  color: rgb(246, 241, 241);
  padding:0px;margin: 0px;
  font-size: large;
  font-weight:bold;
}
@media (max-width:500px) {
#countdown {
color: rgb(71, 70, 70) !important;
}
.time{
color: rgb(71, 70, 70) !important;
font-family: 'Times New Roman', Times, serif;
}

}
.sale{
  display: block;
  background-image: url("resources/frontend/assets/img/bg02.jpg");
  background-size: cover;
  background-repeat: none;
  min-height: 350px;
}
.salenow{
    display:block;
    padding:var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
    font-size:var(--bs-nav-link-font-size);font-weight:var(--bs-nav-link-font-weight);
    color:var(--bs-nav-link-color);text-decoration:none;background:0 0;border:0;
    transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
    border-bottom: none;
}
.salenow.active {
      background-color: rgb(26, 28, 30) !important;
      color: #f9f9f9; /* Thay đổi màu chữ nếu cần */
  }

.salenow.active .sale2 {
  color:aliceblue;
}
.sale2{
 color: rgb(78, 76, 76);
 font-weight: bold;
 font-size: x-large;
 font-family: 'Times New Roman', Times, serif;
 text-align: center;
 color:#343a40;
}

@media (max-width:500px) {
.sale{
  background-image: none;
}
.sale2 { 
  font-size: large;
}
}
.no-p-m {
  padding: 0 !important;
  margin: 0 !important;
}
.sale2new{
  width:588px;
}
@media (max-width:1250px) {

.sale2new { 
  width:100%;
}

}

.laptop{
  min-height: 350px;
  max-width:228px;
  
  background-color: rgb(255, 255, 255);
}

@media (max-width:1250px) {

.laptop { 
  width:200px;
}
}
html, body {
  margin: 0;
  padding: 0;
}
.centered-row {
      display: flex;
      justify-content: center;
  }
.bnlaptop{
  background-image: url("resources/frontend/assets/img/bnlt.jpg");
  background-repeat: none;
  background-size: cover;
}
.bnlk{
  background-image: url("resources/frontend/assets/img/bnlaptop.jpg");
  background-repeat: none;
  background-size: cover;
}
.bnmh{
  background-image: url("resources/frontend/assets/img/bannermanhinh.jpg");
  background-repeat: none;
  background-size: cover;
}
.bngaming{
  background-image: url("resources/frontend/assets/img/gaming.jpg");
  background-repeat: none;
  background-size: cover;
}
.bngd{
  background-image: url("resources/frontend/assets/img/diengd.png");
  background-repeat: none;
  background-size: cover;
}

.logolatop{
  background-color:rgb(255, 255, 255);
  max-width: 295px;
}
@media (max-width:1000px) {

.logolatop { 
  max-width:200px;
}
}
.contentcenter{
display: flex; 
justify-content: center;
align-items: center;
}
/*iphone 14 pro*/
@media (max-width:500px) {
.contentcenter{
display: flex; 
justify-content:left;
align-items: center;
margin-right: 0;
}
.laptop{
  min-height: 350px;
  max-width: 185px;
  background-color: rgb(255, 255, 255);
}
}
/*iphone 14 pro*/
@media (max-width:420px) {
.contentcenter{
display: flex; 
justify-content:left;
align-items: center;
margin-right: 0;
}
.laptop{
  min-height: 350px;
  max-width: 180px;
  background-color: rgb(255, 255, 255);
}
}
/* iphone 12pro*/
@media (max-width:400px) {
.contentcenter{
display: flex; 
justify-content:left;
align-items: center;
margin-right: 0;
}
.laptop{
  min-height: 350px;
  max-width: 167px;
  background-color: rgb(255, 255, 255);
}
}
/* sam sung S8+*/
@media (max-width:370px) {
.laptop{
  min-height: 350px;
  max-width: 154px;
  background-color: rgb(255, 255, 255);
}
.contentcenter{
display: flex; 
justify-content:left;
align-items: center;
margin-right: 0;
}
}
@media (max-width:1200px) {
.contentcenter{
display: flex; 
justify-content:left;
align-items: center;
margin-right: 0;
}
}

.image-container {
display: inline-block;
overflow: hidden; /* Đảm bảo hình ảnh không bị tràn ra ngoài khung */
}

.image-container img {
display: block;
transition: transform 0.3s ease; /* Tạo hiệu ứng mượt mà */
}

.image-container:hover img {
transform: scale(1.1); /* Phóng to hình ảnh lên 1.1 lần khi hover */
}
@media (max-width:1200px) {
.danhmucne{
display: none;
}
}
/*css detail*/
.imgsmall :hover{
  border: 2px solid rgb(181, 242, 236); 
}
.expanded {
  width: 100vw;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 9999;
}
.dashed-line {
  border-style: dashed; /* Thiết lập kiểu đường viền là dashed */
}

/* CSS cho danh sách gạch đầu hàng */
.dashed-list {
      list-style-type: none; /* Loại bỏ ký hiệu danh sách */
      padding-left: 0; /* Loại bỏ khoảng cách bên trái */
  }

  .dashed-list > li {
      position: relative; /* Thiết lập vị trí tương đối */
  }

  .dashed-list > li::before {
      content: ""; /* Thêm nội dung trước mỗi mục trong danh sách */
      position: absolute; /* Thiết lập vị trí tuyệt đối */
      left: -20px; /* Khoảng cách từ mép trái của mục danh sách */
      top: 50%; /* Đặt nét gạch ở giữa chiều cao của mục danh sách */
      transform: translateY(-50%); /* Dịch chuyển nét gạch xuống 50% chiều cao */
      width: 6px; /* Chiều rộng của nét gạch */
      height: 1px; /* Chiều cao của nét gạch */
      background-color: black; /* Màu sắc của nét gạch */
  }
  .container {
  position: relative;
}

.closeicon {
  display: none;
  position: absolute;
  top: 0px; /* Điều chỉnh vị trí top theo nhu cầu */
  right: 0px; /* Điều chỉnh vị trí right theo nhu cầu */
  z-index: 99999;
}
.video{
  display: block;
}
@media (max-width:1200px) {
.video{
display: none;
}
}
/* CSS */
.btn.active {
  border: 2px solid rgb(181, 242, 236);
}
.btnrom .active {
  border: 2px solid rgb(181, 242, 236);
}
.chitietsp{
  text-decoration: none;
  color:rgb(33, 37, 41);
}
/*
giỏ hàng
 */
.table-bordered td {
    border: none;
}  
.table-bordered tr {
    border: none;
}  
.quantity-field {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 120px; 
  height: 40px;
  margin: 0 auto;    
}

.quantity-field .value-button{ 
  border: 1px solid #ddd;
  margin: 0px;
  width: 40px;
  height: 100%;   
  padding: 0;
  background: #eee; 
  outline: none;
  cursor: pointer;
}

.quantity-field .value-button:hover {
  background: rgb(230, 230, 230);
}

.quantity-field .value-button:active{
  background: rgb(210, 210, 210);
}

.quantity-field .decrease-button {
  margin-right: -4px;
  border-radius: 8px 0 0 8px;
}

.quantity-field .increase-button {
  margin-left: -4px;
  border-radius: 0 8px 8px 0;
}
 
.quantity-field .number{
  display: inline-block;
  text-align: center;
  border: none;
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  margin: 0px;
  width: 40px;
  height: 100%;
  line-height: 40px;
  font-size: 11pt;
  box-sizing: border-box; 
  background: white;
  font-family: calibri;
}

.quantity-field .number::selection{
  background: none;
}

.buttonconnect{
            width:100%;
            height:50px;
            border: 1px solid rgb(109, 219, 227) ;
            border-radius: 11px;
            margin-bottom: 15px;
            background-color: rgb(239, 244, 245);
          
            
        }
.overflow-auto {
max-height: 300px; /* Đặt chiều cao tối đa */
overflow-y: auto; /* Cho phép cuộn nếu nội dung tràn */
}
.overflow-auto::-webkit-scrollbar {
    width: 10px; /* Đặt chiều rộng của thanh trượt */
}
.preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.loader {
    border: 8px solid #f3f3f3;
    border-top: 8px solid #3498db;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

#main-content {
    display: none;
}
/* Đặt màu nền của modal-content trong suốt */
.modalhechill-content {
    background: transparent;
    border: none;
  }

  /* Đặt modal-backdrop để tạo nền tối */
  .modalhechill-backdrop.show {
    opacity: 0.2; /* Điều chỉnh độ mờ của nền tối (từ 0 đến 1) */
  }

  /* Đặt chiều rộng tối đa và chiều cao tối đa của hình ảnh để phù hợp với màn hình */
  .modalhechill-content img {
    max-width: 100%;
    max-height: 80vh; /* Điều chỉnh chiều cao tối đa theo nhu cầu của bạn */
    margin: auto; /* Căn giữa hình ảnh */
  }
  /* thong tin van chuyen */
.line-with-icon {
    display: flex;
    align-items: center;
    margin: 20px 0;
}

.line {
    flex: 1;
    height: 5px;
    background-color: rgb(77, 203, 113);
}
.linenonecolor{
    flex: 1;
    height: 5px;
    min-width: 50px;
    background-color: rgb(231, 231, 231);
}
.icon {
    margin: 0 10px;
}
.coloricon
{
  color: rgb(77, 203, 113);
}
/* thanh toan */
*,
*::after,
*::before{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

:root{
    --blue-color: #0c2f54;
    --dark-color: #535b61;
    --white-color: #fff;
}

ul{
    list-style-type: none;
}
ul li{
    margin: 2px 0;
}

/* text colors */
.text-dark{
    color: var(--dark-color);
}
.text-blue{
    color: var(--blue-color);
}
.text-end{
    text-align: right;
}
.text-center{
    text-align: center;
}
.text-start{
    text-align: left;
}
.text-bold{
    font-weight: 700;
}
/* hr line */
.hr{
    height: 1px;
    background-color: rgba(0, 0, 0, 0.1);
}
/* border-bottom */
.border-bottom{
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
.invoice-wrapper{
    min-height: 100vh;
    background-color: rgba(0, 0, 0, 0.1);
    padding-top: 20px;
    padding-bottom: 20px;
}
.invoice{
    max-width: 850px;
    margin-right: auto;
    margin-left: auto;
    background-color: var(--white-color);
    padding: 70px;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    min-height: 920px;
}
.invoice-head-top-left img{
    width: 130px;
}
.invoice-head-top-right h3{
    font-weight: 500;
    font-size: 27px;
    color: var(--blue-color);
}
.invoice-head-middle, .invoice-head-bottom{
    padding: 16px 0;
}
.invoice-body{
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    overflow: hidden;
}
.invoice-body table{
    border-collapse: collapse;
    border-radius: 4px;
    width: 100%;
}
.invoice-body table td, .invoice-body table th{
    padding: 12px;
}
.invoice-body table tr{
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
.invoice-body table thead{
    background-color: rgba(0, 0, 0, 0.02);
}
.invoice-body-info-item{
    display: grid;
    grid-template-columns: 80% 20%;
}
.invoice-body-info-item .info-item-td{
    padding: 12px;
    background-color: rgba(0, 0, 0, 0.02);
}
.invoice-foot{
    padding: 30px 0;
}
.invoice-foot p{
    font-size: 12px;
}
.invoice-btns{
    margin-top: 20px;
    display: flex;
    justify-content: center;
}
.invoice-btn{
    padding: 3px 9px;
    color: var(--dark-color);
    font-family: inherit;
    border: 1px solid rgba(0, 0, 0, 0.1);
    cursor: pointer;
}

.invoice-head-top, .invoice-head-middle, .invoice-head-bottom{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    padding-bottom: 10px;
}

@media screen and (max-width: 992px){
    .invoice{
        padding: 40px;
    }
}

@media screen and (max-width: 576px){
    .invoice-head-top, .invoice-head-middle, .invoice-head-bottom{
        grid-template-columns: repeat(1, 1fr);
    }
    .invoice-head-bottom-right{
        margin-top: 12px;
        margin-bottom: 12px;
    }
    .invoice *{
        text-align: left;
    }
    .invoice{
        padding: 28px;
    }
}

.overflow-view{
    overflow-x: scroll;
}
.invoice-body{
    min-width: 600px;
}

@media print{
    .print-area{
        visibility: visible;
        width: 100%;
        position: absolute;
        left: 0;
        top: 0;
        overflow: hidden;
    }

    .overflow-view{
        overflow-x: hidden;
    }

    .invoice-btns{
        display: none;
    }
}
  </style>
    @yield('css')
</head>
<body>
<!-- <div class="preloader">
        <div class="loader"></div>
    </div> -->
<!-- Modal -->
<div class="modal modalhechill fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content modalhechill-content ">
      <div class="modal-header border-0">
        <!-- Sửa đổi data-bs-dismiss thành "modal" để trùng khớp với id của modal -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="resources/frontend/assets/img/bannerhechill.png" class="img-fluid">
      </div>
    </div>
  </div>
</div>

    <div class="main">
    
    <!--header-->

        @include("frontend/layouts/header")

    <!--endheader-->  

    <!---content--->
  
        @yield("content")   


        @include("frontend/layouts/footer")
  </div>
  
 <!---footer--->


<!---end footer--->

@yield("script") 
<script src="resources/frontend/assets/js/bootstrap.js"></script>
<script src="resources/frontend/assets/js/giohang.js"></script>
<script src="resources/frontend/assets/js/search.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


@if(Session::has('matb') && Session::get('matb') == 'success')
        <script>
            document.addEventListener("DOMContentLoaded", function() {

                Swal.fire({
                    icon: 'success',
                    title: 'Thành công',
                    html: 'Sản phẩm đã được thêm vào giỏ hàng',
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
        @elseif(Session::has('matb') && Session::get('matb') == 'successdathang')
        <script>
            document.addEventListener("DOMContentLoaded", function() {

                Swal.fire({
                    icon: 'success',
                    title: 'Đặt hàng thành công',
                    html: 'Vui lòng thanh toán khi nhận hàng',
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

$(document).ready(function() {
    // Hàm để hiển thị modal
    function showModal() {
        var myModal = new bootstrap.Modal(document.getElementById('exampleModalToggle'), {
            backdrop: 'static',
            keyboard: false
        });
        myModal.show();
    }

   
    // Kiểm tra thời gian lưu trữ trong localStorage
    var lastShownTime = localStorage.getItem('lastShownTime');
    var currentTime = new Date().getTime();

    if (lastShownTime === null || currentTime - lastShownTime > 1000*60*30) {
        // Hiển thị modal nếu chưa có thời gian lưu trữ hoặc đã qua 30 phút
        showModal();
        localStorage.setItem('lastShownTime', currentTime);
    }

    // Lắng nghe sự kiện click trên nút đóng (x)
    $('.modal-header .btn-close').click(function() {
        hideModal(); // Gọi hàm để ẩn modal khi nhấn vào nút đóng
    });
});

  document.addEventListener("DOMContentLoaded", function() {
    // When the DOM content is loaded, hide the preloader and display the main content
    var preloader = document.querySelector('.preloader');
    var mainContent = document.getElementById('main-content');

    preloader.style.display = 'none';
    mainContent.style.display = 'block';
});

    
              
    // Lệnh sau sẽ kích hoạt tự động chuyển slide mỗi 3 giây
    var myCarousel = document.getElementById('carouselExampleIndicators')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 3000
    });
     // Lấy danh sách các tab
     var tabs = document.querySelectorAll('.nav-link');

// Thêm sự kiện click cho mỗi tab
tabs.forEach(function(tab) {
    tab.addEventListener('click', function() {
        // Loại bỏ lớp 'active' từ tất cả các tab trước khi thêm vào tab mới
        tabs.forEach(function(t) {
            t.classList.remove('active');
        });

        // Thêm lớp 'active' cho tab hiện tại
        this.classList.add('active');
    });
});

// Thiết lập thời gian kết thúc đếm ngược (24 giờ tính từ thời điểm hiện tại)
var endTime = new Date();
endTime.setHours(endTime.getHours() + 20); // Thêm 24 giờ

var countdownElement = document.getElementById('countdown');

function updateCountdown() {
    var currentTime = new Date();
    var difference = endTime - currentTime;

    if (difference <= 0) {
        clearInterval(timer);
        countdownElement.innerHTML = 'Hết giờ!';
    } else {
        var hours = Math.floor(difference / (1000 * 60 * 60));
        var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((difference % (1000 * 60)) / 1000);

        hours = (hours < 10) ? '0' + hours : hours;
        minutes = (minutes < 10) ? '0' + minutes : minutes;
        seconds = (seconds < 10) ? '0' + seconds : seconds;

        countdownElement.innerHTML = hours + ':' + minutes + ':' + seconds;
    }
}

// Cập nhật đồng hồ đếm ngược mỗi giây
var timer = setInterval(updateCountdown, 1000);


document.addEventListener('DOMContentLoaded', function () {
    var tab1 = document.getElementById('tab1-tab');
    var tab2 = document.getElementById('tab2-tab');

    tab1.addEventListener('click', function() {
        tab1.classList.add('active');
        tab2.classList.remove('active');
    });

    tab2.addEventListener('click', function() {
        tab2.classList.add('active');
        tab1.classList.remove('active');
    });
});



</script>
</body>
</html>
