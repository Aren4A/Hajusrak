<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map Markers</title>

    
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <style>
        #map {
            height: calc(100vh - 4rem);
        }
        @media (max-width: 640px) {
            #map {
                height: calc(100vh - 2rem); 
            }
        }
    </style>
</head>
<body class="bg-gray-100">

    <div class="flex flex-col md:flex-row h-screen">
    
        <div id="map" class="flex-1"></div>
    
        <div class="p-4 overflow-auto bg-white md:w-1/3 lg:w-1/4 h-full">
            <h1 class="font-serif">Salvestatud Markerid</h1>
            <div class="space-y-2">
                @php $limitedMarkers = array_slice($markers->toArray(), -10); @endphp
                @foreach($limitedMarkers as $marker)
                    <div class="flex items-center justify-between p-2 rounded shadow">
                        <div>
                            <br>
                            Nimi:
                            <div class="font-xl">{{ $marker['name'] }}</div>
                            Kirjeldus: 
                            <div class="text-xl font-bold text-gray-600">{{ $marker['description'] }}</div>
                        </div>
                        <div class="flex space-x-1">
                            <a href="{{ route('markers.edit', $marker['id']) }}" class="text-xs bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded">Muuda</a>
                            <form action="{{ route('markers.destroy', $marker['id']) }}" method="POST" onsubmit="return confirm('Oled sa kindel, et tahad kustutada?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-xs bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded">Kustuta</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
            <a href="{{ route('markers.create') }}" class="text-center block bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded">
                Lisa uus marker
            </a>
        </div>
    
    </div>

<!-- Google Maps API -->
<script>
    // Prepare marker data
    const markersData = @json($markers);

    function initMap() {
        // Define map options
        const mapOptions = {
            zoom: 8,
            center: new google.maps.LatLng(0, 0) // Default center if no markers
        };
        
        // Initialize map
        const map = new google.maps.Map(document.getElementById('map'), mapOptions);
        const bounds = new google.maps.LatLngBounds();

        // Place markers
        markersData.forEach((data) => {
            const mapMarker = new google.maps.Marker({
                position: new google.maps.LatLng(data.latitude, data.longitude),
                map: map,
                title: data.name
            });

            // Extend the bounds to include this marker's position
            bounds.extend(mapMarker.getPosition());
        });

        // Only fit the bounds if there are markers
        if (markersData.length > 0) {
            map.fitBounds(bounds);
        } else {
            map.setCenter(mapOptions.center);
        }

        // Add map click event listener
        google.maps.event.addListener(map, 'click', function(event) {
            const markerName = prompt("Enter marker name:", "");
            if (markerName) {
                const markerDescription = prompt("Enter marker description:", "");
                const clickMarker = new google.maps.Marker({
                    position: event.latLng,
                    map: map,
                    title: markerName
                });

                const markerData = {
                    name: markerName,
                    latitude: event.latLng.lat(),
                    longitude: event.latLng.lng(),
                    description: markerDescription,
                    _token: '{{ csrf_token() }}'
                };

                fetch('{{ route('markers.store') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(markerData)
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Marker saved:', data);
                })
                .catch(error => {
                    console.error('Error saving marker:', error);
                });
            }
        });
    }
</script>
<script async defer 
    src="https://maps.googleapis.com/maps/api/js?key={{ config('services.map.key') }}&callback=initMap">
</script>

</body>
</html>