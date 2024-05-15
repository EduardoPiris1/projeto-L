<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
		<title>Login</title>
		<!--<link rel="stylesheet" href="styles.css">-->
		<style>
			*{
				margin:0;
				padding:0;
				box-sizing:border-box;
				font-family: arial,Helvetica,sans-serif;
			}
			body {
				background-image: url('img3.png');
				background-size: cover;
				font-family: Arial, sans-serif;
				margin: 0;
				padding: 0;
				display: flex;
				justify-content: center;
				align-items: center;
				height: 90vh;
			}
			.content {
				background-color: rgba(255, 255, 255, 0.9); /* Fundo semi-transparente */
				padding: 20px;
				border-radius: 10px;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
				max-width: 350px;
				width:600px;
			}
			.content h1{
				padding: 20px;
				text-align: center;
				margin-bottom: 20px;
			}
			.capa label{
				font-weight:bold;
				font-size:20px;
				padding:0px;
				margin-bottom:25px;
			}
			.capa input{
				width: 90%;
				padding: 10px;
				margin-bottom: 15px;
				border: 1px solid #ccc;
				border-radius: 10px;
				box-sizing: border-box;
				margin-left: 10px;
				margin-top:5px;
				font-size:16px;
			}
			input[type="submit"] {
				background-color: #007bff;
				color: #fff;
				padding: 10px;
				border-radius: 10px;
				border: none;
				cursor: pointer;
				display: block;
				margin-left: 10px;
				width: 90%;
				/* margin: 0 auto;  Para centralizar o botão na horizontal */
			}
			input[type="submit"]:hover {
				background-color: #0056b3;
			}
			.content a,teste {
				color: #007bff;
				text-decoration: none;
				margin-top: 2px;
				margin-left: 10px;
				display: inline-block;
			}
			.content a:hover {
				text-decoration: underline;
			}
			.teste a {
				color: #007bff;
				text-decoration: none;
				margin-top: 2px;
				margin-left: 8px;
				display: inline-block;
			}
			.teste a:hover {
				text-decoration: underline;
			}

		</style>
	</head>

	<body>
		<div class="content">
			<h1>Login</h1>
			<form action="salvarLogin.php" method="POST">
				<div class="capa">
					<label for="text">Email</label>
					<input type="email" id="email" name="email" placeholder="exemplo@gmail.com" required>
				</div>
				<div class="capa">
					<label for="text">Senha</label>
					<input type="password" id="senha" name="senha"  placeholder="***************" required>
				</div>
				
				<input type="submit" id="submit" name="submit" value="Entrar"><br>
				<a href="administrador/administrador.html">Esqueceu sua senha?</a>
				<a class="teste" href="#">Criar conta</a>
			</form>
		</div>
	</body>
</html>
