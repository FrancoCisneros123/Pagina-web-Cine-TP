let botonMostrarClave = document.getElementById("mostrarClave");
let clave = document.getElementById("clave");

botonMostrarClave.addEventListener("click", () => {
    mostrarClave()
})

function mostrarClave() {
    if (clave.type === "password")
        clave.type = "text";
    else
        clave.type = "password";
}