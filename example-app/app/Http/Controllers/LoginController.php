<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;


use Illuminate\Support\Facades\DB;
use App\Models\Login;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('admin.php');
        }else{
            return view('masuk.php');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];


      
        

        if (Auth::attempt($data)) {
            $role_id = auth()->user()->role_id;
            
            if($role_id==1)
            {
                return redirect('admin'); // menu admin
            }
            else if($role_id==3)
            {
                return redirect('');  // menu pemodal
            }
            elseif($role_id==2)
            {
                return redirect('');  // menu pemodal
            }
            
           

        }else{
           
            Session::flash('error', 'Email atau Password Salah');
            return redirect('masuk');
        }
    }


    // public function customSignup(Request $request)
    // {  
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6',
    //     ]);

    //     $data = $request->all();
        
    //     $check = $this->createUser($data);
        
    //     return redirect("dashboard")->withSuccess('Successfully logged-in!');
    // }


    // public function createUser(array $data)
    // {
    //   return User::create([
    //     'name' => $data['name'],
    //     'email' => $data['email'],
    //     'password' => Hash::make($data['password'])
    //   ]);
    // }    
    

    public function daftar()
    {
       
        return view('daftar');
    }

      
    public function masuk()
    {
       
        return view('masuk');
    }
    public function regis_user(Request $request)
    {
       
    //    dd('submitted');

    // DB::table('users')->insert([
    //     'name'=>$request->name,
    //     'password' => Hash::make($request->password),
    //     'email'=>$request->email,
    //     'role_id'=>$request->role_id,
    //     'no_hp'=>$request->no_hp,
    // ]);
    // $request->validate([
    //     'name'=>['required','string','min:3','max:25'],
    //     'password'=>['required','min:8'],
    //     'email'=>['required','email'],
    //     'no_hp'=>['required'],
    // ]);

    user::insert([
        'name'=>$request->name,
        'password' => Hash::make($request->password),
        'email'=>$request->email,
        'role_id'=>$request->role_id,
        'no_hp'=>$request->no_hp,
    ]);
    return redirect('/masuk');

    }




    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}