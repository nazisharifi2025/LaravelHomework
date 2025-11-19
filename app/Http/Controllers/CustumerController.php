<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Custumer;
class CustumerController extends Controller
{
    public function added(){
        $item  = new Custumer();
        $item->name = "Bahar";
        $item->email = "Bahar@gmail.com";
        $item->phone = "0123456789";
        $item->save();
        return "Custumer Added";
    }
    public function show(){
        $allcust = Custumer::all();
        return view('shoing' , ["all" => $allcust]);
    }
}
