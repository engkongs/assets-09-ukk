<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register() {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:250',
            'email'=>'required|email|max:250|unique:users',
            // 'username'=>'required|string|max:50|',
            'password'=>'required|min:8|confirmed',
            'nomor_telepon'=>'required|string|max:13',
            'alamat'=>'required|string|max:250',
            'role_id'=>'required|string',

        ]);
        
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            // 'username'=>$request->username,
            'nomor_telepon'=>$request->nomor_telepon,
            'alamat'=>$request->alamat,
            'role_id'=>$request->role_id,
            
        ]);
        

        $credentials  = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('login')->withSuccess('Succes Register');
        
        
        
    }

    /**
     * Display the specified resource.
     */

     public function login() {
        return view('auth.login');
    }

    public function authenticate(Request $request) {
        $credentials  = $request ->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->role_id === 1) {
                return redirect()->intended('/dashboard');
                } else {
                    return redirect()->intended('/kategori');
                    
                }
            
            return redirect('dashboard')->withSuccess('Succes Login');        
        }

        return back()->withErrors([
            'email'=> 'Tidak Sesuai dengan email', 
        ])->onlyInput('email');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
