<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de proveedores</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>proveedores</h1>
    <table>
        <thead>
            <tr>
                <th>ID </th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>fecha registrto</th>
                <th>correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
            <tr>
                <td>{{ $proveedor->idProveedor}}</td>
                <td>{{ $proveedor->nombre }}</td>
                <td>{{ $proveedor->fechaRegistro }}</td>
                <td>{{ $proveedor->telefono}}</td>
                <td>{{ $proveedor->correo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

