<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

// use carbon

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.product.index', ['pageTitle' => 'Products', 'products' => Product::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {

        try {
            $formData = $request->all();
            // upload files 
            if ($request->has('image_url')) {
                $formData['image_url'] = $request->file('image_url')->store('products', 'public');
            }
            // create product 
            Product::create($formData);
            return redirect('product')->with(['msg' => 'New product added']);
        } catch (\Exception $e) {
            return back()->withInput()->with(['msg' => "Creation failed"]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('pages.product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Product $product)
    public function edit(Product $product)
    {
        return view('pages.product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        // dd($product);
        $formData = $request->all();

        // store image 
        if ($request->has('image_url')) {
            $formData['image_url'] = $request->file('image_url')->store('products', 'public');
        }

        $product->update($formData);

        return redirect()->route('product.index')->with(['msg' => "Product updated", "alert" => "success"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try {
             $product->delete();
            return redirect()->route('product.index')->with(['msg' => "Product deleted sucessfully", 'type' => 'success']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['msg' => 'List deletation failed', 'type' => 'fail']);
        }
    }
}
