<link rel="stylesheet" href="{{ asset('files/styles.css') }}">
<div class="col">
    <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
            <h4 class="my-0 fw-normal">{{ strtoupper($name) }} (@isset($date) {{ $date }}@endisset)</h4>
        </div>
        <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
                @foreach($slots as $slot)
                    <li class="d-flex justify-content-between align-items-center">
                        <span> {{\Carbon\Carbon::parse($slot['start_time'])->format('H:i') }} - {{ Carbon\Carbon::parse($slot['end_time'])->format('H:i') }}</span>

                        <a href="{{ route('pages.confirmation', ['entity' => 'time-slot', 'data' => isset($date) ? Carbon\Carbon::parse($date . ' ' . $slot['start_time'])->format('Y-m-d+H:i') : '' ]) }}"
                           class="btn btn-primary btn-sm">
                            Select
                        </a>

                    </li>
                    <hr>
                @endforeach
            </ul>

        </div>
    </div>
</div>

