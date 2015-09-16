        

<html>

<!-- Mirrored from www.oracleya.com.ar/simulador/simulador.php?inicio=50&cod=233&punto=75 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" /><!-- /Added by HTTrack -->
<head>
<title>Ejercicios resueltos : Subconsultas any- some- all(Oracle)</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="oracle, programaci�n, sql, tutorial">
<meta name="description" content="El objetivo de este tutorial 
es presentar los conceptos b�sicos de Oracle.">
<meta name="author" content="Diego Moisset">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">


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

.recuadro {
background-color:#ffffcc;
  text-align:left;
  font-family:verdana;

  border-width:0;
  padding:5px;

  border: 1px dotted #ffaa00;
}

</style>
</head>
<body bgcolor="#CCFFCC">


<div class="upperleft">
  <div class="upperright">
    <div class="lowerleft">
      <div class="lowerright">
<table width="98%">
<tr>
<td> 
<h1>75 - Subconsultas any- some- all</h1></td>
<td align="right">
<!--<a href="http://www.sqlserverya.com.ar/publicidad/"><img border="0" style="margin:5px;padding-left:2px" src="../imagenes/publicidad.png"></a>	-->

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

<strong>Problema: </strong><p>Trabajamos con las tablas "libros" y "editoriales" de una librer�a.<br>
Eliminamos las tablas y las creamos:</p>
<pre>
 drop table libros;
 drop table editoriales;

 create table editoriales(
  codigo number(3),
  nombre varchar2(30),
  primary key (codigo)
 );
 
 create table libros (
  codigo number(5),
  titulo varchar2(40),
  autor varchar2(30),
  codigoeditorial number(3),
  precio number(5,2),
  primary key(codigo),
 constraint FK_libros_editorial
   foreign key (codigoeditorial)
   references editoriales(codigo)
   on delete cascade
 );
</pre>
<p>Ingresamos algunos registros:</p>
<pre>
 insert into editoriales values(1,'Planeta');
 insert into editoriales values(2,'Emece');
 insert into editoriales values(3,'Paidos');
 insert into editoriales values(4,'Siglo XXI');

 insert into libros values(100,'Uno','Richard Bach',1,15);
 insert into libros values(101,'Ilusiones','Richard Bach',4,18);
 insert into libros values(102,'Puente al infinito','Richard Bach',2,20);
 insert into libros values(103,'Aprenda PHP','Mario Molina',4,40);
 insert into libros values(104,'El aleph','Borges',2,10);
 insert into libros values(105,'Antolog�a','Borges',1,20);
 insert into libros values(106,'Cervantes y el quijote','Borges',3,25);
</pre>

<p>Mostramos los t�tulos de los libros de "Borges" de editoriales que han publicado tambi�n libros de "Richard Bach":</p>
<pre>
 select titulo
  from libros
  where autor like '%Borges%' and
  codigoeditorial = any
   (select e.codigo
    from editoriales e
    join libros l
    on codigoeditorial=e.codigo
    where l.autor like '%Bach%');
</pre>
<p>Realizamos la misma consulta pero empleando "all" en lugar de "any":</p>
<pre>
 select titulo
  from libros
  where autor like '%Borges%' and
  codigoeditorial = all
   (select e.codigo
    from editoriales e
    join libros l
    on codigoeditorial=e.codigo
    where l.autor like '%Bach%');
</pre>
<p>Mostramos los t�tulos y precios de los libros "Borges" cuyo precio supera a ALGUN precio de los libros de "Richard Bach":</p>
<pre>
 select titulo,precio
  from libros
  where autor like '%Borges%' and
  precio > any
   (select precio
    from libros
    where autor like '%Bach%');
</pre>
<p>Veamos la diferencia si empleamos "all" en lugar de "any":</p>
<pre>
 select titulo,precio
  from libros
  where autor like '%Borges%' and
  precio > all
   (select precio
    from libros
    where autor like '%Bach%');
</pre>
<p>Empleamos la misma subconsulta para eliminaci�n:</p>
<pre>
 delete from libros
  where autor like '%Borges%' and
  precio > all
   (select precio
    from libros
    where autor like '%Bach%');
</pre>

        <form name="formulario" action="http://www.sqlserverya.com.ar/aspx/procesador.aspx" target="ventanaForm" 
 onsubmit=  "abrirVentana()"  method="post" >

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

        <br>
   <h2><a href="../indexefd7.html?inicio=50">Retornar</a></h2>   
        
	<br>
   

</form>
      </div>
    </div>
  </div>
</div>

</body>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-628756-18");
pageTracker._trackPageview();
} catch(err) {}</script>

<!-- Mirrored from www.oracleya.com.ar/simulador/simulador.php?inicio=50&cod=233&punto=75 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:23 GMT -->
</html>

