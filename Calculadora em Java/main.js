function Somar(v1, v2)
{
    var e1 = parseInt(document.getElementById("v1").value)
    var e2 = parseInt(document.getElementById("v2").value)
    var resultado = e1 + e2;
    document.getElementById("res").innerHTML= "Resultado: " + resultado;
}
function Subtrair(v1, v2)
{
    var e1 = parseInt(document.getElementById("v1").value)
    var e2 = parseInt(document.getElementById("v2").value)
    var resultado = e1 - e2;
    document.getElementById("res").innerHTML= "Resultado: " + resultado;
}
function Dividir(v1, v2)
{
    var e1 = parseInt(document.getElementById("v1").value)
    var e2 = parseInt(document.getElementById("v2").value)
    var resultado = e1 / e2;
    document.getElementById("res").innerHTML= "Resultado: " + resultado;
}
function Multiplicar(v1, v2)
{
    var e1 = parseInt(document.getElementById("v1").value)
    var e2 = parseInt(document.getElementById("v2").value)
    var resultado = e1 * e2;
    document.getElementById("res").innerHTML= "Resultado: " + resultado;
}