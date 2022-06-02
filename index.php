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
		<input type="submit" name="register">
	    <select name="select_ciudades">
		    <option>BOGOTA</option>
	    </select>
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>
