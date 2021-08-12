<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//untuk menggunakan function Builder Query
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Product extends Controller
{
    //function index, halaman yg pertama kali di akses ketika menjalankan controller product
    public function index()
    {
    	// mengambil data dari table product
    	$product = DB::table('product')->get();
 
    	// mengirim data pegawai ke view index
    	return view('product',['product_views' => $product]);
 
    }

    //function produk details
    public function productdetail($id)
    {
    	$product = DB::table('product')->where('product_id',$id)->get();
        // passing data produk yang didapat ke view productedit.blade.php
        return view('productdetails',['product_views' => $product]);
 
    }
    
    //function produk details & pemesanana
    public function productpay($id)
    {
    	$product = DB::table('product')->where('product_id',$id)->get();
        // passing data produk yang didapat ke view productedit.blade.php
        return view('productpay',['product_views' => $product]);
 
    }

    //function menampilkan form tambah produk majoo
    public function productadd()
    {
 
	    // memanggil view tambah
	    return view('admin/productadd');
 
    }

    //function mengambil data produk dari database
    public function productget()
    {
    	// mengambil data dari table product
    	$product = DB::table('product')->get();
 
    	// mengirim data produk ke view produk
    	return view('admin/product',['product_views' => $product]);
 
    }

    //function menambahkan produk ke database
    public function productaddsave(Request $request)
    {
        //validasi form
        $this->validate($request,[
            'name_product'          => 'required',
            'price_product'         => 'required|numeric',
            'des_product'           => 'required',
            'file_product'          => 'required'
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file_product');
        // nama file
        $img_name = $file->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
		$folder_upload = 'assets/images/';
        // jalankan function upload
        $file->move($folder_upload,$img_name);

        //cek apakah nama sudah digunakan atau belom
        $cek_product_name = DB::table('product')->where('product_name',$request->name_product)->exists();
        //Jika terdapat nama sama akan dikembalikan ke halaman produk dan mengembalikan notif
        if ($cek_product_name >= 1){
            // mengirim data produk ke view produk
    	    return view('admin/productadd',['notif' => "Nama tidak boleh sama."]);
            exit;
        }
        
        // insert data ke table produk
        DB::table('product')->insert([
            'product_name'          => $request->name_product,
            'product_description'   => $request->des_product,
            'product_image'         => $img_name,
            'product_price'         => $request->price_product
        ]);
        // alihkan halaman ke halaman produk
        return redirect('/admin/product');
    
    }

    //function menampilkan produk berdasarkan id ke view produk edit
    public function productedit($id)
    {
        // mengambil data produk berdasarkan id yang dipilih
        $product = DB::table('product')->where('product_id',$id)->get();
        // passing data produk yang didapat ke view productedit.blade.php
        return view('admin/productedit',['product_views' => $product]);
    
    }

    //function menyimpan perubahan produk ke database
    public function producteditsave(Request $request)
    {
        //validasi form
        $this->validate($request,[
            'name_product'          => 'required',
            'price_product'         => 'required|numeric',
            'des_product'           => 'required',
            'file_product'          => 'required'
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file_product');
        // nama file
        $img_name = $file->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
		$folder_upload = 'assets/images/';
        // jalankan function upload
        $file->move($folder_upload,$img_name);

        // print_r($request); exit();
        // insert data ke table produk
        DB::table('product')->where('product_id',$request->id_product)->update([
            'product_name'          => $request->name_product,
            'product_description'   => $request->des_product,
            'product_image'         => $img_name,
            'product_price'         => $request->price_product
        ]);
        // alihkan halaman ke halaman produk
        return redirect('/admin/product');
    
    }

    //function menghapus produk berdasarkan id dari database
    public function productdelete($id)
    {
        // menghapus data produk berdasarkan id yang dipilih
        $product = DB::table('product')->where('product_id',$id)->delete();
        // alihkan halaman ke halaman produk
        return redirect('/admin/product');
    
    }

    //function proses pembelian produk
    public function productpaysave(Request $request)
    {
        //validasi form
        $this->validate($request,[
            'name'          => 'required',
            'no_hp'         => 'required|numeric',
            'address'       => 'required',
            'bukti_transfer'=> 'required'
        ]);
        
        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('bukti_transfer');
        // nama file
        $img_name = $file->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
		$folder_upload = 'assets/images/';
        // jalankan function upload
        $file->move($folder_upload,$img_name);
        
        // insert data ke table produk transaksi
        $date = Carbon::now();
        DB::table('product_transaction')->insert([
            'product_transaction_order_name'    => $request->name,
            'product_transaction_date'          => $date->toDateTimeString(),
            'product_transaction_file'          => $img_name,
            'product_transaction_address'       => $request->address,
            'product_transaction_no_handphone'  => $request->no_hp,
            'product_transaction_total_price'   => $request->total_price,
            'product_id'                        => $request->product_id
        ]);
        // alihkan halaman ke halaman produk
        return redirect('/product');
    
    }
    
    //function mengambil data order produk dan produk transaksi dari database
    public function productorder()
    {
    	// mengambil data dari table product transaction
    	$product = DB::table('product_transaction')
                        ->join('product', 'product.product_id', '=', 'product_transaction.product_id')
                        ->get();
 
    	// mengirim data order produk ke view order
    	return view('admin/order',['product_views' => $product]);
 
    }

    public function maintenance()
    {
    	return view('admin/maintenance');
    }
}
