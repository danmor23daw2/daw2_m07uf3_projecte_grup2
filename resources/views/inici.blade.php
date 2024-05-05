<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RentByRent - Plataforma de Alquiler de Coches</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            background-color: #222;
            color: #fff;
        }
        .card {
            background-color: #333;
        }
        .card-title {
            color: #ffc107;
        }
        .center-image {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px; 
        }
        img{
            width: 300px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">¡Bienvenido a RentByRent!</h1>
        <div class="center-image">
            <img src="https://www.zarla.com/images/zarla-alquila-car-1x1-2400x2400-20220110-7ydf4xvrx3c7cktr4wtj.png?crop=1:1,smart&width=250&dpr=2" alt="">
        </div>
        <p class="lead text-center">Tu plataforma para alquilar coches de manera rápida y sencilla.</p>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Acceso</h5>
                        <p class="text-center">Para empezar a explorar nuestras opciones de alquiler, inicia sesión o crea una cuenta.</p>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-block">Ir al Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-success btn-block">Iniciar Sesión</a>
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
