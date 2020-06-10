function validar() {
var nombre, email, user, pass, expresion;
nombre = document.getElementById("Nombre").value;
email = document.getElementById("Email").value;
user = document.getElementById("user").value;
pass = document.getElementById("pass").value;
expresion =/\w+@\w+\.+[a-z]/;
if(nombre==="" ||email==="" || user ===""|| pass==="")
{
    alert("todos los campos son obligatorios");
    return false;
} else if(nombre.Length>30)
{
    alert("El nombre es muy largo");
    return false
}else if(email.length > 80)
{
    alert("El correo electronico es muy largo");
    return false
}else if(!expresion.test(email))
{
    alert("El correo electronico no es valido");
    return false
}
else if(user.length>25)
{
    alert("El usuario es muy largo");
    return false
}else if(pass.lenght>40)
{
    alert("la contraseña es muy larga");
    return false
}






}