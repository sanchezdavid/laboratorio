<html>
	<head>
		<title>calculo vendedor</title>
	</head>
	<body>
		<h1>Calcular el salario de un vendedor</h1>
		
	<?php  	$nombre=$_POST['nombre'];
			$peso=$_POST['peso'];
		 	$altura=$_POST['estatura'];
		 
		 
		 	$masacorporal=($peso/($altura*$altura));

		 echo "la masa corporal de  ".$nombre; 
		 echo "  es: ".$masacorporal;



		switch($masacorporal){

			case ($masacorporal < 18.5):
				echo"Por debajo del peso  ";
				break;

			case ($masacorporal > 18.5 && $masacorporal<24.9) :
				echo"Saludable  ";
				break;
				
			case ($masacorporal > 25.0 && $masacorporal<29.9):
				echo"Con Sobrepeso  ";
				break;
			
			case ($masacorporal > 30.0 && $masacorporal<39.9):
				echo"Obeso  ";
				break;
			
			case ($masacorporal > 40.0):
				echo"Obesidad Morbida  ";
				break;
			
			}
	?>
	<br>
	</body>
</html>

