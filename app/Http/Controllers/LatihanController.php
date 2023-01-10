<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index() {
        return "ini dari controler";
    }

    public function blog($id) {
        return "ini function blog dengan id".$id;
    }
    public function beranda() {
        $data = array('nama' => 'adittya ardana');
        return view('beranda', $data);
    }
}
