<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos del cliente</title>
</head>
<body>
<h1>Datos del cliente</h1>
<p><strong>Nombre:</strong> {{ $client->name }}</p>
<p><strong>Direccion:</strong> {{ $client->address }}</p>
<p><strong>Telefono:</strong> {{ $client->phone }}</p>
<p><strong>Correo elerctrónico:</strong> {{ $client->email }}</p>
</body>
</html>
