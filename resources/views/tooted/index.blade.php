<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drinks</title>
</head>
<body >
    <div class="nupud">
    <a href="{{ route('drinks.create') }}"><button class="button-53" role="button">{{ __('Lisa toode') }}
    </button></a>
    
    <a href="{{ route('makeup') }}"><button class="button-53" role="button">{{ __('Makeup') }}
    </button></a>

    <a href="{{ route('records') }}"><button class="button-53" role="button">{{ __('Records') }}
    </button></a>

    <a href="{{ route('beyonce') }}"><button class="button-53" role="button">{{ __('Beyonce albums') }}
    </button></a>

    <a href="{{ route('taylor') }}"><button class="button-53" role="button">{{ __('Taylor Swift top hits') }}
    </button></a>
</div>
    
    <div class="product-container">
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
    .nupud {
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top:1rem;
        padding-bottom: 2rem;
        gap:1rem;
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

.button-53 {
  background-color: #3DD1E7;
  border: 0 solid #E5E7EB;
  box-sizing: border-box;
  color: #000000;
  display: flex;
  font-family: ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  font-size: 1rem;
  font-weight: 700;
  justify-content: center;
  line-height: 1.75rem;
  padding: .75rem 1.65rem;
  position: relative;
  text-align: center;
  text-decoration: none #000000 solid;
  text-decoration-thickness: auto;
  width: 100%;
  max-width: 460px;
  position: relative;
  cursor: pointer;
  transform: rotate(-2deg);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-53:focus {
  outline: 0;
}

.button-53:after {
  content: '';
  position: absolute;
  border: 1px solid #000000;
  bottom: 4px;
  left: 4px;
  width: calc(100% - 1px);
  height: calc(100% - 1px);
}

.button-53:hover:after {
  bottom: 2px;
  left: 2px;
}

@media (min-width: 768px) {
  .button-53 {
    padding: .75rem 3rem;
    font-size: 1.25rem;
  }
}
    </style>
    
    
</body>
</html>


