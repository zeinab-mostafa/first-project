<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Models\Product;
class crudController extends Controller
{
    //
    public function getproducts(){
    return Product::get();

    }

    public function getallproducts(){
        
        $products = Product::select('id','name')->get();
       // return $Product;
        return View('product.all',compact('products'));

        

    
    }
    /*public function store(){
     Product::create([
         'name' => 'product1',
         'description' => 'product details xx',
         'quantity' => '2',
         'price' => '200'
     ]);
    
    }*/
    public function create(){
      return View('product.create'); 
       
    }
    public function store(Request $request){
        $rules = [
         'product_name' => 'required',
         'product_details' => 'required'

        ];
        $validator = Validator::make($request->all(),$rules,[
            'product_name.required' => 'name is required',
            'product_details.required' => 'description is required'
   
           ]);
        if($validator->fails()){
        //return $validator->errors() ;
        return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        //{{$validator->errors()->first()}}
       // return $validator->errors()->first();
       Product::create([
            'name' => $request->product_name,
            'description' => $request->product_details,
            'quantity' => '2',
            'price' => '200'
        ]);
        
        return 'succesfully :)'; 
       
    }
}
