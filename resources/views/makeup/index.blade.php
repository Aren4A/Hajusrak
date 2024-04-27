<h1>Make Up</h1>
<div class="product-container">
    @foreach ($products as $product)
        <div class="product-card">
            <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" class="product-image" width="400" height="400">
            <div class="product-details">
                <h2 class="product-name">{{ $product['title'] }}</h2>
                <p class="product-author">Artist: {{ $product['description'] }}</p>
            </div>
        </div>
    @endforeach
</div>

<style>
.product-container {
display: flex;
flex-direction: row;
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
width: 100%;
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

