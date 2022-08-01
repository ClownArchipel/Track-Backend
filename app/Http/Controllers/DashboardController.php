<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use DB;
class DashboardController extends Controller
{
    public function index(){
        return view('backend.dashboard');
    }
}
