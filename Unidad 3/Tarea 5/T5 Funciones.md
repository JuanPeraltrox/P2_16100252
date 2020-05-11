## Funciones en JavaScript

Una función es un procedimiento, un conjunto de sentencias que realizan una tarea o calculan un valor. En Javascript este es uno de los
 conceptos más importantes y versátiles de este lenguaje de programación.

 Una de las características más importantes de las funciones en Javascript es su versatilidad. En Javascript las funciones son diferentes a las funciones de otros lenguajes de programación. __En Javascript las funciones son un objeto.__

Siendo los tipos de función que podemos crear en Javascript los siguientes:

* Function declaration
* Function expression
* IIFE (Immediately Invoked Function Expression)
* Shorthand method definition
* Arrow function
* Generator function
* Function constructor

#### Function declaration.

Este tipo de función se creará con la  __palabra reservada function, seguido obligatoriamente por un nombre, que identificará a nuestra función, una lista de parámetros entre paréntesis, y el símbolo de las llaves {}__. Qué será el que delimite el contenido de nuestro conjunto de sentencias.

La lista de parámetros cuando creamos una función no es obligatoria, podemos definir una función sin parámetros.
> Cuando estemos trabajando con funciones es importante que diferencies entre parámetro y argumento. Un parámetro es/son la/s variables que definimos cuando creamos la función. Y los argumentos son los datos que pasamos a la función cuando la invoquemos. Serán los valores de los parámetros de la función.

``` javascript function hola(nombre){
     console.log(`Hola ${nombre}.`)
}

hola('Juan');    // => Hola Juan
```

#### Function expression.
 Es muy similar al tipo de anterior, "Function Declaration". La sintaxis para crear estas funciones es similar a la anterior. La única diferencia es que la definición de nuestra nueva función no comienza por instrucción function y el nombre de la función es opcional.     
 Este tipo de funciones las podemos almacenar en una variable.

 
 ``` javascript // Asignarla a una variable como un objeto    
    const ejemplo = function(...) { ... }
// Crear un método en un objecto
{
    ... 

    'suma': function(...) { ... },
    ...
}
// Utilizar la función como un callback
    
    .cb(function(...) { ... });
                
``` 
> Un diferencia con las "Function Declaration" es que estas no son compatibles con el hoisting.

#### IIFE (Immediately Invoked Function Expression)
Normalmente cuando definimos una función es porque la vamos a llamar en varias ocasiones, pero y sí sólo queremos llamar a la función en una sola ocasión y obtener un resultado. Para ello podemos utilizar la funciones IIFE. __Este tipo de funciones se ejecutan inmediatamente y no son accesibles posteriormente.__

 Para crear una función de este tipo deberemos crearla en un operador de agrupación (). Seguido de (), lo que posibilitará el interpretado directamente en el motor de JavaScript.

``` javascript ( function () {    
let nombre = 'Juan '    
 return  `Hola ${nombre}`  
})()
// Hola Juan  
```

#### Shorthand method definition.
Esta forma de crear las funciones puede ser utilizado como método en la declaración de un objeto o en las clases de ES6.

Para crear este tipo de función debemos asignar un nombre de función seguido de una lista de parámetros entre paréntesis y los símbolos de llaves para delimitar el cuerpo de las instrucciones.

``` javascript
const poblacion = {
  personas: [],
  add(...personas) {
    this.personas.push(...personas);
  },
  saluda(index) {
    return `Hola soy ${this.personas[index]}`;
  }
};

poblacion.add('Juan', 'Carlos', 'Jorge');
poblacion.saluda(1) // => 'Hola soy Carlos'
```

##### Arrow function.
Otra de las novedades de ES6 son las "Arrow function". La forma de crear estas funciones es la siguiente: Primero definiremos la lista de parámetros, en caso de ser necesario, entre paréntesis seguido del símbolo => y las { } para indicar las instrucciones que se van a realizar.

Además de la sintaxis que es diferente a las anteriores este tipo de funciones tienen las siguientes características.

* Las "arrow function" no crean su propio contexto al ejecutarse. Al contrario que las "function expression" o las "function declaration" que crea su propio contexto.

* Las "arrow function" son anónimas.

* El objeto arguments no se encuentra en el contexto de la función.

* Si al definir la función no utilizamos el símbolo de las llaves. La función devolverá como resultado de la función el resultado de la ejecución de la instrucción que hayamos indicado.

``` javascript
const saluda = (nombre) => {
   return `Hola ${nombre}`;
}

console.log(saluda('Juan'))   // => Hola Juan

// Vamos a compactar un poco más el código.
const saluda2 = (nombre) => `Hola ${nombre}`;

console.log(saluda2('Juan'));  // => Hola Juan
```


#### Generator function.
Las funciones del generador son un tipo especial de función que le permite suspender su ejecución y luego reanudarla en cualquier momento.    
 Todas las funciones que se han  visto se ejecutan completamente, y no se paran hasta la última línea de la función Si queremos salir con antelación de una función debemos ejecutar un return, o lanzar un error.     
Pero la característica más significativa de estas funciones es que nos permite parar o salir de la función en un punto dentro del conjunto de instrucciones que forman nuestra función y retornar posteriormente la ejecución desde el punto en el que paramos anteriormente.

La sintaxis de estas funciones es igual a las "function declaration" o "function expression". __Sólo debemos utilizar el símbolo * al comienzo de la definición de nuestra función.__

Otra diferencia de estas funciones es que siempre retorna un objeto con la siguiente estructura cada vez que invoquemos a la función next().


#### Function constructor.
Es una forma bastante inusual de declarar las funciones. Tal vez no sea útil en algún momento.

En Javascript las funciones son objetos de "primera clase". Esto quiere decir que se pueden crear nuevas funciones durante la ejecución del programa. Veamos más en detalle cómo crear esta tipo de funciones.

Las funciones en Javascript, son funciones, y poseen el constructor Function. Por ello podremos crear una variable que invoque a un objeto Function. Cuando invoquemos a este objeto podremos enviar todos los argumentos que deseemos. Los primeros n argumentos serán los parámetros de nuestra función y el último argumento será el código de nuestra función.

``` javascript 
const sumaFunction = new Function('numero_1', 'numero_2', 
   'return numero_1 + numero_2'
);

// Ejecutamos nuestra función.
console.log(sumaFunction(10, 15)) // => 25 

//Es lo mismo que escribir de esta manera: 
const sumaFunction = function(numero_1, numero_2) {
    return numero_1 + numero_2
}

// Ejecutamos nuestra función.
console.log(sumaFunction(10, 15)) // => 25
```

Ya dando mi punto de vista es que ya depende de la situación en las que nos encontremos es como usaremos una forma de resolver el problema mediante esta formas de declarar funciones. 
Es bueno conocer mejores alternativas o tecnicas que a lo mejor ni sabíamos, es bueno investigar en la web o seguir consejos de personas con mucha experencia.