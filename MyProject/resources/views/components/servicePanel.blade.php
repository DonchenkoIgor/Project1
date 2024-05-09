<div class="col">
    <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
            <h4 class="my-0 fw-normal">{{ $name }}</h4>
        </div>
        <div class="card-body">
            <h1 class="card-title pricing-card-title">{{ $price }} UAH <br> <small class="text-body-secondary fw-light">{{$duration}} Min.</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
                @foreach($options as $option)
                <li>{{$option}}</li>
                @endforeach
            </ul>
            <a href="{{ route('pages.schedules', ['entity' => 'service', 'date' => $id]) }}" class="w-100 btn btn-lg btn-primary">Select</a>
        </div>
    </div>
</div>
