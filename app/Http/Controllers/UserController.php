<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
  public  function login(request $req){
// return User::where(['email'=>$req->email])->get();
$user =  User::where(['email'=>$req->email])->first();
if(Hash::check($req->password, $user->password)){
$req->session()->put(['user' => $user]);
return redirect('/');
}
else{
    return "no match";
}
  }
  public function register(){
      return view('register');
  }
  public function registerAuth(Request $req){
      $user  = new User;
$user->name = $req->name;
$user->email = $req->email;
$user->password = Hash::make($req->password);
$user->save();

return redirect('/login');
  }
}
