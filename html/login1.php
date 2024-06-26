<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BEKINS</title>
  <link rel="stylesheet" href="../estilos/style.css">
  <link rel="icon" href="../img/title.jpg" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/9da0902580.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilos/stylePro.css">
  <link rel="stylesheet" href="../estilos/login.css">
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
            <a class="nav-link active" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="productos.html">Productos</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="acercade.html">Sobre nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ubicacion.html">Ubicación</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="buscar" placeholder="buscar" aria-label="Buscar">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- LOGIN -->
  <main class="login-main">
    <div class="contenedor__todo">
      <div class="caja__trasera">
        <div class="caja__trasera-login">
          <h3>¿Ya tienes una cuenta?</h3>
          <p>Iniciar sesión para ingresar</p>
          <button id="btn__iniciar-sesion">Iniciar sesión</button>
        </div>
        <div class="caja__trasera-registrar">
          <h3>¿Aún no tienes una cuenta?</h3>
          <p>Registrate para iniciar sesión</p>
          <button id="btn__registrarse">Registrarse</button>
        </div>
      </div>

      <div class="contenedor__login-register">
        <form action="login.php" class="formulario__login" method="post">
          <h2>Iniciar sesión</h2>
          <input type="email" minlength="11" placeholder="Correo: ejemplo@gmail.com" id="Iemail" required>
          <input type="password" placeholder="Contraseña: ejemplo123" id="Icontra" required>
          <button>Ingresar</button>
        </form>

        <form action="register.php" class="formulario__register" method="post">
          <h2>Registrarse</h2>
          <input type="text" minlength="3" placeholder="Nombre: Pedro" id="Rnombre" required>
          <input type="text" minlength="3" placeholder="Apellidos: Picapiedra" id="Rapellido" required>
          <input type="number" pattern="\d{8}" minlength="8" maxlength="8" placeholder="Número de DNI: 12345678" id="Rdni" required>
          <input type="email" minlength="11" placeholder="Correo: ejemplo@gmail.com" id="Remail" required>
          <input type="number" pattern="\d{9}" maxlength="9" minlength="9" placeholder="Número de celular: 908070605" id="Rtelefono" required>
          <input type="text" minlength="8" placeholder="Dirección: Av. ejemplo 1588" id="Rdireccion" required>
          <input type="password" minlength="5" placeholder="Contraseña: example123" id="Rcontra">
          <button>Guardar</button>
        </form>
      </div>
    </div>
  </main>

  <!-- Información complementaria de la empresa -->
  <div class="info-complementaria">
    <ul class="ayuda-productos">
      <h5><strong>Ayuda</strong></h5>
      <a href="centrodeayuda.html">Centro de ayuda</a>
      <a href="opcionespago.html">Opciones de pago</a>
      <a href="promociones.html">Promociones y Legales</a>
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
      <a href="#">Calcetines, medias</a>
      <a href="#">Accesorios para el cuidado del calzado</a>
    </ul>
    <ul class="paginas">
      <h5><strong>Páginas del sistema</strong></h5>
      <a href="index.html">Inicio</a>
      <a href="productos.html">Productos</a>
      <a href="acercade.html">Sobre nosotros</a>
      <a href="ubicacion.html">Encuéntranos en</a>
    </ul>
  </div>

  <footer class="final">
    <p class="footer-final">© 2024 Bekins, Puente Piedra, Perú - Tienda de artículos deportivos</p>
  </footer>

  <script src="../scripts/scriptLogin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXlYp8/3gfhpuvR0bb0DWRKt5tD7z4VaCzU7XW2cpmNH4p6yfFZUAMBR74h3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhG+YujL2+N8vZlAZ9M1B7/9A8ROs2XURyBlV5PEK8IgKNkP2th7/tvAX0p" crossorigin="anonymous"></script>
</body>

</html>
