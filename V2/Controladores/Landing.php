<?php
    class Landing{
        public function __construct(){}


        public function cabeza()
        {
            require_once "Vistas/Landing/Modulos/Header.php";
        }

        public function nav()
        {
            require_once "Vistas/Landing/Modulos/Nav.php";
        }



        public function main()
        {
            $this->cabeza();
            $this->nav();
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
            require_once "Vistas/Landing/Modulos/Header.php";
            require_once "Vistas/Landing/Modulos/Nav.php";
            
            #ruta de pagina + contenido
            require_once "Vistas/Landing/Paginas/servicios.php";

            require_once "Vistas/Landing/Modulos/Footer.php";
        }






    }
?>