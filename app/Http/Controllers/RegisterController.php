<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'Registrasi',
            'afterLogin' => false,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => ['required', 'integer', 'digits:16', 'unique:users'],
            'nama' => ['required', 'string', 'min:3', 'max:25'],
            'password' => ['required', 'min:8', 'max:255', 'confirmed'],
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        $message = 'Registrasi berhasil! Silahkan login';
        return redirect('/login')->with('success', $message);
    }
}
