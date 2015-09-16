<html>


<!-- Mirrored from www.javascriptya.com.ar/jquery/problemas/resolverproblema.php?inicio=0&cod=58&punto=2&inicio=0 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" /><!-- /Added by HTTrack -->
<head>
  <title>Problemas propuestos</title>
<meta name="viewport" content="width=device-width, initial-scale=1">  
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta name="keywords" content="jQuery, programaci�n, webmaster, tutorial, JavaScript">
<meta name="description" content="El objetivo de este tutorial es presentar los conceptos de la libreria JavaScript JQUERY.">
<meta name="author" content="Diego Moisset">

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

.recuadrooculto {
  background-color:#ffffcc;
  text-align:left;
  font-family:courier;
  border-width:0;
  padding:5px;
  font-size:1.3em;
  border: 1px dotted #ffaa00;
  display: none;
}


</style>

<script language="JavaScript">
function abrirVentana()
{
  alto=(screen.availHeight/2)+100;
  ancho=screen.availWidth-10;		
  window.open('', 'ventanaForm', 'top=0,left=0,width='+ancho+',height='+alto+',resizable=yes,scrollbars=yes,menubar=yes,status=yes,toolbar=yes,location=yes');  	
}

function cambiar()
{
  var lista=document.getElementsByTagName('pre');
  for(f=0;f<lista.length;f++)
  {
   lista[f].style.display='block';
  }
  document.getElementById('solucion').style.display='none';
}

</script>
</head>

<body bgcolor="#CCFFCC">
        
<div class="upperleft">
  <div class="upperright">
    <div class="lowerleft">
      <div class="lowerright">

<table width="98%">
<tr>
<td> 
<h1>2 - Nueva manera de programar JavaScript con jQuery.</h1></td>
<td align="right">
<!--<a href="http://www.javascriptya.com.ar/publicidad/"><img border="0" style="margin:5px;padding-left:2px" src="../imagenes/publicidad.png"></a>	-->

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
	<table width="650px">
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
src="../../../pagead2.googlesyndication.com/pagead/f.txt">
</script>
</td>

</tr>
</table>		  
	  

	  
                <b>Simulador <em>(Cuando presiona el bot&oacute;n &quot;ejecutar el programa&quot; 
        se graban todos los cuadros de texto y se ejecuta el primero de la lista 
        mostrando en una p�gina el resultado)</em></b> 
		
		<br><br><h3>Problema:</h3>
<pre class="recuadrooculto">&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Problema&lt;/title&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;../jquery.js&quot;&gt;&lt;/script&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;funciones.js&quot;&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;p id=&quot;parrafo1&quot;&gt;Primer p&aacute;rrafo&lt;/p&gt;
&lt;p&gt;Segundo p&aacute;rrafo&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;</pre><pre class="recuadrooculto">var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  var x;
  x=$(&quot;#parrafo1&quot;);
  x.click(presionParrafo)
}

function presionParrafo()
{
  alert(&quot;Se presion&oacute; el p&aacute;rrafo&quot;);
}
</pre><form name="formulario" action="http://www.scratchya.com.ar/ejecutajquerya.php" target="ventanaForm" method="post" onsubmit=  "abrirVentana()">
<div style="font-size:1.3em;font-family:arial;"><p>Disponer dos p�rrafos. Capturar el evento click solo del primero utilizando la librer�a jQuery.</p></div><br><a href="javascript:cambiar()" id="solucion">Ver soluci�n</a><br><br><b>pagina1.html</b><input type="hidden" name="archivo1" value="pagina1.html"><br><textarea rows="15" cols="110" name="programa1" wrap="off"></textarea><br><br><input type="submit"  value="Ejecutar el programa.">
<table width="650px">
<tr>
<td align="left">	
<script type="text/javascript"><!--
google_ad_client = "pub-4669394804436935";
/* 300x250, creado 26/02/09 graficotot */
google_ad_slot = "5205806820";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="../../../pagead2.googlesyndication.com/pagead/f.txt">
</script>

<script type="text/javascript"><!--
google_ad_client = "pub-4669394804436935";
/* 300x250, creado 11/11/08 grafico */
google_ad_slot = "1392361504";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="../../../pagead2.googlesyndication.com/pagead/f.txt">
</script>
</td>
</tr>
</table>



<br><br><div style="font-size:1.3em;font-family:arial;"></div><br><b>funciones.js</b><input type="hidden" name="archivo2" value="funciones.html"><br><textarea rows="15" cols="110" name="programa2" wrap="off"></textarea><br><br><br>
   <h2><a href="../index2904.html?inicio=0">Retornar</a></h2>   

      </div>
    </div>
  </div>
</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-628756-14', 'auto');
  ga('send', 'pageview');

</script>
</body>


<!-- Mirrored from www.javascriptya.com.ar/jquery/problemas/resolverproblema.php?inicio=0&cod=58&punto=2&inicio=0 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 16:34:22 GMT -->
</html>

