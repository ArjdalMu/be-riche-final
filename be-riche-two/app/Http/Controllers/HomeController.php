<?php

namespace App\Http\Controllers;

use Rules\Password;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class HomeController extends Controller
{
    public function Index(){
    
        $products = Product::with('reviews')
        ->join('reviews', 'products.id', '=', 'reviews.product_id')
        ->select('products.id', 'products.product_name', 'products.product_image','products.price', DB::raw('AVG(reviews.rating) as average_rating'))
        ->groupBy('products.id', 'products.product_name', 'products.product_image','products.price')
        ->orderByDesc('average_rating')
        ->take(5)
        ->get();
    
    
    




    $products_phone = Product::with('reviews')
        ->latest()
        ->take(5)
        ->get();

        return view('homepage.home',compact('products','products_phone'));
    }


    public function showLogin(){
        return view('homepage.login');
    }

    public function Login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function showRegister(){
        return view('homepage.register');
    }
    public function Register(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->attachRole('buyer');

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('home');
    }

    public function showProfile(Request $request){
        $user = User::with('products')->find($request->id);
        $products = Product::where('user_id',$request->id)->paginate(8);
        return view('homepage.show',compact('user','products'));
    }
    public function show(){
        $user_id =  Auth::id();
        $cart_items = Cart::where('user_id',$user_id)->get();
        
        return view('homepage.payment',compact('cart_items'));
    }
}
