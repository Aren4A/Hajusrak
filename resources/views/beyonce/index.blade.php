Beyonce albumid:

<div class="product-container">
    @foreach ($objects['items'] as $object)
        <div class="product-card">
            <img src="{{ $object['images'][0]['url'] }}" alt="{{ $object['name'] }}" class="product-image" width="400" height="400">
            <div class="product-details">
                <h2 class="product-name">{{ $object['artists'][0]['name'] }}</h2>
                <h2 class="product-name">{{ $object['name'] }}</h2>
                <p class="product-author">Välja antud: {{ $object['release_date'] }}</p>
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
    width: auto;
    height: 15rem;
    padding: 1rem;
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
    




    
    