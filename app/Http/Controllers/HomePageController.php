<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nick;

class HomePageController extends Controller
{
    public function index()
    {
        $datas = Nick::orderBy('created_at')->get();
        return view('layouts.main')->with(compact('datas'));
    }

    public function view($id)
    {
        $datas = Nick::find($id);
        return view('public.view')->with(compact('datas'));
    }
}
