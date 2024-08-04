@extends('admin/layouts/master')
@section('content')
  <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Thêm sản phẩm</h4>
                    <p class="card-description">
                      Sản phẩm
                      @if (Session::has('loi'))
                      <p class="alert alert-warning">
                        {{Session::get('loi')}}
                      </p>
                      @endif
                      @if (Session::has('thongbao'))
                      <p class="alert alert-success">
                        {{Session::get('thongbao')}}
                      </p>
                      @endif
                    </p>
                    <form class="forms-sample" action="admin/sanpham/themsanpham" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3"> Giá sản phẩm</label>
                        <input type="text" name="price" value="" class="form-control" id="exampleInputEmail3">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Giá khuyến mãi (nếu có)</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="pro_price">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Loại sản phẩm</label>
                        <select name="loaisp" id="loaisp" class="form-control" id="exampleSelectGender">
                        @foreach ($type_pro as $type)
                        <option value="{{$type->id}}">
                          {{$type->name}}
                        </option>
                        @endforeach
                            </select>
                            @if ($errors->has('loaisp'))
                            <span class="text-danger">
                              {{$errors->first('loaisp')}}
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                        <label for="exampleSelectGender">Thương hiệu</label>
                        <select name="trade_mark" id="loaisp" class="form-control" id="exampleSelectGender">
                        <option value="Samsung">
                         Samsung
                        </option>
                        <option value="Apple">
                         Apple
                        </option>
                        <option value="Linh Kiện">
                         Linh kiện
                        </option>
                        <option value="Gaming">
                         Gaming
                        </option>
                            </select>
                            @if ($errors->has('loaisp'))
                            <span class="text-danger">
                              {{$errors->first('loaisp')}}
                            </span>
                            @endif
                        </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Mô tả</label>
                        <textarea class="form-control" id="exampleTextarea1"  name="des" rows="4" style="min-height: 200px;">
                        </textarea>
                      </div>
                      <div class="form-group">
                        <label>
                          Hình sản phẩm
                        </label>
                        <input type="file" name="image">
                      </div>
                      <div class="form-group">
                        <label>
                          Tình trạng sản phẩm&nbsp;&nbsp;
                        </label>
                        <label class="radio-inline">
                          <input name="rdoStatus" type="radio"  value="1" >&nbsp;&nbsp; Sản phẩm nổi bật&nbsp;&nbsp;
                        </label>
                        <label class="radio-inline">
                          <input name="rdoStatus" type="radio" value="0">&nbsp;&nbsp;Sản phẩm bán chạy
                        </label>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
@endsection

