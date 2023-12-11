<?php
class Principal extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }
    public function index()
    {
       
    }
    //vista about
    public function about()
    {
        $data['title'] = 'nuestro equipo';
        $this->views->getView('principal', "about", $data);
    }
    //vista shop
    public function shop($page)
    {
        $pagina = (empty($page)) ? 1 : $page ;
        $porPagina =20;
        $desde = ($pagina - 1) * $porPagina;
        $data['title'] = 'nuestros productos';
        $data['productos'] = $this->model->getProductos($desde, $porPagina);
        $data['pagina '] = $pagina;
        $total = $this->model->getTotalProductos($data);        
        $data['total'] =ceil ($total['total']/$porPagina);        
        $this->views->getView('principal', "shop", $data);
    }
    //vista details
    public function detail($id_producto)
    {
        $data['producto'] = $this->model->getProducto($id_producto);
        $data['title'] = $data['producto']['nombre'];
        $this->views->getView('principal', "detail", $data);
    }
    //vista categoria
    public function categorias($datos)
    {
        $id_categoria = 1;
        $page = 1;
        $array = explode(",", $datos);
        if (isset($array[0])) {
            if (!empty($array[0])) {
                $id_categoria = $array[0];
            }
        }
        if (isset($array[1])) {
            if (!empty($array[1])) {
                $page = $array[1];
            }
        }
        $pagina = (empty($page)) ? 1 : $page ;
        $porPagina =16;
        $desde = ($pagina - 1) * $porPagina;

        $data['pagina '] = $pagina;
        $total = $this->model->getTotalProductosCat($id_categoria);        
        $data['total'] =ceil ($total['total']/$porPagina);


        $data['productos'] = $this->model->getProductosCat($id_categoria, $desde, $porPagina);
        $data['title'] = 'Categorias';
        $data['id_categoria'] = $id_categoria;
        $this->views->getView('principal', "categorias", $data);
    }
    //vista contact
    public function contactos()
    {
        $data['title'] = 'contactos';
        $this->views->getView('principal', "contac", $data);
    }
    
}
