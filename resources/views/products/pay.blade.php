<!DOCTYPE html>
<html>
<head>
    <title>Maksa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
  
<div class="container mt-5">
    <h2 class="mb-3">Maksmise leht</h2>
        
    <div class="col-12 flex flex-row">
        <div class="py-4"><input
                    v-model="form.message"
                    placeholder="Eesnimi"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                ></input></div>
                <div class="py-4">
                <input
                    v-model="form.message"
                    placeholder="Perekonnanimi"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                ></input></div>
                <div class="py-4">
                <input
                    v-model="form.message"
                    placeholder="Email"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                ></input></div>
                <div class="py-4">
                <input
                    v-model="form.message"
                    placeholder="Telefon"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                ></input></div>
                <a href="{{ url('/shop') }}" class="btn btn-secondary"> Maksa</a>
    </div>
</div>

<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
    @yield('content')
</div>
  
@yield('scripts')
</body>
</html>