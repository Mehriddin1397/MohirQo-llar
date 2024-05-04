<?php

namespace App\Http\Controllers;

use App\Events\ProductCreated;
use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
//        $this->authorizeResource(Product::class,'product');
    }


    public function index()
    {
        $products=Product::latest()->paginate(9);

        // cache qilish
//        $products = Cache::remember('products',now()->addSeconds(30), function (){
//            return Product::latest()->get();
//        });


        return view('products.index')->with('products',$products);

        //$products= Product::where('nomi')->get()->limit(); $products uzgaruvchisiga malumotlar bazasidan ma'lumotni olib kelibayabdi.
        //$products= Product::find(1); 1- postni malumotlar bazasidan olib keladi


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create')->with([
            'categories'=>Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        if ($request->hasFile('photo')){
        $name=$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('product-photo',$name);
        }

        $product = Product::create([
            'user_id'=>auth()->user()->id,
            'category_id'=>$request->category_id,
            'nomi'=> $request->nomi,
            'narxi'=> $request->narxi,
            'tasnifi'=>$request->tasnifi,
            'photo'=>$path ?? null,
        ]);

        ProductCreated::dispatch($product);

        auth()->user()->notify(new \App\Notifications\ProductCreated($product));

        return redirect()->route('products.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show')->with([
            'product'=> $product,
            'like_products'=> Product::latest()->get()->except($product->id)->take(4)
        ]);;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {

        return view('products.edit')->with(['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProductRequest $request, Product $product)
    {
        if ($request->hasFile('photo')){

            if (isset($product->photo)){
                Storage::delete($product->photo);
            }

            $name=$request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('product-photo',$name);
        }

        $product->update([
            'nomi'=> $request->nomi,
            'narxi'=> $request->narxi,
            'tasnifi'=>$request->tasnifi,
            'photo'=>$path ?? $product->photo,
        ]);

        return redirect()->route('products.show',['product'=>$product->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {


        if (isset($product->photo)){
            Storage::delete($product->photo);
        }

        $product->delete();


        return redirect()->route('products.index');
    }
}
