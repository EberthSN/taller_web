<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BEKINS</title>
    <!-- Favicon-->
    <link rel="icon" href="img/title.jpg" type="image/x-icon">
    <!-- Bootstrap icons-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="estilos/style.css">
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/9da0902580.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="estilos/stylePro.css">
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

      <a href="login1.php" target="_blank">
        <i class="fa-solid fa-user"></i></a>

      <a href="carrito.php" target="_blank">
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
            <a class="nav-link active" href="catalogo.php">Productos</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="acercade.php">Sobre nosotros</a>
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
    <a href="#" class="btn-flotante" id="btnCarrito">Carrito <span class="badge bg-success" id="carrito">0</span></a>
    <!-- Navigation-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <a href="#" class="nav-link" category="all">Todo</a>
                        <?php
                        $query = mysqli_query($conexion, "SELECT * FROM categorias");
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                            <a href="#" class="nav-link" category="<?php echo $data['categoria']; ?>"><?php echo $data['categoria']; ?></a>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <div class="col mb-5 productos" category="<?php echo $data['categoria']; ?>">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?php echo ($data['precio_normal'] > $data['precio_rebajado']) ? 'Oferta' : ''; ?></div>
                                <!-- Product image-->
                                <img class="card-img-top" src="assets/img/<?php echo $data['imagen']; ?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?php echo $data['nombre'] ?></h5>
                                        <p><?php echo $data['descripcion']; ?></p>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through"><?php echo $data['precio_normal'] ?></span>
                                        <?php echo $data['precio_rebajado'] ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto agregar" data-id="<?php echo $data['id']; ?>" href="#">Agregar</a></div>
                                </div>
                            </div>
                        </div>
                <?php  }
                } ?>

            </div>
        </div>
    </section>
    <!-- Footer-->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
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
  <a href="catalogo.php">Productos</a>
  <a href="acercade.php">Sobre nosotros</a>
  <a href="ubicacion.php">Encuentranos en</a>
  </a>
</ul>
</div>

<footer class="final">
<p class="footer-final">© 2024 bekins, Puente piedra, Perú - Tienda de artículos deportivos</p>
</footer>

<script src="../scripts/main.js"></script>
</body>

</html>