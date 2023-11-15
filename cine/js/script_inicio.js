let peliculas = document.getElementById("peliculas");
let estrenos = document.getElementById("estrenos");

window.addEventListener("load", ()=>
{
    cargarPeliculas();
    cargarEstrenos();
});

function cargarPeliculas()
{
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function()
    {
        if (xhttp.readyState === 4 && xhttp.status === 200)
            peliculas.innerHTML = xhttp.responseText;
    }

    xhttp.open("get","cargar_cartelera_peliculas.php");
    xhttp.send();
}

function cargarEstrenos()
{
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function()
    {
        if (xhttp.readyState === 4 && xhttp.status === 200)
            estrenos.innerHTML = xhttp.responseText;
    }

    xhttp.open("get","cargar_cartelera_estrenos.php");
    xhttp.send();
}