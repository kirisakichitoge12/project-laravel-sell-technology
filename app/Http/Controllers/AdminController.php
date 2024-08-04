<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Bill_detail;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Products;
use App\Models\Products_Type;
use App\Models\User;

class AdminController extends Controller
{
   public function getdashboard()
   {
    return view("admin/pages/index");
   }
    public function getdangnhapadmin()
    {
       return view("admin/pages/dangnhap");
    }
    public function postdangnhapadmin(Request $req)
    {
        $validate = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:3|max:20'
        ], [
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Bạn nhập sai định dạng email',
            'password.required' => 'Bạn chưa nhập password',
            'password.min' => 'Vui lòng nhập mật khẩu ít nhất 3 kí tự',
            'password.max' => 'Vui lòng nhập mật khẩu không quá 20 kí tự'
        ]);
    
        $chungthuc = array('email' => $req->email, 'password' => $req->password);
    
        // Cố gắng đăng nhập người dùng
        if(Auth::attempt(['email'=>$req['email'],'password'=>$req['password']])){
           
            return redirect('admin/dashboard'); //admin dashboarh
            
            }
            else{
                return redirect('dang-nhap-admin')->with(['matb'=>'0','noidung'=>'Đăng nhập thất bại']);
            }
    }

    public function getproducts(){
        if(Auth::check()){
            $products=Products::orderBy('id', 'desc')->paginate(10);
            return view('admin/pages/dssanpham/product',compact('products'));
        }
        else
        {
            return view('admin/pages/dangnhap');
        }
    }

    public function getthemsanpham()
    {
      if(Auth::check())
      {
        $type_pro=Products_Type::all();
        return view('admin/pages/dssanpham/themsanpham',compact('type_pro'));
      }
      else
      {
          return view('admin/pages/dangnhap');
      }
    }
    
    public function addproducts(Request $req)
    {
        if ($req->hasFile('image')) {
            $file = $req->image;
            $ext = $req->image->extension();
            $file_name = time() . '-' . 'productstype.' . $ext;
            $file->move('resources/frontend/assets/img/', $file_name);
        }
        $products=new Products();
        $products->name=$req->name;
        $products->id_type=$req->loaisp;
        $products->unit_price=$req->price;
        $products->promotion_price=$req->pro_price!=null?$req->pro_price:0;
        $products->description=$req->des;
        $products->new=$req->rdoStatus;
        $products->trademark=$req->trade_mark;
        $products->image=  isset($file_name) ? $file_name : $products->image;
        $products->save();
        return redirect()->back()->with('thongbao','Thêm sản phẩm thành công');
    }
    public function geteditproducts($id)
    {
      $product=Products::find($id);
      $type_pro=Products_Type::all();
      return view('admin/pages/dssanpham/suasanpham',compact('product','type_pro'));
    }
    public function posteditproducts(Request $req ,$id)
    {
        if ($req->hasFile('image')) {
            $file = $req->image;
            $ext = $req->image->extension();
            $file_name = time() . '-' . 'products.' . $ext;
            $file->move('resources/frontend/assets/img/', $file_name);
        }
        $products=Products::find($id);
        $products->name=$req['name'];
        $products->id_type=$req['loaisp'];
        $products->unit_price=$req['price'];
        $products->promotion_price=$req['pro_price']!=null?$req['pro_price']:0;
        $products->description=$req['des'];
        $products->new=$req['rdoStatus'];
        $products->image= isset($file_name) ? $file_name :  $products->image;
        $products->save();
        return redirect()->back()->with('thongbao','Cập nhật sản phẩm thành công');
    }
    public function deleteproducts($id)
    {
       $pro=Products::find($id);
       $pro->delete();
       return redirect()->back()->with('thongbao','Xóa sản phẩm thành công');
    }
    public function getuser(){
        if(Auth::check()){   //Auth::check() thay bằng table admin 
            $user=User::orderBy('id', 'desc')->paginate(5);
            return view('admin/pages/user/danhsach',compact('user'));
        }
        else
        {
            return view('admin/pages/dangnhap');
        }
    }
    public function getkhachhang()
    {
        if(Auth::check())
        {
            $customer=Customer::all();
            return view('admin/pages/customers/danhsach',compact('customer'));
        }
        else
        {
            return view('admin/pages/dangnhap');
        }
       
    }
    public function xoakhachhang($id)
    {
        $cus=Bill::where('id_customer',$id)->count();
        if($cus==0)
        {
            $customer=Customer::find($id);
            $customer->delete();
        }
        else
        {
            return redirect()->back()->with('thongbao','Không thể xóa khách hàng');
        }
    }
    public function getbills()
    {
        if(Auth::check())
        {
            $donhang = Bill::join('customer', 'customer.id', '=', 'bills.id_customer')
            ->select('bills.id as bill_id', 'customer.id as customer_id','bills.*', 'customer.*')
            ->get();
            return view('admin/pages/dsdonhang/danhsachdonhang',compact('donhang'));
        }
        else       
        {
            return view('admin/pages/dangnhap');
        }
    }
    public function geteditbill($id)
    {
        $dhg=Bill::find($id);//lấy ra hóa đơn
        $cus=Customer::find($dhg->id_customer);//lấy ra khách hàng có hóa đơn
        $ct_hd=Bill_detail::where('id_bill',$dhg->id)
                                ->join('products','products.id','=','bill_detail.id_product')
                                ->get(['products.name','bill_detail.quantity','bill_detail.unit_price']);
        return view('admin/pages/dsdonhang/chitietdonhang',compact('dhg','cus','ct_hd'));
    }
    public function posteditbill(Request $req,$id)
    {
      $dhg=Bill::find($id);
      $dhg->state=$req->state;
      $dhg->save();
      return redirect()->back()->with('thongbao','Đã cập nhật đơn');
    }
   
    public function poststatus(Request $req)
    {
    
        $st = User::find($req->id);
        $st->code = $st->code==0 ? 1 : 0;
        $st->save();
        return redirect()->back()->with('thongbao', 'Đã cập nhật đơn');
    }
}
