<html>
	<head>
		<title>calculo vendedor</title>
	</head>
	<body>
		<h1>Calcular el salario de un vendedor</h1>
		
	<?php  	$nombre=$_POST['nombre'];
			$cantidad=$_POST['cantidad'];
		 	$total=$_POST['total'];
		 
		 
		 	$salarioBasico=450000;

 			$comision=($cantidad*50000); 

			$porcentajecomi=($total*0.05); 

			$salario=($salarioBasico+$comision+$porcentajecomi);


		 echo "El salario del vendedor   ".$nombre; 
		 echo "  es: ".$salario;
	?>
	<br>
	</body>
</html>
