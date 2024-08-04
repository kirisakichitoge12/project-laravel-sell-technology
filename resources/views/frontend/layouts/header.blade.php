<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Cài đặt</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div>
            <div class="sidebar d-flex flex-column p-3">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
            <li class="nav-item dropdown">
                <a class="nav-link colorlink dropdown-toggle" style="color:rgb(64, 64, 64) !important;font-size: large;font-weight: 200;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>  
                Danh mục sản phẩm
                </a>
                <ul class="dropdown-menu"  style="border:none;width:100%;">
                 @foreach($danhmucsp as $danhmuc)
                  <li><a class="dropdown-item" href="danh-muc/{{$danhmuc->id}}">{{$danhmuc->name}}</a></li>
                  @endforeach
                  <li><hr class="dropdown-divider"></li>
                </ul>
              </li>
            </li>
            <li class="nav-item">
                <a style="color:rgb(64, 64, 64) !important;font-size: large;font-weight: 200;" href="{{route('profile')}}" data-toggle="collapse" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                </svg>
                Tài khoản
                </a>
            </li>
            <li class="nav-item">
                <a style="color:rgb(64, 64, 64) !important;font-size: large;font-weight: 200;" href="{{route('trangthaidonhang')}}" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                </svg>
                Đơn hàng của bạn
                </a>
            </li>
            <li class="nav-item">
                <a  style="color:rgb(64, 64, 64) !important;font-size: large;font-weight: 200;" href="#" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
                </svg>
                 Thông báo
                </a>
            </li>
            <li class="nav-item">
                <a style="color:rgb(64, 64, 64) !important;font-size: large;font-weight: 200;" href="#" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                </svg>
                Sản phẩm yêu thích
                </a>
            </li>
            <li class="nav-item">
                <a style="color:rgb(64, 64, 64) !important;font-size: large;font-weight: 200;" href="#" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                </svg>
                Liên hệ chúng tôi
                </a>
            </li>
            <li class="nav-item">
                <a style="color:rgb(64, 64, 64) !important;font-size: large;font-weight: 200;" href="{{route('dangxuat')}}" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-left-square" viewBox="0 0 16 16">
                 <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm10.096 8.803a.5.5 0 1 0 .707-.707L6.707 6h2.768a.5.5 0 1 0 0-1H5.5a.5.5 0 0 0-.5.5v3.975a.5.5 0 0 0 1 0V6.707z"/>
                </svg>
                Đăng xuất
                </a>
            </li>
        </ul>
    </div>
            </div>
          </div>
        </div>
     <!---banner-->
  <div class="banner02 container-fluid">
      <div class="row">
          <div class="col-lg-12 m-0 p-0">
              <a><img src="resources/frontend/assets/img/bn.jpg" class="img-fluid w-100" style="height:60px;"></a>
          </div>
      </div>
  </div>
  <!---endbanner-->
  
  <!---danhmuc-->
  <div class="danhmuc container-fluid" style="background-color: #00ccff;">
      <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <button class=" navbar-brand navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
             
              <div class="container">
                  <div class="row">
                      <div class="col-lg-2"></div>
                      <div class="col-lg-8">
                          <nav class="navbar navbar-expand-sm d-flex align-items-center justify-content-center p-0 ">
                              <div class="container-fluid">
                                <!-- Links -->
                                <ul class="navbar-nav">
                                  <li class="nav-item me-1">
                                    <a class="nav-link" href="#" style="color: white;"><i class="fa-solid fa-mobile-screen-button"></i><span class="sezi"> ĐIỆN THOẠI</span></a>
                                  </li>
                                  <li class="nav-item  me-1">
                                    <a class="nav-link" href="#" style="color: white;"><i class="fa-solid fa-laptop"></i><span class="sezi"> LAPTOP</span></a>
                                  </li>
                                  <li class="nav-item  me-1">
                                    <a class="nav-link" href="#" style="color: white;"><i class="fa-solid fa-tablet-screen-button"></i> <span class="sezi">PC GAMING</span></a>
                                  </li>
                                  <li class="nav-item  me-1">
                                    <a class="nav-link" href="#" style="color: white;"><i class="fa-brands fa-apple"></i><span class="sezi">MACBOOK</span></a>
                                  </li>
                                  <li class="nav-item  me-1">
                                    <a class="nav-link" href="#" style="color: white;" ><i class="fa-solid fa-computer"></i><span class="sezi">MÀN HÌNH</span></a>
                                  </li>
                                  <li class="nav-item  me-1">
                                    <a class="nav-link" href="#" style="color: white;"><i class="fa-solid fa-headphones-simple"></i><span class="sezi"> PHỤ KIỆN</span></a>
                                  </li>
                                  <li class="nav-item  me-1">
                                    <a class="nav-link" href="#" style="color: white;"><i class="fa-solid fa-rotate-right"></i><span class="sezi">BÀN PHÍM</span></a>
                                  </li>
                                  <li class="nav-item  me-1">
                                      <a class="nav-link" href="#" style="color: white;"><i class="fa-solid fa-rotate-right"></i><span class="sezi">CARD</span></a>
                                    </li>
                                  <li class="nav-item  me-1">
                                      <a class="nav-link" href="#" style="color: white;"><i class="fa-solid fa-rotate-right"></i><span class="sezi">BẢO TRÌ</span></a>
                                    </li>
                                </ul>
                              </div>
                            </nav>
                      </div>
                      <div class="col-lg-2"></div>
                  </div>
               
                
              </div>
  
  
            </div>
          </div>
        </nav>
  
        </div>
  <!--enddanhmuc-->
  
  
  
      <!---nav-->
      <div class="container-fluid sticky-top">
          <div class="row align-items-center "style="background-color:#FFFFFF;"> 
              <div class="col-lg-1"></div>
              <div class="col-lg-10">
                  <div class="row">
                      <div class="col-lg-8 col-4" >
                      <div class="row align-items-center">
                          <div class="col-lg-4">
                              <a href="{{route('pageshop')}}"><img src="resources/frontend/assets/img/logo-full.svg" style="width:240px;height:80px;"></a>
                          </div>
                          <div class="col-lg-8 d-flex">
                              <form action="tim-kiem" method="get" role="search">
                                  <div class="position-relative">
                                      <input class="form-control search-input" type="text" placeholder="Mua sắm nào " id="searchInput" name="filter[name]"  type="text" class="form-control" value="{{ request('filter.name') }}" >
                                      <input type="hidden" id="sort" name="sort" value="{{ request()->input('sort') }}" />
                                      <ul id="searchResults" style="display: none;"></ul>
                                      <button class="search-button" type="submit">
                                          <svg xmlns="http://www.w3.org/2000/svg"  height="16" fill="currentColor" class="bi bi-search search-icon" viewBox="0 0 16 16">
                                              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                          </svg>
                                      </button>
                                  </div>
                              </form>
                              <span style=" display: inline;" class="ms-2">
                                  <button class="btn" style="background-color: rgb(248,248,252);color:#aaa" name="danhmuc" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                      <svg fill="currentColor" viewBox="0 0 512 512" size="20" class="css-11md2ba" color="textSecondary" height="26" width="25" xmlns="http://www.w3.org/2000/svg"><title></title><line x1="88" y1="152" x2="424" y2="152" fill="none" stroke="#000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="48px"></line><line x1="88" y1="256" x2="424" y2="256" fill="none" stroke="#000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="48px"></line><line x1="88" y1="360" x2="424" y2="360" fill="none" stroke="#000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="48px"></line></svg>
                                    <span class="danhmucne">Danh mục sản phẩm</span>
                                  </button>
                              </span>
                          </div>
                      </div>
                      </div>
                      <div class="col-lg-4 d-flex align-items-center"> 
                                  @if(Auth::check())
                                  <span class="content ms-2">
                                      <a class="dangnhap"><span>{{Auth::user()->full_name}}</span></a>
                                      <div class="dropdown-content">
                                      <div class="selectlogin">
                                          <p>Xin chào,{{Auth::user()->full_name}}</p>
                                          <span class="ms-2">
                                              <button type="button" class="btn btn-outline-primary" style="width:120px;"><a href="{{route('profile')}}" style="text-decoration: none;color:black">Thông tin</a></button>
                                          </span>                                   
                                          <span class="ms-2">
                                              <button type="button" class="btn btn-outline-secondary"  style="width:120px;"><a href="{{route('dangxuat')}}" style="text-decoration: none;color:black">Đăng xuất</a></button>
                                          </span>
                                          <hr>
                                          Thông báo
                                      </div>
                                      </div>
  
                                  </span>
                                  @else
                                  <span class="ms-2">   
                                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                                      </svg> 
                                  </span>
                                  <span class="content ms-2">
                                      <a class="dangnhap">Đăng nhập</a>
                                      <div class="dropdown-content">
                                      <div class="selectlogin">
                                          <p>Xin chào,vui lòng đăng nhập</p>
                                          <span class="ms-2">
                                              <button type="button" class="btn btn-outline-primary" style="width:120px;"><a href="{{route('dangnhap')}}" style="text-decoration: none;color:black">Đăng nhập</a></button>
                                          </span>                                   
                                          <span class="ms-2">
                                              <button type="button" class="btn btn-outline-secondary"  style="width:120px;"><a href="{{route('dangki')}}" style="text-decoration: none;color:black">Đăng kí</a></button>
                                          </span>
                                          <hr>
                                          Trợ giúp ?
                                      </div>
                                      </div>
  
                                  </span>
                                  @endif
                                  <span class="ms-5">   
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                          <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                                      </svg>
                                  </span>
                                  <span class="content ms-2">
                                  <a class="dangnhap" href="#!">Giỏ hàng của bạn @if(Session::has('cart') && Session::get('cart')->totalQty > 0)  ({{Session::get('cart')->totalQty}})       
                                  @else
                                      (0)
                                  @endif      
                              </a>
                                      <div class="dropdown-content">
                                      <div class="selectlogin">
                                 @if(Session::has('cart') && is_array($product_cart) && count($product_cart) > 0)
                                   <div class="overflow-auto">
                                   @foreach($product_cart as $pro)
                                    <div class="cart-item">
                                      <div class="media">
                                        <div class="container">
                                          <div class="row">
                                            <div class="col-lg-4">
                                            <a class="pull-left" href="chi-tiet-san-pham/{{$pro['item']['id']}}"><img src="resources/frontend/assets/img/{{$pro['item']['image']}}" alt="{{$pro['item']['image']}}" style="width:50px;"></a>
                                            </div>
                                            <div class="col-lg-8">
                                            <span class="cart-item-title">
                                              {{ substr($pro['item']['name'], 0,20) }}</span>
                                              <span class="cart-item-options">Thương hiệu:{{$pro['item']['trademark']}}</span>
                                              <p class="price" style="color: blue;">{{number_format($pro['item']['promotion_price'],0, ',', '.')}}đ</p>
                                                                          <p class="old-price">
                                                                              <small style="text-decoration: line-through;"> {{number_format($pro['item']['unit_price'],0, ',', '.')}}đ</small>
                                                                          </p>   
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <div class="media-body">
                                          <span class="cart-item-amount">
                                            Số lượng :{{$pro['qty']}}
                                            </span>
                                        </div>
                                      </div>
                                    </div>
                                    @endforeach
                                   </div>
                                     <hr>
								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value float-end">
                  <?php
                        $totalPrice = 0; // Khởi tạo biến tổng tiền

                        // Giả sử $cart là mảng chứa các mục trong giỏ hàng, mỗi mục có cấu trúc giống như $pro trong câu hỏi
                        foreach ($product_cart as $pro) {
                            // Tính giá tiền của từng mục và cộng vào tổng tiền
                            $totalPrice += $pro['item']['promotion_price'] * $pro['qty'];
                        }

                        // Định dạng số tiền thành chuỗi hiển thị đúng định dạng
                        $totalPriceFormatted = number_format($totalPrice, 0, ',', '.');
                        ?>
									{{$totalPriceFormatted}}đ &nbsp;
									</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="{{route('pagegiohang')}}" class="beta-btn primary text-center"><div class="conectbutton">
                        <span style="  display: inline;font-size: large;font-weight: bold;color:rgb(118, 69, 217);" >
                            <button class="buttonconnect " style="background-color:rgb(109, 219, 227);font-size: large;font-weight: bold;">
                                <span style=" display: inline;color:rgb(255, 255, 255)" class="p-1">
                                   Xem giỏ hàng ngay
                                </span>
                            </button>
                        </span>
                       </div></a>
									</div>
								</div>
								@else
										<span>Chưa có sản phẩm</span>
									@endif
                                      </div>
                                      </div>
  
                                  </span>
                      </div>
                      
                      </div>
                  </div>
              </div>
              <div class="col-lg-1"></div>
          </div>
      <!--endnav-->
  