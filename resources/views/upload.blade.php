<!-- resources/views/upload.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Cargar Archivo Excel</title>
</head>
<body>
    <h1>Cargar Archivo Excel</h1>

    <form action="{{ route('upload.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="excel_file">
        <button type="submit">Cargar archivo</button>
    </form>
</body>
</html>
