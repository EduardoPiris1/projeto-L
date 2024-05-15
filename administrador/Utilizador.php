<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Utilizador</title>
    <style>
    /* Estilos adicionais para o formulário */
    .section {
        margin-bottom: 20px;
    }
    .section h2 {
        border-bottom: 1px solid #ccc;
        padding-bottom: 5px;
        margin-bottom: 10px;
    }


    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .content {
        max-width: 500px;
        margin: 20px auto;
        padding: 20px;
        margin-top:10px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        height: 460px;
    }
    .cor h1 {
        background-color: #0056b3;
        color: #fff;
        text-align: center;
        margin: 0;
        padding: 20px 0;
        border-radius: 5px 5px 0 0;
    }
    form {
        padding: 20px 0;
    }
    .forma,
    .centro {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }
    .form-group {
        flex: 0 0 calc(33.333% - 10px);
    }
    .forma label,
    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 3px;
    }
    .forma input[type="text"],
    .forma input[type="number"],
    .forma input[type="date"],
    .forma input[type="email"],
    .forma select,
    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group input[type="date"],
    .form-group input[type="email"],
    .form-group input[type="password"],
    .form-group select {
        width: 100%;
        padding: 13px;
        font-size:15px;
        margin-top: 2px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    .form {
        text-align: center;
    }
    .form button,
    .form a {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
        text-decoration: none;
    }
    .form button:hover,
    .form a:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>
    <div class="content">
	<div class="cor">
        <h1>Adicionar Utilizador(a)</h1>
	</div>	
        <form action="salvar.php" method="POST">
		
            <div class="forma">
                <label for="nome">Nome do Utilizador:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
			
			<div class="centro">
				<div class="form-group">
					<label for="genero">Sexo</label>
					<select id="posto" name="genero" required>
						<option value="Masculino">Masculino</option>
						<option value="Feminino">Feminino</option>
					</select>
				</div>
				
				<div class="form-group">
					<label for="morada">Morada</label>
					<input type="text" id="morada" name="morada" required>
				</div>
				
				<div class="form-group">
					<label for="data">Data Nascimento</label>
					<input type="date" id="dataNascimento" name="dataNascimento" required>
				</div>
			</div>
			
			<div class="centro">
				<div class="form-group">
					<label for="telefone">Telefone</label>
					<input type="number" id="telefone" name="telefone" required>
				</div>
				
				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="email" id="email" name="email" required>
				</div>
					
				<div class="form-group">
					<label for="senha">Senha</label>
					<input type="password" id="senha" name="senha" required>
				</div>
			</div>
			
			<div class="forma">
					<label for="utilizador">Tipo Utilizador</label>
					<select id="utilizador" name="utilizador" required>
						<option value="1">Administrador</option>
						<option value="2">Farmaceutico</option>
						<option value="3">Medico</option>
					</select>
			</div>
			
            <div class="form">
                <input type="text" name="salvaUtilizador" value="usuario" hidden>
                <button type="submit" name="botton">Adicionar</button>
				<a href="#">Cancelar</a>
            </div>
			
        </form>
    </div>
</body>
</html>
