let cantidadBoletos = document.getElementById("cantidad_boletos");
let precioUnitario = document.getElementById("precio_unitario");
let precioCompra = document.getElementById("precio_compra");

cantidadBoletos.addEventListener("input", ()=>
{
    precioCompra.value = cantidadBoletos.value * precioUnitario.value;
});