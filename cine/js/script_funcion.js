let horario = document.getElementById("horario_entrada");
let sala = document.getElementById("sala");
let pelicula = document.getElementById("pelicula");
let formato = document.getElementById("formato");
let dia = document.getElementById("dia");
let crear = document.getElementById("crear");

window.addEventListener("load",()=>
{
    cargarHorario();
    cargarSala();
    cargarPelicula();
    cargarFormato();
});

horario.addEventListener("input", ()=>
{
    comprobarHabilitarOpcion();
});

sala.addEventListener("input", ()=>
{
    comprobarHabilitarOpcion();
});

pelicula.addEventListener("input", ()=>
{
    comprobarHabilitarOpcion();
});

formato.addEventListener("input", ()=>
{
    comprobarHabilitarOpcion();
});

dia.addEventListener("input", ()=>
{
    comprobarHabilitarOpcion();
});

function comprobarHabilitarOpcion() {
    if (horario.value != '' && sala.value != '' && pelicula.value != '' && formato.value != '' && dia.value != '')
        crear.disabled = false;
    else
        crear.disabled = true;
}

function cargarHorario() {
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            horario.innerHTML = xhttp.responseText;
        }
    };

    xhttp.open("get", "cargar_funcion_horario.php");
    xhttp.send();
}

function cargarSala() {
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            sala.innerHTML = xhttp.responseText;
        }
    };

    xhttp.open("get", "cargar_funcion_sala.php");
    xhttp.send();
}

function cargarPelicula() {
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            pelicula.innerHTML = xhttp.responseText;
        }
    };

    xhttp.open("get", "cargar_funcion_pelicula.php");
    xhttp.send();
}

function cargarFormato() {
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            formato.innerHTML = xhttp.responseText;
        }
    };

    xhttp.open("get", "cargar_funcion_formato.php");
    xhttp.send();
}