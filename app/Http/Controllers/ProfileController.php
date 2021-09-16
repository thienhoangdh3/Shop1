<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $data = User::find(session('id'));
        return view('profile_user.index')->with(compact('data'));
    }
}
