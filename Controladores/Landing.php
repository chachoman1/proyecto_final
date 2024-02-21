<?php
    class Landing{
        public function __construct(){}

        public function inicio  ()
        {
            require_once "Vistas/Landing/Modulos/Header.php";
            require_once "Vistas/Landing/Modulos/Nav.php";
           
            #ruta de pagina + contenido
            require_once "Vistas/Landing/Paginas/inicio.php";
            require_once "Vistas/Landing/Modulos/Footer.php";
        }



        public function contacto()
        {
            require_once "Vistas/Landing/Modulos/Header.php";
            require_once "Vistas/Landing/Modulos/Nav.php";

            #ruta de pagina + contenido
            require_once "Vistas/Landing/Paginas/contacto.php";

            require_once "Vistas/Landing/Modulos/Footer.php";
        }


        public function servicios()
        {
          #  require_once "Vistas/Landing/Modulos/Header.php";
          #  require_once "Vistas/Landing/Modulos/Nav.php";
            
            #ruta de pagina + contenido
            require_once "Vistas/Landing/Paginas/registro.php";

           #require_once "Vistas/Landing/Modulos/Footer.php";
        }
        public function productos()
        {
            require_once "Vistas/Landing/Modulos/Header.php";
            require_once "Vistas/Landing/Modulos/Nav.php";

            #ruta de pagina + contenido
            require_once "Vistas/Landing/Paginas/productos.php";

            require_once "Vistas/Landing/Modulos/Footer.php";
        }
        public function portafolio()
        {
            require_once "Vistas/Landing/Modulos/Header.php";
            require_once "Vistas/Landing/Modulos/Nav.php";

            #ruta de pagina + contenido
            require_once "Vistas/Landing/Paginas/portafolio.php";

            require_once "Vistas/Landing/Modulos/Footer.php";
        }






    }
?>