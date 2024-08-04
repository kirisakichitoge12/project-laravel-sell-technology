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
                  <h4 class="card-title">Sản phẩm</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Điện thoại</th>
                        <th>Vai trò</th>
                        <th>Khóa</th>
                        <th>Ảnh đại diện</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($user as $us)
                      <tr class="odd gradeX">
                        <td  data-label="name">{{$us->full_name}}</td>
                        <td  data-label="email">{{$us->email}}</td>
                        <td  data-label="phone">{{$us->phone}}</td>
                        <td  data-label="quyen">
                        {{$us->quyen== 0 ?"Người dùng":"Người quản trị"}}
                    </td>
                    <td>
                            <form action="admin/user/danh-sach-nguoi-dung" id="user-form-{{$us->id}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$us->id}}">
                                <div class="form-check form-switch ms-3">
                                <input name="code" class="form-check-input" {{$us->code== 1 ?"":"checked"}}  type="checkbox" id="flexSwitchCheckDefault-{{$us->id}}" onchange="document.getElementById('user-form-{{$us->id}}').submit()">
                                </div>
                            </form>

                    </td>
                        <td><img src="resources/frontend/assets/img/{{$us->image}}"
                          alt="{{$us->image}}">
                    </td>
                      </tr>
                   @endforeach 
                </tbody>
               
              </table>
             
            </div>
            <p>{{$user->links()}}</p>
          </div>
        </div>
      </div>






<!-- Modal -->

@foreach($user as $us)
<div class="modal fade" id="delete{{$us->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa sản phẩm </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Bạn có muốn xóa user {{$us->full_name}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <a href="admin/user/xoanguoidung/{{$us->id}}" ><button type="button" class="btn btn-primary">Xóa</button></a>
      </div>
    </div>
  </div>
</div>

@endforeach
   
@endsection

