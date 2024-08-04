@extends("admin/layouts/master")
@section("content")

<?php
$total=0;
foreach($ct_hd as $ct)
{
  $total+=$ct->unit_price*$ct->quantity;
}
?>
<div class = "invoice-wrapper" id = "print-area">
            <div class = "invoice">
                <div class = "invoice-container">
                    <div class = "invoice-head">
                        <div class = "invoice-head-top">
                            <div class = "invoice-head-top-left text-start">
                                <img src = "resources/frontend/assets/img/logo-full.svg">
                            </div>
                            <div class = "invoice-head-top-right text-end">
                                <h3>Hoá đơn</h3>
                            </div>
                        </div>
                        <div class = "hr"></div>
                        <div class = "invoice-head-middle">
                            <div class = "invoice-head-middle-left text-start">
                                <p><span class = "text-bold">Ngày</span>: {{date('d-m-Y')}}</p>
                            </div>
                            <div class = "invoice-head-middle-right text-end">
                                <p><spanf class = "text-bold">Số hóa đơn:</span>#{{$dhg->id}}</p>
                            </div>
                        </div>
                        <div class = "hr"></div>
                        <div class = "invoice-head-bottom">
                            <div class = "invoice-head-bottom-left">
                                <ul>
                                    <li class = 'text-bold'>Khách hàng:</li>
                                    <li>{{$cus->name}}</li>
                                    <li>{{$cus->address}}</li>
                                    <li>{{$cus->phone}}</li>
                                    <li>{{$cus->email}}</li>
                                </ul>
                            </div>
                            <div class = "invoice-head-bottom-right">
                                <ul class = "text-end">
                                    <li class = 'text-bold'>Người bán:</li>
                                    <li>Truong Thinh</li>
                                    <li>Phường 9 quận 5 thành phố Hồ Chí Mính</li>
                                    <li>123456789</li>
                                    <li>truongthinh@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class = "overflow-view">
                        <div class = "invoice-body">
                            <table>
                                <thead>
                                    <tr>
                                        <td class = "text-bold">Tên</td>
                                        <td class = "text-bold">Số lượng</td>
                                        <td class = "text-bold">Giá</td>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($ct_hd as $ct)
                              <tr valign="top" style="border-top: 1px solid #d9d9d9;">
                                <td align="left" style="padding: 5px 5px 5px 0px;white-space: pre-line;">
                                  {{$ct->name}}
                                </td>
                                <td align="center" style="padding: 5px 0px">
                                  {{$ct->quantity }}
                                </td>
                                <td align="right" style="padding: 5px 0px">
                                  {{number_format($ct->unit_price, 0, ',', '.')}}
                                </td>
                              </tr>
                              @endforeach
                                </tbody>
                            </table>
                            <div class = "invoice-body-bottom">
                                <div class = "invoice-body-info-item border-bottom">
                                    <div class = "info-item-td text-end text-bold">Thành tiền:</div>
                                    <div class = "info-item-td text-end">
                                    {{number_format($total, 0, ',', '.')}}đ
                                    </div>
                                </div>
                                <div class = "invoice-body-info-item border-bottom">
                                    <div class = "info-item-td text-end text-bold">Thuế(5%):</div>
                                    <div class = "info-item-td text-end">
                                    {{number_format($total*0.05, 0, ',', '.')}}đ</div>
                                </div>
                                <div class = "invoice-body-info-item">
                                    <div class = "info-item-td text-end text-bold">Tổng tiền:</div>
                                    <div class = "info-item-td text-end">{{number_format($total-($total*0.05), 0, ',', '.')}}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="admin/bills/capnhatdonhang/{{$dhg->id}}" method="post">
                        {{csrf_field()}}
                        <h3 style="font-size: 18px;margin: 0 0 1em 0;">
                          Trạng thái đơn hàng
                        </h3>
                        <fieldset>
                          <p style="line-height: 30px">
                            <input type="radio" class="mt-2" name="state" value="0" {{$dhg->
                            state==0? "checked":""}}/>&nbsp;&nbsp; Chưa giao
                            <input type="radio" class="mt-2" name="state" value="1" {{$dhg->
                            state==1? "checked":""}}/>&nbsp;&nbsp; Xác nhận
                            <input type="radio" class="mt-2" name="state" value="2" {{$dhg->
                            state==2? "checked":""}}/>&nbsp;&nbsp;Đang giao hàng
                            <input type="radio" class="mt-2" name="state" value="3" {{$dhg->
                            state==3? "checked":""}}/> &nbsp;&nbsp;Đã giao hàng
                          </p>
                        </fieldset>
                        <p>
                          <input class="btn btn-primary" type="submit" name="capnhat" value="Cập Nhật Đơn Hàng"
                          />
                          <a class="btn btn-primary" href="{{route('danhsachdon')}}">
                          Về Danh Sách Đơn Hàng
                        </a>
                        </p>
                      </form>

                    <div class = "invoice-foot text-center">
                        <p><span class = "text-bold text-center">Lưu ý:&nbsp;</span>Đây là biên nhận do máy tính tạo ra và không yêu cầu chữ ký thực.</p>

                        <div class = "invoice-btns">
                            <button type = "button" class = "invoice-btn" onclick="printInvoice()">
                                <span>
                                    <i class="fa-solid fa-print"></i>
                                </span>
                                <span>Print</span>
                            </button>
                            <button type = "button" class = "invoice-btn">
                                <span>
                                    <i class="fa-solid fa-download"></i>
                                </span>
                                <span>Download</span>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection