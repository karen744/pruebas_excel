<!-- resources/views/show_data.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Datos Importados</title>
</head>
<body>
    <h1>Datos Importados</h1>

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombres</th>
                <th>Contacto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $estudiante)
                <tr>
                    <td>{{ $estudiante->codigo }}</td>
                    <td>{{ $estudiante->nombres }}</td>
                    <td>{{ $estudiante->contacto }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
