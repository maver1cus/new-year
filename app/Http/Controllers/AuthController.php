<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:api', ['except' => ['login', 'register']]);
  }

  public function login()
  {
    $credentials = request(['email', 'password']);

    $token = Auth::attempt($credentials);

    if (!$token) {
      return response()->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
    }

    return $this->responWinthToken($token);
  }

  protected function responWinthToken($token)
  {
    return response()->json([
      'access_token' => $token,
      'token_type' => 'bearer',
      'expires_in' => auth()->factory()->getTTL() * 60
    ]);
  }

  public function register(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'email' => 'required|string|email',
      'password' => 'required|string|min:7',
    ]);

    if ($validator->fails()) {
      return response(['error' => $validator->errors()->first()], Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    $user = User::where('email', $request->email)->first();

    if ($user) {
      return response()->json(['error' => 'Пользователь с таким email уже существует'], Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);

    $token = Auth::login($user);

    return $this->responWinthToken($token);
  }

  public function logout()
  {
    Auth::logout();
    return response()->json(['message' => 'Successfully logged out']);
  }

  public function refresh()
  {
    $token = auth()->refresh();

    return $this->responWinthToken($token);
  }
}

