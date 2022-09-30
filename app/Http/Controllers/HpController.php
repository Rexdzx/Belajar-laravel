<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hp;
class HpController extends Controller
{
    public function hape()
    {
        return view('nomorhp', [
            "nama" => "Muhammad Sumbul",
            "alamat" => "Jl.Khidir Karawita",
            "usia"  => "18 Tahun",
            "nomorhp" => "0895601317849"
        ]);
    }
}
