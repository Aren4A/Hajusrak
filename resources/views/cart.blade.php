<!DOCTYPE html>
<html>
<head>
    <title>Filmilaenutus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>

<div class="flex p-4">
    <h2 class="mb-3">Ostukorv</h2>
        
    <div class="col-12">
        <div class="dropdown" >
                @if(session('cart'))
                    <?php $total = 0; ?> 
                    <div class="cart">
                        @foreach(session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity']; ?>
                            <div class="item">
                                <img src="{{$details['image']}}" alt="{{ $details['name'] }}" class="product-image" width="w-fit" height="h-fit">
                                <h1>{{ $details['name'] }}</h1>
                                <p>Hind: <strong>{{ number_format($details['price'], 2) }}€</strong></p>
                                <p>Kogus:<strong> {{ $details['quantity'] }}</strong></p>
                                <form action="{{ route('update.cart', $id) }}" method="POST">
                                    @csrf
                                    <input type="number" name="quantity" value="{{ $details['quantity'] }}" min="1">
                                    <button class="btn btn-primary" type="submit">Uuenda ostukorvi</button>
                                </form>
                                <div class="py-2">
                                    <a class="btn btn-outline-danger btn-sm delete-product"><i class="fa fa-trash-o"></i> Kustuta</a>
                                </div>
                            </div>
                        @endforeach
                        <div class="total">
                            <strong>Kokku: {{ number_format($total, 2) }}€</strong> 
                        </div>
                    </div>
                    <div class="pb-2">
                        <form action="{{ route('checkout.checkout') }}" method="POST">
                            @csrf
                            <button class="btn btn-outline-danger" type="submit">
                                Maksma
                            </button>
                        </form>
                    </div>

                @else
                    <p>Ostukorv on tühi!</p>
                @endif
                    <a class="btn btn-primary" href="{{ route('products.index') }}">Jätka ostlemist</a>

            </div>
        </div>
    </div>
</div>

</body>
</html>