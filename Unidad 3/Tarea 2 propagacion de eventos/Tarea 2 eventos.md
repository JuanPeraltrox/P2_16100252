# Propagación de eventos
Un evento es una acción iniciada por el usuario.

Los eventos son el medio como interactúa una clase con otras o con el propio usuario, se encargan de avisar que algo ha ocurrido y de manejarlo de una forma o de otra.

El burbujeo de eventos (Bubbling Event) es un término que se relaciona con el orden en que se llaman los controladores de eventos cuando un elemento está anidado dentro de un segundo elemento, y ambos elementos han registrado un escucha para el mismo evento (un clic, por ejemplo).

Basicamente, de lo que trata es de avisar algún cambio en el estado de la instancia, que puede ser un click en el objeto.

> <ul>
    <li><a href="..."><img src="" alt=""></a>
    <li><a href="..."><img src="..." alt=""></a>
    ...
    <li><a href="..."><img src="..." alt=""></a> /ul> 


Un clic en una imagen no solo genera un __click__ evento para el __IMG__ elemento correspondiente , sino también para el padre __A__ , para el abuelo, __LI__ etc., pasando por todos los antepasados ​​del elemento, antes de terminar en el __window__ objeto.

En la terminología *DOM*, la imagen es el destino del evento , el elemento más interno sobre el que se originó el clic. El destino del evento, más sus antepasados, desde su padre hasta el __window__ objeto, forman una rama en el árbol DOM.
Por ejemplo, en la galería de imágenes, esta rama se compone de los nodos: __IMG, A, LI, UL, BODY, HTML, document, window__.

 
La propagación es bidireccional, desde la ventana hasta el destino del evento y viceversa. Esta propagación se puede dividir en tres fases:

1. Desde la ventana hasta el evento principal objetivo: esta es la fase de captura
2. El objetivo del evento en sí: esta es la fase objetivo
3. Del evento objetivo principal de regreso a la ventana: la fase de burbuja