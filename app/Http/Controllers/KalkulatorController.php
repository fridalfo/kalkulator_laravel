<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index(){
        return view("index");
    }

    public function hitung(Request $request){
    
        $angka1 = $request->get("angka1");
        $operator = $request->get("operator");
        $angka2 = $request->get("angka2");
        

        switch($operator){
            case "tambah":
                $hasil = $angka1 + $angka2;
            break;
            case "kurang":
                $hasil = $angka1 - $angka2;
            break;
            case "kali":
                $hasil = $angka1 * $angka2;
            break;
            case "bagi":
                $hasil = $angka1 / $angka2;
            break;
        }
        return redirect("/")->with("angka1",$angka1)
                            ->with("operator",$operator)
                            ->with("angka2",$angka2)
                            ->with("hasil",$hasil);
                            
    }
}
