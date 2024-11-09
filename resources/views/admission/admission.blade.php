<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/login.css">
    <title>MainRailway</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('image/photo.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }


        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;

            color: #fff;
        }

        .navbar .logo img {
            height: 50px;
            width: 100px;
            border-radius: 5px;

        }

        .login {
            width: 100px;
            height: 50px;
            font-size: 20px;
            font-weight: bold;
        }

        .navbar .login a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }

        .navbar .login a:hover {
            text-decoration: underline;
        }


        main {
            flex: 1;
            padding: 50px;
            text-align: center;
            color: white;
            font-size: 50px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="#"><img src="image/logo.jpg" alt="Logo"></a>
            </div>
            <div>
            <a href="{{route('login')}}" class="btn btn-outline-success login" role="button">Kirish</a>

            </div>
        </nav>
    </header>

    <!-- Main content -->
    <main>
        <h1>Railway Tizimiga Xush Kelibsiz!</h1>
        <p>Tizim quyidagilarni o`z ichiga oladi</p>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Railway Tizimi. Barcha huquqlar himoyalangan.</p>
    </footer>
</body>

</html>