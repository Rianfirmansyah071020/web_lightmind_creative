<?php

namespace App\Http\Controllers\umum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(Request $request)
    {

        return view('pages.umum.beranda.index');
    }
}
