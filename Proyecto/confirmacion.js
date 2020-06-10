function confirmacion(e){
    if (confirm("¿Está seguro que desea eliminar este usuario"))
    {
        return true;
    }
    else{
    e.preventDefault();
    }
    var  event = e | window.event;
    if(event.preventDefault){
        event.preventDefault();
    }else{
        event.returnValue = false;
    }
}
let linkDelete= document.querySelectorAll(".table__item__link__eliminar");
for (var i=0; i<linkDelete.length;i++)
{
    linkDelete[i].addEventListener('click',confirmacion);
}