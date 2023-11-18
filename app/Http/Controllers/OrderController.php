<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function allOrders()
    {
        $allOrders = Order::all();
        return view('admin.order.allorders',compact('allOrders'));
    }

    public function view($id)
    {
        $order = Order::find($id);
        return view('admin.order.order-view',compact('order'));
    }


    public function pending()
    {
        $pendingOrders = Order::where('status',0)->get();
        return view('admin.order.pending',compact('pendingOrders'));
    }

    public function ontheway()
    {
        $onthewayOrders = Order::where('status',1)->get();
        return view('admin.order.ontheway',compact('onthewayOrders'));
    }

    public function completed()
    {
        $completedOrders = Order::where('status',2)->get();
        return view('admin.order.completed',compact('completedOrders'));
    }

    public function cancelOrders()
    {
        $cancelOrders = Order::where('status',3)->get();
        return view('admin.order.cancel',compact('cancelOrders'));
    }

    public function pendingStatusChange(Request $request)
    {
        $pending = Order::find($request->order_id);
        $pending->status = 0;
        $pending->save();
        return response()->json([
            'status' => 'success',
        ]);
    }

    public function onthewayStatusChange(Request $request)
    {
        $ontheway = Order::find($request->order_id);
        $ontheway->status = 1;
        $ontheway->save();
        return response()->json([
            'status' => 'success',
        ]);
    }

    public function completedStatusChange(Request $request)
    {
        $completed = Order::find($request->order_id);
        $completed->status = 2;
        $completed->save();
        return response()->json([
            'status' => 'success',
        ]);
    }

    public function cancelStatusChange(Request $request)
    {
        $cancelOrders = Order::find($request->order_id);
        $cancelOrders->status = 3;
        $cancelOrders->save();
        return response()->json([
            'status' => 'success',
        ]);
    }
}
