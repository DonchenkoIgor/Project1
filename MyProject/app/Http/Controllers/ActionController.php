<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Worker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Order;
use App\Models\OrderSteps;
use App\Models\Schedule;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class ActionController extends Controller
{
    public function saveStep(Request $request, $entity, $data)
    {
        if (!Auth::check()) {
            abort(403, 'Unauthorized action.');
        }
        $userId = Auth::id();

        $workerId = Auth::id();


        $orderSteps = OrderSteps::getInstance();
        $orderSteps->setCurrentDate();

        $currentDate = Carbon::now()->format('Y-m-d H:i');

        if ($entity === 'service') {
            $service = Service::find($data);
            if (!$service) {
                abort(404);
            }
            $order = Order::create([
                'user_id' => $userId,
                'companyId' => 1,
                'workerId' => $workerId,
                'serviceId' => $data,
                'date' => $currentDate,
                'time' => Carbon::now(),
                'duration' => $service->duration,
                'price' => $service->price,
            ]);

            $orderSteps->setStep(OrderSteps::SERVICES, $data);


            return redirect()->route('pages.staff', ['entity' => 'worker', 'data' => $data]);

        } elseif ($entity === 'worker') {
            $orderSteps->setStep(OrderSteps::WORKER, $data);


            return redirect()->route('pages.schedules', ['entity' => $entity, 'data' => $data]);

        } elseif ($entity === 'time-slot') {
            $timeSlot = Schedule::find($data);
            if (!$timeSlot) {
                abort(404);
            }
            $order1 = Order::create([
                'user_id' => $userId,
                'companyId' => 1,
                'workerId' => $workerId,
                'timeSlotId' => $data,
                'date' => $currentDate,
                'time' => Carbon::now(),
                'duration' => $timeSlot->duration,
                'price' => $timeSlot->price,
            ]);

            $order2 = Order::find($order1->id);

            return view('pages.confirmation',['entity' => $entity, 'data' => $data]);


        } else {
            abort(404);
        }
    }
}
