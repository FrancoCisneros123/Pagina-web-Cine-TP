let asientoNumero = 1;
let asientosMaximos = 0;
let cantidadFilas = 7;
let cantidadAsientos = 6;
let cineAsientosIzquierda = document.getElementById("cine-asientos-izquierda");
let cineAsientosDerecha = document.getElementById("cine-asientos-derecha");
let reservar = document.getElementById("reservar");
let arrayDisponibilidad = [];
let idSala = document.getElementById("id_sala");

window.addEventListener("load", () => {
    crearFilaAsientos();
    cargarInformacionAsientos();
})

function cargarInformacionAsientos() {
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            arrayDisponibilidad = JSON.parse(xhttp.responseText);

            for (let i in arrayDisponibilidad) {
                document.getElementById(arrayDisponibilidad[i].asiento).classList.add("asiento-ocupado");
                document.getElementById("asiento-check-" + arrayDisponibilidad[i].asiento).classList.add("ocultar-check");
            }

        }
    }

    xhttp.open("get", "cargar_disponibilidad_asientos.php?id_sala=" + idSala.value);
    xhttp.send();
}

reservar.addEventListener("click", () => {
    let xhttp = new XMLHttpRequest();
    
    let arrayAsientos = [];
    let array = "?arrayAsientos=[";

    let cantidadSeleccionada = 0;

    //obtengo la cantidad de asientos seleccionados
    for (let i = 1; i < asientosMaximos; i++) {
        if (document.getElementById("asiento-check-" + i).checked) {
            cantidadSeleccionada++;
        }
    }

    let aux = 0;

    //valores
    for (let i = 1; i < asientosMaximos; i++) {
        if (document.getElementById("asiento-check-" + i).checked) {
            arrayAsientos[i] = i;

            array += arrayAsientos[i];

            if (aux < cantidadSeleccionada - 1)
                array += ",";

            aux++;
        }
    }

    array += "]";

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200)
            cargarInformacionAsientos()
    }


    xhttp.open("get", "registrar_asientos.php" + array + "&id_sala=" + idSala.value);
    xhttp.send(JSON.stringify(array));

})


function crearFilaAsientos() {
    for (let i = 0; i < cantidadFilas; i++)
        crearAsientos();
}

function crearAsientos() {

    let asiento_fila_izquierda = [];
    let asiento_fila_derecha = [];
    let fila_izquierda = [];
    let fila_derecha = [];

    //izquierda
    for (let i = 1; i < cantidadAsientos; i++) {
        //creo asientos como elementos div
        asiento_fila_izquierda[i] = document.createElement("div");

        //le agrego la clase de asientos para que tomen los estilos
        asiento_fila_izquierda[i].className = "asiento";

        //le agrego el numero a cada asiento 
        asiento_fila_izquierda[i].innerHTML = asientoNumero;
        asiento_fila_izquierda[i].innerHTML += "<input type='checkbox' id='asiento-check-" + asientoNumero + "'  name='asiento-check-" + asientoNumero + "'>";

        asiento_fila_izquierda[i].setAttribute("id", asientoNumero);
        asiento_fila_izquierda[i].classList.add("asiento-libre");
        asientoNumero++;

        //obtengo las filas por id
        fila_izquierda[i] = document.getElementById("fila-izquierda-" + i);

        //le agrego los asientos
        fila_izquierda[i].appendChild(asiento_fila_izquierda[i]);


    }

    //derecha
    for (let i = 1; i < cantidadAsientos; i++) {
        asiento_fila_derecha[i] = document.createElement("div");

        asiento_fila_derecha[i].className = "asiento";

        asiento_fila_derecha[i].innerHTML = asientoNumero;
        asiento_fila_derecha[i].innerHTML += "<input type='checkbox' id='asiento-check-" + asientoNumero + "'  name='asiento-check-" + asientoNumero + "'>";

        asiento_fila_derecha[i].setAttribute("id", asientoNumero);
        asiento_fila_derecha[i].classList.add("asiento-libre");
        asientoNumero++;

        fila_derecha[i] = document.getElementById("fila-derecha-" + i);

        fila_derecha[i].appendChild(asiento_fila_derecha[i]);
    }

    //aumento la cantidad maxima para las opciones del select
    if (asientoNumero > asientosMaximos)
        asientosMaximos = asientoNumero
}