let asientoNumero = 1;
let asientosMaximos = 0;

function crearAsientos() {
    //creo asientos como elementos div
    let asiento_fila_izquierda_1 = document.createElement("div");
    let asiento_fila_izquierda_2 = document.createElement("div");
    let asiento_fila_izquierda_3 = document.createElement("div");
    let asiento_fila_izquierda_4 = document.createElement("div");
    let asiento_fila_izquierda_5 = document.createElement("div");

    let asiento_fila_derecha_1 = document.createElement("div");
    let asiento_fila_derecha_2 = document.createElement("div");
    let asiento_fila_derecha_3 = document.createElement("div");
    let asiento_fila_derecha_4 = document.createElement("div");
    let asiento_fila_derecha_5 = document.createElement("div");

    //le agrego la clase de asientos para que tomen los estilos
    asiento_fila_izquierda_1.className = "asiento";
    asiento_fila_izquierda_2.className = "asiento";
    asiento_fila_izquierda_3.className = "asiento";
    asiento_fila_izquierda_4.className = "asiento";
    asiento_fila_izquierda_5.className = "asiento";

    asiento_fila_derecha_1.className = "asiento";
    asiento_fila_derecha_2.className = "asiento";
    asiento_fila_derecha_3.className = "asiento";
    asiento_fila_derecha_4.className = "asiento";
    asiento_fila_derecha_5.className = "asiento";

    //le agrego el numero a cada asiento 
    asiento_fila_izquierda_1.innerHTML = asientoNumero;
    asiento_fila_izquierda_1.setAttribute("id", asientoNumero);
    asientoNumero++;

    asiento_fila_izquierda_2.innerHTML = asientoNumero;
    asiento_fila_izquierda_2.setAttribute("id", asientoNumero);
    asientoNumero++;

    asiento_fila_izquierda_3.innerHTML = asientoNumero;
    asiento_fila_izquierda_3.setAttribute("id", asientoNumero);
    asientoNumero++;

    asiento_fila_izquierda_4.innerHTML = asientoNumero;
    asiento_fila_izquierda_4.setAttribute("id", asientoNumero);
    asientoNumero++;

    asiento_fila_izquierda_5.innerHTML = asientoNumero;
    asiento_fila_izquierda_5.setAttribute("id", asientoNumero);
    asientoNumero++;

    asiento_fila_derecha_1.innerHTML = asientoNumero;
    asiento_fila_derecha_1.setAttribute("id", asientoNumero);
    asientoNumero++;

    asiento_fila_derecha_2.innerHTML = asientoNumero;
    asiento_fila_derecha_2.setAttribute("id", asientoNumero);
    asientoNumero++;

    asiento_fila_derecha_3.innerHTML = asientoNumero;
    asiento_fila_derecha_3.setAttribute("id", asientoNumero);
    asientoNumero++;

    asiento_fila_derecha_4.innerHTML = asientoNumero;
    asiento_fila_derecha_4.setAttribute("id", asientoNumero);
    asientoNumero++;

    asiento_fila_derecha_5.innerHTML = asientoNumero;
    asiento_fila_derecha_5.setAttribute("id", asientoNumero);
    asientoNumero++;

    let fila_izquierda_1 = document.getElementById("fila-izquierda-1");
    let fila_izquierda_2 = document.getElementById("fila-izquierda-2");
    let fila_izquierda_3 = document.getElementById("fila-izquierda-3");
    let fila_izquierda_4 = document.getElementById("fila-izquierda-4");
    let fila_izquierda_5 = document.getElementById("fila-izquierda-5");

    let fila_derecha_1 = document.getElementById("fila-derecha-1");
    let fila_derecha_2 = document.getElementById("fila-derecha-2");
    let fila_derecha_3 = document.getElementById("fila-derecha-3");
    let fila_derecha_4 = document.getElementById("fila-derecha-4");
    let fila_derecha_5 = document.getElementById("fila-derecha-5");

    //agrego los asientos a cada fila
    fila_izquierda_1.appendChild(asiento_fila_izquierda_1);
    fila_izquierda_2.appendChild(asiento_fila_izquierda_2);
    fila_izquierda_3.appendChild(asiento_fila_izquierda_3);
    fila_izquierda_4.appendChild(asiento_fila_izquierda_4);
    fila_izquierda_5.appendChild(asiento_fila_izquierda_5);

    fila_derecha_1.appendChild(asiento_fila_derecha_1);
    fila_derecha_2.appendChild(asiento_fila_derecha_2);
    fila_derecha_3.appendChild(asiento_fila_derecha_3);
    fila_derecha_4.appendChild(asiento_fila_derecha_4);
    fila_derecha_5.appendChild(asiento_fila_derecha_5);

    if (asientoNumero > asientosMaximos)
        asientosMaximos = asientoNumero
}

function crearFilaAsientos() {
    for (let i = 0; i < 7; i++)
        crearAsientos();
}

/*cargo las opciones de los asientos*/
function cargarAsientosOpciones() {

    for (let i = 1; i < asientosMaximos; i++) {
        let opcion = document.createElement("option");

        let NumeroOpcion = document.createTextNode(i);

        opcion.appendChild(NumeroOpcion);

        document.getElementById("dropdownAsiento").appendChild(opcion);
    }
}

window.addEventListener("load", () => {
    crearFilaAsientos();
    cargarAsientosOpciones();
})