# Cookies y  Sesión en PHP 

#### Cookies
Es un fragmento de información que un navegador web almacena en el disco duro del visitante a una página web.     

 La información se almacena a petición del servidor web, ya sea directamente desde la propia página web con JavaScript o desde el servidor web mediante las cabeceras HTTP, que pueden ser generadas desde un lenguaje de web scripting como PHP. 

La información almacenada en una cookie puede ser recuperada por el servidor web en posteriores visitas a la misma página web.
 
 Para que la página pueda recordar nuestro idioma preferido, guarda una Cookie en nuestra computadora (esto lo gestiona el navegador web; por ejemplo Chrome, Firefox o Safari).

 Si una página solicita la creación de una Cookie, entonces la Cookie se registra asociada a dicha página, y no puede ser consultada por una página distinta.

 **Para crear una cookie, se utiliza la función setcookie( ).**

 ``` php 
 setcookie("nombreCookie", valorCookie, momentoDestruccion); 
 ```
 * nombreCookie es el nombre con que identificará a la cookie.
* Los nombres de cookie no deben coincidir con los nombres de los controles de los formularios
* valorCookie es el valor que se guarda en la cookie
* momentoDestruccion es el momento en que se borrará automáticamente la cookie,expresado como tiempo Unix.
*  Para calcularlo se suele utilizar la expresión time( ) +$duracion donde $duracion es el número de segundos que debe permanecer la cookie en el ordenador del cliente
* Si se omite, la cookie se borrará al cerrar el navegador

 Los valores de las cookies se pueden consultar en cualquier página del mismo dominio y se almacenan en la matriz $_COOKIE y en $_REQUEST
(por eso no deben coincidir los nombres de las cookies con los de los controles de los formularios)


 ``` php 
$dato = $_COOKIE["nombreCookie"];
$dato = $_REQUEST["nombreCookie"];
 ```

// Para borrar una cookie, basta con volver a crear la cookie con un tiempo anterior al actual

 ``` php 
setcookie(nombreCookie, valorCookie, time() - 3600);
``` 

 ### Sesiones
Es un mecanismo de programación de las tecnologías de web scripting que permite "recordar" datos cuando el usuario cambia de página dentro de un mismo sitio web, sin necesidad de ir pasándola de página a página como controles ocultos.

 ___A diferencia de una cookie, los datos asociados a una sesión se almacenan en el servidor y nunca en el cliente___.

El uso de sesiones en lugar del de cookies está más definido cuando las variables deben permanecer a disposición de los scripts que emplea el usuario durante la navegación por distintas páginas del mismo sitio.

La forma de almacenar los datos necesarios es mediante unos archivos de servidor que se reconocen porque su nombre empieza con **sess_** seguido del número de identificación de la sesión, también llamado número de sesión o **session id**. El **session id** se genera de forma aleatoria para cada conexión de un usuario al sitio. Es una cadena formada por un elevado número de dígitos alfanuméricos, de modo que cada usuario, al conectarse, crea un nuevo archivo de sesión, único para él, para esa sesión de trabajo. Cuando abandona el sitio (dirigiéndose a otro, o cerrando el navegador), el archivo ya es innecesario. Si el usuario se vuelve a conectar a nuestro sitio se creará otra sesión.

``` php
// Para utilizar variables de sesión, cada página debe abrir la sesión:

ini_set("session.save_handler", "files"); // Sólo si session.save_handler = user en php.ini
session_start();

// Una vez abierta la sesión, se pueden almacenar valores en la matriz $_SESSION:

$_SESSION["dato"] = $dato;

// Los valores almacenados se pueden recuperar en cualquier página
// en la que se haya abierto sesión desde el mismo navegador:

$dato = $_SESSION["dato"];

// Las sesiones se pierden si el usuario cierra el navegador o si se destruye la sesión desde el servidor:

session_destroy();
```

### Sesiones, ¿qué diferencia tienen respecto a las Cookies?
* Las cookies permiten a una aplicación web acceder a información desde cualquiera de las distintas páginas que presenta.

* Las sesiones de igual forma. Pero las cookies se guardan en el lado del cliente, y las sesiones, en el lado del servidor.

* Una sesión (al igual que una cookie) crea un archivo (donde se guardarán los datos).

* Sin embargo, en el caso de las sesiones, los archivos se crean en una carpeta del servidor (allí se guardan las variables de sesión y sus valores correspondientes).

* La ubicación del archivo temporal se determina en el archivo de configuración ```php.ini```, a través de una variable llamada ```session.save_path.```

La definición de una sesión comprende los siguientes pasos:

* PHP crea un identificador único (para cada session, de forma particular). Este identificador es una cadena aleatoria compuesta por 32 caracteres en hexadecimal (por ejemplo ``` 3c7foj34c3jj973hjkop2fc937e3443```).

* Una cookie llamada ```PHPSESSID``` se envía automáticamente al cliente, para que guarde la cadena de identificación (antes generada). De esta forma el cliente queda asociado a la session.

* Un archivo es creado en el servidor automáticamente, en la carpeta designada, y recibe como nombre el identificador pero con el prefijo ```sess_```. Por ejemplo ```sess_3c7foj34c3jj973hjkop2fc937e3443```.
