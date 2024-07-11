<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Estudiante</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Detalles del Estudiante</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $student->first_name }} {{ $student->last_name }}</h5>
                <p class="card-text"><strong>Email:</strong> {{ $student->email }}</p>
                <p class="card-text"><strong>Fecha de Nacimiento:</strong> {{ $student->dob }}</p>
                <p class="card-text"><strong>Dirección:</strong> {{ $student->address }}</p>
                <p class="card-text"><strong>Teléfono:</strong> {{ $student->phone }}</p>
                <a href="{{ route('students.index') }}" class="btn btn-primary">Volver a la Lista</a>
            </div>
        </div>
    </div>
</body>
</html>
