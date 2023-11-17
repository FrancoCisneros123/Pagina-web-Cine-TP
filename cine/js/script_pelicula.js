let complejo = document.getElementById("complejo");
let formato = document.getElementById("formato");
let dia = document.getElementById("dia");
let horario = document.getElementById("horario");
let comprar = document.getElementById("comprar");

complejo.addEventListener("input", ()=>
{
    habilitarComprar();
});

formato.addEventListener("input", ()=>
{
    habilitarComprar();
});

dia.addEventListener("input", ()=>
{
    habilitarComprar();
});

horario.addEventListener("input", ()=>
{
    habilitarComprar();
});

function habilitarComprar()
{
    if (complejo.value != "" && formato.value != "" && dia.value != "" && horario.value != "")
        comprar.disabled = false;
    else
        comprar.disabled = true;
}