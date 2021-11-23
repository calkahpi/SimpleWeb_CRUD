<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kalkulator extends Controller
{
    public function index() {
        return view("kalkulator");
    }
    public function penjumlahan() {
        $a=10;
        $b=5;
        $c=$a+$b;
        return $c;
    }
    public function pengurangan() {
        $a=10;
        $b=5;
        $c=$a-$b;
        return $c;
    }
    public function pembagian() {
        $a=10;
        $b=5;
        $c=$a/$b;
        return $c;
    }
    public function perkalian() {
        $a=10;
        $b=5;
        $c=$a*$b;
        return $c;
    }
    public function modulus() {
        $a=10;
        $b=5;
        $c=$a%$b;
        return $c;
    }
}
