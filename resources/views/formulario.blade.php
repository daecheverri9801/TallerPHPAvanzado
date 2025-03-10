<!DOCTYPE html>
<html>

<head>
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Calculadora de Interés Compuesto</h2>
        <form action="/calcular-interes" method="POST">
            @csrf
            <input type="text" name="capital" placeholder="Capital inicial" class="form-control mb-2" required>
            <input type="text" name="tasa" placeholder="Tasa de interés (%)" class="form-control mb-2" required>
            <input type="text" name="tiempo" placeholder="Tiempo (años)" class="form-control mb-2" required>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>

        <h2 class="mt-4">Conversión de Temperatura</h2>
        <form action="/convertir-temperatura" method="POST">
            @csrf
            <input type="text" name="grados" placeholder="Temperatura" class="form-control mb-2" required>
            <select name="unidad" class="form-control mb-2">
                <option value="C">Celsius a Fahrenheit</option>
                <option value="F">Fahrenheit a Celsius</option>
            </select>
            <button type="submit" class="btn btn-success">Convertir</button>
        </form>

        <h2 class="mt-4">Procesar Imagen</h2>
        <form action="/procesar-imagen" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="imagen" class="form-control mb-2" required>
            <button type="submit" class="btn btn-warning">Procesar Imagen</button>
        </form>
    </div>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="max-width: 500px; margin: 20px auto; text-align: center;">
        <strong>Éxito:</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="max-width: 500px; margin: 20px auto; text-align: center;">
        <strong>Error:</strong> {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</body>

</html>