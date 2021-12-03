<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;

class AuthController extends Controller
{
    
    public function loginPage()
    {
        return view('login-page');
    }

    public function login(Request $request)
    {
        $rules = [
            'username'                 => 'required',
            'password'                 => 'required|alphaNum|min:6'
        ];
  
        $messages = [
            'username.required'        => 'Email wajib diisi',
            'password.required'        => 'Password wajib diisi',
            'password.alphaNum'        => 'Password harus berupa angka dan huruf'
        ];
  
        $validator = Validator::make($request->all(), $rules, $messages);
  
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
  
        $data = [
            'username'     => $request->input('username'),
            'password'  => $request->input('password'),
        ];
  
        Auth::attempt($data);
  
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            return redirect()->route('home');
  
        } else { // false
  
            //Login Fail
            Session::flash('error', 'Username atau password salah');
            return redirect()->route('login');
        }
  
    }
  
    public function registerPage()
    {
        return view('register-page');
    }
  
    public function register(Request $request)
    {
        $rules = [
            'name'            => 'required|min:3|max:35',
            'username'        => 'required|min:3|max:35',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|confirmed|alphaNum|min:6'
        ];
  
        $messages = [
            'name.required'       => 'Nama Lengkap wajib diisi',
            'name.min'            => 'Nama lengkap minimal 3 karakter',
            'name.max'            => 'Nama lengkap maksimal 35 karakter',
            'username.required'   => 'Username ajib diisi',
            'username.min'        => 'Username minimal 3 karakter',
            'username.max'        => 'Username maksimal 35 karakter',
            'email.required'            => 'Email wajib diisi',
            'email.email'               => 'Email tidak valid',
            'email.unique'              => 'Email sudah terdaftar',
            'password.required'   => 'Password wajib diisi',
            'password.alphaNum'   => 'Password harus berupa angka dan huruf',
            'password.confirmed'  => 'Password tidak sama dengan konfirmasi password',
            'password.min'        => 'Password minimal 6 karakter'
        ];
  
        $validator = Validator::make($request->all(), $rules, $messages);
  
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
  
        $user = new User();
        $user->name = ucwords(strtolower($request->name));
        $user->username = strtolower($request->username);
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $simpan = $user->save();
  
        if($simpan){
            Session::flash('success', 'Register berhasil! Silahkan login untuk masuk');
            return redirect()->route('login');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi register']);
            return redirect()->route('registerUser');
        }
    }
  
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }
}
