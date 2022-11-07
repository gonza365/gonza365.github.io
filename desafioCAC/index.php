<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/desafio.css">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>Desafío CAC</title>
</head>
<body>
    <HEADER>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Codo A Codo</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled">Desactivado</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Búsqueda</button>
                </form>
              </div>
            </div>
          </nav>
          <div class="container w-80">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../assets/imagenes/bootstrap.png" class="d-block  w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../assets/imagenes/HTMLCover.webp" class="d-block  w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../assets/imagenes/css.png" class="d-block  w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </HEADER>
    <main id="servicios">
      <h2>Acerca de</h2>
      <ul class=" btn-php">
      <li><a href="index.php?id=1#servicios">HTML5</a></li>
      <li><a href="index.php?id=2#servicios">CSS 3</a></li>
      <li><a href="index.php?id=3#servicios">BOOTSTRAP</a></li>
     
    </ul>
    <?php  ?>
    <?php
      if (isset($_GET['id'])){
        switch ($_GET['id']){
          case '1':
          $servicio= 'HTML5';
          $descripcion ='El HTML es un "lenguaje de marcado". Basa su sintaxis en un elemento base al que llamamos marca,
          tag o simplemente etiqueta. A través de las etiquetas vamos definiendo los elementos del documento,
          como enlaces, párrafos, imágenes, etc. Así pues, un documento HTML estará constituido por texto y
          un conjunto de etiquetas para definir la función que juega cada contenido dentro de la página. Todo
          eso servirá al navegador para saber cómo se tendrá que presentar el texto y otros elementos en la
          página.
          Existen etiquetas para crear negritas, párrafos, imágenes, tablas, listas, enlaces, etc. Así pues, aprender
          HTML es básicamente aprenderse una serie de etiquetas, sus funciones, sus usos y saber un poco
          sobre cómo debe de construirse un documento básico.';
          $imagen = 'HTMLCover.webp';
          break ;
          case '2':
          $servicio = 'CSS 3';
          $descripcion = 'CSS es un lenguaje que consiste en una serie de elementos mediante los cuales se declaran los
          estilos, básicamente éstos son los más importantes:
           • Selectores, mediante los cuales podemos especificar qué elementos de la página nos estamos
          refiriendo
           • Atributos de estilo para definir qué cosas queremos estilizar sobre los selectores indicados
           • Una serie de valores, que indican qué estilo se debe aplicar a cada atributo sobre cada selector.
           Los valores se expresan con unidades CSS, que sirven para cuantificar los  valores (píxeles,
           puntos…).
           Aprender CSS no es difícil, pero cuando se usa profesionalmente se deben tener  en cuenta muchos
           detalles y buenas prácticas, como la organización del código, la reutilización,  la optimización, etc.';
           $imagen = 'css.png';
           break ;
           case '3':
           $servicio = 'Bootstrap';
           $descripcion = 'Bootstrap es un Framework que permite generar en forma más  sencilla y con menos código un
           FrontEnd de una página web en forma responsive y basándose en las cualidades de  CSS.
           Un framework de desarrollo es una herramienta de software, que basado en la  tecnología de
           un lenguaje de programación y que, por lo general, se define como una aplicación o
           conjunto de módulos, permite el desarrollo ágil de aplicaciones mediante la aportación de
           librerías y/o funcionalidades ya creadas.';
           $imagen = 'bootstrap.png';
           break ;
        }

    ?>
    <div class="container w-100 ">
      <h3> <?php echo $servicio; ?></h3>
      <div class="tarjeta">
      <p><?php echo $descripcion; ?></p>
      <img src="../assets/imagenes/<?php echo $imagen ?>" class="imagen" alt="">
      </div>
     

    </div>
    <?php
    }
    ?>
    </main>

      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Nunca comparta su e-mail con alguien más.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Verificar</label>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    
    
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>