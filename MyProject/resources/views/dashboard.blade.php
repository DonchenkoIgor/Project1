<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Особистий кабінет') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @isset($orders)
                    @if ($orders->isEmpty())
                        <p>{{ __("You don't have any orders yet.") }}</p>
                    @else
                        @foreach($orders as $order)
                            <div class="border border-gray-300 rounded-lg overflow-hidden shadow-sm">
                                <div class="p-6">
                                    <h3 class="font-bold text-white">{{ __("Order ID:") }} {{ $order->id }}</h3>
                                    <div class="mb-2">
                                        <span class="font-bold text-white">{{ __("Date:") }}{{ $order->date }}</span>
                                    </div>
                                    <div class="mb-2">
                                        <span class="font-bold text-white">{{ __("Time:") }} {{ $order->time }}</span>
                                    </div>
                                    <div class="mb-2">
                                        <span class="font-bold text-white">{{ __("Duration:") }}{{ $order->duration }} {{ __("minutes") }}</span>
                                    </div>
                                    <div class="mb-2">
                                        <span class="font-bold text-white">{{ __("Price:") }} ${{ $order->price }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @else
                    <p>{{ __("No orders found.") }}</p>
                @endisset
            </div>
        </div>
    </div>
</x-app-layout>
