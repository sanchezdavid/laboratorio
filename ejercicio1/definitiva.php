<html>
	<head>
		<title>calculo definitiva</title>
	</head>
	<body>
		<h1>calculo definitiva</h1>
		
	<?php  	$parcial1=$_POST ['parcial1'];
			$parcial2=$_POST ['parcial2'];
			$parcial3=$_POST ['parcial3'];
			$examenfin=$_POST ['examenfin'];
			$trabajofin=$_POST ['trabajofin'];
								
		$defparcial=($parcial1+$parcial2+$parcial3)/3;

		$prompar=($defparcial*0.35);

		$promcalfin=($examenfin*0.35);

		$promtra=($trabajofin*0.30);

		$sumapro=($prompar+$promcalfin+$promtra);

		echo "su nota definitiva es:  " .$sumapro;
		
		if ($sumapro>3){
			echo "  aprobo";
		}
		else{ echo "no aprobo";
		}

	
	?>
	<br>
	</body>
</html>