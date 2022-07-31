<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer_info;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function pending() {
        $order = Order::where('status', 'p')->with('customer')->latest()->get();
        return view('pages.admin.order.pending', compact('order'));
    }
    public function pendingState($id) {
        try {
            $order = Order::find($id);
            $order->status = 'c';
            $order->save();
            return redirect()->back()->with('success', 'This order is completed!');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Approaved Failed!');
        }
    }
    public function completed() {
        $order = Order::where('status', 'c')->orderBy('updated_at', 'DESC')->get();
        return view('pages.admin.order.completed', compact('order'));
    }

    public function orderDetail($id) {
        $orderCustomer = Order::with('customer')->find($id);
        $orders = Order::with('orderDetail')->find($id);
        return view('pages.admin.order.order-detail', compact('orders', 'orderCustomer'));
    }
}
