<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='estilo.css'>
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
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Rutas de información
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Científico de Datos</a></li>
                <li><a href="aprendeaconstruir.php">Ruta de Formación En .NET</a></li>
                <li><a href="">Ruta de Formación En Automatización</a></li>
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
            <li onclick="mostrarPopup()" id="iniciarSeion"><span class="glyphicon glyphicon-user"></span>Iniciar Sesión</li>
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div> 
          </ul>
        </div>
      </nav>
      <div class="container title">
        <h1>Continúa tu formación con IzyAcademy</h1>
        <h3>Te ofrecemos una experiencia de aprendizaje basada en la formación por proyectos
          apoyada en el uso de recursos interactivos para que tu aprendizaje sea efectivo
        </h3>
      </div>
    </header>

    <div class="container">
        <div class="row fuera">
            <div class="col-sm-12 col-sm-5">
                <div class="row cartaP">
                    <img src="imagenes/impre05.avif" alt="">
                    <h2>Bienvenidos a IzyAcademy</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet temporibus ex veniam sit voluptatem deleniti accusantium. Repellendus doloremque quia nam et laborum temporibus, velit, libero possimus saepe id dolores officiis eum dolorem ratione ipsam, repudiandae optio impedit incidunt explicabo animi!</p>
                    <hr class="linea">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis at aperiam quae quo ut eveniet quidem ea eligendi libero vel.</p>
                    <hr class="linea">
                </div>
            </div>
            <div class="col-sm-12 col-sm-7">
                <div class="row dentro">
                    <div class="col-sm-6">
                        <div class="row carta">
                            <img src="imagenes/impre06.avif" alt="">
                            <h2>Generaciòn de comunidad</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere quaerat unde quidem similique explicabo consequuntur architecto! Natus earum nesciunt non.</p>
                        </div>
                        <div class="row carta">
                            <img src="imagenes/impre02.avif" alt="">
                            <h2>Certificaciòn e insignias</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, id. Architecto voluptatum quidem est commodi repudiandae nulla officiis magni cupiditate.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row carta">
                            <img src="imagenes/impre03.avif" alt="">
                            <h2>Transferencia de conocimiento</h2>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis sapiente quas expedita dicta. Placeat sit quaerat, sapiente nihil sint quo!</p>
                        </div>
                        <div class="row carta">
                            <img src="imagenes/impre04.jpg" alt="">
                            <h2>Apropiacion del conocimiento</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo earum facere ab? Reiciendis architecto asperiores laborum, ipsa natus quo!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <div class="container-fluid aliados">
      <div class="row">
        <div class="col-md-6">
          <img src="imagenes/aliadi01.jpg">
          <img src="imagenes/aliado02.png">
          <img src="imagenes/aliado03.png">
          <img src="imagenes/aliado04.jpg">
        </div>
        <div class="col-md-6">
          <img src="imagenes/aliado05.jpg">
          <img src="imagenes/aliado06.jpg">
          <img src="imagenes/aliado07.png">
          <img src="imagenes/aliado08.png">
        </div>
      </div>
    </div>

    <div class="FormularioRegistro">
        <div class="col-sm-6 Imagen">
            <img src="imagenes/impre01.png" alt="">
        </div>
        <div class="col-sm-6 formulario">
            <form action="registro.php" method="post">
                <label for="nombre">Nombres</label><br>
                <input class="inputRegistro" name="Nombre" type="text" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" title="Ingresar solo letras y espacios" required><br>
                <label for="apellidos">Apellidos</label><br>
                <input class="inputRegistro" name="Apellido" type="text" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" title="Ingresar solo letras y espacios" required><br>
                <label for="Correo">Correo electronico</label><br>
                <input class="inputRegistro" name="Correo" type="email" required><br>
                <label for="contraseña">Contraseña</label><br>
                <input class="inputRegistro" name="Contraseña" type="password" id="Contraseña" required><br>
                <label for="ConfirmarContraseña">Confirmar contraseña</label><br>
                <input class="inputRegistro" name="CContraseña" type="password" id="ConfirmarContra" required><br>
                <input type="checkbox" id="Terminos">
                <label for="terminos">Acepto <span>Terminos y condiciones</span></label><br>
                <input type="checkbox" id="Politicas">
                <label for="terminos">Acepto <span>Politica de tratamiento de datos</span></label><br>
                <input class="Registrarse" type="submit" value="Registrarse" id="Registrarse" disabled>
            </form>
        </div>
    </div>
    <div id="popup" class="popup-contenedor">
        <div class="popup-contenido">
          <span class="cerrar" onclick="cerrarPopup()">&times;</span>
          <h2>Inicie sesion en su cuenta</h2>
          <form method="post">
            <input class="input" type="text" id="nombre" name="Correo" placeholder="Correo Electronico" required><br>
            <input class="input" type="password" id="email" name="Contraseña" placeholder="Contraseña" required><br>
            <button class="boton" onclick="IniciarSesion()" type="submit">Enviar</button>
          </form>
        </div>
      </div>
      <script src="main.js"></script>
      <script>
        function IniciarSesion(){
            var Correo = document.getElementById("Correo").value;
            var Contra = document.getElementById("Contra").value;
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "iniciar.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function(){
                if(xhr.readyState == 4 && xhr.status == 200){
                    var RespuestaIniciar = JSON.parse(xhr.responseText);
                    if(RespuestaIniciar.autenticado){
                        document.getElementById("NombreUsuario").innerText = RespuestaIniciar.NombreUsuario;
                    } else{
                        alert("Hubo un error en la autentificacion.")
                    }
                }
            };
            xhr.send("Correo" + Correo + "&Contra" + Contra)
        }
    </script>
</body>
</html>
