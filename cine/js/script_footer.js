let contacto = document.getElementById("contacto");
let sobreNosotros = document.getElementById("sobre_nosotros");
let listaComplejos = document.getElementById("listaComplejos");

window.addEventListener("load", () => {
    cargarRedesContacto();
    cargarSobreNosotros();
    cargarListaComplejosFooter();
})

function cargarRedesContacto()
{
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function()
    {
        if (xhttp.readyState === 4 && xhttp.status === 200)
            contacto.innerHTML = xhttp.responseText;
    }

    xhttp.open("get","cargar_redes_contacto.php");
    xhttp.send();
}

function cargarSobreNosotros()
{
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function()
    {
        if (xhttp.readyState === 4 && xhttp.status === 200)
            sobreNosotros.innerHTML = xhttp.responseText;
    }

    xhttp.open("get","cargar_sobre_nosotros.php");
    xhttp.send();
}

function cargarListaComplejosFooter()
{
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function()
    {
        if (xhttp.readyState === 4 && xhttp.status === 200)
            listaComplejos.innerHTML = xhttp.responseText;
    }

    xhttp.open("get","cargar_lista_complejos_footer.php");
    xhttp.send();
}