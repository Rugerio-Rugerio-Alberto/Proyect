<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (isset($_POST['name'], $_POST['email'], $_POST['telephone'], $_POST['subject'], $_POST['num'], $_POST['postal'], $_POST['direccion'])) {
	    $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $fon = trim($_POST['telephone']);
        $producto = trim($_POST['subject']);
        $cantidad = trim($_POST['num']);
        $postal = trim($_POST['postal']);
        $address = trim($_POST['direccion']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO pedido(`nombre`, `email`, `telefono`, `producto`, `cantidad`, `postal`, `direccion`, `fecha_reg`) VALUES ('$name','$email','$fon','$producto','$cantidad','$postal','$address','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
?> 
             
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
