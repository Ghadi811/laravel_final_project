<?php

namespace App\Http\Controllers;

use App\Models\custmrs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\Products;
use App\Models\Products_Derails;
use App\Models\Customers;

class Dashboard extends Controller
{
    //
    public function index(Request $request){
        return view('Dashboard.index');
        
    }
    public function products(){
        $pro=Products::All();
        return view('Dashboard.products',['prod'=>$pro]);
    }
    public function Create_newProduct(Request $request)
{
    Products::create([
        'name' => $request->productname,
        'Description' => $request->Description,
    ]);

    return redirect()->route('products');
}
    public function delete(){
        $id=$_GET['id'];//get the id from get in main.js from public
        $p=Products::find($id);
        $p->delete();

    }
    public function edit($id)//we dont need Requset beacuse its <a> not form
{
    $products=Products::find($id);   
return view('Dashboard.edit',['products'=>$products]);
} 
public function update(Request $request){
Products::where('id',$request->id)
->update(['name'=>$request->name,'Description'=>$request->Description]);
return redirect()->route('products');
}

public function create_new_details(Request $request)
{
    
   $product_details=Products_Derails::Create([
      'id_products'=>$request->product_no,
      'price'=>$request->price,
      'color'=>$request->color,
      'qty'=>$request->qty,
      'image'=>$request->img
   ]);
   return redirect()->route('showdet');
}
public function showproduct_details()
{
  $prod=products::All();
  $producdetails=DB::table('products')
  ->join('products__derails','products.id','=','products__derails.id_products')
  ->get();//get to give me all the proudcts we can wrtie first() and get only the first one
  return view('dashboard.product_details',['prod'=>$prod,'producdetails'=>$producdetails]);
}
  
public function showcustomer()
{
    $customers = custmrs::all();  // Retrieve all customers
    return view('dashboard.customers', compact('customers'));
}
public function deletecustumer(custmrs $customer)
{
    // Delete the customer
    $customer->delete();
    
    // Redirect back to the customer list with a success message
    return redirect()->route('customers.index')->with('success', 'Customer deleted successfully!');
}
}

