<!doctype html>
<html>

<!-- Mirrored from www.cssya.com.ar/bootstrapya/ejecutar.php?cod=119 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 17:33:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" /><!-- /Added by HTTrack -->
<head>
    <title>CSS3 Ya</title>

    <link href='../../ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/smoothness/jquery-ui.css' rel='stylesheet'>     
    <script src='../../ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script> 
    <script src='../../ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js'></script>     

<style>
body {
  background:#5fcbae;
  margin:0 auto;
  width:100%;
}


#pesta {
  margin-top:10px;
  background:#d6d9de;
  height:100%;
-webkit-box-shadow: 8px 8px 5px #444;
-moz-box-shadow: 8px 8px 5px #444;
box-shadow: 8px 8px 5px #444;  
  
}

</style>    
   
<script type="text/javascript">

addEventListener('load',inicio,false);

function inicio()
{
  document.getElementById('p2').style.height=(window.innerHeight-150)+'px';
  document.getElementById('p3').style.height=(window.innerHeight-150)+'px';
}

$(document).ready(function(){
  var opciones = {
                   select:tabSeleccionado
                 };                 
  $("#pesta").tabs(opciones);
});

function tabSeleccionado(event,tab) {
  var d = parent.documentodinamico.document; 
  d.open();
  d.write($('#editor').val());
  d.close();
  
}


</script>
   
</head>
<body>




<div id="pesta" style="width:98%;margin-left:0.5%">
	<ul>
		<li><a href="#p2">Ejemplo</a></li>
		<li><a href="#p3">Vista Previa</a></li>
	</ul>
	    
	<div id="p2">
    <textarea name="editor" id="editor" style="width:100%;height:100%;font-size:16px;font-family:courier"><!DOCTYPE html> 
<html> 
  <head> 
    <title>Prueba de Bootstrap</title> 
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head> 
<body> 

  <div class="container">

    <div class="row">
      <div class="col-lg-6"  style="background-color:#aaa">
        <h1>Columna 1</h1> 
        <p>Esto es una prueba de bootstrap.</p>
      </div>
      <div class="col-lg-6"  style="background-color:#bbb">
        <h1>Columna 2</h1> 
        <p>Esto es una prueba de bootstrap.</p>

        <div class="row">  
          <div class="col-lg-6" style="background-color:#ccc">
            <h2>Columna 2a</h2>
            <p>Esto es una prueba de bootstrap.</p>
          </div>  
          <div class="col-lg-6" style="background-color:#ddd">
            <h2>Columna 2b</h2>
            <p>Esto es una prueba de bootstrap.</p>
          </div>  
        </div>

      </div>
    </div>

  </div> 

</body> 

<!-- Mirrored from www.cssya.com.ar/bootstrapya/ejecutar.php?cod=119 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 17:33:46 GMT -->
</html> 
</textarea>
	</div>
	<div id="p3">
<iframe width="100%" height="100%" id="documentodinamico" name="documentodinamico" src="vacio.html">
No tiene disponible el navegador la capacidad de iframe
</iframe>
	</div>
</div>

</body>
</html>