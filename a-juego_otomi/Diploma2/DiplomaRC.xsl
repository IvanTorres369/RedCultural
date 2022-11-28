<?xml version="1.0" encoding="UTF-8"?>
 <xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

 <xsl:template match='/'>
	<xsl:variable name="logo" select="diploma/datos/logo"></xsl:variable>
   <html> 
      <head>
      	<link rel="stylesheet" type="text/css" href="DiplomaRC.css"/>
		<title>Diploma</title>
	 </head>
      <body background="cult1.jpg">
	  <?php
	  <script>
		function guardahtml ()
		{
		   document.execCommand('SAVEAS')
		}
		</script>
		?>
		 <div class="div">
		 <img class="img" width="100px" height="100px" src="{$logo}"/>
		 <div class="ins"><h2 class="inst"><xsl:value-of select="diploma/datos/institucion"/></h2></div>
		 <p class="tex">Este diploma se otorga a:</p>
         <h2><xsl:value-of select="diploma/datos/nombre"/></h2>
         <p class="tex1">por haber concluido con exito el primer curso basico de Lengua OTOMI</p>
		 <div class="f1"><p class="firma1"><xsl:value-of select="diploma/datos/firma1"/></p></div>
		 <div class="f2"><p class="firma2"><xsl:value-of select="diploma/datos/firma2"/></p></div><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
		 <button onclick="window.print();" class="btn btn-primary"> Imprimir </button><form action="../../Vista/intro_cursos.php">
							<button  type="submit" id="submit" class="btn btn-primary">Terminar Curso</button>
							</form>
		 
		 
	 	</div>
		
	  </body>
	
   </html>
 </xsl:template>

 </xsl:stylesheet>
