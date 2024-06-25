@extends('app')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header bg-primary text-white">
                <h1 class="card-title">Order Confirmation</h1>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <strong>User name:</strong> {{ $order->user->name ?? 'N/A' }}
                </div>
                <div class="mb-3">
                    <strong>Selected service:</strong> {{ $order->service->name ?? 'N/A' }}
                </div>
                <div class="mb-3">
                    <strong>Duration:</strong> {{ $order->duration }} Min
                </div>
                <div class="mb-3">
                    <strong>Price:</strong> {{ $order->price }} UAH
                </div>
                <div class="mb-3">
                    <strong>Date:</strong> {{ $order->date }}
                </div>
                <div class="mb-3">
                    <strong>Worker name:</strong> {{ $order->workerId ?? 'N/A' }}
                </div>
                <div class="alert alert-success mt-4" role="alert">
                    Order successfully created
                </div>
            </div>
        </div>
    </div>
@endsection
