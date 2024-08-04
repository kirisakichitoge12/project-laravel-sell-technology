
@extends('frontend/layouts/master')

@section("content")


 <!-- Modal infomation -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Thông tin chi tiết</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              
            <table class="table table-striped text-left">
                    <tbody>
                    @foreach($arrayThongTin as $item)
                       <tr>
                        <td>Thương hiệu</td>
                        <td>{{$item['Thương hiệu']}}</td>
                      </tr>
                      <tr>
                        <td>Bảo hành</td>
                        <td>{{$item['Bảo hành']}}</td>
                      </tr>
                      <tr>
                        <td  colspan="2" style="color:rgb(130, 134, 183)">Thông tin chung</td>
                      </tr>
                      <tr>
                        <td>Nhóm sản phẩm</td>
                        <td>{{$item['Thông tin chung']['Nhóm sản phẩm']}}</td>
                      </tr>
                      <tr>
                        <td>Tên</td>
                        <td>{{$product->name}}</td>
                      </tr>
                      @if($pro_detail->id==1 || $pro_detail->id==2)
                      <tr>
                        <td>Series</td>
                        <td>{{$item['Thông tin chung']['Series']}}</td>
                      </tr>
                      @endif
                      <tr>
                        <td>Màu sắc</td>
                        <td>{{$item['Thông tin chung']['Màu sắc']}}</td>
                      </tr>
                      @if($pro_detail->id==1||$pro_detail->id==2||$pro_detail->id==3||$pro_detail->id==4)
                      <tr>
                        <td  colspan="2" style="color:rgb(130, 134, 183)">Màn hình</td>
                      </tr>
                      <tr>
                        <td>Loại màn hình</td>
                        <td>{{$item['Màn hình']['Loại màn hình']}}</td>
                      </tr>
                      <tr>
                        <td>Độ phân giải</td>
                        <td>{{$item['Màn hình']['Độ phân giải']}}</td>
                      </tr>
                      <tr>
                        <td  colspan="2" style="color:rgb(130, 134, 183)">Cấu hình</td>
                      </tr>
                      <tr>
                        <td>Dung lượng</td>
                        <td>{{$item['Cấu hình']['Dung lượng (ROM)']}}</td>
                      </tr>
                      <tr>
                        <td>Hệ điều hành</td>
                        <td>{{$item['Cấu hình']['Hệ điều hành']}}</td>
                      </tr>
                      @endif
                      @if($pro_detail->id==1 || $pro_detail->id==2)
                      <tr>
                        <td  colspan="2" style="color:rgb(130, 134, 183)">Camera</td>
                      </tr>       
                        <tr>
                            <td>Camera sau</td>
                            <td>{{$item['Camera']['Camera sau']}}</td>
                        </tr>
                        <tr>
                            <td>Camera trước</td>
                            <td>{{$item['Camera']['Camera trước']}}</td>
                        </tr>
                       @endif
                     
                     @endforeach 
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
<!--end modal-->
<!-- Modal -->
<div class="modal fade" id="imgModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header border-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
              <!-- Large Slide Carousel -->
              <div id="carouselLarge" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                @if($pro_detail->img1!='chuaco')
                  <div class="carousel-item active">
                   <img src="resources/frontend/assets/img/{{$pro_detail->img1}}" class="img-fluid w-100" id="detailImg" style="min-width: 50px;">  
                  </div>
                  <div class="carousel-item">
                  <img src="resources/frontend/assets/img/{{$pro_detail->img2}}" class="img-fluid w-100" style="min-width: 50px;">  
                  </div>
                  <div class="carousel-item">
                  <img src="resources/frontend/assets/img/{{$pro_detail->img3}}" class="img-fluid w-100" style="min-width: 50px;">  
                  </div>
                  <div class="carousel-item">
                  <img src="resources/frontend/assets/img/{{$pro_detail->img4}}" class="img-fluid w-100" style="min-width: 50px;">  
                  </div>
                  @elseif($pro_detail->img1=='chuaco')
                   <div class="carousel-item active">
                    <img src="resources/frontend/assets/img/{{$product->image}}" class="img-fluid w-100" style="min-width: 50px;">
                  </div>
                  @endif
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselLarge" data-bs-slide="prev">
                <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDgiIGhlaWdodD0iNDgiIHZpZXdCb3g9IjAgMCA0OCA0OCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggb3BhY2l0eT0iMC4zIiBkPSJNMCAwSDI0QzM3LjI1NDggMCA0OCAxMC43NDUyIDQ4IDI0QzQ4IDM3LjI1NDggMzcuMjU0OCA0OCAyNCA0OEgwVjBaIiBmaWxsPSIjMUIxRDI5Ii8+CjxwYXRoIGQ9Ik0yNi41IDE4TDIwLjUgMjRMMjYuNSAzMCIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLXdpZHRoPSIxLjUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K" alt="" class="css-1vr3gdl" aria-hidden="true">
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselLarge" data-bs-slide="next">
                 <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDgiIGhlaWdodD0iNDgiIHZpZXdCb3g9IjAgMCA0OCA0OCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggb3BhY2l0eT0iMC4zIiBkPSJNMCAyNEMwIDEwLjc0NTIgMTAuNzQ1MiAwIDI0IDBINDhWNDhIMjRDMTAuNzQ1MiA0OCAwIDM3LjI1NDggMCAyNFoiIGZpbGw9IiMxQjFEMjkiLz4KPHBhdGggZD0iTTIxLjUgMzBMMjcuNSAyNEwyMS41IDE4IiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjEuNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo=" alt="" class="css-15g4to0" aria-hidden="true"></div>
                </button>
              </div>
            </div>
           <div class="col-lg-3"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <!--end modal-->

