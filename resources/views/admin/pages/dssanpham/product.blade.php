@extends("admin/layouts/master")

@section("content")
  
    <header class="card-header">
                @if(Session::has('thongbao')) 
                    <div class="alert alert-success">
                    {{Session::get('thongbao')}}
                    </div>
                @endif
  </header>

  <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sản phẩm</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Tên sản phẩm</th>         
                          <th>Loại sản phẩm</th>
                          <th>Giá gốc</th>
                          <th>Giá khuyến mãi</th>  
                          <th>Hình</th>
                          <th>Ngày tạo</th>
                          <th>Thao tác</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($products as $pro)
                      <tr class="odd gradeX">
                      <td width="5%">{{ substr($pro->name, 0, 50) }}</td>
                      <td width="5%">{{$pro->product_type->name}}</td>
                      <td width="5%">{{number_format($pro->unit_price, 0, ',', '.')}}</td>
                      <td width="5%">{{number_format($pro->promotion_price, 0, ',', '.')}}</td>
                      <td width="10%"><img src="resources/frontend/assets/img/{{$pro->image}}"

                      width="100" height="100" alt="{{$pro->image}}"></td>

                      <td width="5%">{{$pro->created_at}}</td>
                      <td class="actions-cell" data-label="thao tác">
                      <div class="buttons right nowrap"> 
                          <a  data-bs-toggle="modal" data-bs-target="#exampleModal{{$pro->id}}" >
                          <button style="background-color:rgb(255, 255, 255); border: none;" class="button small --jb-modal">
                            <span class="icon edit-icon"style="font-size: 24px;"><i class="mdi mdi-pencil"></i></span>
                        </button>

                      </a>
                      <a data-bs-toggle="modal" data-bs-target="#delete{{$pro->id}}"  >
                      <button style="background-color: rgb(255, 255, 255); border: none;" class="button small --jb-modal">
                        <span class="icon delete-icon" style="font-size: 24px;"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                      </a>
                      </div>
                      </td>
                      </tr>
                   @endforeach 
                </tbody>
               
              </table>
             
            </div>
            <p>{{$products->links()}}</p>
          </div>
        </div>
      </div>
     
    
<!-- Modal -->

@foreach($products as $pro)
<div class="modal fade" id="delete{{$pro->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa sản phẩm </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Bạn có muốn xóa sản phẩm {{$pro->name}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <a href="admin/sanpham/xoasanpham/{{$pro->id}}" ><button type="button" class="btn btn-primary">Xóa</button></a>
      </div>
    </div>
  </div>
</div>

@endforeach


@foreach($products as $pro)
<div class="modal fade" id="exampleModal{{$pro->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Sửa sản phẩm </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Bạn có muốn sửa sản phẩm {{$pro->name}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <a href="admin/sanpham/suasanpham/{{$pro->id}}" ><button type="button" class="btn btn-primary">Sửa</button></a>
      </div>
    </div>
  </div>
</div>

@endforeach
    
   
@endsection

