@extends('admin/layouts/master')
@section('content')
  <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sửa sản phẩm</h4>
                    <p class="card-description">
                      Sản phẩm {{$product->name}}
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
                    <form class="forms-sample" action="admin/sanpham/suasanpham/{{$product->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Tên sản phẩm</label>
                        <input type="text" name="name" value="{{$product->name}}" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3"> Giá sản phẩm</label>
                        <input type="text" name="price" value="{{$product->unit_price}}" class="form-control" id="exampleInputEmail3">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Giá khuyến mãi (nếu có)</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="pro_price" value="{{$product->promotion_price}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Loại sản phẩm</label>
                        <select name="loaisp" id="loaisp" class="form-control" id="exampleSelectGender">
                              @foreach ($type_pro as $type)
                              <option value="{{$type->id}}" {{$product->id_type ==$type->id ? "selected":""}}>{{$type->name}}
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
                        <label for="exampleTextarea1">Mô tả</label>
                        <textarea class="form-control" id="exampleTextarea1" name="des" rows="4" style="min-height: 200px;">
                        {{$product->description}}
                        </textarea>
                      </div>
                      <div class="form-group">
                        <label>
                          Hình sản phẩm
                        </label>
                        <input type="file" name="image">
                        <img src="resources/frontend/assets/img/{{$product->image}}" width="150"
                        alt="">
                      </div>
                      <div class="form-group">
                        <label>
                          Tình trạng sản phẩm&nbsp;&nbsp;
                        </label>
                        <label class="radio-inline">
                          <input name="rdoStatus" type="radio"  value="1" {{$product->new == 1? "checked": ""}}>&nbsp;&nbsp; Sản phẩm nổi bật&nbsp;&nbsp;
                        </label>
                        <label class="radio-inline">
                          <input name="rdoStatus" type="radio" value="0" {{$product-> new == 0 ? "checked": ""}} >&nbsp;&nbsp;Sản phẩm bán chạy
                        </label>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
@endsection

