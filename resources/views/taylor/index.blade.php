
Taylor Swift Top Tracks:

<div class="product-container">
    @foreach ($objects['tracks'] as $object)
        <div class="product-card">
            <img src="{{ $object['album']['images'][0]['url'] }}" alt="{{ $object['album']['name'] }}" class="product-image" width="400" height="400">
            <div class="product-details">
                <h2 class="product-name">{{ $object['artists'][0]['name'] }}</h2>
                <h2 class="product-name">{{ $object['name'] }}</h2>
                <h7 class="product-name"><strong>{{ $object['album']['name'] }}</strong></h7>
                <div class="pop"><p>Populaarsus (0-100): <p class="punane">{{ $object['popularity'] }}</p></p>
            </div></div>
        </div>
    @endforeach
</div>

<style>
    .pop {
        display: flex;
    }
    .punane {
        color: red;
        font-size: x-large;
        font-weight: bolder;
    }

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
    