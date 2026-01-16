<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::with('order_items.product.brand', 'order_items.product.category')->get();
        return Inertia::render('user/Dashboard', ['orders' => $orders]);
    }
}
