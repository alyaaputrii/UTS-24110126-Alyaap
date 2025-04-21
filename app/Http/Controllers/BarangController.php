<?php

namespace App\Http\Controllers\BarangController;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {
    $barangs = Barang ::all();
        return view('barang'
    compact('barang'));

    }
    public function index() {

    }
}
