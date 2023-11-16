let cantidadBoletos = document.getElementById("cantidadBoletos");
let precioUnitario = document.getElementById("precioUnitario");
let precioCompra = document.getElementById("precioCompra");

cantidadBoletos.addEventListener("input", ()=>
{
    precioCompra.value = cantidadBoletos.value * precioUnitario.value;
});