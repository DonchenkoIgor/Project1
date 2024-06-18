@extends('app')

@section('content')
    <div class="container">
        <h1>Order Confirmation</h1>

        @if(isset($order))
            <p><strong>Order ID:</strong> {{ $order->id }}</p>
            <p><strong>Company ID:</strong> {{ $order->companyId }}</p>
            <p><strong>Worker ID:</strong> {{ $order->workerId }}</p>
            <p><strong>Date:</strong> {{ $order->date }}</p>
            <p><strong>Time:</strong> {{ $order->time }}</p>
            <p><strong>Duration:</strong> {{ $order->duration }} minutes</p>
            <p><strong>Price:</strong> ${{ $order->price }}</p>
        @else
            <p>Order successfully created but without details</p>
        @endif
    </div>
@endsection
