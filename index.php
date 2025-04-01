<?php
$productos = [
['titulo' => 'Practica PHP', 'descripcion' => 'Some quick example text to build on the card title and make up the bulk of the cards content.', 'imagen' => 'https://image.api.playstation.com/vulcan/ap/rnd/202210/0610/5MnmcnD6qqpjLbOS84kdIzJo.png'],
['titulo' => 'Practica PHP', 'descripcion' => 'Some quick example text to build on the card title and make up the bulk of the cards content.', 'imagen' => 'https://image.api.playstation.com/cdn/UP0700/CUSA03388_00/v8JlD8KcQUtTqaLBmpFnj1ESRR5zMkLk.png'],
['titulo' => 'Practica PHP', 'descripcion' => 'Some quick example text to build on the card title and make up the bulk of the cards content.', 'imagen' => 'https://image.api.playstation.com/vulcan/ap/rnd/202210/0706/EVWyZD63pahuh95eKloFaJuC.png'],
['titulo' => 'Practica PHP', 'descripcion' => 'Some quick example text to build on the card title and make up the bulk of the cards content.', 'imagen' => 'https://image.api.playstation.com/vulcan/img/rnd/202010/1700/B66T6RbAfvIGjpEQxPq7k0Mu.png'],
['titulo' => 'Practica PHP', 'descripcion' => 'Some quick example text to build on the card title and make up the bulk of the cards content.', 'imagen' => 'https://bgdigitales.cl/cdn/shop/files/b5uuNMulpxnRpWZDG7lPexwMY7i9Pns7.jpg?v=1721924388'],
['titulo' => 'Practica PHP', 'descripcion' => 'Some quick example text to build on the card title and make up the bulk of the cards content.', 'imagen' => 'https://image.api.playstation.com/vulcan/ap/rnd/202501/1009/d67a60419a8398d6207bc5e7a11c353b6fdb2ea8eb547272.png'],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">


    <title>Document</title>
    
</head>
<body >
    <div class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
                </ul>

                <button type="button" class="btn btn-primary position-relative">
                    Carrito
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                      1+
                      <span class="visually-hidden">unread messages</span>
                    </span>
                  </button>
                
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </div>

    <br>

    <div class="container" id="inicioPagina">
        <div class="row justify-content-center g-4">
            <?php foreach($productos as $producto) { ?>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $producto['imagen']; ?>" class="card-img-top w-100 h-100 img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <p class="card-text texto-truncado">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Agregar</a>
                    </div>
                </div>
            </div>
        
        <?php } ?>
              
        </div>
    </div>

    <a href="#inicioPagina">Ir al inicio</a>

    
</body>
</html>