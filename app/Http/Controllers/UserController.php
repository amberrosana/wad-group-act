<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showAllUsers()
    {
        $users = User::all();

        return view('users', compact('users'));
    }

    public function getProducts(Request $request)
    {
        $user = User::with('products')->find($request->id);

        return view('user-products', compact('user'));
    }
}
