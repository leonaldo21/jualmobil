<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
     //   $data = [
     //       'nama' => 'Doraemon' ,
     //       'pekerjaan' => 'Developer' ,
     //   ];

     //   return view('home')->with($data);

        $nama = "Nobita";
        $pekerjaan = "Sudent";
        return view('home', compact('nama','pekerjaaan'));
    }

    public function contact()
    {
        return view('contact');
    }
}
