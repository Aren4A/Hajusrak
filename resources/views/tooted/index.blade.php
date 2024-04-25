<div class="row">
    @foreach($drinks as $drink)
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <h4 class="card-title">{{ $drink->title }}</h4>
                <p class="card-text">Kirjeldus: {{ $drink->description }}</p>
                <img src="{{ $drink->image }}" alt="{{ $drink->title }}" class="card-img-top">
                <div class="card-body">
                <p class="card-text"><strong>Hind: </strong> {{ $drink->price }}</p>
                <p class="card-text"><strong>Suurus: </strong> {{ $drink->size }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>