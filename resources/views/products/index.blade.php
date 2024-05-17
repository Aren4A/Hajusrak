<!DOCTYPE html>
<html>
<head>
    <title>Filmilaenutus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
  
<div class="container mt-5">
    <h2 class="mb-3">Filmilaenutus</h2>
        
    <div class="col-12">
        <div class="dropdown" >
            <a class="btn btn-outline-dark" href="{{ route('cart') }}">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Ostukorv <span class="badge text-bg-danger">{{ count((array) session('cart')) }}</span>
             </a>

<div class="row">
                        @foreach($products as $product)
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">{{ $product->name }}</h4>
                    <p>{{ $product->author }}</p>
                    <p class="card-text"><strong>Hind: </strong>{{ $product->price }}€</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-outline-danger">Lisa ostukorvi</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>                
</div>
</div>
</div>

</body>
</html>