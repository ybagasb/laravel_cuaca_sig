<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Tematik Prakiraan Cuaca</title>
    <link rel="icon" href="/public/icons/sunny.webp" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <style>
        .tentang{
            margin-top: 85px;
        }
        body{
            font-family: 'Abel';
        }
    </style>
</head>
<body>
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand"><h4>Tentang Peta Tematik</h1></a>
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
    <div class="container tentang ">
        <div class="row">
            <p class="d-inline-flex gap-1">
                <div class=".col-6 .col-md-4"></div>
                <a class="btn btn-primary .col-6 .col-md-4" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Data apa saja yang disajikan?</a>
                <div class=".col-6 .col-md-4 m-1"></div>
                <button class="btn btn-primary .col-6 .col-md-4" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Digunakan untuk apa data ini?</button>
            </p>
        </div>
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body text-start">
                    Peta tematik cuaca yang datanya bersumber dari BMKG (Badan Meteorologi, Klimatologi, dan Geofisika) menyajikan informasi terkait kondisi cuaca secara komprehensif berdasarkan wilayah geografis tertentu. Peta ini biasanya mencakup variabel cuaca seperti suhu, curah hujan, arah dan kecepatan angin, serta tingkat kelembapan. Dengan menggunakan peta tematik cuaca dari BMKG, masyarakat dan berbagai sektor seperti pertanian, transportasi, dan pariwisata dapat mengakses prakiraan cuaca dan informasi meteorologis untuk keperluan perencanaan kegiatan sehari-hari. Selain itu, peta ini juga membantu dalam memitigasi risiko cuaca ekstrem, seperti banjir dan angin kencang, yang sering terjadi di beberapa wilayah Indonesia.
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body text-start">
                    Peta tematik cuaca dari BMKG sering digunakan dalam analisis perubahan iklim dan pelacakan tren cuaca jangka panjang. Data yang disajikan pada peta ini diperbarui secara berkala, memberikan gambaran yang lebih akurat tentang pola cuaca di masa mendatang. Peta tematik cuaca juga mendukung kegiatan penelitian dan pengambilan kebijakan terkait dengan perubahan iklim dan keberlanjutan lingkungan. Informasi cuaca real-time yang ditampilkan melalui peta tersebut sangat berguna dalam memprediksi fenomena seperti El Nino dan La Nina, yang berdampak pada ketersediaan air, hasil panen, serta kestabilan ekosistem di Indonesia.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center my-2">
        <h2>TEAM</h2>
    </div>
    <div class="container text-center mt-3">
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                <img src="https://i.im.ge/2025/01/24/HoBjSS.2.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Yoga Bagas Budhiman</h5>
                    <p class="card-text">NIM: 0110121086</p>

                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <img src="https://i.im.ge/2025/01/24/HoBrip.1.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Raihan Muzakki Nurhadi</h5>
                    <p class="card-text">NIM: 0110221163</p>

                </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>