<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $totalProducts = Product::count();
        $totalUsers = User::count();

        return view('dashboard', compact('totalProducts', 'totalUsers'));
    }
}
