<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Services\RequestResponse;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Customer::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate(
            [
                
                'first_name' => 'required | max:255',
                'last_name' => 'required | max: 255',
            ]
        );

        $customer =  Customer::create($fields);

        return [ 'customer' => $customer ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return $customer;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer) {
        $fields = $request->validate(
            [
                'first_name' => 'required | max:255',
                'last_name' => 'required | max: 255',
            ]
        );

        $customer->update($fields);

        return [ 'customer' => $customer ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return [
            'message' => 'Customer is deleted successfully'
        ];
    }
}
