<?php  include './template/header.php'; ?>

<section class="modal">
    <div class="modal__contenedor">
        <h2 class="modal__title">Iniciar Sesion</h2>
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" class="modal__login" autocomplete="off">
            <label for="fusername" class="modal__title__input">Usuario:</label>
            <input type="text" name="usuario" id="username" class="modal__entrada">
            
            <label for="fpsw" class="modal__title__input">Contraseña:</label>
            <input type="password" name="contrasenia" id="psw" class="modal__entrada">

            <a href="#" class="modal__close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </a>
            <div class="modal__contenedor__botones">
               <button   class="modal__btn__registro">crear cuenta</button>
              <button type="submit"  name="Ingresar" class="modal__btn">iniciar sesion</button>
            </div>
        </form>

    </div>

</section> 

<section class=" modal__registro" >

<?php 
    include './db.php';


    if (isset($_POST["Crear_Cuenta"])){
        $usuario = mysqli_real_escape_string($conexion, $_POST['username']);
        $clave = mysqli_real_escape_string($conexion, $_POST['password']);
        $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
        $apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
        $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
        $fecha =  $_POST['fecha'];
        $sexo = mysqli_real_escape_string($conexion, $_POST['sexo']);

        // verificar si la contraseña es correcta
        $clave_encriptada = sha1($clave);
        $sqlUser = "SELECT id from Usuarios WHERE username ='$usuario'";

        $resultadoUser = $conexion->query($sqlUser);
        $filas = $resultadoUser -> num_rows;

        // delaclarar si la fila es mayor a cero
        if($filas > 0)
        {
            echo "<script> alert('el usuario ya existe ');
                    window.location ='./index.php';
                    </script>";
        }

        // inserto la informacion del usuarios username, clave, nombre, apellido, correo,sexo
        $sql = "INSERT INTO Usuarios (username, clave, nombre, apellido,correo,fecha_nacimiento,sexo) 
                VALUE('$usuario', '$clave','$nombre','$apellido','$correo', '$fecha' ,'$sexo' )";
        $resultadosql=$conexion ->query($sql);
        if($resultadosql > 0){
                echo "<script>
                            alert('registro Existoso');
                            window.location = './index.php;
                        </script>";
        }else {
                echo "<script>
                        alert('error a registarse');
                        window.location = './index.php';
                    </script>";
            } 

    }


?>

    <div class="modal__contenedor__registro">
        <h2 class=" modal__title__registro">Registro</h2>
        <form  method="post" class="modal__login__flex1" autocomplete="off">
            <label> <i class="fa fa-user-circle" aria-hidden="true"></i> Usuario: <br>
            <input type="text" name="username" class="modal__entrada" autocomplete="off" require></label><br>

            <label> <i class="fa fa-key" aria-hidden="true"></i> Contraseña: <br>
            <input type="password" name="password" class="modal__entrada" autocomplete="off" require></label><br>

            <label> <i class="fa fa-user-circle" aria-hidden="true"></i> Nombre: <br>
            <input type="text" name="nombre" class="modal__entrada" autocomplete="off" require></label><br>

            <label> <i class="fa fa-user-circle" aria-hidden="true"></i> apellido: <br>
            <input type="text" name="apellido" class="modal__entrada" autocomplete="off" require></label><br>

            <label> <i class="fa fa-key" aria-hidden="true"></i> fecha de nacimiento: <br>
            <input type="date" name="fecha" id="fecha" placeholder="2001/10/12" class="modal__entrada" autocomplete="off" require><br>

            <label> <i class="fa fa-user-circle" aria-hidden="true"></i> correo electronico: <br>
            <input type="email" name="correo" class="modal__entrada"  ></label><br>

            </label><br>
            <label> <i class="fa fa-key" aria-hidden="true"></i> sexo: <br>
            <input type="radio" name="sexo" value="M" id="gender" checked><label>Hombre</label><br>
            <input type="radio" name="sexo" value="F" id="gender" ><label>Mujer</label>

            <br>
                

                <a href="#" class="modal__close modal__close_Registro">
                <i class="fa fa-close" aria-hidden="true"></i>
                </a>
                <div class="modal__contenedor__botones">
                    <button type="submit" name="registrar" class="modal__btn__registro">crear cuenta</button>
                </div>
        
        </form>
    </div>

</section>

