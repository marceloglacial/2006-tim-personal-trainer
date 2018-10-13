<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Tim Personal Trainer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="estilos.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>
<body onLoad="MM_preloadImages('imagens/empresa_01.jpg','imagens/empresa_02.jpg','imagens/empresa_03.jpg','imagens/empresa_04.jpg')"> 
<div id="corpo" class="fade"> 
<?php include("topo.php"); ?>
  <hr>
  <div id="conteudo" class="servicos">    <h2>Servi&ccedil;os Prestados</h2>
    <ul>
      <li>Treinamento personalizado</li>
      <li>Orienta&ccedil;&atilde;o nutricional</li>
      <li>Avalia&ccedil;&atilde;o F&iacute;sica</li>
      <li>Programas de emagrecimento </li>
    </ul>
  </div><!-- conteudo -->
	<div id="galeria" class="servicos">
	<div id="fotona">
	<img src="imagens/servicos_04.jpg" alt="fotona" name="fotona">
	</div>
	<div id="servicos_fotinhas">
	  <a href="javascript:;"><img src="imagens/servicos_01.jpg" border="0" class="fotinha" onClick="MM_swapImage('fotona','','imagens/servicos_01.jpg',1)"></a>
	  <a href="javascript:;"><img src="imagens/servicos_02.jpg" border="0" class="fotinha" onClick="MM_swapImage('fotona','','imagens/servicos_02.jpg',1)"></a>
	  <a href="javascript:;"><img src="imagens/servicos_03.jpg" border="0" class="fotinha" onClick="MM_swapImage('fotona','','imagens/servicos_03.jpg',1)"></a>
	  <a href="javascript:;"><img src="imagens/servicos_04.jpg" border="0" class="fotinha" onClick="MM_swapImage('fotona','','imagens/servicos_04.jpg',1)"></a>
	</div>
	</div><!-- galeria -->
  <?php include("menu.php"); ?>
</div><!-- corpo --> 
  <hr>
<?php include("rodape.php"); ?>
</body>
</html>
