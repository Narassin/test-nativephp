<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use App\Models\SaleSeries;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index (Request $request) {
        return view('dashboard');
    }

    public function dashboardStatistics () {
        // $data = {};

        $no_product = Product::count();
        $recent_sale = Sale::select('');
        $product_sold = Product::count();
        $sale_series = SaleSeries::count();

        $data = [
            'no product' => $no_product,
            'recent sale' => $recent_sale,
            'no product' => $product_sold,
            'no product' => $sale_series,

        ];

        return response()->json($data,200)
    }
}
