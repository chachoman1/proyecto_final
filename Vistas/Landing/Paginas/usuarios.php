<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
</head>
<body>
    <h1>Registro de Nuevos Usuarios</h1>

    <form action="?c=Login&a=registrarUsuario" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="pass" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email_usuario" name="email_usuario" required><br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>
