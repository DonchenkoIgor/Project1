<div class="container my-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom overflow-hidden text-center bg-body-tertiary border rounded-3">
            <li class="breadcrumb-item">
                <a class="link-body-emphasis fw-semibold text-decoration-none" href="{{ route('pages.services') }}">
                    Service
                </a>
                @if($service)
                    <span class="text-body-emphasis"> - {{ $service->name }}</span>
                @endif
            </li>
            <li class="breadcrumb-item">
                <a class="link-body-emphasis fw-semibold text-decoration-none" href="{{ route('pages.staff') }}">Worker</a>
                @if($worker)
                    <span class="text-body-emphasis"> - {{ $worker->name }}</span>
                @endif
            </li>
            <li class="breadcrumb-item active">
                <a class="link-body-emphasis fw-semibold text-decoration-none" href="{{ route('pages.schedule') }}">Shedule</a>
            </li>
        </ol>
    </nav>
</div>
