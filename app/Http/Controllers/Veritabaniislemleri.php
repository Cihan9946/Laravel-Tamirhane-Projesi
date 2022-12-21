<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Veritabaniislemleri extends Controller
{
    public function ekle()
    {
DB::table("_create_users_table")->insert([
    "telnumber"=>"56588455"


]);
    }
}
