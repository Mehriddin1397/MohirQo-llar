<?php

namespace App\Http\Controllers\Api;

use App\Events\ProductCreated;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::limit(10)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('photo')){
            $name=$request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('product-photo',$name);
        }

        $product = Product::create([
            'user_id'=>1,
            'category_id'=>$request->category_id,
            'nomi'=> $request->nomi,
            'narxi'=> $request->narxi,
            'tasnifi'=>$request->tasnifi,
            'photo'=>$path ?? null,
        ]);

        return response(['success'=>'Product muvaffaqiyatli yaratildi']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
//        return $product;
        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return 'deleted';
    }
}
