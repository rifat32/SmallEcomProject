<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class ProductController extends Controller
{
    public function index() {
        return view('product',['products'=>Product::take(4)->get()]);
    }
    public function details($id){
$data = Product::findOrFail($id);
return view('details',['product'=>$data]);
    }
    public function search(Request $req) {
         $products = Product::where('name' , 'like', '%' . $req->input('query') . '%')->get();
         return view('search',compact('products'));
    }
    public function addToCart(Request $req) {
if($req->session()->has('user')){
$cart = new Cart;
$cart->user_id = $req->session()->get('user')['id'];
$cart->product_id = $req->product_id;
$cart->save();
return redirect('/');
}
else{
    return redirect('/login');
}
    }
     static function cartItem() {
$userId = Session::get('user')['id'];

return DB::table('carts')->where(['user_id' => $userId])->count();
    }
    public function cartlist(){
        $userId = Session::get('user')['id'];
        $products = DB::table('carts')
        ->where(['user_id'=>$userId])
        ->join('products','carts.product_id','=','products.id')
        ->select('products.*','carts.id as cart_id')
        ->get();
        return view('cartlist',compact('products'));
    }
    public function removecart($id) {
cart::destroy($id);
return redirect('cartlist');

    }
public function ordernow(){
    $userId = Session::get('user')['id'];
    $total = DB::table('carts')
    ->join('products','carts.product_id','=','products.id')
    ->where(['carts.user_id'=>$userId])
    ->sum('products.price');
    return view('ordernow',compact('total'));
}
public function orderPlace(Request $req){
$userId = Session::get('user')['id'];
$allCart = cart::where('user_id',$userId)->get();
foreach($allCart as $cart){
$Order = new Order;
$Order->product_id = $cart['product_id'];
$Order->user_id = $cart['user_id'];
$Order->status = 'pending';
$Order->payment_method = $req->pmw;
$Order->payment_status = 'pending';
$Order->address = $req->address;
$Order->save();
cart::where('user_id',$userId)->delete();

}
return redirect('/');
}
public function myorders(Request $req){
    $userId = Session::get('user')['id'];
    $orders = DB::table('orders')
    ->join('products','orders.product_id','=','products.id')
    ->where(['orders.user_id'=>$userId])
    ->get();
    return view('myorders',compact('orders'));
}

}
