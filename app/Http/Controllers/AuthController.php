<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
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
    public function showLoginForm(){
    
        return view('auth.login');
    }

    
    /**
     * Handle authentication of the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        $user = User::where('username', $credentials['username'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            return redirect()->route('dashboard');
        } else {
            return response()->back()->with('error', 'Incorrect username or password');
        }
    }

    public function logout(){
        Auth::logout();
        return view('landing');
    }


    public function showRegisterForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $existingUser = User::where('username', $request->username)
                            ->orWhere('email', $request->email)
                            ->first();
    
        if ($existingUser) {
            if ($request->wantsJson()) {
                return response()->json([
                    'message' => 'Duplicate data found. Please use different credentials.'
                ], 422);
            } else {
                return redirect()->back()->with('error', 'Duplicate data found. Please use different credentials.');
            }
        }
    
        $user = User::create([
            'nama_lengkap' => $request->name,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
        ]);
    
        if ($user) {
            $token = $user->createToken('auth_token')->plainTextToken;
            $data = [
                'signature' => $user->createToken('JWT_SECRET')->accessToken,
                'user' => $user,
                'token' => $token,
            ];
            Auth::login($user);
            return redirect()->route('dashboard')->with('success', 'Register successful. Welcome, ' . $user->name)->with('user', $user)->with('data', $data);
        } else {
            return redirect()->back()->with('error', 'Failed to register new account, please try again.');
        }
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
    public function store(Request $request)
    {
        //
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