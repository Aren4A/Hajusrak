<div class="container mt-5">
    <h2 class="mb-3">Lisa uus marker</h2>
<form action="{{ route('markers.store') }}" method="POST">
    <div class="flex flex-col">
    @csrf
    Nimi:<input type="text" name="name" placeholder="Name">
    <br><br>
    Laiuskraad:<input type="text" name="latitude" placeholder="Latitude">
    <br><br>
    Pikkuskraad:<input type="text" name="longitude" placeholder="Longitude">
    <br><br>
    Kirjeldus:<textarea class="w-100" name="description" placeholder="Description"></textarea>
    </div>
    <button type="submit">Lisa Marker</button>
</form>
</div>