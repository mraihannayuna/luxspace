<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->ajax()) {

            $query = Products::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                return
                '
                <a href="' . route('dashboard.product.gallery.index', $item->id) .'" class="bg-teal-500 hover:bg-teal-700 text-white font-bol py-2 px-4 row rounded shadow-lg">Gallery</a>
                <a href="' . route('dashboard.product.edit', $item->id) .'" class="bg-blue-500 hover:bg-blue-700 text-white font-bol py-2 px-4 row rounded shadow-lg">Edit</a>
                <form class="inline-block" method="POST" action="' . route('dashboard.product.destroy', $item->id) . '">' . method_field('delete') . csrf_field() . ' <button class="bg-red-500 hover:bg-red-700 text-white font-bold mx-3 py-1.5 px-3 rounded shadow-lg type="submit">DELETE</button>
                </form>';
                })
                ->editColumn('price', function($item){

            return number_format($item->price);

            })
            ->rawColumns(['action'])
            ->make();
        }
        return view('page.dashboard.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page.dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {

        $data = $request->all();

        $data['slug'] = Str::slug($request->title);

        Products::create($data);

        return redirect()->route('dashboard.product.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        return view('page.dashboard.product.edit' , compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Products $product)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->title);

        $product->update($data);

        return redirect()->route('dashboard.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect()->route('dashboard.product.index');
    }
}
