<?php require_once "../config/conexion.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BEKINS</title>
  <link rel="stylesheet" href="../estilos/style.css">
  <link rel="stylesheet" href="../estilos/styleAce.css">
  <link rel="icon" href="../img/title.jpg" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/9da0902580.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/font/fonts.css">
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

      <a href="login1.php"><i class="fa-solid fa-user"></i></a>
      <a href="carrito.html" target="_blank">
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
            <a class="nav-link" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="productos.php">Productos</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href="acercade.php">Sobre nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ubicacion.php">Ubicación</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="buscar" placeholder="buscar" aria-label="Buscar">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="sobreBekins">
    <h2 class="subtitulo-historia">Historia de la empresa</h2>
    <p class="historia">
      BEKINS es una empresa peruana fundada en 2015 por Alejandro Ramos, un apasionado del fútbol y emprendedor de
      Lima. Inspirado por su amor al deporte y la falta de calzado deportivo de calidad a precios accesibles en el
      mercado local, Alejandro decidió crear su propia línea de zapatillas de fútbol. Comenzando en un pequeño taller
      en su barrio, BEKINS rápidamente se ganó la reputación por sus diseños innovadores y materiales duraderos. Con
      el apoyo de la comunidad y un enfoque en la artesanía local, BEKINS creció, ampliando su producción y
      distribución a nivel nacional. Hoy en día, BEKINS sigue siendo una empresa orgullosamente peruana que promueve
      el deporte y apoya a los jóvenes talentos locales.
    </p>
    <h2 class="subtitulo-mision">Misión de la empresa</h2>
    <p class="mision">
      Nuestra misión en BEKINS es proporcionar zapatillas deportivas de alta calidad que combinan innovación,
      comodidad y durabilidad a precios accesibles. Nos comprometemos a promover el deporte en Perú y a apoyar a los
      jóvenes talentos locales, fomentando una comunidad activa y saludable.
    </p>
    <h2 class="subtitulo-vision">Visión de la empresa</h2>
    <p class="vision">
      Nuestra visión es ser la marca líder de calzado deportivo en Perú, reconocida por nuestra excelencia en diseño y
      calidad, y nuestro compromiso con el desarrollo sostenible y el bienestar de nuestras comunidades. Buscamos
      expandirnos a mercados internacionales, llevando el espíritu y la pasión del fútbol peruano al mundo.
    </p>
  </div>

  <!-- div para información complementaria de la empresa-->
  <div class="info-complementaria">

    <ul class="ayuda-productos">
      <h5><strong>Ayuda</strong></h5>
      <a href="centrodeayuda.php">Centro de ayuda</a>
      <a href="opcionespago.php">Opciones de pago</a>
      <a href="promociones.php">Promociones y Legales</a>
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
      <a href="productos.php">Productos</a>
      <a href="acercade.php">Sobre nosotros</a>
      <a href="ubicacion.php">Encuentranos en</a>
      </a>
    </ul>
  </div>

  <footer class="final">
    <p class="footer-final">© 2024 bekins, Puente piedra, Perú - Tienda de artículos deportivos</p>
  </footer>
</body>

</html>