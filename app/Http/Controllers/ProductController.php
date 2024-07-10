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
    public function index(Request $request): View
    {
        return view('products.index', [
            'products' => Product::all(),
        ]);
    }

    public function filter( Request $request ) {

        $arrStartDate = $request->input('arr_start_date');
        $arrEndDate = $request->input('arr_end_date');

        $fabStartDate = $request->input('fab_start_date');
        $fabEndDate = $request->input('fab_end_date');

        $expStartDate = $request->input('exp_start_date');
        $expEndDate = $request->input('exp_end_date');

        $query= Product::select('*');

        if (!empty($request->name)) {
            $query->where('name', '=', $request->name);
        }

        if (!empty($arrStartDate) && !empty($arrEndDate)) {
            $query->whereBetween('arr_date', [$arrStartDate, $arrEndDate]);
        }

        if (!empty($fabStartDate) && !empty($fabEndDate)) {
            $query->whereBetween('fab_date', [$fabStartDate, $fabEndDate]);
        }

        // $request->exp_start_date
        if (!empty($expStartDate) && !empty($expEndDate)) {
            $query->whereBetween('exp_date', [$expStartDate, $expEndDate]);
        }

        if (!empty($request->order)) {
            $query->orderBy('arr_date', $request->order);
        }
        
        $products = $query->get();
        
        return view('products.index', [
            'products' => $products,
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

        // $request->merge(['qt_stock' => "80"]);

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

    public function search()
    {
        return view('products.menu', [
            'products' => Product::all(),
        ]);
    }

    public function viewer()
    {

        // $names = Product::distinct('name')->pluck('name');
        // $products = collect();

        // foreach ($names as $name) {
        //     $product = Product::where('name', $name)
        //         ->where('qt_stock', '>', 0)
        //         ->orderBy('fab_date', 'asc')
        //         ->first();

        //     if ($product) {
        //         $products->push($product);
        //     }
        // }

        $products = Product::where('qt_stock', '>', 0)
            ->orderBy('fab_date', 'asc')
            ->groupBy('name')
            ->get();

            return view('products.viewer', [
                'products' => $products,
            ]);
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
