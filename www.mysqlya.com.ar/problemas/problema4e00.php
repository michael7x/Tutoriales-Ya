

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<!-- Mirrored from www.mysqlya.com.ar/problemas/problema.php?inicio=21&cod=40&punto=41 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" /><!-- /Added by HTTrack -->
<head>
<title>Problemas propuestos:Indice de tipo primary.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../css/estilos.css" rel="stylesheet" type="text/css">

<style>
html,body {
	background-color: #D3E9D0;
	font-family: Trebuchet MS, Verdana, Arial, sans-serif;
	font-size: 10pt;
	text-align:center;
}

h1 {
	font-size: 14pt;
	margin: 0%;
}
pre {
  text-align:left;
  font-family:verdana,sans-serif;
}
.recuadro {
background-color:#ffffcc;
  text-align:left;
  font-family:verdana;

  border-width:0;
  padding:5px;

  border: 1px dotted #ffaa00;
}
</style>

<script language="JavaScript">
function abrirVentana()
{
  alto=(screen.availHeight/2)+100;
  ancho=screen.availWidth-10;	
  window.open('', 'ventanaForm', 'top=0,left=0,width='+ancho+',height='+alto+',resizable=yes,scrollbars=yes,menubar=no,status=yes,toolbar=yes,location=yes');  	
}

function VentanaTeorico(codigo)
{
  alto=400;
  window.open('../temarios/descripcion2ade4.html?cod='+codigo+'&origen=problema', '', 'top=0,left=0,width=800,height='+alto+',resizable=yes,scrollbars=yes,menubar=no');  	
}


</script>

</head>

<body>


<div class="upperleft">
  <div class="upperright">
    <div class="lowerleft">
      <div class="lowerright">

<table width="98%">
<tr>
<td> 
<h1>41 - Indice de tipo primary.</h1></td>
<td align="right">
<!--<a href="http://www.mysqlya.com.ar/publicidad/"><img border="0" style="margin:5px;padding-left:2px" src="../imagenes/publicidad.png"></a>	-->
</td>
</tr>
</table>

      </div>
    </div>
  </div>
</div>

<br>
<div class="upperleft">
  <div class="upperright">
    <div class="lowerleft">
      <div class="lowerright">
<table>
<tr>
<td align="left">
<script type="text/javascript"><!--
google_ad_client = "pub-4669394804436935";
/* 728x90, creado 1/09/10 - largo */
google_ad_slot = "4269167522";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="../../pagead2.googlesyndication.com/pagead/f.txt">
</script>
</td>
</tr>
</table>		  

<b>Problema: </b><br><pre>
Una empresa almacena los datos de sus clientes en una tabla llamada "clientes".

1- Elimine la tabla "clientes" si existe.

2- Cr�ela con los siguientes campos y clave:
 create table clientes(
  documento char(8),
  apellido varchar(20),
  nombre varchar(20),
  domicilio varchar(30),
  primary key(documento)
 );

3- Vea la estructura de los �ndices la tabla y analice la informaci�n:
 show index from clientes;
</pre><form name="formulario" action="http://www.mysqlya.com.ar/simulador/ejecuta.php" target="ventanaForm" 
onsubmit="abrirVentana()" method="post" >
           
          <textarea class="programafuente" name="programa" rows=15 cols=110 wrap="off"></textarea>
    <br>
 <input type="submit"  value="Ejecutar  los comandos SQL">

    <input type="button" onClick="javascript:formulario.programa.value=''" value="Borrar comando.">
<input type="button" onClick="javascript:history.back()" name="cancelar" value="Finalizar">

    <br>
	<br>

<table width="700px">
<tr>
<td align="left">	

<script type="text/javascript"><!--
google_ad_client = "ca-pub-4669394804436935";
/* fondo-izquierda-grande */
google_ad_slot = "2944336362";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="../../pagead2.googlesyndication.com/pagead/f.txt">
</script>

<script type="text/javascript"><!--
google_ad_client = "ca-pub-4669394804436935";
/* fondo-derecha-grande */
google_ad_slot = "7374535966";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="../../pagead2.googlesyndication.com/pagead/f.txt">
</script>

</td>
</tr>
</table>


<input type="hidden" name="extension1" value="problema1.php">
<input type="hidden" name="extension2" value="problema1.php">
<input type="hidden" name="extension3" value="problema1.php">

</form>
        <p>&nbsp;</p>
  
<table width="650px">
<tr>
<td align="center">	



</td>
</tr>
</table>		
	
	

<b>Otros problemas: </b><br><pre>
Un instituto de ense�anza almacena los datos de sus estudiantes en una tabla llamada "alumnos".

1- Elimine la tabla "alumnos" si existe.

2- Cree la tabla con la siguiente estructura:
 create table alumnos(
  legajo varchar(4) not null,
  documento char(8) not null,
  apellido varchar(30),
  nombre varchar(30),
  domicilio varchar(30),
  primary key (legajo)
 );

3- Vea la estructura de los �ndices la tabla y analice la informaci�n:
 show index from alumnos;
</pre><br>
   <h2><a href="../index10fd.html?inicio=21">Retornar</a></h2>   


      </div>
    </div>
  </div>
</div>

<br>


<script src="../../www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-628756-5";
urchinTracker();
</script>

</body>

<!-- Mirrored from www.mysqlya.com.ar/problemas/problema.php?inicio=21&cod=40&punto=41 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:23 GMT -->
</html>