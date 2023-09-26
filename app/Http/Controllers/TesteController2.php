<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TesteController2 extends Controller
{
    public function index(){
        return response()->json(['nome' => 'João', 'idade' => 20]);
    }
}
