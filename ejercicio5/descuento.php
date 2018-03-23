<html>
	<head>
		<title>Descuento</title>
 </head>

   <body >
    <h1>Descuento por Articulo</h1>
    
	<?php  	$nombre=$_POST['nombre'];
			$precio=$_POST['precio'];
			$clave=$_POST['clave'];
			
			switch ($clave) {
				case $clave==1:
					$descuento=($precio*0.10);
					$total=($precio-$descuento);
					echo "el articulo  ".$nombre."<br>";
					echo "con un precio de  ".$precio."<br>" ;
					echo "tiene un valor con descuento de  ".$total;
				
					break;

					
				case $clave==2:
					$descuento=($precio*0.20);
					$total=($precio-$descuento);
					echo "el articulo  ".$nombre."<br>";
					echo "con un precio de  ".$precio."<br>" ;
					echo "tiene un valor con descuento de  ".$total;
				
					break;

				case $clave!=1 && $clave!=2:
					echo "clave no existe";
					break;

					
			}
		 	
	?>
	<br>
	</body>
</html>
