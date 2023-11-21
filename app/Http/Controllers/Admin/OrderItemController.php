<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    //
    public function index()
    {
        //
        $orderItemList = OrderItem::all();
        return view('admin.orderItem.index', compact('orderItemList'));
    }
}