<div class="Contenedor_imagenes_Wrapper">
    <figure class="Contenedor__Wrapper">
        <img src="" alt="ImagenCambiante"  class="ImagenCambiante" id="logo" > 
        <figcaption class="TextoNoCambiante">
            <h2 class="Texto">vive la experiencia... turismo santa elena</h2>
        </figcaption>
    </figure>

    <div class="wrapper" id="Wrapper">
        <figure class="Card__Wrapper">
            <img src="./imagenes/sliderN.jpg"  alt="imagen1" class="ImagenWrapper" id="ImagenWrapper__1">
        </figure>

        <figure class="Card__Wrapper"> 
            <img src="imagenes/montanita.jpg" alt="imagen2" class="ImagenWrapper" id="ImagenWrapper__2">
        </figure>

        <figure class="Card__Wrapper">
            <img src="./imagenes/sliderCuria.jpg" alt="imagen3" class="ImagenWrapper" id="ImagenWrapper__3">
        </figure>

        <figure class="Card__Wrapper">
            <img src="./imagenes/sanjose.jpg" alt="imagen1" class="ImagenWrapper" id="ImagenWrapper__4">
        </figure>

        <figure class="Card__Wrapper">
            <img src="./imagenes/sliderO.jpg" alt="imagen4" class="ImagenWrapper" id="ImagenWrapper__5">
        </figure>
    </div>
    
    <div class="Controles__Wrapper">
        <div class="Vizualiacion">
            <span id="number1"> - </span>
            <span id="number2"> 05 </span>
        </div>

        <div class="Controles">
            <button id="Left"> <i class="fa fa-arrow-left" aria-hidden="true"></i>  </button>
            <button id="Right"> <i class="fa fa-arrow-right" aria-hidden="true"></i> </button>
        </div>
    </div>
</div>

 <section class="Contenedor__destino">
    <header >
        <h3 class="Encabezado">Descubre nuestros destinos</h3>
        <hr class="linea">
    </header>
    <article class="Contenedor__Flex">
              <figure class="cards">
                <img src="./imagenes/olon.jpg" alt="montañita" class="ImgCambiante" id="ImgCambiante">
                <figcaption class="Contenido">
                    <h4 id="NombreComuna">Olon</h4>
                    <p id="DescripcionComuna">La capital de las mil opciones</p>
                </figcaption>
            </figure>
            <figure class="MapaInteractivo">
                <img src="./imagenes/Map.svg" alt="mapa de santa elena" class="Mapa">
                <ul class="MapaInteractivo__Localizador" >
                    <li id="PuntoNunez"   onmousemove="Ver__Comuna__N()"  >
                        <span class="Circle C1"></span>
                        <a href="lasnunez.php" class="Text Text1" > Las Nuñez</a>                   
                    </li>

                    <li id="PuntoEntrada"  onmousemove="Ver__Comuna__E()" >
                        <span class="Circle  C2"></span>
                        <a href="#" class="Text Text2" > La Entrada </a>
                    </li>

                    <li id="PuntoCuria"  onmousemove="Ver__Comuna__C()" >
                        <span class="Circle C3"></span>
                        <a href="curia.php" class="Text Text3" >  Curía</a>
                    </li>

                    <li  id="PuntoSanJose"   onmousemove="Ver__Comuna__SJ()">
                        <span class="Circle C4"></span>
                        <a href="sanjose.php" class="Text Text4" > San Jose</a>
                    </li>

                    <li id="PuntoOlon"  onmousemove="Ver__Comuna__O()" >
                        <span class="Circle C5"></span>
                        <a href="olon.php" class="Text Text5" > Olon</a>
                    </li>

                    <li id="PuntoMontanita" onmousemove="Ver__Comuna__M()" >
                        <span class="Circle C6"></span>
                        <a href="montanita.php" class="Text Text6" >  Montañita</a>
                    </li>


                    <li id="PuntoAconcito"  onmousemove="Ver__Comuna__AC()" >
                        <span class="Circle  C7__Mapa"></span>
                        <a href="anconcito.php" class="Text Text7 Text7__Mapa" >  Aconcito</a>
                    </li>


                    <li id="PuntoAcon"  onmousemove="Ver__Comuna__A()"  >
                        <span class="Circle  C8__Mapa"></span>
                        <a href="ancon.php" class="Text Text8 Text8__Mapa" >  Ancon</a>
                    </li>
                </ul> 
            </figure>
          </div>
    </article>
