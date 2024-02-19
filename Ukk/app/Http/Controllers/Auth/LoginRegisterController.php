<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
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
        //
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
        return view('');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|string|max:250',
            'email'=>'required|email|max:250',
            'password'=>'required|min:8|confirmed',
            'username'=>'required|string|max:50|unique:users',
            'nomor_telepon'=>'required|number|max:13',
            'alamat'=>'required|string|max:250',

        ]);

        User::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'username'=>$request->username,
            'nomor_telepon'=>$request->nomor_telepon,
            'alamat'=>$request->alamat,
        ]);

        $credentials  = $request->only('username', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('login')->withSuccess('Succes Login');
    }

    /**
     * Display the specified resource.
     */
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
