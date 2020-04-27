# Tarea 1


**Una variable no es más que un contenedor para un valor. Las variables se declaran por medio de la palabra clave var, pero a diferencia de otros lenguajes de programación en JavaScript no es necesario declarar su tipo.**

Las únicas limitaciones a la hora de crear variables son:

1. Los nombres de las variables pueden comenzar por una letra, el guión bajo (_) y el símbolo de dolar ($); el resto de los caracteres puede ser cualquier combinación de los anteriores, además de cifras. Así, registro_01, $vínculos, listaNodos o _cuñao1 son nombres correctos; 1_lista_de_cosas, elementos-lista o nuevo%elemento no.
2. Los nombres de variables no pueden coincidir con palabras clave pertenecientes a la propia sintaxis de JavaScript, ni con las palabras reservadas, una lista de palabras que se considerá que en el futuro tendrán un significado propio.

_Hay una serie de convenciones  para nombrar variables:_

* **Notación camelCase**: Se escribe la primera palabra del nombre en minúscula, y si el nombre consiste en varias, las siguientes se empiezan por mayúsculas: listaCamposFormulario.
* **Notación Pascal**: Cada palabra que forme el nombre de la variable se empieza en mayúscula: ListaCamposFormulario.

## Declaración de let y const
__let__ y __const__ son dos formas de declarar variables en JavaScript introducidas en ES6 que reducen el ámbito de la variable a bloques (con var el ámbito era la función actual) y no admiten hoisting. Además, las variables declaradas con const no pueden ser reasignadas.

 Si una variable es declarada con let en el ámbito global o en el de una función, la variable pertenecerá al ámbito global o al ámbito de la función respectivamente, de forma similar a como ocurría con var.
 
 Muchos desarrolladores se inclinan hacia let como la forma predeterminada de declarar variables en JavaScript y abandonar *var*  (declaración moderna de variables ES6).

### Const

Definimos variables de sólo lectura, esto quiere decir que, cuando asignamos una variable, el nombre de esta va estar asignada a un puntero en memoria, el cual no puede ser sobreescrito o reasignado (en pocas palabras son constantes).

 >__La diferencia de var y let es el alcance de las variables.__     
 >let permite declarar variables limitando su alcance al bloque, declaración, o expresión donde se está usando y var define una variable global o local en una función sin importar el ámbito del bloque.

---
Se le llama ámbito de las variables al lugar donde estas están disponibles. Por lo general, cuando declaramos una variable hacemos que esté disponible en el lugar donde se ha declarado, esto ocurre en todos los lenguajes de programación y como Javascript se define dentro de una página web, **las variables que declaremos en la página estarán accesibles dentro de ella.**

En Javascript no podremos acceder a variables que hayan sido definidas en otra página. Por tanto, la propia página donde se define es el ámbito más habitual de una variable y le llamaremos a este tipo de **variables globales** a la página.

## **Variables Globales**
Están declaradas en el ámbito más amplio posible, que en Javascript es una página web. Para declarar una variable global a la página simplemente lo haremos en un script, con la palabra _var_.

Las variables globales son accesibles desde cualquier lugar de la página, es decir, desde el script donde se han declarado y todos los demás scripts de la página, incluidos los manejadores de eventos.

`<SCRIPT> 
var variableGlobal 
</SCRIPT>
`


## **Variables locales**
También podremos declarar variables en lugares más acotados, como por ejemplo una función. A estas variables les llamaremos ___locales___. Cuando se declaren variables locales sólo podremos acceder a ellas dentro del lugar donde se ha declarado, es decir, si la habíamos declarado en una función solo podremos acceder a ella cuando estemos en esa función.

Las variables pueden ser locales a una función, pero también pueden ser locales a otros ámbitos, como por ejemplo un bucle. En general, son ámbitos locales cualquier lugar acotado por llaves.

`<script> function miFuncion ()
  {  
    var variableLocal   
    } </scritp> `

    No hay problema en declarar una variable local con el mismo nombre que una global, en este caso la variable global será visible desde toda la página, excepto en el ámbito donde está declarada la variable local ya que en este sitio ese nombre de variable está ocupado por la local y es ella quien tiene validez. En resumen, la variable que tendrá validez en cualquier sitio de la página es la global. Menos en el ámbito donde está declarada la variable local, que será ella quien tenga validez.

    
---
## Hoisting

Dicha característica consiste en que con independencia de donde esté la declaración de una variable, ésta es movida al inicio del ámbito al que pertenece.
~~~
function foo() {
    console.log(x);
    var x=10;
}
~~~
si la función se escribe como en el ejemplo anterior, el hoisting lo interpretará de la siguiente manera:
~~~
function foo() {
    var x;
    console.log(x);
    x=10;
}
~~~

__Esta solo es aplicable con var, con let y const no.__