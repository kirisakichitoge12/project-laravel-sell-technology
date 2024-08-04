@extends("admin/layouts/master")

@section("content")
  
  <header class="card-header">
    <p class="card-header-title">
      <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
      Clients
    </p>
    <a href="#" class="card-header-icon">
      <span class="icon"><i class="mdi mdi-reload"></i></span>
    </a>
                @if(Session::has('thongbao')) 
                        <div class="alert alert-success">
                        {{Session::get('thongbao')}}
                        </div>
                @endif
  </header>

    
  <div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Đơn hàng</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                        <th>
                          Mã Đơn Hàng
                        </th>
                        <th>
                          Ngày Đặt Hàng
                        </th>
                        <th>
                          Tên Khách Hàng
                        </th>
                        <th>
                          Tổng Tiền
                        </th>
                        <th>
                          Hình Thức Thanh Toán
                        </th>
                        <th>
                          Ghi Chú
                        </th>
                        <th>
                          Trạng Thái
                        </th>
                        <th>
                          Thao tác
                        </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($donhang as $dh)
                      <tr class="odd gradeX" align="center">
                        <td>
                          {{$dh->bill_id}}
                        </td>
                        <td>
                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $dh->date_order)->format('d/m/Y') }}
                        </td>
                        <td>
                          {{$dh->name}}
                        </td>
                        <td>
                          {{$dh->total}}
                        </td>
                        <td>
                          {{$dh->payment}}
                        </td>
                        <td>
                          {{$dh->note}}
                        </td>
                        <td>
                        @switch($dh->state)
                            @case(0)
                                <p>Chưa giao hàng</p>
                                @break

                            @case(1)
                                <p>Xác nhận</p>
                                @break

                            @case(2)
                                <p>Đang giao</p>
                                @break

                            @case(3)
                                <p>Đã giao hàng</p>
                                @break

                            @default
                                <p>Trạng thái không xác định</p>
                        @endswitch
                        </td>
                        <td>
                                 <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#capnhat{{$dh->id}}">Cập nhật</button> 
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

@foreach($donhang as $dh)
<div class="modal fade" id="capnhat{{$dh->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cập nhật sản phẩm</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Bạn có muốn cập nhật đơn hàng có mã đơn là  {{$dh->bill_id}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <a href="admin/bills/capnhatdonhang/{{$dh->bill_id}}" ><button type="button" class="btn btn-primary">Cập nhật</button></a>
      </div>
    </div>
  </div>
</div>

@endforeach
   
@endsection


