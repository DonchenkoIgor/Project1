<div class="col-lg-4">
    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <circle cx="70" cy="70" r="70" fill="var(--bs-secondary-color)"></circle>
        <image xlink:href="{{ $avatar }}" width="140" height="140"></image>
    </svg>
    <h2 class="fw-normal">{{ $position }}</h2>
    <h1 class="card-title pricing-card-title">{{ $name }}<br></h1>
    <ul class="list-unstyled mt-3 mb-4">
        <li>{{ $bio }}</li>
    </ul>
    <p>
        <a href="{{ route('set-entity', ['entity' => 'worker', 'data' => $id]) }}" class="w-100 btn btn-lg btn-outline-primary">Select</a>
    </p>
</div>
