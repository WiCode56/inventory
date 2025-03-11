<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(Request $request){
        $search = $request->search;
        $product = Product::where('name', 'LIKE', '%'.$search.'%')
                                ->orWhere('kd_barang', 'LIKE', '%'.$search.'%')
                                ->orWhere('description', 'LIKE', '%'.$search.'%')
                                ->orWhere('price', 'LIKE', '%'.$search.'%')
                                ->orWhere('tgl_rilis', 'LIKE', '%'.$search.'%')
                                ->orderBy('id','desc')
                                ->paginate(6);
        return view('product', ['productList' => $product]);
    }


    public function create(){
        $categories = Category::all(); // Ambil semua kategori
    return view('product-add', compact('categories'));
    }

    public function getLatestCode(Request $request)
    {
        $prefix = $request->query('prefix');
        $latestCode = DB::table('products')
            ->where('kd_barang', 'like', "$prefix-%")
            ->orderBy('kd_barang', 'desc')
            ->value('kd_barang');

        if ($latestCode) {
            $lastNumber = (int) str_replace("$prefix-", "", $latestCode);
            $nextNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $nextNumber = '001';
        }

        return response()->json(['next_number' => $nextNumber]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'kd_barang' => 'required|unique:products,kd_barang',
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'tgl_rilis' => 'required|date',
            'category_id' => 'required|exists:categories,id'
        ],[
            'kd_barang.required' => 'Kode Barang harus diisi',
            'kd_barang.unique' => 'Kode Barang sudah ada',
            'name.required' => 'Nama Produk harus diisi',
            'description.string' => 'Deskripsi harus berupa teks',
            'price.required' => 'Harga harus diisi',
            'price.numeric' => 'Harga harus berupa angka',
            'price.min' => 'Harga minimal 0',
            'tgl_rilis.required' => 'Tanggal Rilis harus diisi',
            'tgl_rilis.date' => 'Tanggal Rilis harus dalam format tanggal',
            'category_id.required' => 'Kategori harus dipilih',
            'category_id.exists' => 'Kategori yang dipilih tidak ditemukan'
        ]);

        // dd($data);

        // Simpan produk ke database
        $product = Product::create([
            'kd_barang' => $request->kd_barang,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'tgl_rilis' => $request->tgl_rilis,
            'category_id' => $request->category_id
        ]);


        if ($product) {
            Session::flash('successtambah', 'success');
        }

        return redirect('/product');
    }


    public function edit(Request $request, $id){
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('product-edit', ['product' => $product], compact('categories'));
    }

    public function update(Request $request, $id){
        $product = Product::findOrFail($id);
        $product->update($request->all());



        if($product){
            Session::flash('successupdate', 'success');
        }
        return redirect('/product');
    }

    public function delete($id){
        $product = Product::findOrFail($id);
        return view('product-delete', ['product' => $product]);
    }

    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();

        if($product){
            Session::flash('success', 'success');
            Session::flash('message', 'delete Product Success!');
        }
        else{
            Session::flash('error','error');
            Session::flash('message', 'delete Product Failed!');
        }
        return redirect('/product');
    }

}
