@extends('layouts.adminPanel')

@section('content')
    @foreach($ordersByEmployeesAndDay as $employee => $ordersByDay)
        <h2>{{ $employee }}</h2>
        <div class="row">

            @foreach($ordersByDay as $dayOfWeek => $orders)
                <div class="col">
                    <h3>{{ $dayOfWeek }}</h3>

                    @foreach($orders as $order)
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">{{ $order->service ? $order->service->name : 'N/A' }}</h4>
                            </div>
                            <div class="card-body">
                                <p>Worker: {{ $order->worker_name }}</p>
                                <p>Price: {{ $order->price }}</p>
                                <p>Duration: {{ $order->duration }}</p>
                                <p>Service's day and time: {{ \Carbon\Carbon::parse($order->time)->format('l, h:i A') }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    @endforeach
@endsection
