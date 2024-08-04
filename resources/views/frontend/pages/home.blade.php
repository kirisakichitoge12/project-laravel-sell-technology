
@extends('frontend/layouts/master')

@section("content")


      <!---silde bỏ silde sẽ ko hơn padding--> 
      <div class="silde container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="resources/frontend/assets/img/banner01.jpg" class="d-block  img-fluid" alt="" style="width:100%;max-height:500px;">
                        </div>
                        <div class="carousel-item">
                          <img src="resources/frontend/assets/img/banner02.jpg" class="d-block img-fluid" alt="..." style="width:100%;max-height:500px;">
                        </div>
                        <div class="carousel-item">
                          <img src="resources/frontend/assets/img/banner03.jpg" class="d-block img-fluid" alt="..." style="width:100%;max-height:500px;">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
              </div>
              <div class="banner col-lg-12">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="row">
                              <div class="col-lg-2"></div>
                              <div class="col-lg-8">
                                  <div class="row py-4">
                                      <div class="col-lg-3 col-md-3 col-4 col-xs-6 col-6">
                                          <img src="resources/frontend/assets/img/laptop.jpg" class="banner01 border rounded rounded-img img-fluid">
                                      </div>
                                      <div class="col-lg-3 col-md-3 col-4 col-xs-6 col-6 ">
                                          <img src="resources/frontend/assets/img/manhinh.jpg" class="banner01 border rounded rounded-img img-fluid">
                                      </div>
                                      <div class="col-lg-3 col-md-3 col-4 col-xs-6 col-6 ">
                                          <img src="resources/frontend/assets/img/maylanh.jpg" class="banner01 border rounded rounded-img img-fluid">
                                      </div>
                                      <div class="col-lg-3 col-md-3 col-4 col-xs-6 col-6 ">
                                          <img src="resources/frontend/assets/img/sangtao.jpg" class="banner01 border rounded rounded-img img-fluid">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-2"></div>
                          </div>
                      </div>
                      
                  </div>
              </div>
          </div>
      </div>
      <!--end slide-->

  
      <!--sale01-->
      <div class=" container-fluid mt-5">
          <div class="row">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-10">
                  <ul class="nav nav-tabs" id="myTabs" role="tablist" style="border-bottom:none;">
                      <li class="nav-item" role="presentation">
                          <button class="nav-link active" style="color: rgb(78, 76, 76);"  id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">
                              <p class="p-0 m-0" style="color: rgb(78, 76, 76);font-weight: bold;" >Màn Hình Giá Tốt</p>
                              <small>Chốt ngay deal 21%</small>   
                          </button>
                      </li>
                      <li class="nav-item" role="presentation">
                          <button class="nav-link" id="additional-info-tab" style="color: rgb(78, 76, 76);" data-bs-toggle="tab" data-bs-target="#additional-info" type="button" role="tab" aria-controls="additional-info" aria-selected="false">
                              <p class="p-0 m-0" style="color: rgb(78, 76, 76);font-weight: bold;" >Thổi Bay Cái Nóng</p>
                              <small>Quạt chỉ từ 500k</small>   
                          </button>
                      </li> 
                  
                      <li class="nav-item" role="presentation">
                          <button class="nav-link" id="reviews-tab"  style="color:rgb(78, 76, 76);"data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">
                              <p class="p-0 m-0" style="color: rgb(78, 76, 76);font-weight: bold;" >Thiết Bị Văn Phòng</p>
                              <small>Giảm 20%</small>  
                          </button> 
                      </li>
                      <li class="nav-item" role="presentation">
                          <button class="nav-link" id="reviews-tab"  style="color:rgb(78, 76, 76);"data-bs-toggle="tab" data-bs-target="#phukiencatinh" type="button" role="tab" aria-controls="reviews" aria-selected="false">
                              <p class="p-0 m-0" style="color: rgb(78, 76, 76);font-weight: bold;" >Phụ Kiện Cá Tính</p>
                              <small>Giảm 100k</small>  
                          </button> 
                      </li>
                  </ul>
                  <div class="products tab-content" id="myTabsContent">
                      <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                      
  
                          <div id="product-carousel" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner ">
                                  <div class=" carousel-item active">
                                  
                                      <div class="row">
  
                                          <div class="col-lg-3">
                                          <p class="time">Kết thúc sau 2 ngày</p>
                                          <div id="countdown" ></div>
                                          </div>
                                         @foreach($manhinh as $pro)
                                          <div class="col-lg-2 col-md-4 col-4 col-6 mt-4 p-2">
                                          <a class="chitietsp" href="chi-tiet-san-pham/{{$pro->id}}">
                                              <div class="card" style="min-height: 350px;">
                                                  <div class="image-container">
                                                     <img src="resources/frontend/assets/img/{{$pro->image}}" class="card-img-top m-0 w-100 img-fluid"  alt="Product 12">
                                                  </div>
                                              <div class="card-body">
                                                  <h6 class="card-title" style="color: rgb(130, 127, 127);">{{$pro->trademark}}</h6>
                                                  <div class="product-info">
                                                      <p class="card-text"><small>{{ substr($pro->name, 0, 40) }} ... </small></p>
                                                      <p class="price" style="color: blue;"> {{ number_format($pro->promotion_price, 0, ',', '.') }}đ</p>
                                                      <p class="old-price">
                                                          <small style="text-decoration: line-through;"> {{ number_format($pro->unit_price, 0, ',', '.') }}đ</small>
                                                          <span class="discount" style="color: rgb(109, 109, 232);"><small>{{ round((($pro->unit_price-$pro->promotion_price)/$pro->unit_price)*100)}}%</small></span>
                                                      </p>                                                      
                                                  </div>
                                                  
                                              </div>
                                              </div>
                                              </a>
                                          </div>        
                                         @endforeach

                                      
                                      </div>
                                  </div>
  
                                  <div class=" carousel-item ">
                                  
                                      <div class="row">
  
                                      <div class="col-lg-3">
                                          
                                      </div>
  
                                      @foreach($tivi as $pro)
                                          <div class="col-lg-2 col-md-4 col-4 col-6 mt-4 p-2">
                                          <a class="chitietsp" href="chi-tiet-san-pham/{{$pro->id}}">
                                              <div class="card" style="min-height: 350px;">
                                                  <div class="image-container">
                                                      <img src="resources/frontend/assets/img/{{$pro->image}}" class="card-img-top m-0 w-100 img-fluid"  alt="Product 12">
                                                  </div>
                                              <div class="card-body">
                                                  <h6 class="card-title" style="color: rgb(130, 127, 127);">{{$pro->trademark}}</h6>
                                                  <div class="product-info">
                                                      <p class="card-text"><small>{{ substr($pro->name, 0, 40) }} ... </small></p>
                                                      <p class="price" style="color: blue;"> {{ number_format($pro->promotion_price, 0, ',', '.') }}đ</p>
                                                      <p class="old-price">
                                                          <small style="text-decoration: line-through;"> {{ number_format($pro->unit_price, 0, ',', '.') }}đ</small>
                                                          <span class="discount" style="color: rgb(109, 109, 232);"><small>{{ round((($pro->unit_price-$pro->promotion_price)/$pro->unit_price)*100)}}%</small></span>
                                                      </p>                                                      
                                                  </div>
                                                  
                                              </div>
                                              </div>
                                         </a>
                                          </div>        
                                         @endforeach
                                  
                                  </div>
                              </div>
  
  
                              </div>
                              <button class="carousel-control-prev" type="button"  data-bs-target="#product-carousel" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
                                  <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#product-carousel" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                              </button>
                          </div>
                          
  
  
  
  
  
                      </div>
                      <div class="tab-pane fade" id="additional-info" role="tabpanel" aria-labelledby="additional-info-tab">
                       
                      <div id="product-carousel" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner ">
                                  <div class=" carousel-item active">
                                  
                                      <div class="row">
  
                                          <div class="col-lg-3">
                                          <p class="time">Kết thúc sau 2 ngày</p>
                                          <div id="countdown" ></div>
                                          </div>
                                         @foreach($maylanh as $pro)
                                          <div class="col-lg-2 col-md-4 col-4 col-6 mt-4 p-2">
                                          <a class="chitietsp" href="chi-tiet-san-pham/{{$pro->id}}">
                                              <div class="card" style="min-height: 350px;">
                                                  <div class="image-container">
                                                      <img src="resources/frontend/assets/img/{{$pro->image}}" class="card-img-top m-0 w-100 img-fluid"  alt="Product 12">
                                                  </div>
                                              <div class="card-body">
                                                  <h6 class="card-title" style="color: rgb(130, 127, 127);">{{$pro->trademark}}</h6>
                                                  <div class="product-info">
                                                      <p class="card-text"><small>{{ substr($pro->name, 0, 40) }} ... </small></p>
                                                      <p class="price" style="color: blue;"> {{ number_format($pro->promotion_price, 0, ',', '.') }}đ</p>
                                                      <p class="old-price">
                                                          <small style="text-decoration: line-through;"> {{ number_format($pro->unit_price, 0, ',', '.') }}đ</small>
                                                          <span class="discount" style="color: rgb(109, 109, 232);"><small>{{ round((($pro->unit_price-$pro->promotion_price)/$pro->unit_price)*100)}}%</small></span>
                                                      </p>                                                      
                                                  </div>
                                                  
                                              </div>
                                              </div>
                                          </a>
                                          </div>        
                                         @endforeach

                                      
                                      </div>
                                  </div>
  
  
  
                              </div>
                          </div>
                          
  
                      </div>
                      <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        
                      <div id="product-carousel" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner ">
                                  <div class=" carousel-item active">
                                  
                                      <div class="row">
  
                                          <div class="col-lg-3">
                                          <p class="time">Kết thúc sau 2 ngày</p>
                                          <div id="countdown" ></div>
                                          </div>
                                         @foreach($thietbivanphong as $pro)
                                          <div class="col-lg-2 col-md-4 col-4 col-6 mt-4 p-2">
                                          <a class="chitietsp" href="chi-tiet-san-pham/{{$pro->id}}">
                                              <div class="card" style="min-height: 350px;">
                                                  <div class="image-container">
                                                      <img src="resources/frontend/assets/img/{{$pro->image}}" class="card-img-top m-0 w-100 img-fluid"  alt="Product 12">
                                                  </div>
                                              <div class="card-body">
                                                  <h6 class="card-title" style="color: rgb(130, 127, 127);">{{$pro->trademark}}</h6>
                                                  <div class="product-info">
                                                      <p class="card-text"><small>{{ substr($pro->name, 0, 40) }} ... </small></p>
                                                      <p class="price" style="color: blue;"> {{ number_format($pro->promotion_price, 0, ',', '.') }}đ</p>
                                                      <p class="old-price">
                                                          <small style="text-decoration: line-through;"> {{ number_format($pro->unit_price, 0, ',', '.') }}đ</small>
                                                          <span class="discount" style="color: rgb(109, 109, 232);"><small>{{ round((($pro->unit_price-$pro->promotion_price)/$pro->unit_price)*100)}}%</small></span>
                                                      </p>                                                      
                                                  </div>
                                                  
                                              </div>
                                              </div>
                                          </a>
                                          </div>        
                                         @endforeach

                                      
                                      </div>
                                  </div>
  
  
  
                              </div>
                          </div>
                          
  
                      </div>
                      <div class="tab-pane fade" id="phukiencatinh" role="tabpanel" aria-labelledby="newtab">
                         
                      <div id="product-carousel" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner ">
                                  <div class=" carousel-item active">
                                  
                                      <div class="row">
  
                                          <div class="col-lg-3">
                                          <p class="time">Kết thúc sau 2 ngày</p>
                                          <div id="countdown" ></div>
                                          </div>
                                         @foreach($phukiencanhan as $pro)
                                          <div class="col-lg-2 col-md-4 col-4 col-6 mt-4 p-2">
                                          <a class="chitietsp" href="chi-tiet-san-pham/{{$pro->id}}">
                                              <div class="card" style="min-height: 350px;">
                                                  <div class="image-container">
                                                      <img src="resources/frontend/assets/img/{{$pro->image}}" class="card-img-top m-0 w-100 img-fluid"  alt="Product 12">
                                                  </div>
                                              <div class="card-body">
                                                  <h6 class="card-title" style="color: rgb(130, 127, 127);">{{$pro->trademark}}</h6>
                                                  <div class="product-info">
                                                      <p class="card-text"><small>{{ substr($pro->name, 0, 40) }} ... </small></p>
                                                      <p class="price" style="color: blue;"> {{ number_format($pro->promotion_price, 0, ',', '.') }}đ</p>
                                                      <p class="old-price">
                                                          <small style="text-decoration: line-through;"> {{ number_format($pro->unit_price, 0, ',', '.') }}đ</small>
                                                          <span class="discount" style="color: rgb(109, 109, 232);"><small>{{ round((($pro->unit_price-$pro->promotion_price)/$pro->unit_price)*100)}}%</small></span>
                                                      </p>                                                      
                                                  </div>
                                                  
                                              </div>
                                              </div>
                                          </a> 
                                          </div>        
                                         @endforeach

                                      
                                      </div>
                                  </div>
  
  
  
                              </div>
                          </div>
                          
  
                      </div>
  
                  </div>
          </div>
          <div class="col-lg-1"></div>
          </div>
      </div>
      <!--end sale01-->
  
  <!--sale02-->
  
  <div class="container-fluid mt-4">
      <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
              <ul class="nav nav-tabs" id="myTabs" role="tablist" style="border-bottom: 0px;">
                  <li class="nav-item col-lg-6 col-6" role="presentation">
                      <button class="salenow active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
                          <p class="p-0 m-0 sale2"  >iPhone 15 series giảm thêm 300K + bảo hành 24 tháng &nbsp;&nbsp;&nbsp;&nbsp;</p>
                          <small style="color: rgb(78, 76, 76);">Nhập mã PVAP240401</small>   
                      </button>
                  </li>
                  <li class="nav-item col-lg-6 col-6" role="presentation">
                      <button class="salenow " id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">
                          <p class="p-0 m-0 sale2 sale2new" >&nbsp;Macbook M3 Giảm thêm 200K tặng túi đựng laptop sịn </p>
                          <small  style="color: rgb(78, 76, 76);">Nhập mã PVAP240402</small>   
                      </button>
                  </li>
              </ul>
              <div class="sale tab-content" id="myTabsContent">
                  <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                     
                      <div class="row">
  
                          <div class="col-lg-3">
                          </div>   
  
                          @foreach($iphone as $pro)
                          
                                          <div class="col-lg-2 col-md-4 col-4 col-6 mt-4 p-2">
                                          <a class="chitietsp" href="chi-tiet-san-pham/{{$pro->id}}">
                                              <div class="card" style="min-height: 350px;">
                                                  <div class="image-container">
                                                      <img src="resources/frontend/assets/img/{{$pro->image}}" class="card-img-top m-0 w-100 img-fluid"  alt="Product 12">
                                                  </div>
                                              <div class="card-body">
                                                  <h6 class="card-title" style="color: rgb(130, 127, 127);">{{$pro->trademark}}</h6>
                                                  <div class="product-info">
                                                      <p class="card-text"><small>{{ substr($pro->name, 0, 40) }} ... </small></p>
                                                      <p class="price" style="color: blue;"> {{ number_format($pro->promotion_price, 0, ',', '.') }}đ</p>
                                                      <p class="old-price">
                                                          <small style="text-decoration: line-through;"> {{ number_format($pro->unit_price, 0, ',', '.') }}đ</small>
                                                          <span class="discount" style="color: rgb(109, 109, 232);"><small>{{ round((($pro->unit_price-$pro->promotion_price)/$pro->unit_price)*100)}}%</small></span>
                                                      </p>                                                      
                                                  </div>
                                                  
                                              </div>
                                              </div>
                                          </a> 
                                          </div>    
                             
                                         @endforeach
                      
                      </div>
  
                  </div>
                  <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                  <div class="row">
  
  <div class="col-lg-3">
  </div>   

  @foreach($ipad as $pro)
                  <div class="col-lg-2 col-md-4 col-4 col-6 mt-4 p-2">
                  <a class="chitietsp" href="chi-tiet-san-pham/{{$pro->id}}">
                      <div class="card" style="min-height: 350px;">
                          <div class="image-container">
                              <img src="resources/frontend/assets/img/{{$pro->image}}" class="card-img-top m-0 w-100 img-fluid"  alt="Product 12">
                          </div>
                      <div class="card-body">
                          <h6 class="card-title" style="color: rgb(130, 127, 127);">{{$pro->trademark}}</h6>
                          <div class="product-info">
                              <p class="card-text"><small>{{ substr($pro->name, 0, 40) }} ... </small></p>
                              <p class="price" style="color: blue;"> {{ number_format($pro->promotion_price, 0, ',', '.') }}đ</p>
                              <p class="old-price">
                                  <small style="text-decoration: line-through;"> {{ number_format($pro->unit_price, 0, ',', '.') }}đ</small>
                                  <span class="discount" style="color: rgb(109, 109, 232);"><small>{{ round((($pro->unit_price-$pro->promotion_price)/$pro->unit_price)*100)}}%</small></span>
                              </p>                                                     
                          </div>
                          
                      </div>
                      </div>
                  </a>
                  </div>        
                 @endforeach

