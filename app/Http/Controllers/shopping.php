<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\custmrs;
use App\Models\Customers;
use App\Models\Products;
use App\Models\Products_Derails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class shopping extends Controller
{
    //
    public function index (){return view('shopping.landingPage');}

    public function PA()
    {
        $product = DB::table('products')
        ->join('products__derails','products.id','=','products__derails.id_products')
        ->where('products.id','=',10)->get();
        return view('shopping.ProductA', ['product' => $product]);    
    }
    public function Pb()
    {
        $product = DB::table('products')
        ->join('products__derails','products.id','=','products__derails.id_products')
        ->where('products.id','=',9)->get();
        return view('shopping.Productb', ['product' => $product]);    
    }
    public function Pc()
    {
        $product = DB::table('products')
        ->join('products__derails','products.id','=','products__derails.id_products')
        ->where('products.id','=',11)->get();
        return view('shopping.Productc', ['product' => $product]);    
    }
     
    public function add_to_cart($productId)
    {
        // Get product details
        $productDetails = Products_Derails::where('id_products', '=',$productId)->first();
    
        // Insert into the cart table
        cart::create([
            'customer_id'=> 00,
            'products_id' => $productId,
            'price' => $productDetails->price,
            'qty' => 1 // default quantity; you may update this if needed
        ]);
    
        // Update the cart item count in the session
        $count = session::get('counter', 0);
        session::put('counter', ++$count);
    
        return redirect()->route('CART'); // redirect to cart view after adding
    }
    public function CART() {
        $cartItems = DB::table('carts')
            ->join('products__derails', 'carts.products_id', '=', 'products__derails.id_products')
            ->select(
                'products__derails.image',
                'products__derails.color',
                'carts.price',
                'carts.qty'
            )
            ->get();
    
        return view('shopping.cart', ['cartItems' => $cartItems]);
    }
    
    public function productdetails($id){
    
        $producdetails=DB::table('products')
        ->join('products__derails','products.id','=','products__derails.id_products')
        ->where('products__derails.id','=',$id)->first();
        return view('shopping.Product_details',['prod'=>$producdetails]);    
    }

    public function loginui (){return view('shopping.login');}
    public function signupui (){return view('shopping.signup');}
        public function logincon(Request $request)
        {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
    
            $user = custmrs::where('email', $credentials['email'])->first();
    
            if ($user && Hash::check($credentials['password'], $user->password)) {
                // Store user ID in the session
                session(['user_id' => $user->id]);
                return redirect()->route('landing'); // Redirect to a home route
            }
    
            return back()->withErrors([
                'email' => 'Invalid credentials.',
            ]);
        }
    
        public function registerconf(Request $request)
        {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required',
                'address' => 'required',
                'email' => 'required|string|email|max:255|unique:custmrs,email', // Update the unique validation rule
                'password' => 'required|string|min:8|confirmed',
            ]);
    
            $user = custmrs::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'address' => $validated['address'],
                'password' => Hash::make($validated['password']),
            ]);
    
            // Log the user in
            session(['user_id' => $user->id]);
    
            return redirect()->route('landing'); // Redirect to a home route
        }
    
    
        public function logoutui()
        {
            session()->flush(); // Clears all session data
            return redirect()->route('landing'); // Redirects to the landing page
        }
        




}
