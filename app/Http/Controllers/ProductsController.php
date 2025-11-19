<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function add(){
        $item = new Products();
        $item->name = "Oringe";
        $item->price = 120;
        $item->save();
        return "Item Added";
    }
    // Insert endded
    public function read(){
        return Products::all();
    }
    // read endded
    public function show($id){
        $item = new Products();
        $product = $item->findOrfail($id);
        return $product;
    }
    // show endded
    public function Update($id){
        $item = new Products();
        $updated = $item->findOrfail($id);
        $updated->name = " Red Apple";
        $updated->price = 190;
        $updated->Update();
        return "one item update";    
    }
    // Update endded
    public function delete($id){
        $item = new Products();
        $delete = $item->findOrfail($id);
        $delete->delete();
        return "one item deleted";
    }
    // delete endded
}
