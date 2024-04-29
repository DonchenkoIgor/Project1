<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Worker;
use Illuminate\Http\Request;

class PageController extends Controller
{
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
