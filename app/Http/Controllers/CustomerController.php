<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index1()
    {
        $data = Customer::all();
        return view('customer.customer',['customers'=>$data]);
    }
    public function delete($id)
    {
        $data=Customer::find($id);
        $data->delete();
        session()->flash('success', '');
        return redirect('/');
    }

    public function showData($id)
    {
        $data= Customer::find($id);
        return view('customer.edit',['customers'=>$data]);
    }

    public function addData(Request $req)
    {
        // return view('customer.add');
        $customer= new Customer;
        
        $customer->firstName=$req->firstName;
        $customer->lastName=$req->lastName;
        $customer->email=$req->email;
        $customer->contactNumber=$req->contactNumber;
        $customer->address=$req->address;
        $customer->save();
        return redirect('/');
    }

    public function update(Request $req)
    {

        $data= Customer::find($req->id);

        $data->firstName=$req->firstName;
        $data->lastName=$req->lastName;
        $data->email=$req->email;
        $data->contactNumber=$req->contactNumber;
        $data->address=$req->address;
        $data->save();
        return redirect('/');
    }

}
