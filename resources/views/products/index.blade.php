@extends('shop')
   
@section('content')
    
<div class="row">
    @foreach($books as $book)
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <img src="{{ $book->image }}" alt="{{ $book->name }}" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">{{ $book->name }}</h4>
                    <p>{{ $book->author }}</p>
                    <p class="card-text"><strong>Hind: </strong> ${{ $book->price }}</p>
                    <p class="card-quantity"><strong>Kogus:</strong><input type="number"></input></p>
                    <p class="btn-holder"><a href="{{ route('addbook.to.cart', $book->id) }}" class="btn btn-outline-danger">Lisa ostukorvi</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection