<?php
class Login
{
    private $pdo;
    public function __construct()
    {
        try {
            $this->pdo = DataBase::conn();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function login()
    {
        if ($_POST) {
            session_start();

            try {
                $user = $_POST['nombre'];
                $email = $_POST['email'];
                $pass = $_POST['password'];

                $stmt = $this->pdo->prepare("SELECT * FROM `usuario` WHERE usuario = :user AND contraseña = :pass AND email_usuario = :email;");
                $stmt->bindParam(':user', $user);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':pass', $pass);
                $stmt->execute();

                $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($usuario) {
                    $_SESSION['usuario'] = $usuario['usuario'];
                    $_SESSION['email_usuario'] = $usuario['email_usuario'];
                    
                    header("Location:?c=Landing&a=inicio");
                    // echo "sesion iniciada";

                } else {
?>
                    <script language='JavaScript'>
                        alert("Acceso denegado");
                        // location.href = "?c=Login&a=main";
                    </script>
<?php
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }

    public function registrarUsuario()
{
    if ($_POST) {
        session_start();

        try {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $tipo_usuario = $_POST['tipo_usuario'];
            $contraseña = $_POST['contraseña'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email_usuario'];

            // Verificar si el usuario o el correo electrónico ya están registrados en la base de datos
            $stmt = $this->pdo->prepare("SELECT * FROM `usuario` WHERE email_usuario = :email;");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $usuarioExistente = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($usuarioExistente) {
                // El correo electrónico ya está registrado
                echo "El correo electrónico ya está registrado. Por favor, elige otro.";
            } else {
                // Insertar el nuevo usuario en la base de datos
                $stmt = $this->pdo->prepare("INSERT INTO `usuario` (nombre, apellido, usuario, contraseña, direccion, telefono, email_usuario) VALUES (:nombre, :apellido, :tipo_usuario, :contraseña, :direccion, :telefono, :email);");
                $stmt->bindParam(':nombre', $nombre);
                $stmt->bindParam(':apellido', $apellido);
                $stmt->bindParam(':usuario', $usuario);
                $stmt->bindParam(':contraseña', $contraseña);
                $stmt->bindParam(':direccion', $direccion);
                $stmt->bindParam(':telefono', $telefono);
                $stmt->bindParam(':email', $email);
                $stmt->execute();

                // Iniciar sesión para el nuevo usuario
                $_SESSION['usuario'] = $nombre;
                $_SESSION['email_usuario'] = $email;

                header("Location:?c=Landing&a=inicio");
                // echo "Registro exitoso. Sesión iniciada.";
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

  
}