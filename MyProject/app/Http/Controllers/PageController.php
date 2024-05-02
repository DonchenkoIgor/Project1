<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Worker;
use Illuminate\Http\Request;

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

    public function schedule()
    {
        return view('services');
    }

    public function confirmation()
    {
        return view('confirmation');
    }
}
