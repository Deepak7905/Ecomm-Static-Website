<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\User;
use Illuminate\Support\Facades\DB; // for raw queries and joins
use Illuminate\Support\Facades\Log;





class ProfileController extends Controller
{
     
       // Show profile
      // Show profile
      public function showProfile()
      {
          $user = Auth::user();
      
          // Fetch payments with user details
          $payments = DB::table('payments')
              ->join('users', 'payments.user_id', '=', 'users.id')
              ->where('payments.user_id', '=', $user->id)
              ->select(
                  'payments.id',
                  'payments.payment_id',
                  'payments.order_id',
                  'payments.product_name',
                  'payments.product_price',
                  'payments.created_at',
                  'payments.user_phone',  // From payments table
                  'payments.user_address', // From payments table
                  'users.name as user_name' // From users table
              )
              ->get();
      
          return view('front.pages.profile.profile', compact('user', 'payments'));
      }
      
      
       // Update profile
       public function updateProfile(Request $request)
       {
           $request->validate([
               'name' => 'required|string|max:255',
               'email' => 'required|email|unique:users,email,' . Auth::id(),
               'password' => 'nullable|min:8|confirmed',
           ]);
   
           $user = Auth::user();
           $user->name = $request->name;
           $user->email = $request->email;
   
           if ($request->password) {
               $user->password = Hash::make($request->password);
           }
   
           $user->save();
   
           return redirect()->back()->with('success', 'Profile updated successfully.');
       }
   


}
