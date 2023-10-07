let botonMostrarContrasenia = document.getElementById("mostrarContrasenia");
let contrasenia = document.getElementById("floatingPassword");

botonMostrarContrasenia.addEventListener("click", () => {
    mostrarContrasenia()
})

function mostrarContrasenia() {
    if (contrasenia.type === "password")
        contrasenia.type = "text";
    else
        contrasenia.type = "password";
}