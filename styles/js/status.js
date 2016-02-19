function principio()
{
var xmlhttp;

var c=document.getElementById('estado').innerHTML;
var d=document.getElementById('user').value;
var e=document.getElementById('id').value;



if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("estado").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","status.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("c="+c+"&d="+d+"&e="+e);
}

function estado()
{
var xmlhttp;

var n=document.getElementById('estado').innerHTML;
var b=document.getElementById('user').value;
var a=document.getElementById('id').value;


if(n==''){
document.getElementById("estado").innerHTML='Recarge por favor';
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("estado").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","status.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n+"&b="+b+"&a="+a);
}
function cambioperfil()
{

    var ventana = document.getElementById('cambioperfil');
    //ventana.style.marginTop = "100px";
    ventana.style.left = ((document.body.clientWidth-350) / 5) +  "px";
    ventana.style.display = "block";
    ventana.style.pointerEvents = "auto";
}
function ocultarVentana()
{
    var ventana = document.getElementById('cambioperfil');
    ventana.style.display = "none";
    ventana.style.pointerEvents = "none";
}
