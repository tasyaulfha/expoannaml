<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class User extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('home_user');
        }
    }
    public function login(){
        return view('login');
    }
    public function loginPost(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $pekerjaan = $request->pekerjaan;
        $data = ModelUser::where('email',$email)->first();
        
            if(Hash::check($password,$data->password)){
                if ($pekerjaan=="pelapor") {
                    Session::put('nama',$data->nama);
                    Session::put('email',$data->email);
                    Session::put('pekerjaan',$data->pekerjaan);
                    Session::put('login',TRUE);
                    return redirect('indexpelapor');
                }
                if ($pekerjaan=="bpbd") {
                    Session::put('nama',$data->nama);
                    Session::put('email',$data->email);
                    Session::put('pekerjaan',$data->pekerjaan);
                    Session::put('login',TRUE);
                    return redirect('indexbpbd');
                }
                if ($pekerjaan=="dinas") {
                    Session::put('nama',$data->nama);
                    Session::put('email',$data->email);
                    Session::put('pekerjaan',$data->pekerjaan);
                    Session::put('login',TRUE);
                    return redirect('indexdinas');
                }
                // Session::put('nama',$data->nama);
                // Session::put('email',$data->email);
                // Session::put('pekerjaan',$data->pekerjaan);
                // Session::put('login',TRUE);
                // return redirect('home_user');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !'.Hash::check($password,$data->password));
            }
        
    }
    
    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }
    public function register(Request $request){
        return view('register');
    }
    public function registerPost(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'pekerjaan' => 'required',
            'password' => 'required',
            'konfirmasi' => 'required|same:password',
        ]);
        $data =  new ModelUser();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->pekerjaan = $request->pekerjaan;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }
}