<input type="hidden" id="productName" value="{{$product->name}}">

<div class="container-fluid  mt-4" style="background-color: rgb(248, 248, 252);">
   <div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <div class="duongdan">
            <svg fill="none" viewBox="0 0 24 24" size="24" class="css-26qhcs" color="rgb(167, 171, 195)"
            height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd"
            clip-rule="evenodd" d="M11.512 1.43055C11.7928 1.18982 12.2073 1.18982 12.4881 1.43055L21.4881 9.14455C21.7264 9.3488 21.8123 9.67984 21.7035 9.9742C21.5946 10.2686 21.3139 10.464 21 10.464H20.75V19.18C20.75 20.1852 19.9665 21 19 21H15V16.1776C15 15.6001 14.7542 15.0462 14.3166 14.6378C13.879 14.2294 13.2856 14 12.6667 14H11.3333C10.7144 14 10.121 14.2294 9.6834 14.6378C9.24583 15.0462 9 15.6001 9 16.1776V21H5C4.0335 21 3.25 20.1852 3.25 19.18V10.464H3.00004C2.68618 10.464 2.40551 10.2686 2.29662 9.9742C2.18773 9.67984 2.27365 9.3488 2.51195 9.14455L11.512 1.43055Z" fill="currentColor"></path></svg>
            <svg fill="none" viewBox="0 0 24 24" size="16" class="css-26qhcs" color="rgb(167, 171, 195)" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8.49976 19.0001L15.4998 12.0001L8.49976 5.00012" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <span style="color:rgb(167, 171, 195);"><small>Điện máy gia dụng</small></span>
            <svg fill="none" viewBox="0 0 24 24" size="16" class="css-26qhcs" color="rgb(167, 171, 195)" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8.49976 19.0001L15.4998 12.0001L8.49976 5.00012" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <span style="color:rgb(167, 171, 195);"><small>Tivi</small></span>
            <svg fill="none" viewBox="0 0 24 24" size="16" class="css-26qhcs" color="rgb(167, 171, 195)" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8.49976 19.0001L15.4998 12.0001L8.49976 5.00012" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <span style="color:rgb(167, 171, 195);"><small>Samsung</small></span>
        </div>
        <div class="row mt-4">
            <div class="col-lg-7 m-2 shadow-lg rounded " style="background-color: rgb(255, 255, 255); box-shadow:none !important;">
                <div class="row">
                  <div class="col-lg-4 m-2">
                    <div class="row">
                        <div class="col-lg-12 container" id="largeImageContainer">
                            <img src="resources/frontend/assets/img/{{$product->image}}" class="img-fluid w-100" id="largeImage" onclick="changeLargeImage(this)" data-bs-toggle="modal" data-bs-target="#imgModal"> 
                        </div>
                       
                        <div class="col-lg-2 col-md-2 col-2 ms-0 m-2 imgsmall ">
                            <img src="resources/frontend/assets/img/{{$product->image}}" class="img-fluid w-100" style="min-width: 50px;" onclick="changeLargeImage(this)"  onmouseover="changeLargeImage(this)" data-value="Blue">  
                        </div>
                        @if($pro_detail->img1!='chuaco')
                        <div class="col-lg-2 col-md-2 col-2 ms-0 m-2 imgsmall">
                            <img src="resources/frontend/assets/img/{{$pro_detail->img1}}" class="img-fluid w-100" style="min-width: 50px;" onclick="changeLargeImage(this)"  onmouseover="changeLargeImage(this)" data-value="Blue" >  
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ms-0 m-2 imgsmall ">
                            <img src="resources/frontend/assets/img/{{$pro_detail->img2}}" class="img-fluid w-100" style="min-width: 50px;" onclick="changeLargeImage(this)"  onmouseover="changeLargeImage(this)" data-value="Nature">  
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ms-0 m-2 imgsmall ">
                            <img src="resources/frontend/assets/img/{{$pro_detail->img3}}" class="img-fluid w-100" style="min-width: 50px;" onclick="changeLargeImage(this)"  onmouseover="changeLargeImage(this)" data-value="White">  
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ms-0 m-2 imgsmall ">
                            <img src="resources/frontend/assets/img/{{$pro_detail->img4}}" class="img-fluid w-100" style="min-width: 50px;" onclick="changeLargeImage(this)"  onmouseover="changeLargeImage(this)" data-value="Black">  
                        </div>
                        @elseif($pro_detail->img1=='chuaco')
                        <div class="col-lg-2 col-md-2 col-2 ms-0 m-2 imgsmall">
                            <img src="resources/frontend/assets/img/{{$product->image}}" class="img-fluid w-100" style="min-width: 50px;" onclick="changeLargeImage(this)"  onmouseover="changeLargeImage(this)" data-value="Blue" >  
                        </div>
                        @endif

                        <hr class="dashed-line">
                           <div class="col-lg-12 m-2">
                            <!-- Danh sách gạch đầu hàng -->
                            
                            <?php
                            // Kiểm tra nếu mô tả bắt đầu với ký tự '<'
                            $isHtml = strpos(trim($product->description), '<') === 0;

                            if ($isHtml) {
                                // Nếu là HTML, hiển thị toàn bộ nội dung
                                echo '<ul style="color:rgb(130, 134, 158);">
                                        <li>' . $product->description . '</li>
                                      </ul>'; 
                            } else {
                                // Nếu không phải HTML, xử lý như một danh sách dấu gạch ngang
                                $parts = explode('-', $product->description);
                                $count = 0;
                                if (empty(trim($parts[0]))) {
                                    array_shift($parts);
                                }
                                echo '<ul class="dashed-list" style="color:rgb(130, 134, 158);">';
                                foreach ($parts as $part) {
                                    $count++;
                                    if ($count <= 5) {
                                        echo '<li>' . substr($part, 0, 50) . '</li>';
                                    } else {
                                        break;
                                    }
                                }
                                echo '</ul>';
                            }
                            ?>

                           </div>     
                    
                            </div>
                  </div>
                  <div class="col-lg-7 m-2">
                    <h5>{{$product->name}}</h5>
                    <span style="color:rgb(130, 134, 158); display: inline;"><small>Thương hiệu 
                        <p style="color: #00ccff; display: inline;">{{$product->trademark}}</p> | SKU: 230603065</small></span><br>
                       
                       @if($product->id==1)
                        <span style="color:rgb(130, 134, 158); display: inline;">Màu sắc<small>
                            <p style="color: #00ccff; display: inline;" id="color">Blue</p></small></span>
                            <br>
                            <span style=" display: inline;" class="colorphone">
                                   <button class="btn" style="background-color: rgb(248,248,252);" name="Blue"   value="Blue">Blue</button>
                                   <button class="btn" style="background-color: rgb(248,248,252);" name="Nature"  value="Nature">Nature</button>
                                   <button class="btn" style="background-color: rgb(248,248,252);" name="White" value="White">White</button>
                                   <button class="btn" style="background-color: rgb(248,248,252);" name="Black"   value="Black">Black</button>
                                </span><br>
                                <span style="color:rgb(130, 134, 158); display: inline;">Bộ nhớ</span>
                            <br>
                            <span style=" display: inline;" class="romphone">
                                   <button class="btn" style="background-color: rgb(248,248,252);" name="128GB">128GB</button>
                                   <button class="btn" style="background-color: rgb(248,248,252);" name="256GB">256GB</button>
                                </span>
                        @endif

                        <p class="price" style="color: blue;">{{ number_format($product->promotion_price, 0, ',', '.') }}đ</p>
                        <p class="old-price">
                            <small style="text-decoration: line-through;">{{ number_format($product->unit_price, 0, ',', '.') }}đ</small>
                            <span class="discount" style="color: rgb(109, 109, 232);"><small>{{ round((($product->unit_price-$product->promotion_price)/$product->unit_price)*100)}}%</small></span>
                        </p>  
                        <hr class="dashed-line">
                        <div class="col-lg-12 mt-4 shadow-lg rounded" style="background-color:rgb(255, 255, 255); box-shadow:none !important; border: 1px solid rgb(72, 165, 196);">                             
                            <div style="display: flex; align-items: center;">
                                <img src="https://shopfront-cdn.tekoapis.com/cart/gift-filled.png" height="50" width="50" style="margin-right: 10px;">
                                <div>
                                    <span style="color:rgb(130, 134, 158); display: inline-block;">Khuyến mãi áp dụng khi mua đủ 1 sản phẩm, mua tối thiểu 1 sản phẩm</span>
                                    <span style="color:rgb(130, 134, 158); display: inline-block;">HSD :30/04/2024 &nbsp;&nbsp;&nbsp;&nbsp;<p  type="button" class="ms-2" style="color:#00ccff">Áp dụng</div></p>
                                </div>
                            </div>
                            
                          <div class="row mt-2">
                            <div class="col-lg-5 col-md-5 col-5 mr-2">
                                <button  type="button" class="btn btn-primary" style="width:110%">Mua ngay</button>
                            
                            </div>
                            <div class="col-lg-6 col-md-5 col-6">
                            <button type="button" class="btn btn-outline-primary" style="width:110%" data-product-id="{{$product->id}}" onclick="addtocart(this)">Thêm vào giỏ hàng</button>
                          
                    </div>
                          </div>
                          
                        </div>
                  </div>
                </div>   
                
                

            <div class="col-lg-4  m-2" >
            <div class="row shadow-lg rounded" style="background-color: rgb(255, 255, 255); box-shadow:none !important;">
                    
                    <div class="col-lg-12 mt-2 p-2"  style="display: flex; align-items: center;">
                        <img src="resources/frontend/assets/img/logodetail.png" class="img-fluid " height="50" width="50">
                       <div class="row align-items-center"> 
                        <span style="display: inline;" class="ms-2"><h6>CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ PHONG VŨ 
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
                    <span style="display: inline;" class="ms-2"><h6>Chính sách bán hàng</h6></span>
                    <div class="col-lg-12 mt-2"  style="display: flex; align-items: center;">
                        <img src="https://lh3.googleusercontent.com/uvWBg1q90XtEWvHkWGDbDemjEaANJ_kX3NEfIywURPTMeaSZTORdttpehuFBNKpYiWQ3jHgito4ciCt9pEJIHH1V4IlPYoE=rw" loading="lazy" decoding="async" style="width: 25px; height: 25px;">
                        <span style="color:rgb(130, 134, 158); display: inline;" class="ms-2">Miễn phí giao hàng cho đơn hàng từ 5 triệu</span>
                    </div>
                    <div class="col-lg-12 mt-2"  style="display: flex; align-items: center;">
                        <img src="https://lh3.googleusercontent.com/LT3jrA76x0rGqq9TmqrwY09FgyZfy0sjMxbS4PLFwUekIrCA9GlLF6EkiFuKKL711tFBT7f2JaUgKT3--To8zOW4kHxPPHs4=rw" loading="lazy" decoding="async" style="width: 25px; height: 25px;">
                        <span style="color:rgb(130, 134, 158); display: inline;" class="ms-2">Cam kết hàng chính hãng 100%</span>
                    </div>
                    <div class="col-lg-12 mt-2"  style="display: flex; align-items: center;">
                        <img src="https://lh3.googleusercontent.com/TECKlw8DFChVXu_FAYdNjbCuaDVhmOhbqsKLnayhIgx5Pvv0EX051qHWJR7vUgxiUXN5heAlx4bIDYsoES7X8pby5Pn9LXWN=rw" loading="lazy" decoding="async" style="width: 25px; height: 25px;">
                         <span style="color:rgb(130, 134, 158); display: inline;" class="ms-2">Đổi trả trong vòng 10 ngày</span>
                    </div>
                    <span style="display: inline;" class="ms-2 mt-3"><h6>Dịch vụ khác</h6></span>
                    <div class="col-lg-12 mt-2"  style="display: flex; align-items: center;">
                        <img src="https://lh3.googleusercontent.com/cjYniX0PTM1twy6bUEw4nSG47EEsTcFf7O6NRgWfdrq7JpNTccsNkqxnBExVVTGeocVdkUVbupp17dLNFn-E2gG2V-_aejU=rw" loading="lazy" decoding="async" style="width: 25px; height: 25px;">
                        <span style="color:rgb(130, 134, 158); display: inline;" class="ms-2">Gói dịch vụ bảo hành/ Sửa chữa tận nơi </span>
                    </div>
                </div>

        </div>
        </div>
        </div>
        
    
    </div>
    <div class="row mt-4" style="max-width: 1180px;">
        <div class="col-lg-7  shadow-lg rounded m-2" style="background-color: rgb(255, 255, 255); box-shadow:none !important;">
           <div class="container">
           <span style="display: inline;" class="ms-2"><h5>Mô tả sản phẩm</h5></span>
            @foreach($motasp as $item)
           <span style="color:rgb(130, 134, 158); display: inline;" class="ms-2 mt-2">
           {{$item['Mota1']['mota1']}}
            </span>
           </br>
           <!--mota1-->
                <span  class="ms-2 mt-2"><h6>{{$item['Mota2']['tt2']}}</h6></span>
                <span style="color:rgb(130, 134, 158); display: inline;" class="ms-2 mt-2">
                {{$item['Mota2']['mota2']}}
               </span> 
               <span style="color:rgb(130, 134, 158); display: inline;" class="ms-2 mt-2">
               <img src="resources/frontend/assets/img/{{$product->image}}" class="img-fluid w-100 h-50" >
               </span> 
             <!--mota2-->
             <span  class="ms-2 mt-2"><h6>{{$item['Mota3']['tt3']}}</h6></span>
                <span style="color:rgb(130, 134, 158); display: inline;" class="ms-2 mt-2">
                {{$item['Mota3']['mota3']}}
               </span> 
               @if($pro_detail->img1!='chuaco')
               <span style="color:rgb(130, 134, 158); display: inline;" class="ms-2 mt-2">
               <img src="resources/frontend/assets/img/{{$pro_detail->img1}}" class="img-fluid w-100 h-50" >
               </span> 
               @endif
               <!--mota3-->
               <span  class="ms-2 mt-2"><h6>{{$item['Mota3']['tt3']}}</h6></span>
                <span style="color:rgb(130, 134, 158); display: inline;" class="ms-2 mt-2">
                {{$item['Mota3']['mota3']}}
               </span> 
               @if($pro_detail->img1!='chuaco')
               <span style="color:rgb(130, 134, 158); display: inline;" class="ms-2 mt-2">
               <img src="resources/frontend/assets/img/{{$pro_detail->img2}}" class="img-fluid w-100 h-50" >
               </span> 
               @endif
               <!--video-->
               <div class="row mt-2">
                <div class="col-lg-12 video ">
                 <div class="row">      
                  <div class="col-lg-12 ms-2">
                 
                  </div>
                 </div>
                </div>
               </div>
             
               @endforeach   
           </div>          
              
               </div>

        <div class="col-lg-4  shadow-lg rounded m-2" style="background-color: rgb(255, 255, 255); box-shadow:none !important;max-height: 800px;">
           <span style="display: inline;" class="ms-2"><h5>Thông tin chi tiết</h5></span>
           <table class="table table-striped text-left">
                    <tbody>
                    @foreach($arrayThongTin as $item)
                       <tr>
                        <td>Thương hiệu</td>
                        <td>{{$item['Thương hiệu']}}</td>
                      </tr>
                      <tr>
                        <td>Bảo hành</td>
                        <td>{{$item['Bảo hành']}}</td>
                      </tr>
                      <tr>
                        <td  colspan="2" style="color:rgb(130, 134, 183)">Thông tin chung</td>
                      </tr>
                      <tr>
                        <td>Nhóm sản phẩm</td>
                        <td>{{$item['Thông tin chung']['Nhóm sản phẩm']}}</td>
                      </tr>
                      <tr>
                        <td>Tên</td>
                        <td>{{$product->name}}</td>
                      </tr>
                      @if($pro_detail->id==1 || $pro_detail->id==2)
                      <tr>
                        <td>Series</td>
                        <td>{{$item['Thông tin chung']['Series']}}</td>
                      </tr>
                      @endif
                      <tr>
                        <td>Màu sắc</td>
                        <td>{{$item['Thông tin chung']['Màu sắc']}}</td>
                      </tr>
                      @if($pro_detail->id==1||$pro_detail->id==2||$pro_detail->id==3||$pro_detail->id==4)
                      <tr>
                        <td  colspan="2" style="color:rgb(130, 134, 183)">Màn hình</td>
                      </tr>
                      <tr>
                        <td>Loại màn hình</td>
                        <td>{{$item['Màn hình']['Loại màn hình']}}</td>
                      </tr>
                      <tr>
                        <td>Độ phân giải</td>
                        <td>{{$item['Màn hình']['Độ phân giải']}}</td>
                      </tr>
                      <tr>
                        <td  colspan="2" style="color:rgb(130, 134, 183)">Cấu hình</td>
                      </tr>
                      <tr>
                        <td>Dung lượng</td>
                        <td>{{$item['Cấu hình']['Dung lượng (ROM)']}}</td>
                      </tr>
                      <tr>
                        <td>Hệ điều hành</td>
                        <td>{{$item['Cấu hình']['Hệ điều hành']}}</td>
                      </tr>
                      @endif
                      @if($pro_detail->id==1 || $pro_detail->id==2)
                      <tr>
                        <td  colspan="2" style="color:rgb(130, 134, 183)">Camera</td>
                      </tr>       
                        <tr>
                            <td>Camera sau</td>
                            <td>{{$item['Camera']['Camera sau']}}</td>
                        </tr>
                        <tr>
                            <td>Camera trước</td>
                            <td>{{$item['Camera']['Camera trước']}}</td>
                        </tr>
                       @endif
                     
                     @endforeach 
                    </tbody>
                  </table>
          <div class="text-center mt-2" style="color:#00ccff">
             <p type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" >Xem thêm nội dung
                <svg fill="none" viewBox="0 0 24 24" class="css-9w5ue6" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M5 8.5L12 15.5L19 8.5" stroke="#82869E" 
                    stroke-width="1.5" stroke-linecap="round"
                     stroke-linejoin="round"></path></svg>
             </p>
             
          </div>
        </div>



        <div class="container bg-white mt-3 rounded">
      <div class="row">
        <div class="col-12 with-border-bottom mt-2 mb-1 ">
          <h4 class="fw-bold text-dark">Đánh giá sản phẩm</h4>
        </div>
        <div class="col-12 with-border-bottom mt-2">
          <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 d-flex flex-column s">
       <span class="chumobu cangiua">Đánh giá trung bình</span>
       <span class="dgia">5/5</span>
       <span class="cangiua">
        <i class="fa-solid fa-star" style="color: yellow;"></i>
        <i class="fa-solid fa-star" style="color: yellow;"></i>
        <i class="fa-solid fa-star" style="color: yellow;"></i>
        <i class="fa-solid fa-star" style="color: yellow;"></i>
        <i class="fa-solid fa-star" style="color: yellow;"></i>
      </span>
      <span class="cangiua chumo">64 đáng giá</span>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex flex-column ">
  <span >
    <div class="d-flex flex-row">
      <div class="col-1"><span> 5  <i class="fa-solid fa-star" style="color: yellow;"></i></span></div>
     
      <div class="col-9 mt-2 me-2">
        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px" >
          <div class="progress-bar bg-success" style="width: 90%"></div>
        </div>
      </div>
      <div class="col-2 chumo">50</div>
    </div>
   
   
   </span>
  <span >
    <div class="d-flex flex-row">
      <div class="col-1"><span> 4  <i class="fa-solid fa-star" style="color: yellow;"></i></span></div>
     
      <div class="col-9 mt-2 me-2">
        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px" >
          <div class="progress-bar bg-success" style="width: 10%"></div>
        </div>
      </div>
      <div class="col-2 chumo">5</div>
    </div>
   
   
   </span>
  <span >
    <div class="d-flex flex-row">
      <div class="col-1"><span> 3  <i class="fa-solid fa-star" style="color: yellow;"></i></span></div>
     
      <div class="col-9 mt-2 me-2">
        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px" >
          <div class="progress-bar bg-success" style="width: 1%"></div>
        </div>
      </div>
      <div class="col-2 chumo">1</div>
    </div>
   
   
   </span>
  <span >
    <div class="d-flex flex-row">
      <div class="col-1"><span> 2 <i class="fa-solid fa-star" style="color: yellow;"></i></span></div>
     
      <div class="col-9 mt-2 me-2">
        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px" >
          <div class="progress-bar bg-success" style="width: 0%"></div>
        </div>
      </div>
      <div class="col-2 chumo">0</div>
    </div>
   
   
   </span>
  <span >
    <div class="d-flex flex-row">
      <div class="col-1"><span> 1  <i class="fa-solid fa-star" style="color: yellow;"></i></span></div>
     
      <div class="col-9 mt-2 me-2">
        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px" >
          <div class="progress-bar bg-success" style="width: 0"></div>
        </div>
      </div>
      <div class="col-2 chumo">0</div>
    </div>
   
   
   </span>
            </div>
            <div class="col-3 d-flex flex-column text-center mt-4">
          <span class="chumo mb-1">Bạn đã sử dụng đánh giá này?</span>
          <button type="button" class="btn btn-danger p-0 cochu"> Gửi đánh giá</button>
            </div>

          </div>
        </div>
        <div class="col-12 d-flex flex-row  p-2 bg-secondary-subtle">
          <span class="mt-1">Lọc xem theo:</span>
          <button type="button" class="btn btn-outline-secondary p-1 ms-3">Đã mua hàng</button>
          <button type="button" class="btn btn-outline-secondary p-1 ms-3">5 sao</button>
          <button type="button" class="btn btn-outline-secondary p-1 ms-3">4 sao</button>
          <button type="button" class="btn btn-outline-secondary p-1 ms-3">3 sao</button>
          <button type="button" class="btn btn-outline-secondary p-1 ms-3">2 sao</button>
          <button type="button" class="btn btn-outline-secondary p-1 ms-3">1 sao</button>
        </div>
        <div class="col-12 bg-body-tertiary">
          <div class="row mb-2 mt-2 with-border-bottom">
            <div class="col-1 ">
           <img src="resources/frontend/assets/img/"  class="rounded-circle border border-dark overflow-hidden" style="width: 60px; height: 60px;">
            </div>
            <div class="col-10 d-flex flex-column">
              <div class="d-flex flex-row">
                <span class="cochu me-2">Tùng</span>
                <i class="fa-solid fa-circle-check mt-2 me-1" style="color: green;"></i>
                <span class="text-success mt-1">
                  đã mua tại LTAShop
                </span>
              </div>
              <span >
                <i class="fa-solid fa-star" style="color: yellow;"></i>
                <i class="fa-solid fa-star" style="color: yellow;"></i>
                <i class="fa-solid fa-star" style="color: yellow;"></i>
                <i class="fa-solid fa-star" style="color: yellow;"></i>
                <i class="fa-solid fa-star" style="color: yellow;"></i>
              </span>
              <span>Sản phẩm ưng ý, thiết kế đẹp mắt</span>
              <div  class="d-flex flex-row mt-1">
             <span class="chumonho me-2" >1 ngày trước</span>
           <span style="color: blue;" class="me-2 ">  <i class="fa-solid fa-thumbs-up " ></i> thích(1)</span>
           <a href="" class="text-decoration-none"> trả lời </a>
              </div>
            </div>
          </div>
          <nav aria-label="..." class="d-flex justify-content-center text-align-center mt-3">
            <ul class="pagination">
              <li class="page-item disabled">
                <span class="page-link">Previous</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active" aria-current="page">
                <span class="page-link">2</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
        
      </div>
    </div>
   
   </div> 


