<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runway</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="/image/logo.jpg" alt="Logo">
            </a>

            <!-- <div class="search-box d-flex">
                <input type="text" placeholder="Stansiya nomi yoki kodini kiriting" aria-label="Search">
                <button class="btn btn-light ms-2" type="button"><i class="bi bi-search"></i></button>
            </div> -->


            <!-- <div class="container mt-4">
            <div class="station-item" href="" >
                <i class="bi bi-geo-alt-fill "></i>
                <span>Stansiya</span>
            </div>
        </div> -->

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
    <header>

    </header>
    <main>
        @yield("content")
    </main>
    <footer>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                vagonlar holati
            </a>
            <a href="#" class="list-group-item list-group-item-action ">Vagon yuborish</a>
            <a href="#" class="list-group-item list-group-item-action">Vagon qabul qilish</a>
            <a href="#" class="list-group-item list-group-item-action">Vagon qo`shish</a>
            <a href="#" class="list-group-item list-group-item-action ">Statistika</a>

            <a href="#" class="list-group-item list-group-item-action " aria-current="true">
                Xodimlar
            </a>


        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>