<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    //hubungin dengan tabel produk
    protected $table = 'produk';

    // Matiin Timestamps
    public $timestamps = false;

    //tentuin kolom yang bisa di isi
    protected $fillable = [
        'kode',             // Kode produk
        'nama',             // Nama produk
        'harga_jual',       // Harga jual produk
        'harga_beli',       // Harga beli produk
        'stok',             // Jumlah stok produk
        'min_stok',         // Jumlah minimal stok produk
        'deskripsi',        // Deskripsi produk
        'kategori_produk_id',// ID kategori produk
    ];

    // buat fungsi kasih relasi ke kategori produk
    public function kategori_produk() {
        return $this->BelongsTo(KategoriProduk::class);
    }
}