<!--comment-->

    </div>
    <div class="col-lg-1" style="background-color: rgb(248, 248, 252);margin: 0px;padding: 0px;"></div> 
   </div>

</div>

@endsection
@section("script")
<script>
  
document.addEventListener("DOMContentLoaded", function() {
    var productName = document.getElementById("productName").value;
    console.log("title",productName);
    if(productName!='')
    {
      document.title = productName;
    }
    else
    {
      document.title ='Intership';
    }
    
});
function changeLargeImage(element) {
    var largeImage = document.getElementById('largeImage');
    var detailImg = document.getElementById('detailImg');
    largeImage.src = element.src;
    detailImg.src=element.src;
    document.getElementById('color').innerText=element.getAttribute('data-value');
     
   
}
function expandImage() {
    var largeImage = document.getElementById('largeImage');
    var closeicon = document.getElementById('closeicon');
    closeicon.style.display = 'block'; 
    largeImage.classList.toggle('expanded');
}


function closeExpandedView() {
    var largeImage = document.getElementById('largeImage');
    var closeicon = document.getElementById('closeicon');
    closeicon.style.display = 'none'; 
    largeImage.classList.remove('expanded');
}

//màu sắc của máy 
document.addEventListener('DOMContentLoaded', function() {
    // Lắng nghe sự kiện click cho tất cả các nút
    document.querySelectorAll('.colorphone button').forEach(button => {
        button.addEventListener('click', function() {
            var value = this.getAttribute('name');
            var largeImage = document.getElementById('largeImage');
            if(value=='Blue'){
                largeImage.src ='resources/frontend/assets/img/{{$pro_detail->img1}}';
            }
            else if(value=='Nature'){
                largeImage.src ='resources/frontend/assets/img/{{$pro_detail->img2}}';  
            }
            else if(value=='White'){
                largeImage.src ='resources/frontend/assets/img/{{$pro_detail->img3}}';  
            }
            else if(value=='Black'){
                largeImage.src ='resources/frontend/assets/img/{{$pro_detail->img4}}';  
            }
            document.getElementById('color').innerText=value;
            console.log('Giá trị của nút được click là: ', value);
            // Loại bỏ lớp 'active' từ tất cả các nút
            document.querySelectorAll('.colorphone button').forEach(btn => {
                btn.classList.remove('active');
            });
            // Thêm lớp 'active' vào nút được click
            this.classList.add('active');
        });
    });
});
// Bộ nhớ của máy
document.addEventListener('DOMContentLoaded', function() {
    // Lắng nghe sự kiện click cho tất cả các nút
    document.querySelectorAll('.romphone button').forEach(button => {
        button.addEventListener('click', function() {
            var value = this.getAttribute('name');
            var largeImage = document.getElementById('largeImage');
            if(value=='Blue'){
                largeImage.src ='resources/frontend/assets/img/prolap1.jpg';
            }
            else if(value=='Nature'){
                largeImage.src ='resources/frontend/assets/img/{{$pro_detail->img1}}';  
            }
           
            console.log('Bộ nhớ có máy là: ', value);
            // Loại bỏ lớp 'active' từ tất cả các nút
            document.querySelectorAll('.romphone button').forEach(btnrom => {
                btnrom.classList.remove('active');
            });
            // Thêm lớp 'active' vào nút được click
            this.classList.add('active');
        });
    });
});




</script>
@endsection
