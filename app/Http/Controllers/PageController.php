<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index () {
        return 'Selamat Datang';
    }

    public function about () {
        return 'NIM : 2241760039 & Nama : Muhammad Khasbul Hadi Fauzan';
    }

    public function articles ($id) {
        return 'Halaman Artikel dengan ID '.$id;
    }

}
