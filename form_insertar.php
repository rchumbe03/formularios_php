<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de login</title>		
		<meta charset = "UTF-8">
		<style>
			body {
				font-family: Arial, sans-serif;
				margin: 50px;
			}
			form {
				max-width: 400px;
				margin: auto;
				padding: 20px;
				border: 1px solid #ccc;
				border-radius: 10px;
				background-color: #f9f9f9;
			}
			input[type="text"], input[type="password"], select {
				width: 100%;
				padding: 10px;
				margin: 8px 0;
				box-sizing: border-box;
			}
			.error {
				color: red;
				font-weight: bold;
				margin-bottom: 15px;
			}
		</style>
	</head>
	<body>	
		<h2>Formulario de insercion de usuario</h2>

		<?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
        <div class="error">Por favor, complete todos los campos.</div>
    	<?php endif; ?>


		<form action = "insertar.php" method = "POST">			
			Nombre: <input name = "nombre" type = "text">	
            Clave: <input name = "clave" type = "text">	
            rol: <input name = "rol" type = "text">					
			<input type = "submit" value="Insertar Usuario">
		</form>
	</body>
</html>