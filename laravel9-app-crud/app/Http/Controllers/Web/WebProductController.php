<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;

class WebProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view(
            'web.product.index',
            ['products' => $products]
        );
    }

    // 他のアクション（create, store, show, edit, update, destroy）も必要に応じて実装する
}
