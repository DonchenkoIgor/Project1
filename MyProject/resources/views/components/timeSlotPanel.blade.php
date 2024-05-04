<link rel="stylesheet" href="{{ asset('files/styles.css') }}">
<div class="col">
    <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
            <h4 class="my-0 fw-normal">{{ strtoupper($name) }} ({{ $date }})</h4>
        </div>
        <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
                @foreach($slots as $slot)
                    <li class="d-flex justify-content-between align-items-center">
                        <span> {{ $slot['start_time'] }} - {{ $slot['end_time'] }}</span>

                       <a href="{{ route('pages.schedules', ['entity' => 'time-slot', 'data' => $date . ' ' . $slot['start_time'] ]) }}"
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
