<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prueba</h1>

    <form action="/guardarImagen" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" id="imagen" name="imagen" accept="image/png, image/jpeg">
        <input type="submit">
    </form>
</body>
</html>