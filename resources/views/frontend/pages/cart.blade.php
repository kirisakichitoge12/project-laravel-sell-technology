
@extends('frontend/layouts/master')

@section("content")

<div class="container-fluid  mt-4" style="background-color: rgb(248, 248, 252);">
   <div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
     <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="duongdan">
                    <svg fill="none" viewBox="0 0 24 24" size="24" class="css-26qhcs" color="rgb(167, 171, 195)"
                    height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd"
                    clip-rule="evenodd" d="M11.512 1.43055C11.7928 1.18982 12.2073 1.18982 12.4881 1.43055L21.4881 9.14455C21.7264 9.3488 21.8123 9.67984 21.7035 9.9742C21.5946 10.2686 21.3139 10.464 21 10.464H20.75V19.18C20.75 20.1852 19.9665 21 19 21H15V16.1776C15 15.6001 14.7542 15.0462 14.3166 14.6378C13.879 14.2294 13.2856 14 12.6667 14H11.3333C10.7144 14 10.121 14.2294 9.6834 14.6378C9.24583 15.0462 9 15.6001 9 16.1776V21H5C4.0335 21 3.25 20.1852 3.25 19.18V10.464H3.00004C2.68618 10.464 2.40551 10.2686 2.29662 9.9742C2.18773 9.67984 2.27365 9.3488 2.51195 9.14455L11.512 1.43055Z" fill="currentColor"></path></svg>
                    <svg fill="none" viewBox="0 0 24 24" size="16" class="css-26qhcs" color="rgb(167, 171, 195)" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8.49976 19.0001L15.4998 12.0001L8.49976 5.00012" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <span style="color:rgb(167, 171, 195);"><small>Trang chủ</small></span>
                    <svg fill="none" viewBox="0 0 24 24" size="16" class="css-26qhcs" color="rgb(167, 171, 195)" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8.49976 19.0001L15.4998 12.0001L8.49976 5.00012" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <span style="color:rgb(167, 171, 195);"><small>Shop</small></span>
                    <svg fill="none" viewBox="0 0 24 24" size="16" class="css-26qhcs" color="rgb(167, 171, 195)" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8.49976 19.0001L15.4998 12.0001L8.49976 5.00012" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <span style="color:rgb(167, 171, 195);"><small>Giỏ hàng</small></span>
                </div>
            </div>
        </div>
     </div>
       
        <div class="row m-4">
            <h4>Giỏ hàng</h4>  
            @if(Session::has('cart') && is_array($product_cart) && count($product_cart) > 0)  
            <div class="col-lg-8 m-2 shadow-lg rounded " style="background-color: rgb(255, 255, 255); box-shadow:none !important;">
                <div class="row mt-2">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody> 
                                       
                                            <tr style="background-color: aliceblue;">
                                                <td colspan="4"><h6>CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ PHONG VŨ</h6></td>
                                                <td style="text-align: center;">Đơn giá</td>
                                                <td style="text-align: center;">Số lượng</td>
                                                <td style="text-align: center;">Thành tiền</td>
                                            </tr>
                                         
                                            @foreach($product_cart as $pro)
                                            <tr style="background-color: aliceblue;">
                                                <td>
                                                    <img src="resources/frontend/assets/img/{{$pro['item']['image']}}" class="img-fluid" style="max-height: 100px; max-width: 100px; border: 1px solid rgb(226, 227, 238);background-size: center;">
                                                </td>
                                                <td colspan="3">
                                                    <span style="display: inline-block;margin-top:0px;">
                                                    {{ substr($pro['item']['name'], 0,20) }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <p class="old-price">
                                                        <span class="discount" style="color: rgb(34, 34, 51);">{{number_format($pro['item']['promotion_price'],0, ',', '.')}}đ<br>
                                                            <small style="text-decoration: line-through;color: rgb(80, 80, 120);">{{number_format($pro['item']['unit_price'],0, ',', '.')}}đ</small>
                                                        </span>
                                                    </p>  
                                                </td>
                                                <td>
                                                <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                                                    <div class="input-group-prepend">
                                                        <button onclick="giamsoluong(this)" class="btn btn-outline-black decrease" type="button">−</button>
                                                    </div>
                                                    <input type="text" onkeyup="kiemtrasoluong(this)" class="form-control text-center quantity-amount" value="{{$pro['qty']}}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                    <div class="input-group-append">
                                                        <button onclick="tangsoluong(this)" class="btn btn-outline-black increase" type="button">+</button>
                                                    </div>
                                                    <input type="hidden" name="idne" class="product-id" value="{{$pro['item']['id']}}">
                                                    <form id="update-cart-form" action="cap-nhat-gio-hang" method="post">
                                                      @csrf
                                                        <input type="hidden" name="id" id="idupdate" value="0"> 
                                                        <input type="hidden" name="soluong" id="sl" class="product-id" value="0">
                                                    </form>
                                                  
                                                    <a href="xoa-san-pham/{{$pro['item']['id']}}"><button class="btn btn-default" style="color:rgb(61, 88, 205); margin:0px 8px; border:none">&nbsp;&nbsp;&nbsp;&nbsp; Xóa</button></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="old-price">
                                                        <span class="discount" style="color: rgb(34, 34, 51);">{{number_format($pro['item']['promotion_price']*$pro['qty'],0, ',', '.')}}đ<br>
                                                       
                                                        </span>
                                                    </p>  
                                                </td>
                                            </tr>
                                            @endforeach
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    



                  
                  
                  </div>
                </div>
                @else
                <div class="col-lg-8 m-2 shadow-lg rounded " style="background-color: rgb(255, 255, 255); box-shadow:none !important;">
                <div class="row mt-2">

                    <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-2"></div>
                           <div class="col-lg-8">
                           <img src="resources/frontend/assets/img/cart.png" class="img-fluid w-100">
                            <h5>Giỏ hàng của bạn chưa có sản phẩm
                            <a href="{{route('pageshop')}}">Mua sắm</a>
                            </h5>
                           
                           
                           </div>
                           <div class="col-lg-2"></div>
                        </div>
                    </div>
                    



                  
                  
                  </div>
                </div>
            @endif
            <div class="col-lg-3  m-2" >
            <div class="row shadow-lg rounded" style="background-color: rgb(255, 255, 255); box-shadow:none !important;">
                    
                    <div class="col-lg-12 mt-2 p-2"  style="display: flex; align-items: center;">
                        <img src="resources/frontend/assets/img/logodetail.png" class="img-fluid " height="50" width="50">
                       <div class="row align-items-center"> 
                        <span style="display: inline;" class="ms-2"><h6>CÔNG TY CỔ PHẦN THƯƠNG MẠI &nbsp; DỊCH VỤ PHONG VŨ 
                            <svg fill="currentColor" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 477.867 477.867" size="14" class="css-1ptts6n" color="rgb(52, 206, 99)" height="14" width="14" xmlns="http://www.w3.org/2000/svg" style="margin-left: 8px; margin-bottom: 4px;"><g><g><path d="M238.933,0C106.974,0,0,106.974,0,238.933s106.974,238.933,238.933,238.933s238.933-106.974,238.933-238.933
                                C477.726,107.033,370.834,0.141,238.933,0z M370.466,165.666L199.799,336.333c-6.665,6.663-17.468,6.663-24.132,0l-68.267-68.267
                                c-6.78-6.548-6.968-17.352-0.42-24.132c6.548-6.78,17.352-6.968,24.132-0.42c0.142,0.138,0.282,0.277,0.42,0.42l56.201,56.201
                                l158.601-158.601c6.78-6.548,17.584-6.36,24.132,0.419C376.854,148.567,376.854,159.052,370.466,165.666z"></path></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                        </h6>
                        </span>
                    </div>

            </div>
            </div>
            <div class="row shadow-lg rounded mt-2" style="background-color: rgb(255, 255, 255); box-shadow:none !important;">
                    
     <div class="col-lg-12 mt-2 p-2"  style="display: flex; align-items: center;">
                   <div class="row align-items-center"> 
                    <span style="display: inline;" class="ms-2"><h5>Thanh toán</h5>
                    </span>
                    @if(Session::has('cart') && is_array($product_cart) && count($product_cart) > 0)
                    <span style="display: inline;" class="ms-2 mt-2">            
                        <p class="float-start">Tổng tạm tính</p>
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
                        <p class="float-end ml-2">{{$totalPriceFormatted}}đ &nbsp; </p>
                    </span>
                    <span style="display: inline;" class="ms-2">
                        <p class="float-start">Thành tiền</p>
                        <p class="float-end">{{$totalPriceFormatted}}đ &nbsp; </p>
                    </span>
                    @else
                    <span style="display: inline;" class="ms-2 mt-2">            
                        <p class="float-start">Tổng tạm tính</p>
                        <p class="float-end ml-2">0đ &nbsp; </p>
                    </span>
                    <span style="display: inline;" class="ms-2">
                        <p class="float-start">Thành tiền</p>
                        <p class="float-end">0đ &nbsp; </p>
                    </span>
                    @endif

                    @if(Auth::check())
                    @if(Auth::user()->gender!=null && Auth::user()->address!=null)
                    <div class="conectbutton">
                        <span style="  display: inline;font-size: large;font-weight: bold;color:rgb(118, 69, 217);" >
                            <button class="buttonconnect " style="background-color:rgb(109, 219, 227);font-size: large;font-weight: bold;">
                                <span style=" display: inline;color:rgb(255, 255, 255)" class="p-1">
                                   <a href="thanhtoan" style="text-decoration: none;">Thanh toán</a>
                                </span>
                            </button>
                        </span>
                       </div>
                       @else
                       <div class="conectbutton">
                        <span style="display: inline;font-size: large;font-weight: bold;color:rgb(118, 69, 217);" >
                                   <a href="profile">Vui lòng cập nhật thông tin</a>
                        </span>
                       </div>
                        @endif 
                       @else
                       <div class="conectbutton">
                        <span style="  display: inline;font-size: large;font-weight: bold;color:rgb(118, 69, 217);" >
                                   <a href="dang-nhap">Vui lòng đăng nhập để mua hàng</a>
                        </span>
                       </div>

                   @endif 
                   
                </div>

        </div>

        </div>

        </div>

    </div>
   
    </div>
    <div class="col-lg-1"></div> 
   </div>

</div>


@endsection

@section("script")
<script>

</script>
@endsection