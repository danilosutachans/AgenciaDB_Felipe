<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Agencia de Viajes</h1>
		<h1>¡Bienvenido!</h1>
		<h1>¡Por favor registre sus datos para su Proximo Vuelo!</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Correo Electronico">
		<input type="text" name="cedula" placeholder="Numero Identificacion">
		<input type="date" name="fechanac" placeholder="Fecha Nacimiento">
		<input type="text" name="telefono" placeholder="Celular">
		<br>
		<br>

		<?php
		//Conexión BD
		include ("con_db.php");
		//Consultar ciudades
		if($conex === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		$sql = "SELECT Ciudad FROM Ciudades";
		echo "<label for='CiudadOrigen'> Seleccione la ciudad de Origen: </label>";
		echo "<select name='CiudadOrigen' id='CiudadOrigen'>";
		if($result = mysqli_query($conex, $sql)){
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result)){
					echo "<option>" . $row['Ciudad'] . "</option>";
				}
		echo "</select>";
		// Free result set
		mysqli_free_result($result);
		} else {
				echo "No records matching your query were found.";
			}
		}
		?>

		<br>
		<br>
		<label for="CiudadDestino">Seleccione la ciudad de Destino:</label>
		<select name="CiudadDestino" id="CiudadDestino">
			<option value="Bogota">
				BOGOTA
			</option>
		</select>
		<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>
