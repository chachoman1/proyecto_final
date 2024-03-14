<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <form id="registroForm" action="?c=Login&a=login" method="post">
        <h2>ingresar</h2>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">ingresar</button>
        
    </form>
    <form action="vistas/Landing/Paginas/usuarios.php"><button type="submit">Registrarse</button></form>

    

    <!-- <script>
        document.getElementById("registroForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Evitar que el formulario se envíe normalmente

            // Obtener los datos del formulario
            var formData = new FormData(event.target);

            // Enviar los datos al servidor con una petición asíncrona (puedes usar AJAX)
            fetch(event.target.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Mostrar alerta según la respuesta del servidor
                if (data.acceso === "concedido") {
                    alert("Registro exitoso. Acceso concedido.");
                } else {
                    alert("Registro fallido. Acceso denegado.");
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert("Hubo un error en el servidor. Inténtalo de nuevo más tarde.");
            });
        });
    </script> -->

</body>
</html>
