@extends('frontend/layouts/master')

@section("content")
@if(Auth::check())
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
                                <p><spanf class = "text-bold">Số hóa đơn:</span>16789</p>
                            </div>
                        </div>
                        <div class = "hr"></div>
                        <div class = "invoice-head-bottom">
                            <div class = "invoice-head-bottom-left">
                                <ul>
                                    <li class = 'text-bold'>Khách hàng:</li>
                                    <li>{{Auth::user()->full_name}}</li>
                                    <li>{{Auth::user()->address}}</li>
                                    <li>{{Auth::user()->phone}}</li>
                                    <li>{{Auth::user()->email}}</li>
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
                                        <td class = "text-bold">Hình</td>
                                        <td class = "text-bold">Giá</td>
                                        <td class = "text-bold">Số lượng</td>
                                        <td class = "text-bold">Thành tiền</td>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(Session::has('cart') && is_array($product_cart) && count($product_cart) > 0)
                                @foreach($product_cart as $pro)
                                    <tr>
                                        <td>{{ substr($pro['item']['name'], 0,20) }}</td>
                                        <td><img src="resources/frontend/assets/img/{{$pro['item']['image']}}" class="img-fluid" style="max-height: 100px; max-width: 100px; border: 1px solid rgb(226, 227, 238);background-size: center;"></td>
                                        <td>{{number_format($pro['item']['promotion_price'],0, ',', '.')}}đ</td>
                                        <td>{{$pro['qty']}}</td>
                                        <td class = "text-end">{{number_format($pro['item']['promotion_price']*$pro['qty'],0, ',', '.')}}đ</td>
                                    </tr>
                                @endforeach 
                                @else
                                <tr>Bạn chưa có mua gì</tr>
                                @endif
                                </tbody>
                            </table>
                            <div class = "invoice-body-bottom">
                                <div class = "invoice-body-info-item border-bottom">
                                    <div class = "info-item-td text-end text-bold">Thành tiền:</div>
                                    <div class = "info-item-td text-end">
                                    <?php
                        $totalPrice = 0; // Khởi tạo biến tổng tiền

                        // Giả sử $cart là mảng chứa các mục trong giỏ hàng, mỗi mục có cấu trúc giống như $pro trong câu hỏi
                        foreach ($product_cart as $pro) {
                            // Tính giá tiền của từng mục và cộng vào tổng tiền
                            $totalPrice += $pro['item']['promotion_price'] * $pro['qty'];
                        }

                        // Định dạng số tiền thành chuỗi hiển thị đúng định dạng
                        $totalPriceFormatted = number_format($totalPrice, 0, ',', '.');
                        ?>
                        {{$totalPriceFormatted}}đ
                                    </div>
                                </div>
                                <div class = "invoice-body-info-item border-bottom">
                                    <div class = "info-item-td text-end text-bold">Thuế(5%):</div>
                                    <div class = "info-item-td text-end">{{number_format($totalPrice*0.05, 0, ',', '.')}}đ</div>
                                </div>
                                <div class = "invoice-body-info-item">
                                    <div class = "info-item-td text-end text-bold">Tổng tiền:</div>
                                    <div class = "info-item-td text-end">{{number_format($totalPrice-($totalPrice*0.05), 0, ',', '.')}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="float-end">
                        <form action="dathang" method="post"> 
                         @csrf
                         <input type="hidden" name="name" value="{{Auth::user()->full_name}}">
                         <input type="hidden" name="email" value="{{Auth::user()->email}}">
                         <input type="hidden" name="address" value="{{Auth::user()->address}}">
                         <input type="hidden" name="phone" value="{{Auth::user()->phone}}">
                         <input type="hidden" name="gender" value="{{Auth::user()->gender}}">
                         <input type="hidden" name="totalPrice" value="{{number_format($totalPrice-($totalPrice*0.05), 0, ',', '.')}}">
                        <button class="btn btn-primary" type="submit">Xác nhận đơn hàng</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endif
 @endsection

@section("script")
<script>
function printInvoice(){
    window.print();
}

</script>
@endsection