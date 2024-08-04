
@extends('frontend/layouts/master')

@section("content")

<div id="spinner" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <svg class="spinner" width="50px" height="50px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
        <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
    </svg>
</div>

<div class="container-fluid  mt-4" style="background-color: rgb(248, 248, 252);" >
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
                    <span style="color:rgb(167, 171, 195);"><small>Sản phẩm của {{$products[0]->trademark}}</small></span>
                    <svg fill="none" viewBox="0 0 24 24" size="16" class="css-26qhcs" color="rgb(167, 171, 195)" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8.49976 19.0001L15.4998 12.0001L8.49976 5.00012" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <span style="color:rgb(167, 171, 195);"><small>{{$products[0]->product_type()->first()->name}}</small></span>
                    <svg fill="none" viewBox="0 0 24 24" size="16" class="css-26qhcs" color="rgb(167, 171, 195)" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8.49976 19.0001L15.4998 12.0001L8.49976 5.00012" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <span style="color:rgb(167, 171, 195);"><small>{{$products[0]->name}}</small></span>
                </div>
            </div>
        </div>
     </div>
        
        <div class="row mt-4">
            <div class="col-lg-3 m-2 shadow-lg rounded " style="max-height:500px;background-color: rgb(255, 255, 255); box-shadow:none !important;">
                <div class="row mt-2">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h6>Khoảng giá</h6>
                                <small>(Dùng cho tất cả sản phẩm)</small>
                                <form action="tim-kiem" method="get" role="search">   
                                <div class="flex-container m-2" style="display: flex; align-items: center;">            
                                        <input type="number" placeholder="từ" style="width:100px;" name="min"  type="text" class="form-control">
                                        <div style="margin: 0; height: 1px; background-color: rgb(181, 168, 168); width: 20px;"></div> 
                                        <input type="number" placeholder="đến" style="width:100px;" name="max"  type="text" class="form-control">
                                       <button type="submit" style="background-color:rgb(255, 255, 255);border: none;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                                          <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2z"/>
                                        </svg>
                                        </button>
                                </div>
                                </form>
                                <hr>
                                <div class="flex-container m-2">                             
                                    <div class="accordion" id="accordionExample" style="min-width: 100%;">
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color: rgb(255, 255, 255);">
                                              Màu sắc
                                            </button>
                                          </h2>
                                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body"  id="checkbox-container">
                                             <input type="checkbox" value="Black">&nbsp;Black<br>
                                             <input type="checkbox" value="Natural">&nbsp;Natural<br>
                                             <input type="checkbox" value="White">&nbsp;White<br>
                                             <input type="checkbox" value="Xanh">&nbsp;Xanh<br>
                                             <input type="checkbox" value="Blue">&nbsp;Blue<br>
                                             
                                            </div>
                                          </div>
                                        </div>
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="  background-color: rgb(255, 255, 255);">
                                            Dung lượng (ROM)
                                            </button>
                                          </h2>
                                          <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                             <input type="checkbox" value="">&nbsp; 128GB &nbsp;
                                             <input type="checkbox" value="">&nbsp; 256GB<br>
                                             <input type="checkbox" value="">&nbsp; 512GB &nbsp;
                                             <input type="checkbox" value="">&nbsp; 1TB    
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                            
                                </div>  
                                 
                            </div>
                        </div>
                    </div>
                    



                  
                  
                  </div>
                </div>


                <div class="col-lg-8 m-2">  
                        <div class="container-fluid shadow-lg rounded " style="padding:20px;background-color: rgb(255, 255, 255); box-shadow:none !important;">
                            <div class="row">
                                <div class="col-lg-12">
                                 <span class="d-flex inline"> <h5>{{$products[0]->name}}&nbsp;</h5><p style="color: rgb(157, 158, 164);">({{count($products)}} sản phẩm)</p></span>
                                </div>
                            </div>
                        </div>  
                        <div class="container-fluid mt-2 shadow-lg rounded " style="padding:20px;background-color: rgb(255, 255, 255); box-shadow:none !important;">
                          <div class="row mt-2">
                              <div class="col-lg-12">
                               <div class="container-fluid">
                                <span class="d-flex inline table-responsive">
                                  <p style="margin: 6px;padding:2px;">Sắp xếp theo</p> &nbsp;&nbsp;
                                  <button class="btn ms-2" style="background-color: rgb(255,255,255); border: 1px solid rgb(239, 239, 239);" name="Blue" onclick="toggleIcon(this)">
                                  <a class="sort" style="text-decoration: none;color:rgb(33, 37, 41);" href="{{ request()->fullUrlWithQuery(['sort' => 'promotion_price']) }}">Giá tăng dần</a>
                                </button>
                                <button class="btn ms-2" style="background-color: rgb(255,255,255); border: 1px solid rgb(239, 239, 239);" name="Blue" onclick="toggleIcon(this)">
                                  <a class="sort" style="text-decoration: none;color:rgb(33, 37, 41);" href="{{ request()->fullUrlWithQuery(['sort' => '-promotion_price']) }}">Giá giảm dần</a>
                                </button>
                                <button class="btn ms-2" style="background-color: rgb(255,255,255); border: 1px solid rgb(239, 239, 239);" name="Blue" onclick="toggleIcon(this)">
                                  <a class="sort" style="text-decoration: none;color:rgb(33, 37, 41);" href="{{ request()->fullUrlWithQuery(['sort' => 'unit_price']) }}">Sản phẩm mới nhất</a>
                                </button>
                                <button class="btn ms-2" style="background-color: rgb(255,255,255); border: 1px solid rgb(239, 239, 239);" name="Blue" onclick="toggleIcon(this)">
                                  <a class="sort" style="text-decoration: none;color:rgb(33, 37, 41);" href="{{ request()->fullUrlWithQuery(['sort' => '-unit_price']) }}">Sản phẩm nổi bật</a>
                                </button>
                               </span>
                               </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="container-fluid mt-2 p-0 rounded" style="background-color: rgb(255, 255, 255);">
                                  <div class="containers">
                                    <div class="row">            
                                      @foreach ( $products as $item )
                                      
                                   
                                      <div class="col-lg-3 col-md-4 col-6 mt-2 no-p-m">
                                        <div class="card shadow-sm" style="max-height: 400px;border: 1px solid #dee2e6; border-radius: 0;">
                                         <a href="chi-tiet-san-pham/{{$item->id}}">
                                        <div class="image-container">
                                            <img src="resources/frontend/assets/img/{{$item->image}}" class="card-img-top m-0 w-100 img-fluid"  alt="Product 1">
                                         </div>
                                         </a>
                                          <div class="card-body m-2">
                                              <h6 class="card-title" style="color: rgb(130, 127, 127);">{{$item->trademark}}</h6>
                                              <div class="product-info">
                                                  <p class="card-text"><small>{{ substr($item->name, 0, 40) }}</small></p>
                                                  <p class="price" style="color: blue;">{{ number_format($item->promotion_price, 0, ',', '.') }}đ</p>
                                                  <p class="old-price">
                                                      <small style="text-decoration: line-through;">{{ number_format($item->unit_price, 0, ',', '.') }}đ</small>
                                                      <span class="discount" style="color: rgb(109, 109, 232);"><small>{{ round((($item->unit_price-$item->promotion_price)/$item->unit_price)*100)}}%</small></span>
                                                  </p>                                                      
                                              </div>
                                          </div>
                                       
                                        </div>
                                        
                                        
                                      </div>
                                      @endforeach

                                          <div class="col-lg-12 d-flex justify-content-center mt-4">
                                              <nav aria-label="Page navigation example">
                                                  <ul class="pagination justify-content-end">
                                                    <li class="page-item disabled">
                                                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
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
function toggleIcon(button) {
    // Xóa lớp active từ tất cả các nút
    document.querySelectorAll('.btn').forEach(btn => {
        btn.classList.remove('active');
    });
    // Thêm lớp active vào nút được nhấn
    button.classList.add('active');
}

