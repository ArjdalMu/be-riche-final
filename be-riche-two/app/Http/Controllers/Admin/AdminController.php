<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function Index(){
        $categoriesCount = Category::get()->count();
        $users = User::whereDoesntHave('roles', function ($query) {
            $query->where('name', 'admin');
        })->count();
        $product = Product::count();
        $subcategoriescount = SubCategorie::count();
        $currentDate = now()->format('Y-m-d');

        // Get the total number of orders for the current day
        $totalOrders = Order::whereDate('created_at', $currentDate)->count();
        $orders = Order::count();
        $revenu = Order::sum('total_price');

        return view('Admin.dashboard',compact('users','categoriesCount','product','subcategoriescount','totalOrders','orders','revenu'));

    }
    public function AllUsers(){
        $users = User::latest()
    ->whereDoesntHave('roles', function ($query) {
        $query->where('name', 'admin');
    })
    ->with('roles')
    ->get();
    
        return view('Admin.users',compact('users'));
    }

    public function logout()
    {
        Auth::logout();

        // Redirect to desired page after logout
        return redirect()->route('home');
    }



    public function DeleteUser($id){
        User::findOrFail($id)->delete();
        return redirect()->route('allusers')->with('message','user has been deleted succefully');
    }

    
    
}
