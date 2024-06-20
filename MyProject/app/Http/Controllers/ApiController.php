<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderSteps;
use App\Models\Schedule;
use App\Models\Service;
use App\Models\Worker;
use Carbon\Carbon;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{

    public function staff(Request $request)
    {
        $workers = Worker::all();
        return response()->json(['data' => $workers]);
    }

    public function services()
    {
        $services = Service::all();
        return response()->json(['data' => $services]);
    }

    public function schedule(Request $request)
    {
        $schedules = Schedule::all();

        $formattedSchedules = [];

        foreach ($schedules as $schedule) {
            $formattedSchedules[] = [
                'id' => $schedule->id,
                'worker_id' => $schedule->worker_id,
                'monday' => json_decode($schedule->monday, true),
                'tuesday' => json_decode($schedule->tuesday, true),
                'wednesday' => json_decode($schedule->wednesday, true),
                'thursday' => json_decode($schedule->thursday, true),
                'friday' => json_decode($schedule->friday, true),
                'saturday' => json_decode($schedule->saturday, true),
                'sunday' => json_decode($schedule->sunday, true),
                'history' => json_decode($schedule->history, true),
                'created_at' => $schedule->created_at,
                'updated_at' => $schedule->updated_at,
            ];
        }

        return response()->json(['data' => $formattedSchedules]);
    }


    // Action

    public function saveStep(Request $request, $entity, $data)
    {
        $workerId = $request->user()->id;
        $userId = Auth::user();
        $entity = $request->query('entity');
        $data = $request->query('data');


        $orderSteps = OrderSteps::getInstance();
        $orderSteps->setCurrentDate();

        $currentDate = Carbon::now()->format('Y-m-d H:i');

        if($entity === 'service'){
            $service = Service::find($data);
            if(!$service){
                return response()->json(['error' => 'Услуга не найдена'], 404);
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
            return response()->json(['message' => 'Услуга выбрана успешно', 'order' => $order]);

        }elseif ($entity === 'time-slot'){
            $timeSlot = Schedule::find($data);
            if(!$timeSlot){
                return response()->json(['error' => 'Временной слот не найден']);
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
            return response()->json(['message' => 'Заказ создан успешно', 'order' => $order1]);
        }else{
            return response()->json(['error' => 'Недопустимая сущность']);
        }
    }
    public function confirmation(Request $request)
    {
        $order = Order::first();
        if(!$order){
            return response()->json(['error' => 'Заказ не найден'], 404);
        }
        return response()->json(['order' => $order]);
    }
}
