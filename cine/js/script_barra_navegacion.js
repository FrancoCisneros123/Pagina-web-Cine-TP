let barra_navegacion_lista = document.getElementById("barra_navegacion_lista");

window.addEventListener("load", () => {
    cargarBarraNavegacionOpciones();
})

function cargarBarraNavegacionOpciones()
{
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function()
    {
        if (xhttp.readyState === 4 && xhttp.status === 200)
            barra_navegacion_lista.innerHTML = xhttp.responseText;
    }

    xhttp.open("get","cargar_barra_navegacion_opciones.php");
    xhttp.send();
}