<HTML>
<!-- Mirrored from www.htmlya.com.ar/html5/problemas/editor.php?cod=148 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 17:34:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" /><!-- /Added by HTTrack -->
<HEAD>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<script languaje="javascript" src="editor.js" type="text/javascript"></script>
<STYLE>
.editor {
	BORDER-RIGHT: medium none;
	PADDING-RIGHT: 0px; 
	BORDER-TOP: medium none; 
	PADDING-LEFT: 0px; 
	PADDING-BOTTOM: 0px; 
	MARGIN: 0px; 
	BORDER-LEFT: medium none; 
	PADDING-TOP: 0px; 
	BORDER-BOTTOM: medium none;
	WIDTH: 100%; 
	HEIGHT: 100%
}
HTML {
	OVERFLOW: hidden
}
BODY {
	OVERFLOW: hidden
}
</STYLE>
</HEAD>
<BODY class="editor">
<FORM class="editor" id="formulario" name="formulario">
<TEXTAREA class="editor" style="background-color:#F9F7ED" id="paginahtml" name="paginahtml" wrap="hard">
<!DOCTYPE HTML>
<html>
<head>

<script type="text/javascript">
function retornarLienzo(x) {
  var canvas = document.getElementById(x);
  if (canvas.getContext) {
    var lienzo = canvas.getContext("2d");   
    return lienzo;
  } else
    return false;
}

function inicio() {
  ini=setInterval(dibujar,20);
}

var contador=0;
var ini;
function dibujar() {
  var lienzo=retornarLienzo("lienzo1");
  if (lienzo) {
    lienzo.clearRect(0,0,300,300);
    lienzo.shadowOffsetX=30;
    lienzo.shadowOffsetY=30;
    lienzo.shadowBlur=contador;
    lienzo.shadowColor="rgba(255,0,0,0.5)";
    lienzo.fillStyle="rgb(255,0,0)";
    lienzo.fillRect(50,50,200,200);
    contador++;
    if (contador==100)
      clearInterval(ini);
  }
}
</script>

</head>
<body onLoad="inicio()">
<canvas id="lienzo1" width="300" height="300">
Su navegador no permite utilizar canvas.
</canvas>
</body>

<!-- Mirrored from www.htmlya.com.ar/html5/problemas/editor.php?cod=148 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2015 17:34:25 GMT -->
</html></textarea>
</form>
</BODY>
</html>


