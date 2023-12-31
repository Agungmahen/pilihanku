<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
  
class AuthController extends Controller
{
     public function user (){
        $data = User::all();
        return view('user/index',compact('data'));
    } 

    public function login (){
        return view('login');
    }
    public function login_proses (Request $req){
        $req->validate([
            "email" => "required|min:6|max:50|email|exists:users,email",
            "password" => "required|min:5|max:20"
        ]);

        $user = User::where('email',$req->email)->first();

        if (Hash::check($req->password,$user->password)){

            Auth::attempt(['email' => $req->email, 'password' => $req->password]);
            return redirect('/');
            
        } else {
            return redirect()->back()->withErrors(['password'=>'Password Salah']);
        }
        
    }
    

    public function register (){
        return view('register');
    }
    public function register_prosess (Request $r){
        
        $r ->validate ([
            "name" => "required|min:3|max:30",
            "email" => "required|min:3|max:50|email|unique:users,email",
            "password" => "required|confirmed|min:6",
        ]);

        $new = new User();
        $new->name = $r->name;
        $new->email = $r->email;
        $new->password = Hash::make($r->password);
        $new->save();
        
       session()->flash('message','Registration Successful.');
        return redirect('register');
    }

    public function hapus_penerima($id){
        $data = user::findOrFail($id);
        $data->delete();
        return redirect('tambah_penerima');
    }

    public function aktivasi ($id){
        $data = user::findOrFail($id);
        $data->status = "Bayar";
        $data->save();
        return redirect()->back();


    }
    public function mati ($id){
        $data = user::findOrFail($id);
        $data->status = "Belum";
        $data->save();
        return redirect()->back();


    }
        
    
    public function logout(){
        Auth::logout();

        return redirect('/');
    }
}
