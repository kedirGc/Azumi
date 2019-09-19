function validar_login()
{
    var dni=document.getElementById("Dni").value;
    var contraseña =document.getElementById("contraseña").value;
    if (dni=="")
    {
        alert("debe de ingresar dni");
        return false;
    }
    if(contraseña=="")
    {
        alert("debe ingresar contraseña")
        return false;
    }    
}