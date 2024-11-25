<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        // Get all products
        return view("products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
        $products = Product::all();
        return view('products.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // //
        // $request->validate([
        //     'MaTheLoai' => 'required',
        //     'TenDoAn' => 'required',
        //     'TrangThai' => 'required',
        // ]);
        // // $doan = DoAn::create($request->all());
        // $doan = new Product();
        // $doan->MaTheLoai = $request->input('MaTheLoai');
        // $doan->TenDoAn = $request->input('TenDoAn');
        // $doan->TrangThai = $request->input('TrangThai');

        // if ($request->hasFile('Anh')) {
        //     $image = $request->file('Anh');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('Anh'), $imageName);
        //     $doan->Anh = 'Anh/' . $imageName;
        // }
        // $doan->save();
        // return redirect()->route('doans.index')->with('mes', 'Thêm mới đồ ăn thành công.');
        $product = Product::create($request->all());
        // $tmp = $request->all();
        // foreach ($tmp as $key => $value) {
        //     echo $key .' '. $value .'<br>';
        // }
        // $product->save();
        // return redirect('')->with('success','');
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