</div>
                  </div>
              </div>
          </div>
          <div class="col-lg-1"></div>
      </div>
  </div>
  
  <!--end sale02-->
  
  
  <!--category-->
  <div class="container-fluid  mt-4 ">
      <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10  ">   
           <div class="container-fluid mt-2 shadow-lg">
              <div class="row">
                  <h5 class="d-inline" style="color:rgb(52, 52, 52);">Danh mục nổi bật</h5>
                  <div class="col-lg-2 col-md-4 col-4 p-2 no-p-m">
                  <div class="danhmuc" style="border:none">
                      <div class="rounded-circle overflow-hidden mx-auto bg-light position-relative p-2" style="width: 100px; height: 100px;">
                      <!-- Khung hình ảnh bo tròn -->
                      <img src="resources/frontend/assets/img/Pasted-20240317-225607_preview_rev_1.png" style="width: 80px; height: 60px;" class="resources/frontend/assets/img-fluid  position-absolute bottom-0 start-50 translate-middle-x" alt="...">
                      </div>
                      <div class="card-body text-center mb-2">
                      <!-- Khung văn bản có thể bo tròn -->
                      <p class="card-text rounded">Điện thoại</p>
                      </div>
                  </div>
                  
                  
                  </div>
                  <div class="col-lg-2 col-md-4 col-4 p-2  no-p-m">
                  <div class="danhmuc" style="border:none">
                      <div class="rounded-circle overflow-hidden mx-auto bg-light position-relative p-2" style="width: 100px; height: 100px;">
                      <!-- Khung hình ảnh bo tròn -->
                      <img src="resources/frontend/assets/img/Pasted-20240317-231702_preview_rev_1.png" style="width: 80px; height: 60px;" class="resources/frontend/assets/img-fluid  position-absolute bottom-0 start-50 translate-middle-x" alt="...">
                      </div>
                      <div class="card-body text-center mb-2">
                      <!-- Khung văn bản có thể bo tròn -->
                      <p class="card-text rounded">Laptop</p>
                      </div>
                  </div>
                  
                  
                  </div>
                  <div class="col-lg-2 col-md-4 col-4 p-2 no-p-m">
                  <div class="danhmuc" style="border:none">
                      <div class="rounded-circle overflow-hidden mx-auto bg-light position-relative p-2" style="width: 100px; height: 100px;">
                      <!-- Khung hình ảnh bo tròn -->
                      <img src="resources/frontend/assets/img/Pasted-20240317-231914_preview_rev_1.png" style="width: 80px; height: 60px;" class="resources/frontend/assets/img-fluid  position-absolute bottom-0 start-50 translate-middle-x" alt="...">
                      </div>
                      <div class="card-body text-center mb-2">
                      <!-- Khung văn bản có thể bo tròn -->
                      <p class="card-text rounded">Máy tính bảng</p>
                      </div>
                  </div>
                  
                  
                  </div>
                  <div class="col-lg-2 col-md-4 col-4 p-2 no-p-m">
                  <div class="danhmuc" style="border:none">
                      <div class="rounded-circle overflow-hidden mx-auto bg-light position-relative p-2" style="width: 100px; height: 100px;">
                      <!-- Khung hình ảnh bo tròn -->
                      <img src="resources/frontend/assets/img/Pasted-20240317-232332_preview_rev_1.png" style="width: 80px; height: 60px;" class="resources/frontend/assets/img-fluid  position-absolute bottom-0 start-50 translate-middle-x" alt="...">
                      </div>
                      <div class="card-body text-center mb-2">
                      <!-- Khung văn bản có thể bo tròn -->
                      <p class="card-text rounded">Hàng gia dụng</p>
                      </div>
                  </div>
                  
                  
                  </div>
                  <div class="col-lg-2 col-md-4 col-4 p-2 no-p-m">
                  <div class="danhmuc" style="border:none">
                      <div class="rounded-circle overflow-hidden mx-auto bg-light position-relative p-2" style="width: 100px; height: 100px;">
                      <!-- Khung hình ảnh bo tròn -->
                      <img src="resources/frontend/assets/img/Pasted-20240317-232544_preview_rev_1.png" style="width: 80px; height:60px;" class="resources/frontend/assets/img-fluid  position-absolute bottom-0 start-50 translate-middle-x" alt="...">
                      </div>
                      <div class="card-body text-center mb-2">
                      <!-- Khung văn bản có thể bo tròn -->
                      <p class="card-text rounded">Máy lạnh- máy điều hòa</p>
                      </div>
                  </div>
                  
                  
                  </div>
                  <div class="col-lg-2 col-md-4 col-4 p-2 no-p-m">
                  <div class="danhmuc" style="border:none">
                      <div class="rounded-circle overflow-hidden mx-auto bg-light position-relative p-2" style="width: 100px; height: 100px;">
                      <!-- Khung hình ảnh bo tròn -->
                      <img src="resources/frontend/assets/img/Pasted-20240317-232955_preview_rev_1.png" style="width: 80px; height:60px;" class="resources/frontend/assets/img-fluid  position-absolute bottom-0 start-50 translate-middle-x" alt="...">
                      </div>
                      <div class="card-body text-center mb-2">
                      <!-- Khung văn bản có thể bo tròn -->
                      <p class="card-text rounded">Tivi</p>
                      </div>
                  </div>
                  
                  
                  </div>
                  <div class="col-lg-2 col-md-4 col-4 p-2 no-p-m">
                  <div class="danhmuc" style="border:none">
                      <div class="rounded-circle overflow-hidden mx-auto bg-light position-relative p-2" style="width: 100px; height: 100px;">
                      <!-- Khung hình ảnh bo tròn -->
                      <img src="resources/frontend/assets/img/Pasted-20240317-233237_preview_rev_1.png" style="width: 80px; height:60px;" class="resources/frontend/assets/img-fluid  position-absolute bottom-0 start-50 translate-middle-x" alt="...">
                      </div>
                      <div class="card-body text-center mb-2">
                      <!-- Khung văn bản có thể bo tròn -->
                      <p class="card-text rounded">Thiết bị Xiaomi</p>
                      </div>
                  </div>
                  
                  
                  </div>
                  <div class="col-lg-2 col-md-4 col-4 p-2 no-p-m">
                  <div class="danhmuc" style="border:none">
                      <div class="rounded-circle overflow-hidden mx-auto bg-light position-relative p-2" style="width: 100px; height: 100px;">
                      <!-- Khung hình ảnh bo tròn -->
                      <img src="resources/frontend/assets/img/Pasted-20240317-233527_preview_rev_1.png" style="width: 80px; height: 60px;" class="resources/frontend/assets/img-fluid  position-absolute bottom-0 start-50 translate-middle-x" alt="...">
                      </div>
                      <div class="card-body text-center mb-2">
                      <!-- Khung văn bản có thể bo tròn -->
                      <p class="card-text rounded">Apple</p>
                      </div>
                  </div>
                  
                  
                  </div>
                  <div class="col-lg-2 col-md-4 col-4 p-2 no-p-m">
                  <div class="danhmuc" style="border:none">
                      <div class="rounded-circle overflow-hidden mx-auto bg-light position-relative p-2" style="width: 100px; height: 100px;">
                      <!-- Khung hình ảnh bo tròn -->
                      <img src="resources/frontend/assets/img/Pasted-20240317-233843_preview_rev_1.png" style="width: 80px; height:60px;" class="resources/frontend/assets/img-fluid  position-absolute bottom-0 start-50 translate-middle-x" alt="...">
                      </div>
                      <div class="card-body text-center mb-2">
                      <!-- Khung văn bản có thể bo tròn -->
                      <p class="card-text rounded">Samsung</p>
                      </div>
                  </div>
                  
                  
                  </div>
                  <div class="col-lg-2 col-md-4 col-4 p-2 no-p-m">
                  <div class="danhmuc" style="border:none">
                      <div class="rounded-circle overflow-hidden mx-auto bg-light position-relative p-2" style="width: 100px; height: 100px;">
                      <!-- Khung hình ảnh bo tròn -->
                      <img src="resources/frontend/assets/img/Pasted-20240317-234431_preview_rev_1.png" style="width: 80px; height:60px;" class="resources/frontend/assets/img-fluid  position-absolute bottom-0 start-50 translate-middle-x" alt="...">
                      </div>
                      <div class="card-body text-center mb-2">
                      <!-- Khung văn bản có thể bo tròn -->
                      <p class="card-text rounded">Sim FPT</p>
                      </div>
                  </div>
                  
                  
                  </div>
                  <div class="col-lg-2 col-md-4 col-4 p-2 no-p-m">
                  <div class="danhmuc" style="border:none">
                      <div class="rounded-circle overflow-hidden mx-auto bg-light position-relative p-2" style="width: 100px; height: 100px;">
                      <!-- Khung hình ảnh bo tròn -->
                      <img src="resources/frontend/assets/img/Pasted-20240317-234606_preview_rev_1.png" style="width: 80px; height: 60px;" class="resources/frontend/assets/img-fluid  position-absolute bottom-0 start-50 translate-middle-x" alt="...">
                      </div>
                      <div class="card-body text-center mb-2">
                      <!-- Khung văn bản có thể bo tròn -->
                      <p class="card-text rounded">Đồng hồ thông minh</p>
                      </div>
                  </div>
                  
                  
                  </div>
                  <div class="col-lg-2 col-md-4 col-4 p-2 no-p-m">
                  <div class="danhmuc" style="border:none">
                      <div class="rounded-circle overflow-hidden mx-auto bg-light position-relative p-2" style="width: 100px; height: 100px;">
                      <!-- Khung hình ảnh bo tròn -->
                      <img src="resources/frontend/assets/img/Pasted-20240317-234810_preview_rev_1.png" style="width: 80px; height:60px;" class="resources/frontend/assets/img-fluid  position-absolute bottom-0 start-50 translate-middle-x" alt="...">
                      </div>
                      <div class="card-body text-center mb-2">
                      <!-- Khung văn bản có thể bo tròn -->
                      <p class="card-text rounded">Phụ kiện</p>
                      </div>
                  </div>
                  
                  
                  </div>
                
      
          
              </div>
           </div>
          </div>
      <div class="col-lg-1"></div>
      </div>
  
    </div>
  <!---end category-->
  
  
  
  
  <!--product laptop-->
  <div class="container-fluid  mt-4 ">
      <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            
             <div class="container-fluid mt-2">
              <div class="row shadow-lg bnlaptop">
                  <div class="col-lg-12">
                    <h3 class="d-inline" style="color:rgb(255, 255, 255);">LAPTOP</h2>
                    <small class="float-end" style="color:rgb(255, 255, 255);">Xem tất cả >></small>
                    <hr>
                    <div class="row contentcenter"> 
                        @foreach($laptop as $pro)
                       
                        <div class="laptop col-lg-3 col-md-4  col-5 m-1" >
                            <div class="border-0s" >
                            <a class="chitietsp" href="chi-tiet-san-pham/{{$pro->id}}">
                               <div class="image-container">
                                     <img src="resources/frontend/assets/img/{{$pro->image}}" class="card-img-top m-0 w-100 img-fluid"  alt="Product 1">
                               </div>
                                <div class="card-body m-2">
                                    <h6 class="card-title" style="color: rgb(130, 127, 127);">{{$pro->trademark}}</h6>
                                    <div class="product-info">
                                        <p class="card-text"><small>{{ substr($pro->name, 0, 40) }} ... </small></p>
                                        <p class="price" style="color: blue;">{{ number_format($pro->promotion_price, 0, ',', '.') }}đ</p>
                                        <p class="old-price">
                                            <small style="text-decoration: line-through;">{{ number_format($pro->unit_price, 0, ',', '.') }}đ</small>
                                            <span class="discount" style="color: rgb(109, 109, 232);"><small>{{ round((($pro->unit_price-$pro->promotion_price)/$pro->unit_price)*100)}}%</small></span>
                                        </p>                                                      
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div> 
                        
                        @endforeach
                    </div>
                  </div>
    
              
                
                
                </div>
             </div>
  
          </div>
      <div class="col-lg-1"></div>
      </div>
  
    </div>
  <!--end product01-->
  
  <!--product linh kiện-->
  <div class="container-fluid  mt-4 ">
      <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            
         <div class="container-fluid mt-2">
          <div class="row shadow-lg bnlk">
              <div class="col-lg-12">
                <h3 class="d-inline" style="color:rgb(255, 255, 255);">LINH KIỆN</h2>
                <small class="float-end" style="color:rgb(255, 255, 255);">Xem tất cả >></small>
                <hr>
                <div class="row contentcenter"> 
                @foreach($linhkien as $pro)
                        <div class="laptop col-lg-3 col-md-4  col-5 m-1" >
                            <div class="border-0s" >
                            <a class="chitietsp" href="chi-tiet-san-pham/{{$pro->id}}">
                               <div class="image-container">
                                     <img src="resources/frontend/assets/img/{{$pro->image}}" class="card-img-top m-0 w-100 img-fluid"  alt="Product 1">
                               </div>
                                <div class="card-body m-2">
                                    <h6 class="card-title" style="color: rgb(130, 127, 127);">{{$pro->trademark}}</h6>
                                    <div class="product-info">
                                        <p class="card-text"><small>{{ substr($pro->name, 0, 40) }} ... </small></p>
                                        <p class="price" style="color: blue;">{{ number_format($pro->promotion_price, 0, ',', '.') }}đ</p>
                                        <p class="old-price">
                                            <small style="text-decoration: line-through;">{{ number_format($pro->unit_price, 0, ',', '.') }}đ</small>
                                            <span class="discount" style="color: rgb(109, 109, 232);"><small>{{ round((($pro->unit_price-$pro->promotion_price)/$pro->unit_price)*100)}}%</small></span>
                                        </p>                                                      
                                    </div>
                                </div>
                            </a> 
                            </div>
                        </div> 
                        @endforeach
                   
                </div>
              </div>
  
          
            
            
            </div>
  
         </div>
          </div>
      <div class="col-lg-1"></div>
      </div>
  
    </div>
  <!--end product01-->
  
  
  <!--product màn hình-->
  <div class="container-fluid  mt-4 ">
      <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <div class="container mt-2">
              <div class="row shadow-lg bnmh">
                  <div class="col-lg-12">
                    <h3 class="d-inline" style="color:rgb(255, 255, 255);">Màn Hình</h2>
                    <small class="float-end" style="color:rgb(255, 255, 255);">Xem tất cả >></small>
                    <hr>
                    <div class="row contentcenter"> 
                    @foreach($mh as $pro)
                        <div class="laptop col-lg-3 col-md-4  col-5 m-1" >
                            <div class="border-0s" >
                            <a class="chitietsp" href="chi-tiet-san-pham/{{$pro->id}}">
                               <div class="image-container">
                                     <img src="resources/frontend/assets/img/{{$pro->image}}" class="card-img-top m-0 w-100 img-fluid"  alt="Product 1">
                               </div>
                                <div class="card-body m-2">
                                    <h6 class="card-title" style="color: rgb(130, 127, 127);">{{$pro->trademark}}</h6>
                                    <div class="product-info">
                                        <p class="card-text"><small>{{ substr($pro->name, 0, 40) }} ... </small></p>
                                        <p class="price" style="color: blue;">{{ number_format($pro->promotion_price, 0, ',', '.') }}đ</p>
                                        <p class="old-price">
                                            <small style="text-decoration: line-through;">{{ number_format($pro->unit_price, 0, ',', '.') }}đ</small>
                                            <span class="discount" style="color: rgb(109, 109, 232);"><small>{{ round((($pro->unit_price-$pro->promotion_price)/$pro->unit_price)*100)}}%</small></span>
                                        </p>                                                      
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div> 
                        @endforeach
                    </div>
                  </div>  
                </div>
            </div>
          </div>
      <div class="col-lg-1"></div>
      </div>
  
    </div>
  <!--end product01-->
  
  
  <!--product game -->
  <div class="container-fluid  mt-4 ">
      <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            
             <div class="container mt-2">
              <div class="row shadow-lg bngaming">
                  <div class="col-lg-12">
                    <h3 class="d-inline" style="color:rgb(255, 255, 255);">GAMING GEAR</h2>
                    <small class="float-end" style="color:rgb(255, 255, 255);">Xem tất cả >></small>
                    <hr>
                    <div class="row contentcenter"> 
                    @foreach($game as $pro)
                        <div class="laptop col-lg-3 col-md-4  col-5 m-1" >
                            <div class="border-0s" >
                            <a class="chitietsp" href="chi-tiet-san-pham/{{$pro->id}}">
                               <div class="image-container">
                                     <img src="resources/frontend/assets/img/{{$pro->image}}" class="card-img-top m-0 w-100 img-fluid"  alt="Product 1">
                               </div>
                                <div class="card-body m-2">
                                    <h6 class="card-title" style="color: rgb(130, 127, 127);">{{$pro->trademark}}</h6>
                                    <div class="product-info">
                                        <p class="card-text"><small>{{ substr($pro->name, 0, 40) }} ... </small></p>
                                        <p class="price" style="color: blue;">{{ number_format($pro->promotion_price, 0, ',', '.') }}đ</p>
                                        <p class="old-price">
                                            <small style="text-decoration: line-through;">{{ number_format($pro->unit_price, 0, ',', '.') }}đ</small>
                                            <span class="discount" style="color: rgb(109, 109, 232);"><small>{{ round((($pro->unit_price-$pro->promotion_price)/$pro->unit_price)*100)}}%</small></span>
                                        </p>                                                      
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div> 
                        @endforeach
                    </div>
                  </div>
    
              
                
                
                </div>
             </div>
  
          </div>
      <div class="col-lg-1"></div>
      </div>
  
    </div>
  <!--end product01-->
  
  
  
  
  <!--product dienmay-->
  <div class="container-fluid  mt-4 ">
      <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            
             <div class="container mt-2">
              <div class="row shadow-lg bngd">
                  <div class="col-lg-12">
                    <h3 class="d-inline" style="color:rgb(255, 255, 255);">GIA DỤNG</h2>
                    <small class="float-end" style="color:rgb(255, 255, 255);">Xem tất cả >></small>
                    <hr>
                    <div class="row contentcenter"> 
                    @foreach($giadung as $pro)
                        <div class="laptop col-lg-3 col-md-4  col-5 m-1" >
                            <div class="border-0s" >
                            <a class="chitietsp" href="chi-tiet-san-pham/{{$pro->id}}">
                               <div class="image-container">
                                     <img src="resources/frontend/assets/img/{{$pro->image}}" class="card-img-top m-0 w-100 img-fluid"  alt="Product 1">
                               </div>
                                <div class="card-body m-2">
                                    <h6 class="card-title" style="color: rgb(130, 127, 127);">{{$pro->trademark}}</h6>
                                    <div class="product-info">
                                        <p class="card-text"><small>{{ substr($pro->name, 0, 40) }} ... </small></p>
                                        <p class="price" style="color: blue;">{{ number_format($pro->promotion_price, 0, ',', '.') }}đ</p>
                                        <p class="old-price">
                                            <small style="text-decoration: line-through;">{{ number_format($pro->unit_price, 0, ',', '.') }}đ</small>
                                            <span class="discount" style="color: rgb(109, 109, 232);"><small>{{ round((($pro->unit_price-$pro->promotion_price)/$pro->unit_price)*100)}}%</small></span>
                                        </p>                                                      
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div> 
                        @endforeach
                    </div>
                  </div>
                </div>
             </div>
  
          </div>
      <div class="col-lg-1"></div>
      </div>
  
    </div>
  <!--end product01-->
  
  <!--welcome-->
  <div class="container-fluid mt-4">
      <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
          <img src="resources/frontend/assets/img/welcom.png" class="img-fluid w-100">
          </div>
          <div class="col-lg-1"></div>
     </div>
  </div>
  <!--endwelcome-->
  
  <!--products sales-->
  <div class="container-fluid  mt-4 ">
      <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            
              <div class="row">
                <div class="col-lg-12" >
                  <div class="container-fluid mt-2 p-0 rounded" style="background-color: rgb(255, 255, 255);">
                      <div class="m-2">
                          <h3 class="d-inline d-flex justify-content-center p-2" style="color:rgb(52, 52, 52);margin-top: 5px;">SẢN PHẨM NỔI BẬT</h3>
                      </div>
                      <div class="container mb-3">
                        <div class="row">
                          @foreach($noibat as $pro)
                          <div class="col-lg-2 col-md-4 col-6 mt-2 no-p-m">
                            <div class="card shadow-sm" style="max-height: 370px; max-height: 370px; border: 1px solid #dee2e6; border-radius: 0;">
                            <a class="chitietsp" href="chi-tiet-san-pham/{{$pro->id}}">
                            <div class="image-container">
                                 <img src="resources/frontend/assets/img/{{$pro->image}}" class="card-img-top m-0 w-100 img-fluid"  alt="Product 1">
                             </div>
                              <div class="card-body m-2">
                                  <h6 class="card-title" style="color: rgb(130, 127, 127);">{{$pro->trademark}}</h6>
                                  <div class="product-info">
                                      <p class="card-text"><small>{{ substr($pro->name, 0, 40) }} ...</small></p>
                                      <p class="price" style="color: blue;">{{ number_format($pro->promotion_price, 0, ',', '.') }}đ</p>
                                      <p class="old-price">
                                          <small style="text-decoration: line-through;">{{ number_format($pro->unit_price, 0, ',', '.') }}đ</small>
                                          <span class="discount" style="color: rgb(109, 109, 232);"><small>{{ round((($pro->unit_price-$pro->promotion_price)/$pro->unit_price)*100)}}%</small></span>
                                      </p>                                                      
                                  </div>
                              </div>
                            </a>
                            </div>
                            
                            
                          </div>
                          @endforeach
                          
                        </div>
                      </div>
                
                  </div>
                </div>
  
               <!---content-->
              
               
  
          </div>
      <div class="col-lg-1"></div>
      </div>
  
    </div>
  <!--endproducts sale-->
  
  
  
  </div>
  <!--end prodctsale-->
  
  <!--thương hiệu độc quyền-->
  <div class="container-fluid mt-4">
      <div class="row">
         <div class="col-lg-1"></div>
         <div class="col-lg-10">
             <h3 class="d-inline" style="color:rgb(52, 52, 52);">Thương hiệu độc quyền</h3>
             <div id="carouselExample" class="carousel slide mt-2">
                 <div class="carousel-inner">
                   <div class="carousel-item active">
                    <div class="row">
                     <div class="col-lg-4">
                         <img src="resources/frontend/assets/img/bntgdd.jpg" class="img-fluid w-100">
                     </div>
                     <div class="col-lg-4">
                         <img src="resources/frontend/assets/img/bntgdd1.jpg" class="img-fluid w-100">
                     </div>
                     <div class="col-lg-4">
                         <img src="resources/frontend/assets/img/bntgdd2.jpg" class="img-fluid w-100">
                     </div>
                     
                    </div>
                   </div>
                   <div class="carousel-item">
                     <div class="row">
                         <div class="col-lg-4">
                             <img src="resources/frontend/assets/img/bntgdd1.jpg" class="img-fluid w-100">
                         </div>
                         <div class="col-lg-4">
                             <img src="resources/frontend/assets/img/bntgdd2.jpg" class="img-fluid w-100" >
                         </div>
                         <div class="col-lg-4">
                             <img src="resources/frontend/assets/img/bntgdd3.jpg" class="img-fluid w-100">
                         </div>
                         
                        </div>
                   </div>
                 </div>
                 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Previous</span>
                 </button>
                 <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Next</span>
                 </button>
               </div>
             
         </div>
         <div class="col-lg-1"></div>
      </div>
     </div>
     <!--end thuonghieudocquyen-->
  
  
  
  
  <!--dành cho bạn-->
  <div class="container-fluid  mt-4 ">
      <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            
              <div class="row">
                <div class="col-lg-12" >
                  <div class="container-fluid mt-2 p-0 rounded" style="background-color: rgb(255, 255, 255);">
                      <div class="m-2">
                          <h3 class="d-inline d-flex justify-content-center p-2" style="color:rgb(52, 52, 52);margin-top: 5px;">DÀNH CHO BẠN</h3>
                      </div>
                      <div class="container mb-3">
                        <div class="row">
      
                        @foreach($danhchoban as $pro)
                          <div class="col-lg-2 col-md-4 col-6 mt-2 no-p-m">
                            <div class="card shadow-sm" style="max-height: 370px; max-height: 370px; border: 1px solid #dee2e6; border-radius: 0;">
                            <a class="chitietsp" href="chi-tiet-san-pham/{{$pro->id}}">
                            <div class="image-container">
                                 <img src="resources/frontend/assets/img/{{$pro->image}}" class="card-img-top m-0 w-100 img-fluid"  alt="Product 1">
                             </div>
                              <div class="card-body m-2">
                                  <h6 class="card-title" style="color: rgb(130, 127, 127);">{{$pro->trademark}}</h6>
                                  <div class="product-info">
                                      <p class="card-text"><small>{{ substr($pro->name, 0, 40) }} ...</small></p>
                                      <p class="price" style="color: blue;">{{ number_format($pro->promotion_price, 0, ',', '.') }}đ</p>
                                      <p class="old-price">
                                          <small style="text-decoration: line-through;">{{ number_format($pro->unit_price, 0, ',', '.') }}đ</small>
                                          <span class="discount" style="color: rgb(109, 109, 232);"><small>{{ round((($pro->unit_price-$pro->promotion_price)/$pro->unit_price)*100)}}%</small></span>
                                      </p>                                                      
                                  </div>
                              </div>
                            </a>
                            </div>
                            
                            
                          </div>
                          @endforeach
                          
                            </div>
                            
                            
                          </div>


                         
                           
                      </div>
                
                  </div>
                </div>
  
               <!---content-->
              
               
  
          </div>
      <div class="col-lg-1"></div>
      </div>
  
    </div>
  <!--endproducts sale-->
  
  
  
  </div>
  <!--end prodctsale-->
  
  
    <!--welcome-->
    <div class="container-fluid mt-4">
      <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
          <img src="resources/frontend/assets/img/thanks.png" class="img-fluid w-100">
          </div>
          <div class="col-lg-1"></div>
     </div>
  </div>
  <!--end welcome-->
  
  <!--post-->
  <div class="container-fluid mt-5">
      <div class="row">
         <div class="col-lg-1"></div>
         <div class="col-lg-10 ">
            <div class="container-fluid mt-2 rounded" style="background-color: rgb(255,255,255);">
              <h3 class="d-inline" style="color:rgb(52, 52, 52);">Tin tức công nghệ</h3>
              <div id="carouselExample" class="carousel slide mt-2">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                     <div class="row">
   
                      <div class="col-lg-3 col-6">
                         <a href="https://phongvu.vn/cong-nghe/so-sanh-iphone-15-pro-max-va-iphone-14-pro-max/" target="_blank"><img src="resources/frontend/assets/img/ssip.jpg" class="img-fluid w-100" style="height:200px ">
                         </a>
                           <h6 class="text-center">So sánh iphone 15 pro max và ...</h6>
                      
                      </div>
                      <div class="col-lg-3 col-6">
                       <a href="https://phongvu.vn/cong-nghe/cac-dong-macbook-pro-moi-nhat/" target="_blank"> <img src="resources/frontend/assets/img/macbook.jpg" class="img-fluid w-100" style="height:200px ">
                       </a>
                           <h6 class="text-center">Tổng hợp các dòng macbook ...</h6>
                     
                    </div>
                    <div class="col-lg-3 col-6">
                       <a href="https://phongvu.vn/cong-nghe/so-sanh-samsung-galaxy-s24-va-s24-plus-va-s24-ultra/" target="_blank " > <img src="resources/frontend/assets/img/samsungss.jpg" class="img-fluid w-100" style="height:200px ">
                       </a>
                           <h6 class="text-center">So sánh 3 dòng samsung ...</h6>
                     
                    </div>
                    <div class="col-lg-3 col-6">
                       <a href="https://phongvu.vn/cong-nghe/laptop-acer-nitro-co-tot-khong/" target="_blank"> <img src="resources/frontend/assets/img/top5laptop.webp" class="img-fluid w-100" style="height:200px ">
                       </a>
                        <h6 class="text-center">Top 5 dòng laptop acer nitro ...</h6>
                        
                    </div>
                      
                     </div>
                    </div>
                  </div>
                </div>
            </div>
             
         </div>
         <div class="col-lg-1"></div>
      </div>
     </div>
     <!--end-->
   
     <!--logo-->
  <div class="container-fluid mt-4">
      <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
  
            <div class="row">
  
              <div class="col-lg-3 col-md-4 col-5 rounded shadow-lg m-2 banner01 logolatop" style="background-color: rgb(255, 255, 255); box-shadow:none !important;">
                  <img src="resources/frontend/assets/img/accer.jpg" class="img-fluid w-100">
                </div>
                <div class="col-lg-3 col-md-4 col-5 rounded shadow-lg  m-2 banner01 logolatop" style="background-color: rgb(255, 255, 255); box-shadow:none !important;">
                  <img src="resources/frontend/assets/img/amd.jpg" class="img-fluid w-100">
                </div>
                <div class="col-lg-3 col-md-4 col-5 rounded shadow-lg  m-2 banner01  logolatop" style="background-color: rgb(255, 255, 255); box-shadow:none !important;">
                  <img src="resources/frontend/assets/img/asus.jpg" class="img-fluid w-100">
                </div>
                <div class="col-lg-3 col-md-4 col-5 rounded shadow-lg m-2 banner01 logolatop" style="background-color: rgb(255, 255, 255); box-shadow:none !important;">
                  <img src="resources/frontend/assets/img/hp.jpg" class="img-fluid w-100">
                </div>
                
                <div class="col-lg-3 col-md-4 col-5 rounded shadow-lg m-2 banner01 logolatop" style="background-color: rgb(255, 255, 255); box-shadow:none !important;">
                  <img src="resources/frontend/assets/img/intel.jpg" class="img-fluid w-100">
                </div>
                <div class="col-lg-3 col-md-4 col-5 rounded shadow-lg  m-2 banner01 logolatop" style="background-color: rgb(255, 255, 255); box-shadow:none !important;">
                  <img src="resources/frontend/assets/img/lenovo.jpg" class="img-fluid w-100">
                </div>
                <div class="col-lg-3 col-md-4 col-5 rounded shadow-lg  m-2 banner01 logolatop" style="background-color: rgb(255, 255, 255); box-shadow:none !important;">
                  <img src="resources/frontend/assets/img/msi.jpg" class="img-fluid w-100">
                </div>
                <div class="col-lg-3 col-md-4 col-5 rounded shadow-lg m-2 banner01 logolatop" style="background-color: rgb(255, 255, 255); box-shadow:none !important;">
                  <img src="resources/frontend/assets/img/samsung.jpg" class="img-fluid w-100">
                </div>
              
            </div>
              
          </div>
          <div class="col-lg-1"></div>
      </div>
  </div>
  <!--end logo-->
  @endsection