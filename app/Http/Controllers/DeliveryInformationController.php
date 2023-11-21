<?php

namespace App\Http\Controllers;

use App\Models\DeliveryInformation;
use Illuminate\Http\Request;

class DeliveryInformationController extends Controller
{
    public function index()
    {
        $deliveryInformation = DeliveryInformation::first();
        return view('admin.pages.delivery-information',compact('deliveryInformation'));
    }

    public function store(Request $request, $id = null)
    {
        $deliveryInformation = DeliveryInformation::find($id);
        if($deliveryInformation == null){
            $deliveryInformation = new DeliveryInformation();
            $deliveryInformation->delivery_information = $request->delivery_information;
            $deliveryInformation->save();
            return redirect()->back()->with('message','Delivery information updated successfully');
        }else{
            $deliveryInformation->delivery_information = $request->delivery_information;
            $deliveryInformation->update();
            return redirect()->back()->with('message','Delivery information updated successfully');
        }
    }

    public function view()
    {
        $deliveryInformation = DeliveryInformation::first();
        return view('frontend.pages.delivery-information',compact('deliveryInformation'));
    }
}
