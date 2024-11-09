<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"> 

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>Railway-main</title>
    <style>

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="/image/logo.jpg" alt="Logo">
            </a>

            <div class="search-box d-flex">
                <input type="text" placeholder="Stansiya nomi yoki kodini kiriting" aria-label="Search">
                <button class="btn btn-light ms-2" type="button"><i class="bi bi-search"></i></button>
            </div>


            <div class="container mt-4">
            <div class="station-item" href="" >
                <i class="bi bi-geo-alt-fill "></i>
                <span>Stansiya</span>
            </div>
        </div>

            <div class="dropdown ms-auto">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="profile-info">
                        <img src="/image/drivertrain.jpg" alt="User" class="profile-info img">
                    </div>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Tahrirlash</a></li>
                    <li><a class="dropdown-item" href="#">Chiqish</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @include('map')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>