function getSelectedValues() {
    // Lấy danh sách tất cả các checkbox
    const checkboxes = document.querySelectorAll('#checkbox-container input[type="checkbox"]');

    // Tạo một mảng để lưu trữ giá trị của các checkbox được chọn
    const selectedValues = [];

    // Lặp qua tất cả các checkbox
    checkboxes.forEach(checkbox => {
        // Kiểm tra xem checkbox có được chọn không
        if (checkbox.checked) {
            // Nếu được chọn, thêm giá trị của checkbox vào mảng selectedValues
            selectedValues.push(checkbox.value);
        }
    });

    // selectedValues bây giờ chứa danh sách các giá trị của các checkbox được chọn
    console.log("button đã check", selectedValues);
}
// Gọi hàm khi người dùng thực hiện hành động (ví dụ: check checkbox)
document.querySelectorAll('#checkbox-container input[type="checkbox"]').forEach(checkbox => {
    checkbox.addEventListener('change', getSelectedValues);
});
document.addEventListener('DOMContentLoaded', function () {
    // Lấy nút "Giá giảm dần"
    const priceDescButton = document.querySelector('.sort');
    if (priceDescButton) {
        priceDescButton.addEventListener('click', function (event) {
            // Hiển thị spinner
            const spinner = document.getElementById('spinner');
            spinner.style.display = 'block';

            // Ẩn spinner sau 1 giây
            setTimeout(function () {
                spinner.style.display = 'none';
            }, 2000);
        });
    }
});

</script>
@endsection