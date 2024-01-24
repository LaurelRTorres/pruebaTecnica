<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <!-- LIBRERIA BOOTSTRAP 3 -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
      <nav class="navbar">
        <div class="container-fluid">
          <div class="navbar-header">
            <img src="imagenes/logo.png" id="logo">
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Inicio</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="">Rutas de información
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Científico de Datos</a></li>
                <li><a href="#">Ruta de Formación En .NET</a></li>
                <li><a href="aprendeaconstruir.php">Ruta de Formación En Automatización</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cursos
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">---</a></li>
                <li><a href="#">---</a></li>
                <li><a href="#">---</a></li>
              </ul>
            </li>
            <li><a href="#">Quiénes somos</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li onclick="mostrarPopup()" id="iniciarSesion"><span class="glyphicon glyphicon-user"></span>Iniciar Sesión</li>
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </ul>
        </div>
      </nav>
      <div class="container">
      <h1>Continúa tu formación con IzyAcademy</h1>
      <h3>Te ofrecemos una experiencia de aprendizaje basada en la formación por proyectos
        apoyada en el uso de recursos interactivos para que tu aprendizaje sea efectivo
      </h3>
      </div>
      
    </header>
    <div class="container container-parallax">
        <h2>Aprende a Construir</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="imagenes/img01.jpg" class="img-circle">
                <p class="texto">Aplicaciones WEB</p>
            </div>
            <div class="col-md-4">
                <img src="imagenes/img02.jpg" class="img-circle">
                <p class="texto">WEB API</p>
            </div>
            <div class="col-md-4">
                <img src="imagenes/img03.jpg" class="img-circle">
                <p class="texto">Aplicaciones seguras</p>
            </div>
        </div>
        <div class="container center">
            <h3>ASP.NET, el framework de desarrollo web que permite crear aplicaciones web potentes, suguras
                y escalables de manera fácil, rápida y eficiente.</h3>
            <h1>COMIENZA TU VIAJES PARA CONVERTIRTE EN DESARROLLADOR</h1>
        </div>
    </div>
</body>
</html>