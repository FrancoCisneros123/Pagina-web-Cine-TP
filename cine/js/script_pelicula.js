let id_pelicula = document.getElementById("id_pelicula");
let complejo = document.getElementById("complejo");
let sala = document.getElementById("sala");
let formato = document.getElementById("formato");
let dia = document.getElementById("dia");
let horario = document.getElementById("horario");
let comprar = document.getElementById("comprar");

window.addEventListener("load", () => {
    cargarComplejos();
    cargarSala();
    cargarDias();
    cargarFormatos();
});

complejo.addEventListener("input", () => {
    habilitarComprar();
});

sala.addEventListener("input", () => {
    habilitarComprar();
});

formato.addEventListener("input", () => {
    habilitarComprar();
});

dia.addEventListener("input", () => {
    cargarHorarios();
    habilitarComprar();
});

horario.addEventListener("input", () => {
    habilitarComprar();
});

function cargarComplejos() {
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            complejo.innerHTML = xhttp.responseText;
        }
    };

    xhttp.open("get", "cargar_pelicula_entrada_complejos.php");
    xhttp.send();
}

function cargarSala() {
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            sala.innerHTML = xhttp.responseText;
        }
    };

    xhttp.open("get", "cargar_pelicula_sala.php?id_pelicula=" + id_pelicula.value);
    xhttp.send();
}

function cargarDias() {
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            dia.innerHTML = xhttp.responseText;
        }
    };

    xhttp.open("get", "cargar_pelicula_entrada_dia.php?id_pelicula=" + id_pelicula.value);
    xhttp.send();
}

function cargarFormatos() {
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            formato.innerHTML = xhttp.responseText;
        }
    };

    xhttp.open("get", "cargar_pelicula_entrada_formato.php?id_pelicula=" + id_pelicula.value);
    xhttp.send();
}

function cargarHorarios() {
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            horario.innerHTML = xhttp.responseText;
        }
    };

    xhttp.open("get", "cargar_pelicula_entrada_horario.php?id_pelicula=" + id_pelicula.value + "&dia=" + dia.value);
    xhttp.send();
}

function habilitarComprar() {
    if (complejo.value != "" && sala.value != "" && formato.value != "" && dia.value != "" && horario.value != "") 
        comprar.disabled = false;
    else
        comprar.disabled = true;
}