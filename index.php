<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BEKINS</title>
  <link rel="stylesheet" href="estilos/style.css">
  <link rel="icon" href="assets/img/title.jpg" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/9da0902580.js" crossorigin="anonymous"></script>
</head>

<body>

  <!-- Menú para los iconos, celular y correo-->
  <nav class="icons">
    <ul class="formato-text">
      <li class="correo"><i class="fa-solid fa-envelope"></i></i>mchavarriaflores@gmail.com</li>
      <li class="telefono"><i class="fa-solid fa-phone"></i></i>+51 929 810 227</li>
    </ul>
    <ul class="formato-img">
      <a href="https://www.facebook.com/zapatillasbekins" target="_blank">
        <i class="fa-brands fa-facebook-f"></i></a>

      <a href="https://www.instagram.com/" target="_blank">
        <i class="fa-brands fa-instagram"></i></a>
      <a href="https://www.tiktok.com/" target="_blank">
        <i class="fa-brands fa-tiktok"></i></a>
      <a href="admin/login1.php">
        <i class="fa-solid fa-user"></i></a>
      <a href="carrito.php">
        <i class="fa-solid fa-cart-shopping"></i></a>
    </ul>
  </nav>

  <!-- Menú pricipal -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <h1 class="nombreEmpresa">BEKINS</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="catalogo.php">Productos</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="html/acercade.html">Sobre nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="html/ubicacion.html">Ubicación</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="buscar" placeholder="buscar" aria-label="Buscar">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- div para la imagen central - represenativa de la página-->
  <!-- <div class="img">
    <p class="delante-img">Comprometidos con el deporte - Nuestras zapatillas se lucen en el más alto nivel del futsal
      profesional peruano</p>
  </div> -->

  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="assets/img/portada.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="assets/img/portada1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="assets/img/portada4.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>

  <div class="card-informativas">
    <div class="card" style="width: 18rem;">
      <img src="assets/img/bekins3.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <p class="card-text">Zapatillas para fútsal en acción <strong>PIVOT 2.0</strong></p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="assets/img/bekins6.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <p class="card-text">BEKINS presente en la <strong>Copa Libertadores de Futsal 2024</strong>
          Exitos siempre @sebastianob Tortuguitas Buenos Aires Argentina</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="assets/img/bekins7.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <p class="card-text">Después de una buena campaña regresa al Perú a seguir haciendo historia @sebastianob
          <strong>Pivot 2.0 Agua Marina</strong> Estadio Lolo Fernández
        </p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="assets/img/bekins8.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <p class="card-text">Grandes momentos que nos regala la pelotita <strong>Modelo Pivot 2.0 rojo escarlata
            IC</strong> Mundialito- El Porvenir- La Victoria</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="assets/img/bekins9.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <p class="card-text">Salió la combinación que todos esperábamos<strong> PIVOT 2.0 NEGRO CON NARANJA</strong>
          ¿Estás listo para repartir chocolate?</p>
      </div>
    </div>
  </div>

  <!-- div para información complementaria de la empresa-->
  <div class="info-complementaria">

    <ul class="ayuda-productos">
      <h5><strong>Ayuda</strong></h5>
      <a href="html/centrodeayuda.html">Centro de ayuda</a>
      <a href="html/opcionespago.html">Opciones de pago</a>
      <a href="html/promociones.html">Promociones y Legales</a>
      <a href="#">Cambios, devoluciones y garantías</a>
      <a href="#">Política de privacidad</a>
      <a href="#">Términos y condiciones</a>
      <a href="#">Preguntas frecuentes</a>
      <a href="#">Guía de tallas</a>
    </ul>
    <ul class="productos-mencionados">
      <h5><strong>Productos a ofrecer</strong></h5>
      <a href="#">Zapatillas para gras natural</a>
      <a href="#">Zapatillas para gras sintético</a>
      <a href="#">Zapatillas para losa</a>
      <a href="#">calcetines, medias</a>
      <a href="#">Accesorios para el cuidado del calzado</a>
    </ul>

    <ul class="paginas">
      <h5><Strong>Páginas del sistema</Strong></h5>
      <a href="index.php">Inicio</a>
      <a href="catalogo.php">Productos</a>
      <a href="html/acercade.html">Sobre nosotros</a>
      <a href="html/ubicacion.html">Encuentranos en</a>
      </a>
    </ul>
  </div>

  <footer class="final">
    <p class="footer-final">© 2024 bekins, Puente piedra, Perú - Tienda de artículos deportivos</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>