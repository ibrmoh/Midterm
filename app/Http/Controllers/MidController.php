<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\models\Task;


class MidController extends Controller
{


    public function index()
    {
        //$products=DB::table('products')->get();

        $products = product::all()->sortBy('name');
        return view('products.index', compact('products'));
    }
    public function show($id)
    {
        $products = DB::table('products')->find($id);
        return view('products.show', compact('product'));
    }
    public function store(Request $request)
    {
        //     $product = DB::table('products')->insert([
        //'name'=>$request->name
        $validated = $request->validate([

            'name' => 'required|min:4|max:30',
        ]);

        $product = new product();
        $product = $request->name;
        $product->save();


        return redirect()->back();
    }



    public function edit($id)
    {

        $product = product::find($id);
        $products = product::all()->sortBy('name');
        return view('products.edit', compact('product', 'products'));
    }

    public function update(Request $request, $id)
    {

        $products = Task::all()->sortBy('name');
        $product = Task::find($id);
        $product->name = $request->name;
        $products->save();
        return redirect('/');
    }
}