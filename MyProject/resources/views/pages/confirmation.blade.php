@extends('app')

@section('content')
    <div class="container">
        <h1>Order Confirmation</h1>
            <p><strong>User ID:</strong>{{$order->user_id}} </p>
            <p><strong>Order ID:</strong>{{$order->id}} </p>
            <p><strong>Company ID:</strong>{{$order->companyId}} </p>
            <p><strong>Worker ID:</strong>{{$order->workerId}} </p>
            <p><strong>Date:</strong>{{$order->date}} </p>
            <p><strong>Duration:</strong>{{$order->duration}} Min </p>
            <p><strong>Price:</strong>{{$order->price}} UAH </p>
            <p>Order successfully created</p>
    </div>
@endsection
