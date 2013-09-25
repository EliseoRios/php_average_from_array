<html>
 <head>
 
  <link rel="stylesheet" href="ArregloCSS.css" type="text/css"/>
 </head>
 
 <body>
  <header>
    <h1>PROMEDIO DE ARRAY</h1> 
	<p>En esta tarea se pretende sacar el promedio de un arreglo (array) con c&oacutedigo php.</p>
  </header>
  
  <section>
   <?php
   class PromedioArreglo
   {
    //print_r($Calificaciones);
	
	function SacarPromedio()
	{
	   $Promedio=0;
	   $Suma=0;
	   $Calificaciones=0;
	   
	 $Calificaciones=array(5.8,5.64,6.3,6.8,6.4,
	                       8.3,8.2,9.65,4.6,5.9,
					 	   8.6,7.8,5.95,8.9,6.23,
						   6.5,7.65,8.64,9.5,7.87);
	 echo "<h4>Suma</h4>";
     foreach ($Calificaciones as $i => $value)
     {
	  $Suma+=$Calificaciones[$i];
      echo "+  ".$Calificaciones[$i]."<br/>";
     }
      echo "-----------------<br/>".$Suma;
	  	 
	$Promedio=$Suma/count($Calificaciones);
	 echo "<h4>Promedio:</h4>".$Suma."/".count($Calificaciones)." = ".$Promedio;
	}
   }
	$promedioArreglo = new PromedioArreglo();
	$promedioArreglo->SacarPromedio();
   ?>   
  </section>
 </body>
</html>