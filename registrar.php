  <?php 

include("con_db.php");

if ($conex)  {
	echo "Base de Datos Conectada";
} else {
	echo "Error Conexion";
}
if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['cedula']) >=1 && strlen($_POST['fechanac']) >=1 && strlen($_POST['telefono']) >=1) {

		$name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
		$cedula	= trim($_POST['cedula']);
		$fechanac = trim($_POST['fechanac']);
		$telefono	= trim($_POST['telefono']);
	    $consulta = "INSERT INTO usuario(nombre, email, fecha_reg, cedula, fechanac, telefono) VALUES 
		('$name','$email','$fechareg','$cedula','$fechanac','$telefono')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Datos Ingresados Correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>