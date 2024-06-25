<?php

namespace App\Http\Controllers;


use App\Models\Order;
use App\Models\Service;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{


    public function time(int $interval, int $serviceDuration, int $breakDuration)
    {
        $start = new \DateTime('09:00');
        $end   = new \DateTime('18:00');

        return $this->getTimeSlots($interval, $serviceDuration, $breakDuration, $start, $end);
    }

    private function getTimeSlots(int $interval, int $serviceDuration, int $breakDuration, \DateTime $start, \DateTime $end): array
    {
        $startTime = $start->format('H:i');
        $endTime   = $end->format('H:i');
        $timeSlots = [];

        while (strtotime($startTime) <= strtotime($endTime)){
            $start = $startTime;
            $followingTime = strtotime('+' . $serviceDuration . 'minutes', strtotime($startTime));
            $end = date('H:i', $followingTime);
            $startTime = date('H:i', $followingTime);

            if (strtotime($startTime) <= strtotime($endTime)){
                $timeSlots [] = [
                    'start_time' => $start,
                    'end_time'   => $end,
                ];
                $followingTime = strtotime("+ {$breakDuration} minutes", strtotime($startTime));
                $startTime = date('H:i', $followingTime);
            }
        }
        return $timeSlots;
    }



    public function vacation(string $start, int $duration)
    {
        $start = new \DateTime($start);

        $allowedDays = [1, 2, 3, 5, 14];
        if(!in_array($duration, $allowedDays)){
            return "Неприпустима тривалість відпустки";
        }

        if($start < new \DateTime()){
            return "Недопустима дата відпустки";
        }

        $end = clone $start;
        $end ->modify("+$duration days");


        return "Ви запросили відпустку з {$start->format('Y-m-d')} до {$end->format('Y-m-d')}.";
    }

    public function index()
    {
        return view('app');
    }

    public function staff()
    {
        $workers = Worker::all();
        return view('pages.staff', ['workers' => $workers]);
    }

    public function services()
    {
        $services = Service::all();
        return view('pages.services', ['services' => $services]);
    }

    public function schedule(Request $request)
    {

        $timeSlots = [
            'Monday' => [
                    'date'  => '08/03/2024',
                    'slots' => [
                        ['start_time' => '08:00', 'end_time' => '09:00'],
                        ['start_time' => '09:10', 'end_time' => '10:10'],
                        ['start_time' => '10:20', 'end_time' => '11:30'],
                        ['start_time' => '11:40', 'end_time' => '13:00'],
                    ]
                ],
            'Tuesday' => [
                'date'  => '09/03/2024',
                'slots' => [
                    ['start_time' => '10:00', 'end_time' => '10:45'],
                    ['start_time' => '11:00', 'end_time' => '11:45'],
                    ['start_time' => '12:00', 'end_time' => '12:45'],
                    ['start_time' => '13:00', 'end_time' => '13:45'],
                ]
            ],
            'Wednesday' => [
                'date'  => '09/03/2024',
                'slots' => [
                    ['start_time' => '10:00', 'end_time' => '10:45'],
                    ['start_time' => '11:00', 'end_time' => '11:45'],
                    ['start_time' => '12:00', 'end_time' => '12:45'],
                    ['start_time' => '13:00', 'end_time' => '13:45'],
                ]
            ],
            'Thursday' => [
                'date'  => '09/03/2024',
                'slots' => [
                    ['start_time' => '10:00', 'end_time' => '10:45'],
                    ['start_time' => '11:00', 'end_time' => '11:45'],
                    ['start_time' => '12:00', 'end_time' => '12:45'],
                    ['start_time' => '13:00', 'end_time' => '13:45'],
                ]
            ],
            'Friday' => [
                'date'  => '09/03/2024',
                'slots' => [
                    ['start_time' => '10:00', 'end_time' => '10:45'],
                    ['start_time' => '11:00', 'end_time' => '11:45'],
                    ['start_time' => '12:00', 'end_time' => '12:45'],
                    ['start_time' => '13:00', 'end_time' => '13:45'],
                ]
            ],
        ];
        return view('pages.schedules')->with('slots', $timeSlots);
    }

    public function confirmation(Request $request)
    {
        $user = $request->user();
        $order = Order::where('user_id', $user->id)
            ->latest()
            ->with('worker', 'service')
            ->first();

        if (!$order) {
            abort(404, 'Order not found');
        }

            return view('pages.confirmation', ['order' => $order]);
    }
}
