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
    </div>
</body>

</html>