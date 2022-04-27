<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
  public function index()
  {
    return view("register.index", [
      "title" => "Register",
      "link" => "register"
    ]);
  }

  public function store(Request $request)
  {
    $rules = [
      "name" => "required|max:255",
      "username" => ["required", "min:3", "max:255", "unique:users"],
      "email" => "required|email:dns|unique:users",
      "password" => "required|min:5|max:255"
    ];

    $validatedData = $request->validate($rules);
    $validatedData["password"] = Hash::make($validatedData["password"]);

    User::create($validatedData);

    return redirect("/login")->with("success", "Registration Successfull! Please Login");
  }
}
