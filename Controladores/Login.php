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
    public function registra(){
        $stmt = $this->pdo->prepare("
        INSERT INTO `usuario`(`nombre`, `apellido`, `usuario`, `contraseña`, `direccion`, `telefono`, `email_usuario`, `tipo_documento_id_tipo_documento`, `rol_id_rol`) VALUES 
        (:nombre ,:apellido,'[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')");


    }
}