let Nombre__Comunas = document.getElementById('NombreComuna');
let Descripcion__Comunas = document.getElementById('DescripcionComuna');
let Imagen = document.getElementById('ImgCambiante');

let PuntoComunaNunez = document.getElementById('PuntoNunez');
let PuntoComunaEntrada = document.getElementById('PuntoEntrada');
let PuntoComunaCuria = document.getElementById('PuntoCuria');
let PuntoComunaSj = document.getElementById('PuntoSanJose');
let PuntoComunaOlon = document.getElementById('PuntoOlon');
let PuntoComunaMontanita = document.getElementById('PuntoMontanita');
let PuntoComunaAnconcito = document.getElementById('PuntoAconcito');
let PuntoComunaAncon = document.getElementById('PuntoAcon');


console.log(PuntoComunaNunez)

function Ver__Comuna__N(){
    PuntoComunaNunez.style.color='red';
    Nombre__Comunas.textContent='La Nuñez';
    Descripcion__Comunas.textContent='Punto turístico para disfrutar con amigos y familias.';
    Imagen.setAttribute("src",'imagenes/nunez.jpg')
}

function Ver__Comuna__E(){
    PuntoComunaNunez.style.borderColor='red';
    Nombre__Comunas.textContent='La Entrada';
    Descripcion__Comunas.textContent='cantón perfecto para los artistas que buscan inspiración para su arte, donde todos los murales del cantón están plasmados el arte de todos sus habitantes.';
    Imagen.setAttribute("src",'imagenes/imagen3.jpg')
}

function Ver__Comuna__C(){
    PuntoComunaNunez.style.borderColor='red';
    Nombre__Comunas.textContent='Curia';
    Descripcion__Comunas.textContent='perfecto para las personas que le guste la naturaleza, es recomendado por sus hermosos paisajes, donde es el único punto de todo santa llena donde crece una rara planta llamada curia.';
    Imagen.setAttribute("src",'imagenes/curia.jpg')
}

function Ver__Comuna__SJ(){
    PuntoComunaNunez.style.borderColor='red';
    Nombre__Comunas.textContent='San jose';
    Descripcion__Comunas.textContent='Un gran crecimiento por sus playas, Caracterizado por la amabilidad de sus habitantes.';
    Imagen.setAttribute("src",'imagenes/sanjose.jpg')
}

function Ver__Comuna__O(){
    PuntoComunaNunez.style.color='red';
    Nombre__Comunas.textContent='Olon';
    Descripcion__Comunas.textContent='indicada para persona que desean pasar por un hermoso bosque nuboso rodeado de estrella y cascada.';
    Imagen.setAttribute("src",'imagenes/olon.jpg')
}

function Ver__Comuna__M(){
    PuntoComunaNunez.style.borderColor='red';
    Nombre__Comunas.textContent='Montañita';
    Descripcion__Comunas.textContent='sitio turístico que atrae a miles de turistas mensualmente, por su encanto en las olas para realizar surfing y todo tipo de deportes extremos, cuenta con excelentes hoteles, restaurantes, bares y discotecas.';
    Imagen.setAttribute("src",'imagenes/montanita.jpg')
}

function Ver__Comuna__AC(){
    PuntoComunaNunez.style.borderColor='red';
    Nombre__Comunas.textContent='Anconcito';
    Descripcion__Comunas.textContent='conocido como una parte importante por sus puertos pesquero y playas.';
    Imagen.setAttribute("src",'imagenes/aconcito.jpg')
}

function Ver__Comuna__A(){
    PuntoComunaNunez.style.borderColor='red';
    Nombre__Comunas.textContent='Ancon';
    Descripcion__Comunas.textContent='si busca un punto aislado del mundo recomiendo mucho la playa Acapulco visitada por turista para relajarse y ordenar su vida.';
    Imagen.setAttribute("src",'imagenes/acon.jpg')
}