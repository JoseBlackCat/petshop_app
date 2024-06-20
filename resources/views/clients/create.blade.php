<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cliente</title>
</head>
<body>
<h1>Crear Cliente</h1>
<form action="{{ route('clients.store') }}" method="post">
    @csrf
    <label for="name">Nombre</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="address">Direccion</label>
    <input type="text" id="address" name="address" required><br><br>

    <label for="phone">Telefono</label>
    <input type="text" id="phone" name="phone" required><br><br>

    <label for="email">Correo electronico</label>
    <input type="text" id="email" name="email" required><br><br>

    <button type="submit">Guardar</button>
</form>
</body>
</html>
