<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yonetim extends Controller
{
    public function site()
    {
     $data["yazi1"]="İLETİŞİM";
     return view('web',$data);
    }
}
