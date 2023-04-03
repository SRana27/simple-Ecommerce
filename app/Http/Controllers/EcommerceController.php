<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{

public function index(){
    return view('frontEnd.home.home',[
        'products'=>Product::where('status',1)
            ->orderby('id','desc')
        ->take(5)
        ->get()
    ]);
}
public function detailsProduct($id){
    return view('frontEnd.product.details-product',[
        'product'=>Product::find($id)
    ]);
}
}
