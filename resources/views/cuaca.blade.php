<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Tematik Prakiraan Cuaca</title>
    <link rel="icon" href="/public/icons/sunny.webp" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>

     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
    
     <style>
        body{
            padding: 0;
            margin: 0;
        }
        #map {
            border-radius: 5px;
            height: 595px; 
        }
        body{
            margin: auto;
            font-family: 'Abel';
        }
        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
        #map {margin-top: 90px;}
        }

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {
        #map {margin-top: 55px;}
        }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
        #map {margin-top: 55px;}
        } 

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {
        #map {margin-top: 55px;}
        } 

        /* Extra large devices (large laptops and desktops, 1200px and up) */
        @media only screen and (min-width: 1200px) {
        #map {margin-top: 55px;}
        }
     </style>
</head>
<body>
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand"><h4>Peta Tematik Prakiraan Cuaca data BMKG</h4></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/tentang">Tentang</a>
                </li>
                </ul>
            </div>
            </div>
        </div>
    </nav>
    <div id="map" class="col-xs-12"></div>
    <script>
        var map = L.map('map').setView([-7.3887545, 110.408091], 7);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            function getWeatherIcon(cuaca) {
            var iconUrl = '';

            // Tentukan icon berdasarkan kondisi cuaca
            if (cuaca.includes('Berawan')) {
                iconUrl = "https://i.im.ge/2025/01/24/HoBCD8.cloudy.png"; // Gambar untuk kondisi 'Berawan'
            } else if (cuaca.includes('Hujan Petir')) {
                iconUrl = "https://i.im.ge/2025/01/24/HoBAMX.petir.png"; // Gambar untuk kondisi 'Hujan Petir'
            } else if (cuaca.includes('Hujan')) {
                iconUrl = "https://i.im.ge/2025/01/24/HoBtg9.rain.png"; // Gambar untuk kondisi 'Hujan'
            } else if (cuaca.includes('Cerah')) {
                iconUrl = "https://i.im.ge/2025/01/24/HoBP0K.sunny.png"; // Gambar untuk kondisi 'Cerah'
            } else {
                iconUrl = "https://i.im.ge/2025/01/24/HoBAMX.petir.png"; // Default icon jika kondisi tidak cocok
            }

            return L.icon({
                iconUrl: iconUrl,
                iconSize: [32, 32], // Ukuran icon
                iconAnchor: [16, 32], // Posisi anchor (tengah bawah)
                popupAnchor: [0, -32] // Posisi popup anchor relatif terhadap icon
            });
        }

            var dataCuaca = @json($dataCuaca);
            dataCuaca.forEach(function(lokasi){
                var weatherIcon = getWeatherIcon(lokasi.cuaca);
                var marker = L.marker([lokasi.latitude, lokasi.longitude],{ icon: weatherIcon }).addTo(map);
                marker.bindPopup("<b>" + lokasi.nama_wilayah + 
                "</b><br>Cuaca: " + lokasi.cuaca +
                "<br>Suhu: " + lokasi.suhu + " °C" +
                "<br>Kecepatan Angin: " + lokasi.kecang + " km/jam" +
                "<br>Waktu Lokal: " + lokasi.waktu_lokal);
            });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>