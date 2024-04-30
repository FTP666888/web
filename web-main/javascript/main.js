const UsrName = document.getElementById("uname")
const PassWrd = document.getElementById("pswd")

function validUser(){
    if (UsrName.value == "Usuario" && PassWrd.value == "Contrasena"){
        window.open('../html/carreras.html')
    } else {
        alert("Nombre de usuario o contraseña incorrectos")
    }
}