
<!DOCTYPE html>
<html>

<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
</head>

<body>
    <form action="registrar.php" method="POST">
      <h1>¡Suscribete!</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
    	<input type="submit" name="register">
    </form>
    
    <?php 
      include("registrar.php");
    ?>
       
</body>
</html>


