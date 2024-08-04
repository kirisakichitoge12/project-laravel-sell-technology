
@extends("admin/layouts/master")

@section("content")
  
  <header class="card-header">
                @if(Session::has('thongbao')) 
                    <div class="alert alert-success">
                    {{Session::get('thongbao')}}
                    </div>
                @endif
  </header>

  
  <div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Khách hàng</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
        <th>
          Tên Khách Hàng
        </th>
        <th>
          Giới Tính
        </th>
        <th>
          Email
        </th>
        <th>
          Địa chỉ
        </th>
        <th>
          Điện Thoại
        </th>
        <th>
          Thao tác
        </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($customer as $cus)
      <tr class="odd gradeX">
        <td>
          {{$cus->name}}
        </td>
        <td>
          {{$cus->gender}}
        </td>
        <td>
          {{$cus->email}}
        </td>
        <td>
          {{$cus->address}}
        </td>
        <td>
          {{$cus->phone_number}}
        </td>
        <td class="actions-cell" data-label="thao tác">
           <a href="">chi tiết</a>
            </td>
      </tr>
      @endforeach
                </tbody>
               
              </table>
             
            </div>
           
          </div>
        </div>
      </div>




<!-- Modal -->

@foreach($customer as $cus)
<div class="modal fade" id="delete{{$cus->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa sản phẩm </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Bạn có muốn xóa khách hàng  {{$cus->name}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <a href="admin/customer/xoa/{{$cus->id}}" ><button type="button" class="btn btn-primary">Xóa</button></a>
      </div>
    </div>
  </div>
</div>

@endforeach
   
@endsection

