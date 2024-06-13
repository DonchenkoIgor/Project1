<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Worker;

class AdminController extends Controller
{
    public function showOrders(Request $request)
    {
        $worker = Worker::first();
        $orders = Order::all();
        $ordersByEmployeesAndDay = [];



        foreach ($orders as $order){
            $employee  = $order->employee_name;
            $dayOfWeek = date('l', strtotime($order->created_at));

            if (!isset($ordersByEmployeesAndDay[$employee][$dayOfWeek])){
                $ordersByEmployeesAndDay [$employee][$dayOfWeek] = [];
            }

            $order->worker_name = $worker ? $worker->name : 'n/a';

            $ordersByEmployeesAndDay[$employee][$dayOfWeek][] = $order;
        }

        return view('cpanel.admin', compact('ordersByEmployeesAndDay', 'worker'));
    }
}
