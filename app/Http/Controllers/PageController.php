<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return "Jauhar Maulana A'la <br> 2141720186";
    }
    public function articles($id) {
        return 'Halaman Artikel dengan ID: '.$id;
    }
}
