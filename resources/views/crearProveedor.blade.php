<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Proveedor</title>
</head>
<body>
    <h2>Agregar Producto</h2>

    <div class="form-container">
        <form action="{{route('proveedor.guardar')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido"  required>
            </div>
            <div class="form-group">
                <label for="fechaRegistro">fecha Registro:</label>
                <input type="text" id="fechaRegistro" name="fechaRegistro"  required>
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="text" id="correo" name="correo"  required>
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
    
</body>
</html>