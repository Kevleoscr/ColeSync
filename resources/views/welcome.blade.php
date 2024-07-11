<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ColeSync</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f8fafc;
            color: #333;
            font-family: 'Nunito', sans-serif;
        }
        .header {
            background: #007bff url('/images/background.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        .header h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
        }
        .header p {
            font-size: 1.25rem;
        }
        .content {
            padding: 30px 15px;
        }
        .content a {
            margin: 10px;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <h1>Bienvenido a ColeSync</h1>
            <p>La solución integral para la gestión de colegios.</p>
            <img src="{{ asset('images/logo.png') }}" alt="ColeSync Logo" style="width: 150px;">
        </div>
    </div>
    <div class="content">
        <div class="container text-center">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a>
            <a href="{{ route('register') }}" class="btn btn-secondary btn-lg"><i class="fas fa-user-plus"></i> Registrarse</a>
        </div>
    </div>
</body>
</html>
