<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function first(){
        $customer=customer::all();
      
        return view('customer.index',compact('customer'));

    }
    public function we(){
        return view('customer.create');

    }
}
    public function us(customers $customer){
    $validated = request()->validate([
         'customer_id' => 'required | min:6 | unique:customer',
         'customer_name'  => 'required | min:6',
         ]);
         customer::create($validated);
         customer::create([
             'customer_id'=>request('customer_id');
            'customer_name'=>request('customer_name');
         ]);
       $customer->customer_id = request('customer_id');
       $project->customer_name = request('customer_name');
      $project->save();*/
    return redirect("/projects");