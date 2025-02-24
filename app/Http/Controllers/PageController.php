<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Method untuk halaman utama
    public function index()
    {
        return 'Selamat Datang';
    }

    // Method untuk halaman About
    public function about()
    {
        return "Nama: Wahyu Trisnantoadi Prakoso <br> NIM: 234176015";
    }

    // Method untuk halaman artikel dengan parameter id
    public function articles($id)
    {
        return "Halaman Artikel dengan ID: " . $id;
    }
}
