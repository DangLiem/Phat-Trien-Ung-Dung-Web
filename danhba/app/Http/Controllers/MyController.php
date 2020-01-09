<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getIndex1(){
        return View('index');
    }
    public function getIndex2(){
        $data = Test::all();
        return View('index', compact('data'));

    }
}
