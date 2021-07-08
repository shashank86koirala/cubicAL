<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
class CrudController extends Controller
{
    public function index(){
        return view('dashboard');
       
        
    }
    public function pako (Request $request) {
        $request->validate([
            'name'=>'required',
            'age'=>'required',
            'color'=>'required'
        ]);
        $Students=Crud::Create([
            'name'=>$request->get('name'),
            'age'=>$request->get('age'),
            'color'=>$request->get('color')
        ]);
        $Students->Save();
    }
    public function read(){
        $products=crud::all();
        $i=1;
        return view('read',compact('products','i'));
       
    }
    public function edit($id){
        $pro=Crud::findorFail($id);
        return view ('edit', compact('pro'));
    }
    public function update(Request $request,$id){
$request->validate([
    'name'=>'required',
            'age'=>'required',
            'color'=>'required'
]);
    Crud::find($id)->update($request->all());
    }
    public function delete($id){
        Crud::find($id)->delete();
        return redirect()->route('apk');
    }    

}
