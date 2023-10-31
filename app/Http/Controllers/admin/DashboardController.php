<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;

class DashboardController extends Controller
{
    public function dashboard() {
        $categories = Categories::all();
        $products = Products::all();
        return view ('admin/index')->with([

            'categories' => $categories,
            'products' => $products

        ]);
    }
}
