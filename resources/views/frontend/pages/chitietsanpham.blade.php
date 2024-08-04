
@extends('frontend/layouts/master')

@section("content")

  
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Thông tin chi tiết</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped text-center">
                    <tbody>
                      <tr>
                        <td>Jacob</td>
                        <td>Mark</td>
                      </tr>
                      <tr>
                        <td>Jacob</td>
                        <td>Jacob</td>
                      </tr>
                      <tr>
                        <td>Jacob</td>
                        <td>@twitter</td>
                      </tr>
                      <tr>
                          <td>Jacob</td>
                        <td>@twitter</td>
                      </tr>
                      <tr>
                          <td>Jacob</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
<!--end modal-->
<!---banner-->
<svg fill="none" class="closeicon" id="closeicon" viewBox="0 0 24 24" size="30" onclick="closeExpandedView()" class="css-11md2ba" color="textSecondary" height="30" width="30" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.81304 5.75263C6.52015 5.45974 6.04528 5.45974 5.75238 5.75263C5.45949 6.04552 5.45949 6.5204 5.75238 6.81329L10.8789 11.9398L5.75241 17.0663C5.45952 17.3592 5.45952 17.8341 5.75241 18.127C6.0453 18.4199 6.52018 18.4199 6.81307 18.127L11.9396 13.0005L17.0661 18.127C17.359 18.4199 17.8339 18.4199 18.1268 18.127C18.4196 17.8341 18.4196 17.3592 18.1268 17.0663L13.0002 11.9398L18.1268 6.81329C18.4197 6.5204 18.4197 6.04552 18.1268 5.75263C17.8339 5.45974 17.359 5.45974 17.0661 5.75263L11.9396 10.8792L6.81304 5.75263Z" fill="#82869E"></path></svg>
<div class="contaner-fluid  mt-4" style="background-color: rgb(248, 248, 252);">
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
                            <img src="resources/frontend/assets/img/prolap1.jpg" class="img-fluid w-100" id="largeImage" onclick="expandImage()"> 
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ms-0 m-2 imgsmall ">
                            <img src="resources/frontend/assets/img/prolap3.jpg" class="img-fluid w-100" style="min-width: 50px;" onclick="changeLargeImage(this)"  onmouseover="changeLargeImage(this)">  
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ms-0 m-2 imgsmall ">
                            <img src="resources/frontend/assets/img/prolap3.jpg" class="img-fluid w-100" style="min-width: 50px;" onclick="changeLargeImage(this)"  onmouseover="changeLargeImage(this)">  
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ms-0 m-2 imgsmall ">
                            <img src="resources/frontend/assets/img/prolap3.jpg" class="img-fluid w-100" style="min-width: 50px;" onclick="changeLargeImage(this)"  onmouseover="changeLargeImage(this)">  
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ms-0 m-2 imgsmall ">
                            <img src="resources/frontend/assets/img/prolap4.jpg" class="img-fluid w-100" style="min-width: 50px;" onclick="changeLargeImage(this)"  onmouseover="changeLargeImage(this)">  
                        </div>
                        <div class="col-lg-2 col-md-2 col-2 ms-0 m-2 imgsmall ">
                            <img src="resources/frontend/assets/img/prolap4.jpg" class="img-fluid w-100" style="min-width: 50px;" onclick="changeLargeImage(this)"  onmouseover="changeLargeImage(this)">  
                        </div>
                        <hr class="dashed-line">
                           <div class="col-lg-12 m-2">
                            <!-- Danh sách gạch đầu hàng -->
                            <ul class="dashed-list" style="color:rgb(130, 134, 158);">
                                <li>CPU:  i5-12450H</li>
                                <li>Màn hình: 15.6" IPS (1920 x 1080)</li>
                                <li>RAM: 1 x 8GB DDR5 4800MHz</li>
                                <li>Đồ họa: RTX 4050 6GB GDDR6 / Intel UHD Graphics</li>
                            </ul>

                           </div>     
                    
                            </div>
                  </div>
                  <div class="col-lg-7 m-2">
                    <h5>Laptop MSI Cyborg 15 A12VE-412VN (i5-12450H) (Đen)</h5>
                    <span style="color:rgb(130, 134, 158); display: inline;"><small>Thương hiệu 
                        <p style="color: #00ccff; display: inline;">MSI</p> | SKU: 230603065</small></span>
                        <p class="price" style="color: blue;">2.290.000₫</p>
                        <p class="old-price">
                            <small style="text-decoration: line-through;">2.619.000₫</small>
                            <span class="discount" style="color: rgb(109, 109, 232);"><small>-12.562%</small></span>
                        </p>  
                        <hr class="dashed-line">
                        <span style="color:rgb(130, 134, 158); display: inline;">KHUYẾN MÃI ĐÃ NHẬN</span>
                        <div class="col-lg-12 mt-2"  style="display: flex; align-items: center;">
                            <img src="https://shopfront-cdn.tekoapis.com/cart/gift-filled.png" class="img-fluid " height="25" width="25">
                            <span style="color:rgb(130, 134, 158); display: inline;" class="ms-2">1x Mã giảm thêm 150.000đ cho một số chuột Logitech, Asus, Newmen, tai nghe Zidli</span>
                        </div>
                        <div class="col-lg-12 mt-2"  style="display: flex; align-items: center;">
                            <img src="https://shopfront-cdn.tekoapis.com/cart/gift-filled.png" class="img-fluid " height="25" width="25">
                            <span style="color:rgb(130, 134, 158); display: inline;" class="ms-2">1x Mã giảm thêm 150.000đ cho một số chuột Logitech, Asus, Newmen, tai nghe Zidli</span>
                        </div>
                        <div class="col-lg-12 mt-2"  style="display: flex; align-items: center;">
                            <img src="https://shopfront-cdn.tekoapis.com/cart/gift-filled.png" class="img-fluid " height="25" width="25">
                            <span style="color:rgb(130, 134, 158); display: inline;" class="ms-2">1x Mã giảm thêm 150.000đ cho một số chuột Logitech, Asus, Newmen, tai nghe Zidli</span>
                        </div>

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
                                <button  type="button" class="btn btn-outline-primary"  style="width:110%">Thêm vào giỏ hàng</button>
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
    <div class="row mt-4 shadow-lg rounded" style="background-color: rgb(255, 255, 255);max-width: 1180px; box-shadow:none !important;">
        <div class="col-lg-7 m-2">
           <span style="display: inline;" class="ms-2"><h5>Mô tả sản phẩm</h5></span>
           <span style="color:rgb(130, 134, 158); display: inline;" class="ms-2 mt-2">MSI, được biết đến như một
                trong những thương hiệu hàng đầu trong lĩnh vực laptop gaming, tiếp tục chứng minh sự đổi
                mới và sáng tạo của mình với chiếc laptop MSI Cyborg 15 A12VE-412VN. Điểm độc đáo của sản
                phẩm này không chỉ nằm ở thiết kế ngoại hình bắt mắt mà còn ở hiệu năng mạnh mẽ mà nó mang 
                lại.</span>
           </br>
                <span  class="ms-2 mt-2"><h6>Kích thước 359.36 x 250.34 x 21.95~22.9 mm phù hợp trải nghiệm gaming</h6></span>
                <span style="color:rgb(130, 134, 158); display: inline;" class="ms-2 mt-2">
                   Với kích thước 359.36 x 250.34 x 21.95~22.9 mm và trọng lượng chỉ 2 kg, MSI Cyborg 15 A12VE-412VN không thuộc dạng laptop siêu nhẹ, tuy nhiên, sự hy sinh về trọng lượng này là hoàn toàn đáng kể để có được trải nghiệm gaming chất lượng. Thiết kế của chiếc laptop này được chăm chút đặc biệt để tối ưu hóa trải nghiệm gaming, 
                   với các đường cắt và đèn LED RGB tạo nên vẻ đẹp độc đáo và thu hút
               </span>
               <img src="resources/frontend/assets/img/prolap1.jpg" class="img-fluid w-100 h-50" >
               </div>
        <div class="col-lg-4 m-2">
           <span style="display: inline;" class="ms-2"><h5>Thông tin chi tiết</h5></span>
           <table class="table table-striped text-center">
            <tbody>
              <tr>
                <td>Jacob</td>
                <td>Mark</td>
              </tr>
              <tr>
                <td>Jacob</td>
                <td>Jacob</td>
              </tr>
              <tr>
                <td>Jacob</td>
                <td>@twitter</td>
              </tr>
              <tr>
                  <td>Jacob</td>
                <td>@twitter</td>
              </tr>
              <tr>
                  <td>Jacob</td>
                <td>@twitter</td>
              </tr>
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

   </div> 
   <!-- đánh giá -->
   
    </div>
    <div class="col-lg-1"></div> 
   </div>

</div>


@endsection