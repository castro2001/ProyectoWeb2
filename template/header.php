<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santa Elena</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/responsive.css">
 <link rel="stylesheet" href="css/QueHacer.css">
    <link rel="stylesheet" href="css/quevisitar.css"> 
    <link rel="stylesheet" href="css/stfiestas.css"> 
    <link rel="stylesheet" href="css/gastronomia.css"> 

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Work+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
        <script src="https://kit.fontawesome.com/d4a9ea1d32.js" crossorigin="anonymous"></script>
</head>
<body>

<header class="menu__navegacion">
    <a href="index.php" class="Logo">
        <img src="imagenes/Logo.png" alt="Logo Santa Elena" />
    </a>

    <nav class="Contenedor_navegacion">
        <ul class="navbar">
            <li class="menu__item">
                <a href="#" class="Menu__link">
                    Donde ir
                </a>
                 <ul class="menu__nesting1">
                     <h2 class="TituliD">Descubre  nuestros destinos</h2> 
                    <div  class="Contenedor__nesting1" id="flex">
                      <ul class="list__show" id="Control">
                        <li ><a href="nunez.php" class=" nav_item  "  id="Id_Nunez" onmouseover="mostrar_1()" onmouseout="No_mostrar_1()">Las Nuñez</a></li>
                        <li><a href="entrada.php" class="nav_item " id="Id_La_Entrada" onmouseover="mostrar_2()" onmouseout="No_mostrar_2()">La Entrada</a>            
                        </li>
                        <li ><a href="curia.php" class="nav_item " id="Id_Curia"onmouseover="mostrar_3()" onmouseout="No_mostrar_3()" >Curía</a>            
                        </li>
                        <li ><a href="sanjose.php" class="nav_item " id="Id_San_Jose" onmouseover="mostrar_4()" onmouseout="No_mostrar_4()">San José</a>                 
                        </li>
                        <li ><a href="olon.php" class="nav_item "  id="Id_Olon" onmouseover="mostrar_5()" onmouseout="No_mostrar_5()">Olón</a>                      
                        </li>
                        <li><a href="montanita.php" class="nav_item " id="Id_Montanita" onmouseover="mostrar_6()" onmouseout="No_mostrar_6()">Montañita</a>                     
                        </li>
                        <li><a href="anconcito.php" class="nav_item " id="Id_Anconcito" onmouseover="mostrar_7()" onmouseout="No_mostrar_7()">Anconcito</a>
                        </li>
                        <li><a href="ancon.php" class="nav_item  " onmouseover="mostrar_8()" onmouseout="No_mostrar_8()" id="Id_Ancon">Ancón</a>            
                        </li>
                      </ul>

                        <img src="imagenes\Map.svg" alt="mapa" class="img" >
                            <ul class="localizador_mapa" >
                                <li  title="Nuñez"id="Circle_Nuñez" class="Circle C1"    onmouseover="mostrar_1()" onmouseout="No_mostrar_1()" ></li>
                                <li id="Text_Box_Nuñez" class="Text Text1 "onmouseover="mostrar_1()" onmouseout="No_mostrar_1()" >Las Nuñez</li> 
                                <li title="Entrada" id="Circle_La_Entrada" class="Circle C2 "  onmouseover="mostrar_2()" onmouseout="No_mostrar_2()" ></li>
                                <li id="Text_Box_La_Entrada" class="Text Text2 "onmouseover="mostrar_2()" onmouseout="No_mostrar_2()"  >La Entrada</li> 
                                <li title="Curía" id="Circle_Curía" class="Circle C3" onmouseover="mostrar_3()" onmouseout="No_mostrar_3()" ></li>
                                <li id="Text_Box_Curía" class="Text Text3" onmouseover="mostrar_3()" onmouseout="No_mostrar_3()" >Curía</li> 
                                <li title="San Jose" id="Circle_San_José" class="Circle C4" onmouseover="mostrar_4()" onmouseout="No_mostrar_4()" ></li>
                                <li id="Text_Box_San_José" class="Text Text4 " onmouseover="mostrar_4()" onmouseout="No_mostrar_4()" >San Jose</li> 
                                <li title="Olon" id="Circle_Olón" class="Circle C5" onmouseover="mostrar_5()" onmouseout="No_mostrar_5()" ></li>
                                <li id="Text_Box_Olón" class="Text Text5" onmouseover="mostrar_5()" onmouseout="No_mostrar_5()" >Olon</li> 
                                <li title="Montañita" id="Circle_Montañita" class="Circle C6" onmouseover="mostrar_6()" onmouseout="No_mostrar_6()" ></li>
                                <li id="Text_Box_Montañita" class="Text Text6 "  onmouseover="mostrar_6()" onmouseout="No_mostrar_6()" >Montañita</li> 
                                <li title="Aconcito" id="Circle_Anconcito" class="Circle C7" onmouseover="mostrar_7()" onmouseout="No_mostrar_7()" ></li>
                                <li id="Text_Box_Anconcito" class="Text Text7 " onmouseover="mostrar_7()" onmouseout="No_mostrar_7()" >Aconcito</li> 
                                <li  title="Ancon" id="Circle_Ancon" class="Circle C8 " onmouseover="mostrar_8()" onmouseout="No_mostrar_8()"  ></li>
                                <li id="Text_Box_Ancón" class="Text Text8 " onmouseover="mostrar_8()" onmouseout="No_mostrar_8()"  >Ancon</li> 
                            </ul>
                    </div> 
                </ul>
            </li>

           <li class="menu__item">
                <a href="#" class="Menu__link">
                    agenda turistica
                </a>
                <div class="menu__nesting2">
                  <ul class="Contenedor__Agenda">
                      <li><a class="Direccion__2" href="fiestasEnero.php"> <b>Enero</b></a></li>
                        <li>
                        <a class="Direccion__2" href="fiestasFebrero.php"> <b>Febrero</b></a>
                        </li>
                        <li>
                        <a class="Direccion__2" href="fiestasMarzo.php"> <b>Marzo</b></a>
                        </li>
                        <li>
                        <a class="Direccion__2" href="fiestasAbril.php"> <b>Abril</b></a>
                        </li>
                        <li><a class="Direccion__2" href="fiestasMayo.php"> <b>Mayo</b></a></li>
                        <li><a class="Direccion__2" href="fiestasJunio.php"> <b>Junio</b></a></li>
                        <li><a class="Direccion__2" href="fiestasJulio.php"> <b>Julio</b></a></li>
                        <li><a class="Direccion__2" href="fiestasAgosto.php"> <b>Agosto</b></a></li>
                        <li><a class="Direccion__2" href="fiestasSeptiembre.php"> <b>Septiembre</b></a></li>
                        <li><a class="Direccion__2" href="fiestasOctubre.php"> <b>Octubre</b></a></li>
                        <li><a class="Direccion__2" href="fiestasNoviembre.php"> <b>Noviembre</b></a></li>
                        <li><a class="Direccion__2" href="fiestasDiciembre.php"> <b>Diciembre</b></a></li>  
                  </ul>
                </div>
            </li>


            <li class="menu__item">
                <a href="#" class="Menu__link">
                    galeria turistica
                </a>
                 <div class="menu__nesting3">
                  <ul class="Contenedor__Galeria">
                      <li><a class="Direccion__2" href="galeria_turistica_santa_elena.php"> <b>Atractivos turisticos</b></a></li>
                        <li>
                        <a class="Direccion__2" href="leyenda_y_tradiciones_s_e.php"> <b>Leyendas y Tradiciones</b></a>
                        </li>
                        <li>
                        <a class="Direccion__2" href="galeria__gastronomia.php"> <b>Gastronomía</b></a>
                        </li>
                   
                  </ul>
                </div>
            </li>

            <li class="Menu__Item">
                <a href="#" class="Menu__link">
                    planifica tu viaje
                </a>
            </li>

        </ul>
    </nav>

    <ul>
        <li class="menu__item">
            <a href="#" class="search "><i class="fa fa-search" aria-hidden="true"></i> </a>
              <div class="Contenedor__busqueda">
                <form action="<?php include('./busqueda.php');?>" method="post" class="busqueda__flex">
                  <input type="text" name="busqueda" id="busqueda" placeholder="buscar " class="busqueda__entrada">
                  <button class="btn__search"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
             </div>
        
        </li>
    </ul>
    
    <div class="menu__traductor">
        <select name="traductor" id="traductor" >
            <option value="spa">Español</option>
            <option value="eng">English</option>
        </select>
    </div>
    
    <a href="#" class="login">
        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
    </a>
</header>
<main class="Contenido_Principal">