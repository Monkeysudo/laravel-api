<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        Product::create([
            'name' => $request->product_name,
            'price' => $request->price,
            'description' => $request->description
        ]);
        return response()->json([
            'message' => 'success create data'
        ]);
    }

    public function getAllData()
    {
        $products = Product::all();
        return response()->json([
            'products' => $products
        ]);
    }

    public function getData($id)
    {
        $products = Product::findOrFail($id);
        return response()->json($products);
    }

    public function searchData(Request $request)
    {
        $products = Product::where('name', 'LIKE','%'.$request->product_name.'%')->get();
        return response()->json([
            'productSearch' => $products
        ]);
    }

    public function updateData(Request $request, $id)
    {
        Product::findOrFail($id)->update([
            'name' => $request->product_name,
            'price' => $request->price,
            'description' => $request->description
        ]);
        return response()->json([
            'message' => 'success update data'
        ]);
    }

    public function deleteData($id)
    {
        Product::destroy($id);
        return response()->json([
            'message' => 'produk berhasil di hapus'
        ]);
    }
}
