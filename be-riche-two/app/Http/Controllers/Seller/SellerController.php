<?php

namespace App\Http\Controllers\Seller;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    public function Index(){
        $user_id = Auth::user()->id;
        $products = Product::with('orders')->where('user_id', $user_id)->get();
        $products_items = Product::with('orders')->where('user_id', $user_id)->paginate(5);

        return view ('seller.dashboard',compact('products','products_items'));
    }
    public function logout()
    {
        Auth::logout();

        // Redirect to desired page after logout
        return redirect()->route('home');
    }

    public function showme()
    {
        

        $user_id = Auth::user()->id;
        
        $user = User::where('id', $user_id)->latest()->first();

        return view('seller.profile',compact('user'));
    }

    public function editSeller(){
        $user_id = Auth::user()->id;
        $user = User::where('id', $user_id)->latest()->first();
        return view('seller.editseller',compact('user'));
    }

    public function updateSeller(Request $request){
        $user = Auth::user();

    $request->validate([
        'name' => 'required|string|max:255',
        'adresse' => 'required|string|max:255',
        'description' => 'required|string',
        'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Update name and address
    $user->name = $request->name;
    $user->adresse = $request->adresse;
    $user->description = $request->description;

    // Handle photo upload
    if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $photoPath = 'upload/' . $photo->getClientOriginalName();
        $photo->move(public_path('upload'), $photoPath);
        $user->photo = $photoPath;
    }
    

    $user->save();

    return redirect()->route('show-seller')->with('message', 'Profile updated successfully!');
    }
      

}
