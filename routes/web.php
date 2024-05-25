<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//BARANG
Route::get('/barang', [App\Http\Controllers\BarangController::class, 'barang'])->name('barang');
Route::post('/create_barang', [App\Http\Controllers\BarangController::class, 'create'])->name('create_barang');
Route::get('/edit_barang/{kode_barang}', [App\Http\Controllers\BarangController::class, 'edit'])->name('edit_barang');
Route::put('/update_barang/{kode_barang}', [App\Http\Controllers\BarangController::class, 'update'])->name('update_barang');
Route::delete('/delete_barang/{kode_barang}', [App\Http\Controllers\BarangController::class, 'delete'])->name('delete_barang');
Route::get('/cetak_barang', [App\Http\Controllers\BarangController::class, 'cetak'])->name('cetak_barang');
//BIAYA
Route::get('/biaya', [App\Http\Controllers\BiayaController::class, 'biaya'])->name('biaya');
Route::post('/create_biaya', [App\Http\Controllers\BiayaController::class, 'create'])->name('create_biaya');
Route::get('/edit_biaya/{kode_biaya}', [App\Http\Controllers\BiayaController::class, 'edit'])->name('edit_biaya');
Route::put('/update_biaya/{kode_biaya}', [App\Http\Controllers\BiayaController::class, 'update'])->name('update_biaya');
Route::delete('/delete_biaya/{kode_biaya}', [App\Http\Controllers\BiayaController::class, 'delete'])->name('delete_biaya');
//SATUAN
Route::get('/satuan', [App\Http\Controllers\SatuanController::class, 'satuan'])->name('satuan');
Route::post('/create_satuan', [App\Http\Controllers\SatuanController::class, 'create'])->name('create_satuan');
Route::get('/edit_satuan/{kode_satuan}', [App\Http\Controllers\SatuanController::class, 'edit'])->name('edit_satuan');
Route::put('/update_satuan/{kode_satuan}', [App\Http\Controllers\SatuanController::class, 'update'])->name('update_satuan');
Route::delete('/delete_satuan/{kode_satuan}', [App\Http\Controllers\SatuanController::class, 'delete'])->name('delete_satuan');
//CUSTOMER
Route::get('/customer', [App\Http\Controllers\customerController::class, 'customer'])->name('customer');
Route::post('/create_customer', [App\Http\Controllers\customerController::class, 'create'])->name('create_customer');
Route::get('/edit_customer/{kode_customer}', [App\Http\Controllers\customerController::class, 'edit'])->name('edit_customer');
Route::put('/update_customer/{kode_customer}', [App\Http\Controllers\customerController::class, 'update'])->name('update_customer');
Route::delete('/delete_customer/{kode_customer}', [App\Http\Controllers\customerController::class, 'delete'])->name('delete_customer');
//KARYAWAN
Route::get('/karyawan', [App\Http\Controllers\karyawanController::class, 'karyawan'])->name('karyawan');
Route::post('/create_karyawan', [App\Http\Controllers\karyawanController::class, 'create'])->name('create_karyawan');
Route::get('/edit_karyawan/{id_karyawan}', [App\Http\Controllers\karyawanController::class, 'edit'])->name('edit_karyawan');
Route::put('/update_karyawan/{id_karyawan}', [App\Http\Controllers\karyawanController::class, 'update'])->name('update_karyawan');
Route::delete('/delete_karyawan/{id_karyawan}', [App\Http\Controllers\karyawanController::class, 'delete'])->name('delete_karyawan');
//PENGELUARAN
Route::get('/pengeluaran', [App\Http\Controllers\pengeluaranController::class, 'pengeluaran'])->name('pengeluaran');
Route::post('/create_pengeluaran', [App\Http\Controllers\pengeluaranController::class, 'create'])->name('create_pengeluaran');
Route::get('/edit_pengeluaran/{kode_pengeluaran}', [App\Http\Controllers\pengeluaranController::class, 'edit'])->name('edit_pengeluaran');
Route::put('/update_pengeluaran/{kode_pengeluaran}', [App\Http\Controllers\pengeluaranController::class, 'update'])->name('update_pengeluaran');
Route::delete('/delete_pengeluaran/{kode_pengeluaran}', [App\Http\Controllers\pengeluaranController::class, 'delete'])->name('delete_pengeluaran');
//SUPPLIER
Route::get('/supplier', [App\Http\Controllers\supplierController::class, 'supplier'])->name('supplier');
Route::post('/create_supplier', [App\Http\Controllers\supplierController::class, 'create'])->name('create_supplier');
Route::get('/edit_supplier/{kode_supplier}', [App\Http\Controllers\supplierController::class, 'edit'])->name('edit_supplier');
Route::put('/update_supplier/{kode_supplier}', [App\Http\Controllers\supplierController::class, 'update'])->name('update_supplier');
Route::delete('/delete_supplier/{kode_supplier}', [App\Http\Controllers\supplierController::class, 'delete'])->name('delete_supplier');
//OUTLET
Route::get('/outlet', [App\Http\Controllers\outletController::class, 'outlet'])->name('outlet');
Route::post('/create_outlet', [App\Http\Controllers\outletController::class, 'create'])->name('create_outlet');
Route::get('/edit_outlet/{kode_outlet}', [App\Http\Controllers\outletController::class, 'edit'])->name('edit_outlet');
Route::put('/update_outlet/{kode_outlet}', [App\Http\Controllers\outletController::class, 'update'])->name('update_outlet');
Route::delete('/delete_outlet/{kode_outlet}', [App\Http\Controllers\outletController::class, 'delete'])->name('delete_outlet');
//PEMBELIAN
Route::get('/pembelian', [App\Http\Controllers\TransaksiPembelianController::class, 'pembelian'])->name('pembelian');
Route::post('/create_pembelian', [App\Http\Controllers\TransaksiPembelianController::class, 'create'])->name('create_pembelian');
Route::get('/edit_pembelian/{kode_po}', [App\Http\Controllers\TransaksiPembelianController::class, 'edit'])->name('edit_pembelian');
Route::put('/update_pembelian/{kode_po}', [App\Http\Controllers\TransaksiPembelianController::class, 'update'])->name('update_pembelian');
Route::delete('/delete_pembelian/{kode_po}', [App\Http\Controllers\TransaksiPembelianController::class, 'delete'])->name('delete_pembelian');
//PENJUALAN
Route::get('/penjualan', [App\Http\Controllers\TransaksipenjualanController::class, 'penjualan'])->name('penjualan');
Route::post('/create_penjualan', [App\Http\Controllers\TransaksipenjualanController::class, 'create'])->name('create_penjualan');
Route::get('/edit_penjualan/{id_transaksi}', [App\Http\Controllers\TransaksipenjualanController::class, 'edit'])->name('edit_penjualan');
Route::put('/update_penjualan/{id_transaksi}', [App\Http\Controllers\TransaksipenjualanController::class, 'update'])->name('update_penjualan');
Route::delete('/delete_penjualan/{id_transaksi}', [App\Http\Controllers\TransaksipenjualanController::class, 'delete'])->name('delete_penjualan');
//DETAIL JUAL
Route::get('/detail_jual', [App\Http\Controllers\detailPenjualanController::class, 'detail_jual'])->name('detail_jual');
Route::get('/detail_jual', [App\Http\Controllers\detailPenjualanController::class, 'detail_jual'])->name('detail_jual');
//DETAIL BELI
Route::get('/detail_beli', [App\Http\Controllers\detailPembelianController::class, 'detail_beli'])->name('detail_beli');
Route::post('/create_detail_beli', [App\Http\Controllers\detailPembelianController::class, 'create'])->name('create_detail_beli');

Route::get('/kas_masuk', [App\Http\Controllers\kasmasukController::class, 'kas_masuk'])->name('kas_masuk');
Route::get('/kas_keluar', [App\Http\Controllers\kaskeluarController::class, 'kas_keluar'])->name('kas_keluar');
Route::get('/buku_besar', [App\Http\Controllers\bukubesarController::class, 'buku_besar'])->name('buku_besar');
Route::get('/invoice', [App\Http\Controllers\invoiceController::class, 'invoice'])->name('invoice');
