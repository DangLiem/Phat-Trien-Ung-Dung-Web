<?php

namespace App\Http\Controllers;

use App\Test;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{
    public function getIndex1(){
        return View('index');
    }
    public function getIndex2(){
        $data = Test::all();
        return View('index', compact('data'));

    }
    public function ormtest(){
        $con = new Contact;
        $con->name_contact = 'b';
        $con->number_phone = '11111';
        $con->id_cat = '1';
        $con->id_owner = '1';
        $con->save();
    }
    public function qbtest(){
        $dl = DB::table('contacts')->where('id', '=','3')->delete();
    }
    public function getindex(){
        $con = Contact::all();
        return view('pages.index', compact('con'));
    }
    
}
