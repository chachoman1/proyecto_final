<?php include_once 'Views/template-principal/header.php'; ?>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?php echo BASE_URL .'assets/img/promocional 1.jpg'; ?>" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Davinci </b> Diseño interior </h1>
                                <h3 class="h2">lo mejor de lo mejor para tus muebles</h3>
                                <p>
                                    Davinci es una empresa distribuidora de textil para todo tipo de muebles
                                     en el hoga  contamos con todas los permisos  y  somos unos de los pocos importadores <a rel="sponsored" class="text-success" href="https://www.unoxuno.com.co/" target="_blank">unoXuno</a> website. 
                                    <a rel="sponsored" class="text-success" href="https://highdeco.co/" target="_blank"></a>,
                                    <a rel="sponsored" class="text-success" href="https://unsplash.com/" target="_blank">Unsplash</a> and
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?php echo BASE_URL .'assets/img/garantia.jpg'; ?>" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Garantisamos nuestros productos</h1>
                                <h3 class="h2">por mala costuras</h3>
                                <p>
                                    nuestros productos cumolen con los mas altos estandaresde calidad en elmercado <strong></strong> cualquier inquietud comunicarse con nuestros asesores
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?php echo BASE_URL .'assets/img/promocional_2.jpg'; ?>" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">exclusividad</h1>
                                <h3 class="h2">muchos pero ninguno como nosotros </h3>
                                <p>
                                    nuestras telas estan confeccionada por los mas exclusivos diseñadores del pais e importada por las mejores casas textiles de europa
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categorias</h1>
                <p>
                    Aqui encontraras las mejores yy exclusivas lineas de alta calidad para tu hogar 
                </p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data['categorias'] as $categoria){ ?>
            <div class="col-12 col-md-2 p-5 mt-3">
                <a href="<?php echo BASE_URL .'principal/categorias/' . $categoria['id']; ?>"><img src="<?php echo $categoria['imagen'];?>" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3"><?php echo $categoria['categoria']; ?></h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <?php } ?>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">productos destacados </h1>
                    <p>
                        Aqui podras encontrar lo que estas buscando para tu hogar desde la economia y la conformidad con nuestras
                        telas lo mejor para tu comodidad 
                    </p>
                </div>
            </div>
            <div class="row">
               <?php foreach ($data['nuevosProductos'] as $producto) { ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id'] ?>">
                            <img src="<?php echo $producto['imagen']; ?>" class="card-img-top" alt="<?php echo $producto['nombre']; ?>">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right"><?php echo MONEDA. ' ' .  $producto['precio']; ?></li>
                            </ul>
                            <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id'] ?>" class="h2 text-decoration-none text-dark"><?php echo  $producto['nombre']; ?></a>
                            <p class="card-text">
                            <?php echo  $producto['descripcion']; ?>
                            </p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->
<?php include_once 'Views/template-principal/footer.php'; ?>

    
</body>

</html>