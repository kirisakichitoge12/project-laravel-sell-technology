<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use App\Models\Bill;
use App\Models\Bill_detail;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Product_Detail;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use App\Models\Products_Type;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class PageController extends Controller
{
    
    public function pageshop(){
        $manhinh = Products::where('id_type', 3)->take(4)->get();
        $tivi = Products::where('id_type', 3)->orderByDesc('id')->take(4)->get();
        $maylanh = Products::where('id_type', 7)->take(4)->get();
        $thietbivanphong = Products::where('id_type', 4)->take(4)->get();
        $phukiencanhan = Products::where('id_type', 8)->take(4)->get();
        $iphone = Products::where('id_type', 1)->take(4)->get();
        $ipad = Products::where('id_type', 2)->take(4)->get();
        $laptop = Products::where('id_type', 4)->take(5)->get();
        $mh = Products::where('id_type', 3)->take(5)->get();
        $game = Products::where('id_type', 5)->take(5)->get();
        $giadung = Products::where('id_type', 8)->take(5)->get();
        $linhkien = Products::where('id_type', 6)->take(5)->get();
        $danhchoban=Products::where('id_type','!=',1 )->take(20)->get();
        $noibat = collect();

        for ($i = 2; $i < 8; $i++) {
            $products = Products::where('id_type', $i)->take(2)->get();
            $noibat = $noibat->concat($products);
        }
        return view('frontend/pages/home',compact('manhinh','danhchoban','mh','maylanh','thietbivanphong','noibat',
        'phukiencanhan','iphone','ipad','laptop','tivi','game','giadung','linhkien'));
   }  
   public function getcategory()
   {
       
        return view('frontend/layouts/header',compact('danhmucsp'));
   }
   public function getchitietsanpham($id)
   {
      $product= Products::where('id','=',$id)->first();
      $id_type=$product->product_type->id_detail; //chỉ dúng khi id product_type bằng với id_detail
      $pro_detail=Product_Detail::where('id','=',$id_type)->first();
      $mota=$pro_detail->giamgia3;
      $thongtin = $pro_detail->description;
      // Chuyển đổi mảng JSON thành mảng PHP
      $arrayThongTin = json_decode($thongtin, true);
      $motasp = json_decode($mota, true);
      
      
      // Lặp qua mảng và truy cập từng phần tử
     

    //   if($id_type==1 || $id_type==2 ||$id_type==3)
    //   {
        return view('frontend/pages/chitietsanphamphone',compact('product','pro_detail','arrayThongTin','motasp'));
    //   }
    //   else
    //   {
    //     return view('frontend/pages/chitietsanpham',compact('product','pro_detail'));
    //   }    
    
   }
  
   public function getdangnhap()
   {
    return view('frontend/pages/login');
   }
   
   public function postdangnhap(Request $req)
   {    
        $default= User::where('email', $req->emaillg)->first();
            if($default)
            { 
                if($default->code==1) //đã mở tài khoản
                {
                    $chungthuc=array('email'=>$req->emaillg,'password'=>$req->passwordlg);
                    if(Auth::attempt($chungthuc))
                    {
                        return redirect('shop');
                    }
                    else
                    {
                        return redirect("dang-nhap")->with(['matb'=>'error','noidung'=>'Email hoặc mật khẩu chưa đúng']);
                    }
                } 
                else if($default->code==0)
                {
                    return redirect("dang-nhap")->with(['matb'=>'error','noidung'=>'Tài khoản chưa được kích hoạt']);   
                }
            }
            else
            {
                return redirect("dang-nhap")->with(['matb'=>'error','noidung'=>'Email chưa được đăng kí']);
            }
      
   }



   public function getdangki()
   {
    return view('frontend/pages/dangki');
   }
  //send code
   public function postdangki(Request $req)
   {
    $existingUser = User::where('email', $req->email)->exists();
        if($existingUser)
        {
            return redirect("dang-ki")->with(['matb'=>'error','noidung'=>'Email đã được đăng kí']);
        }
        else
        {
            try {
                $code = rand(100000, 999999);
                $user = new User;
                $user->full_name = $req->name;
                $user->email = $req->email;
                // $user->birdthday =  isset($req->birdthday) ? $req->birdthday :"";
                // $user->gender = isset($req->gender) ? $req->gender:"";
                $user->phone = isset($req->phone) ? $req->phone : 'chưa có';
                $user->address = isset($req->address) ? $req->address : 'chuaco';
                $user->password = Hash::make($req->password);
                Session::put('email_verification', ['email' => $req->email, 'code' => $code]);
                $details = [
                   'title' => 'Đăng kí tài khoản',
                   'body' =>  'đây là mã xác nhận của bạn',
                   'name' => $req->name,
                   'code' => $code
               ];
               $userEmail =$req->email;
          
               // Dispatch job to send email
                SendEmail::dispatch($userEmail, $details)->onQueue('email');
                $user->save();
                return view('frontend/pages/comfimemail');
            } catch (\Exception $e) {
                // Xử lý lỗi ở đây, ví dụ:
                // echo '<script> alert("Có lỗi xảy ra: ' . $e->getMessage() . '");</script>';
                return redirect("dang-ki")->with(['matb'=>'error','noidung'=>'Lỗi serve']);
            }
        }
   
    
   }
   public function getxacnhanMail()
   {
    return view("frontend/pages/comfimemail");
   }
   //xác nhận code
   public function sendMail(Request $req)
   {
    
        // Lấy giá trị từ session
        $emailVerification = Session::get('email_verification');

        // Kiểm tra xem session có tồn tại không
        if ($emailVerification) {
            // Session tồn tại, lấy giá trị email và code
            $email = $emailVerification['email'];
            $code = $emailVerification['code'];

            if($req->code==$code)
            {
              $emailupdate = User::where('email', $email)->first();
              $emailupdate->code=1;
              $emailupdate->save();
              Session::forget('email_verification');
              return redirect("dang-nhap")->with(['matb'=>'success','noidung'=>'Đăng kí thành công']);

            }
            else if($req->code!=$code)
            {
                return redirect("xac-nhan")->with(['matb'=>'error','noidung'=>'Mã xác nhận không đúng']);
            }

            // Sử dụng giá trị email và code ở đây
            } else {
                return redirect("dang-ki")->with(['matb'=>'error','noidung'=>'Email chưa được đăng kí']);
            }
   
}
public function getgiohang()
{
    return view("frontend/pages/cart");
}
public function getthemgiohang(Request $req ,$id){
    $sanpham=Products::find($id);
    $oldcart=Session('cart') ? Session::get('cart') :null;
    $cart= new Cart($oldcart);
    $cart->add($sanpham,$id);
    $req->session()->put('cart',$cart);
    return response()->json(['success' => true]);
}

public function getdangxuat(Request $request){
    Auth::guard('web')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('shop');
}

public function getcapnhatgiohang(Request $req)
{
        $id=$req->id;
        $soluong=$req->soluong;
        $oldcart=Session('cart') ? Session::get('cart') :null;
        $cart= new Cart($oldcart);
        $cart->updateQuantity($id, $soluong);
        if(count($cart->items)>0)
        {
            Session::put('cart',$cart);
        }
        else
        {
            Session::forget('cart');
        }
        return redirect()->back();
}

public function getxoasanpham($id)
{
   
    // Lấy giỏ hàng hiện tại từ session, nếu không có thì thiết lập giá trị mặc định là null
    $oldcart = Session::has('cart') ? Session::get('cart') : null;

    // Khởi tạo đối tượng giỏ hàng mới từ giỏ hàng cũ
    $cart = new Cart($oldcart);

    // Gọi phương thức xóa sản phẩm theo id
    $cart->delete($id);

    // Kiểm tra nếu giỏ hàng vẫn còn sản phẩm thì cập nhật lại session
    if (is_array($cart->items) && count($cart->items) > 0) {
        Session::put('cart', $cart);
    } else {
        // Nếu giỏ hàng trống thì xóa giỏ hàng khỏi session
        Session::forget('cart');
    }

    // Chuyển hướng người dùng về trang trước đó
    return redirect()->back();
}

public function gettimkiem(Request $req)
{
    if($req->min)
    {
        $max=$req->max;
        $min=$req->min;
        $products = QueryBuilder::for(Products::class)
            ->allowedFilters([
                AllowedFilter::partial('name', 'name'),
            ])
            ->allowedSorts([
                'promotion_price', '-promotion_price',
                'unit_price', '-unit_price'
            ])
            ->where('promotion_price', '>=', $min)
            ->where('promotion_price', '<=', $max)
    ->get();
        if(count($products)>0)
        {
            return view("frontend/pages/search",compact("products"));
        }
        else
        {
            
            return view("frontend/pages/notfound");
        }
    }
    else
    {
        
        $products = QueryBuilder::for(Products::class)
        ->allowedFilters([
            AllowedFilter::partial('name','name'),

        ])
        ->allowedSorts(['promotion_price', '-promotion_price','unit_price','-unit_price']) 
        ->get();
        if(count($products)>0)
        {
            return view("frontend/pages/search",compact("products"));
        }
        else
        {
            
            return view("frontend/pages/notfound");
        }
    }
   

}

public function getdanhmuc(Request $req,$id)
{
    if($req->min)
    {
        $max=$req->max;
        $min=$req->min;
        $products = QueryBuilder::for(Products::class)
            ->allowedFilters([
                AllowedFilter::partial('name', 'name'),
            ])
            ->allowedSorts([
                'promotion_price', '-promotion_price',
                'unit_price', '-unit_price'
            ])
            ->where('promotion_price', '>=', $min)
            ->where('promotion_price', '<=', $max)
            ->where('id_type', '=', $id)
    ->get();
        if(count($products)>0)
        {
            return view("frontend/pages/search",compact("products"));
        }
        else
        {
            
            return view("frontend/pages/notfound");
        }
    }
    else
    {
        
        $products = QueryBuilder::for(Products::class)
        ->allowedFilters([
            AllowedFilter::partial('name','name'),

        ])
        ->allowedSorts(['promotion_price', '-promotion_price','unit_price','-unit_price']) 
        ->where('id_type', '=', $id)
        ->get();
        if(count($products)>0)
        {
            return view("frontend/pages/search",compact("products"));
        }
        else
        {
            
            return view("frontend/pages/notfound");
        }
    }
}
public function getthongtin()
{
    //truong hop user login
    return view('frontend/pages/thongtin');
}
public function getvanchuyen()
{
    // Kiểm tra xem người dùng đã đăng nhập hay chưa
    if (Auth::check()) {
        // Lấy email của người dùng đã đăng nhập
        $userEmail = Auth::user()->email;

        // Tìm thông tin khách hàng bằng email
        $customer = Customer::where('email', $userEmail)->first();

        if ($customer) {
            // Lấy thông tin đơn hàng của khách hàng
            $bills = Bill::where('id_customer', $customer->id)->first();

            // Truyền thông tin đơn hàng vào view
            return view('frontend.pages.trangthaidonhang', compact('bills'));
        } else {
            // Nếu không tìm thấy khách hàng, hiển thị thông báo lỗi hoặc xử lý phù hợp
            return redirect('shop')->with('error', 'Không tìm thấy thông tin khách hàng.');
        }
    } else {
        // Nếu người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
        return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để xem trạng thái đơn hàng.');
    }
}

 public function postcapnhatuser(Request $request)
 {
   
    if($request->input('quocgia'))
    {
        $user = User::findOrFail($request->id);
        $quocGia = $request->input('quocgia_text');
        $thanhPho = $request->input('tinh_text');
        $huyen = $request->input('huyen_text');
        $diaChiCuThe = $request->input('diachi');
        $fullAddress = $diaChiCuThe . ', ' . $huyen . ', ' . $thanhPho . ', ' . $quocGia;
        $user->address = $fullAddress;
        $user->save();
        return redirect()->back()->with('success', 'Thông tin tài khoản đã được cập nhật thành công.');
    }
    else
    {
        $user = User::findOrFail($request->id);
        $user->full_name = $request->user_name;
        $user->email = $request->email;
        $user->phone = $request->tel_user;
        $user->birdthday = $request->birthday_user;
        $user->gender = $request->gender ?$request->gender : $user->gender ;
        $user->save();
        return redirect()->back()->with('success', 'Thông tin tài khoản đã được cập nhật thành công.');
    }
 }


 public function getthanhtoan()
 {
    return view('frontend/pages/thanhtoan');
 }
 public function postdathang(Request $req){
    $cart =Session::get('cart');
    $cus = new Customer();
    $cus->name=$req->name;
    $cus->gender=$req->gender;
    $cus->email=$req->email;
    $cus->address=$req->address;
    $cus->phone_number=$req->phone;
    $cus->note=$req->notes?$req->notes:'';
    $cus->save();

    $bill = new Bill();
    $bill->id_customer=$cus->id;
    $bill->date_order = date('Y-m-d');
    $bill->total=$cart->totalPrice;
    $bill->payment=$req->payment_method?$req->payment_method:'tiền mặt';
    $bill->note=$req->notes?$req->notes:'';
    $bill->save();
    
    foreach($cart->items as $key=>$value)
    {
       $bd=new Bill_detail();
       $bd->id_bill=$bill->id;
       $bd->id_product=$key;
       $bd->quantity=$value['qty'];
       $bd->unit_price=$value['price'];
       $bd->save();
    }
    Session::forget('cart');
    return redirect('shop')->with(['matb'=>'successdathang','noidung'=>'Đặt hàng thành công']);;
}
}
