<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.add-product');
    }

    public function saveProduct(Request $request)
    {
        Product::saveProduct($request);
        return back();
    }

    public function manageProduct()
    {
        return view('admin.product.manage-product', [
            'products' => Product::all()
        ]);
    }

    public function editProduct($id)
    {
        return view('admin.product.edit-product', [
            'products' => Product::find($id)
        ]);
    }

    public function updateProduct(Request $request)
    {
        Product::saveProduct($request);
        return redirect(route('manage.product'));
    }

    public function statusProduct($id)
    {
        Product::updatestatusProduct($id);
        return redirect(route('manage.product'));
    }
    public function deleteProduct(Request $request){

        $product= Product::find($request->product_id);
        if ($product->image){
            unlink($product->image);
        }

        $product->delete();
        return back();
    }
}
