@extends('layouts.main')

@section('headerTitle', 'Booking service')
@section('headerDescription', 'Please choose a service to book.')

@php($orderSteps = \App\Models\OrderSteps::getInstance())
@section('breadcrumds')

    @include(
            'components.breadcrumbs',
            [
                'worker'  => $orderSteps ? $orderSteps->getWorker() : null,
                'service' => $orderSteps ? $orderSteps->getService() : null,
                'time-slot' => $orderSteps ? $orderSteps->getTimeSlot(): null,
            ]
    )
@endsection
