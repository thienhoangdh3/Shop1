<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Storage;

class AdminController extends Controller
{
    public function index()
    {

        return view('profile_admin.index');
    }

    public function listUser()
    {
        $datas = User::paginate(10);
        return view('profile_admin.user.list')->with(compact('datas'));
    }

    public function postFile(Request $request)
    {
        // dd($request->file("abc")->store("", "google"));
        // dd(Storage::disk('google')->allFiles());
    }
}