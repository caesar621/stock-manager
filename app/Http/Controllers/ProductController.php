<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('products.index', [
            // 'products' => Product::class->latest()->get(),
            'products' => Product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {

        $request->merge(['qt_stock' => "80"]);

        $validated = $request->validate([
            'name' => 'required',
            'batch' => 'required|max:13',
            'qt_stock' => 'required',
            'arr_date' => 'required',
            'fab_date' => 'required',
            'exp_date' => 'required',
        ]);

        // $request->user()->chirps()->create($validated);
        //$request->user()->products()->create($validated);
        Product::create($validated);

        return redirect(route('products.index'));
    }

    public function newform()
    {
        return view('products.newform');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
