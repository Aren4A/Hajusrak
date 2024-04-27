<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drinks</title>
</head>
<body>

    <a href="{{ route('drinks.create') }}"><x-primary-button>{{ __('Lisa toode') }}
    </x-primary-button></a>
    
    <a href="{{ route('makeup') }}"><x-primary-button>{{ __('Teine API') }}
    </x-primary-button></a>

    
    <<div class="product-container">
        @foreach ($drinks as $drink)
            <div class="product-card">
                <img src="{{ $drink->image }}" alt="{{ $drink->title }}" class="product-image" width="400" height="400">
                <div class="product-details">
                    <h2 class="product-name">{{ $drink->title }}</h2>
                    <p class="product-author">{{ $drink->description }}</p>
                    <p class="product-author">Hind: {{ $drink->price }}</p>
                    <p class="product-author">Suurus: {{ $drink->size }}</p>
                </div>
            </div>
        @endforeach
    </div>
    
    <style>
    .product-container {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 2rem;
    height: 15rem;
    }
    
    .product-card {
    border-style: solid;
    border-color: black;
    border-width: 2px;
    border-radius: 25px;
    }
    
    .product-image {
    width: 10rem;
    height: auto;
    padding: 20px;
    border-radius: 50px;
    }
    p, h2{
    margin-left: 20px;
    }
    h2{
    font-weight: 700;
    font-size: 20px;
    }
    </style>
    
    
</body>
</html>