</section>

 <div class="flex__container">
    <article class="flex__item__1">
        <header >
            <h3 class="Titulo__Principal">¡Conoce Santa Elena!</h3>
        </header>

        <p class="Descripcion__ST">
            Santa Elena es una provincia de la costa de Ecuador creada el 7 de noviembre de 2007,
            la más joven de las 24 actuales, con territorios que anterior a esa fecha formaban 
            parte de la provincia del Guayas, al oeste de esta. Su capital es la ciudad de Santa Elena. 
            En esta provincia se encuentra una gran infraestructura hotelera, una refinería de petróleo, 
            aeropuerto y puerto marítimo.<br/> se encuentra conformado por sus ocho comunas principales:
            <b>la nuñez</b>,
            <b>la entrada</b>,
            <b>san José</b>,
            <b>curia</b>,
            <b>olon</b>,
            <b>montañita</b>,
            <b>Anconcito</b>,
            <b>ancón</b>.
        </p>
        <a href="#" class="btn">ver mas</a>
    </article>

    <figure class="flex__item__2">
        <img src="imagenes/santaElena.jpg" alt="santa elena" class="imagen__flex">
    </figure>
</div>

<div class="Flex__Contenedor">
    <div class="card">
        <a href="#">

        
        <img src="imagenes/montanita.jpg" alt="imagen">
        <div class="card-text"> 
            <h3>paisaje</h3>
            <p>descubre el paisaje de montañita </p>
            
        </div>
        </a>
    </div>

    <div class="card">
        <a href="#">
        <img src="imagenes/curia.jpg" alt="imagen">
        <div class="card-text"> 
            <h3>Playa</h3>
            <p>Brisa relanjte en las playas de curia</p> </div>
            
        </div>
        </a>
    </div> 
</div>


<!--Segunda fila de tarjetas -->
<div class="card-container">
    <div class="card__2">
        <a href="#">
            <img src="imagenes/aconcito.jpg" alt="imagen">
            <div class="card-text__2"> <h4>costas y playas</h4> puerto de anconcito</div>
        </a>
    </div>
    <div class="card__2">
        <a href="#">
            <img src="imagenes/cultura_nunez.jpeg" alt="imagen">
            <div class="card-text__2"> 
            <h4>Cultura y tradiciones</h4> 
            <p>Visitación de La Virgen María a su prima Santa Isabel (30 y 31 de mayo)</p></div>
        </a>
    </div>
    <div class="card__2">
        <a href="#">
            <img src="imagenes/naturaleza_olon.jpg" alt="imagen">
            <div class="card-text__2"> <h4>Naturaleza</h4>  Especial para ver aves</div>
        </a>
    </div>

    <div class="card__2">
        <a href="#">
            <img src="imagenes/surf.jpg" alt="imagen">
            <div class="card-text__2"> <h4>Turismo</h4> Competecion de surf Montañita.  </div>
        </a>
    </div>
</div>

<section>
    <div class="contenedor__v">
    <img src="imagenes/fondo_card.jpg" alt="" srcset="">
        <p class="header">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic eaque veritatis magni voluptatem deserunt sapiente similique nesciunt dolorem facilis iure! Incidunt, placeat. Iste, exercitationem! Ad amet natus dolor ratione nostrum? <br>
            <button class="btn__2"><a href="#">boton</a></button></p>
        

        <div class="div__d">
            <img src="imagenes/Logo.png" alt="" srcset="">
        </div>
    </div>
</section>
<br>

<!-- fondo_card.jpg -->
<section>
    <div class="contenedor__3"> 
    <img src="./imagenes/imagenFondo.jpg" alt="" srcset="">
    </div>

    <div class="card-container">
        <div class="card__3">
            <a href="#">
                <img src="imagenes/hospedaje.jpg"alt="imagen">
                <div class="card-text__3"> <h4>hospedaje </h4> hospejae montañita</div>
            </a>
        </div>
        <div class="card__3">
            <a href="#">
                <img src="imagenes/gastronomia_sj.jpg" alt="imagen">
                <div class="card-text__3"> <h4>gastronomia</h4> plato de la cartilla del barranco</div>
            </a>
        </div>
        <div class="card__3">
            <a href="#">
                <img src="imagenes/gastronomia_c.jpg" alt="imagen">
                <div class="card-text__3"> <h4>gastronomia</h4> corviche de curia</div>
            </a>
        </div>
    </div>
</section> 

<?php  include './template/footer.php'; ?>