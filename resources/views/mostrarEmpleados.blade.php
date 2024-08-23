<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
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
    <h1>Empleados</h1>
    <table>
        <thead>
            <tr>
                <th>ID Empleado</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>fecha Ingreso</th>
                <th>salario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $empleado->id}}</td>
                <td>{{ $empleado->nombre }}</td>
                <td>{{ $empleado->apellido }}</td>
                <td>{{ $empleado->fechaIngreso }}</td>
                <td>{{ $empleado->salario }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
