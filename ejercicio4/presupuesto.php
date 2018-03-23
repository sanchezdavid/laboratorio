<html>
	<head>
		<title>Presupuesto</title>
 </head>

   <body >
    <h1>Porcentaje Presupuesto</h1>
    
	<?php  	$dinero=$_POST['dinero'];
			

		 	$ginecologia=($dinero*0.40);
		 	echo " Presupuesto para Ginecologia  ".$ginecologia."<br>";
		 	$traumatologia=($dinero*0.30);
		 	echo " Presupuesto para Traumatologia  ".$traumatologia."<br>";
		 	$pediatria=($dinero*0.30) ;
		 	echo " Presupuesto para Pediatria  ".$pediatria."<br>"; 

	?>
	<br>
	</body>
</html>
