<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Controllers\DB;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
}
