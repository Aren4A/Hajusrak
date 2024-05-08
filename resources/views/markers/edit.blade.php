<div class="container mt-5">
    <h2 class="mb-3">Muuda markereid</h2>

        <form action="{{ route('markers.update', $marker->id) }}" method="POST">
            <div class="flex flex-col">
            @csrf
            @method('PUT')
            Nimi: <input type="text" name="name" placeholder="Name" value="{{ $marker->name }}">
            <br><br>
            Laiuskraad: <input type="text" name="latitude" placeholder="Latitude" value="{{ $marker->latitude }}">
            <br><br>
            Pikkuskraad: <input type="text" name="longitude" placeholder="Longitude" value="{{ $marker->longitude }}">
            <br><br>
            Kirjeldus: <textarea class="w-100" name="description" placeholder="Description">{{ $marker->description }}</textarea>
            </div>
            <button type="submit">Uuenda markerit</button>
        </form>

    </div>
