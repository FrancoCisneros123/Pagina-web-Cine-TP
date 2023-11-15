let asientoNumero = 1;
let asientosMaximos = 0;
let cantidadFilas = 7;
let cantidadAsientos = 6;

window.addEventListener("load", () => {
    crearFilaAsientos();
    cargarAsientosReservaOpciones();
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
       for(let i = 1; i < cantidadAsientos; i++)
    {
        //creo asientos como elementos div
        asiento_fila_izquierda[i] = document.createElement("div");

        //le agrego la clase de asientos para que tomen los estilos
        asiento_fila_izquierda[i].className = "asiento";

        //le agrego el numero a cada asiento 
        asiento_fila_izquierda[i].innerHTML = asientoNumero;
        asiento_fila_izquierda[i].setAttribute("id", asientoNumero);
        asientoNumero++;

        //obtengo las filas por id
        fila_izquierda[i] = document.getElementById("fila-izquierda-" + i);

        //le agrego los asientos
        fila_izquierda[i].appendChild(asiento_fila_izquierda[i]);
    }

    //derecha
    for(let i = 1; i < cantidadAsientos; i++)
    {
        asiento_fila_derecha[i] = document.createElement("div");

        asiento_fila_derecha[i].className = "asiento";

        asiento_fila_derecha[i].innerHTML = asientoNumero;
        asiento_fila_derecha[i].setAttribute("id", asientoNumero);
        asientoNumero++;

        fila_derecha[i] = document.getElementById("fila-derecha-" + i);

        fila_derecha[i].appendChild(asiento_fila_derecha[i]);
    }

    //aumento la cantidad maxima para las opciones del select
    if (asientoNumero > asientosMaximos)
        asientosMaximos = asientoNumero
}

/*cargo las opciones de los asientos del select*/
function cargarAsientosReservaOpciones() {

    for (let i = 1; i < asientosMaximos; i++) {
        let opcion = document.createElement("option");

        let NumeroOpcion = document.createTextNode(i);

        opcion.appendChild(NumeroOpcion);

        document.getElementById("dropdownAsiento").appendChild(opcion);
    }
}