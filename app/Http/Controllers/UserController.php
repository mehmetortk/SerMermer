<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
  public function getData(Request $req){
   
   if(isset($_GET['query'])){
    $search_text=$_GET['query'];
    $users= DB::table('users')->where('user_name','LIKE','%'.$search_text.'%')->paginate(3);
    $users->appends($req->all());
    return view('verone',['users'=>$users]);
   }
   else {
    return view('verone');

   }
   
  }
  public function Register(Request $req)
  {
    $validated = $req->validate([
      'mail' => 'required|min:10',
      'password' => 'required|min:8|confirmed'

    ]);
      $user = new User;
      $user->user_name = $req->user_name;
      $user->password = $req->password;
      $user->mail = $req->mail;
      $user->save();
      return view('login');
  }
  public function Login(Request $req)
  {

    $validated = $req->validate([
      'mail' => 'required|min:10',
      'password' => 'required|min:8'

    ]);

    $user = User::where('mail', '=', $req->mail)->where('password', '=', $req->password)->get()->first();
    if ($user) {
      $isSuccessful=1;
      return view('index',compact('isSuccessful'));
    }
  }
}
