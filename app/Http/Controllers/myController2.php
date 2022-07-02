<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController2 extends Controller
{

    public function homnay() {
        return "<h1>Hôm nay là ".date('d/m/Y')."</h1>";
    }

    public function index() {
        $sdt = '0357432472';
        return view('contact', ['sdt'=> $sdt]);
    }
    public function giaipt(Request $pt)
    {
        $a = $pt->input('a');
        $b = $pt->input('b');
        $c = $pt->input('c');
        if ($a == 0) {
            if ($b == 0) {
                if ($c == 0) {
                    $result = 'Phương trình có vô số nghiệm';
                } else {
                    $result = 'Phương trình vô nghiệm';
                }
            } else {
                $tinh = -$c / $b;
                $result = "x=-b/c=" . $tinh;
            }
        } else {
            $dental = $b * $b - 4 * $a * $c;
            if ($dental < 0) {
                $result = "Phương trình vô nghiệm";
            } else if ($dental == 0) {
                $tinh = -$b / (2 * $a);
                $result = "Phương trình có nghiệm kép x1=x2=-b/2a=" . $tinh;
            } else {
                $x1 = (-$b + sqrt($dental)) / (2 * $a);
                $x2 = (-$b - sqrt($dental)) / (2 * $a);
                $result = "Phương trình có 2 nghiệm phân biệt x1=" . $x1 . ",x2=" . $x2;
            }
        }
        return view('giaipt')->with(['Kết quả: ' => $result]);
    }
}
