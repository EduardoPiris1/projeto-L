<?php
 require '../connect.php';

// verificar se existe um não esta vazia id
	if (!empty($_GET['id'])) {
		
		$id = $_GET['id'];
		
		$sqlSelect = "SELECT * FROM medicamento WHERE idMedicamento=$id";
		
		$resultado = mysqli_query($connect,$sqlSelect);
		
		if(mysqli_num_rows($resultado) > 0){
			
			while($user_data = mysqli_fetch_assoc($resultado)){

				$id = $user_data['idMedicamento'];
				$nome = $user_data['nomeMedicamento'];
                $descricao = $user_data['descricao'];
                $validade = $user_data['validadeMedicamento'];
                $codigo = $user_data['codigoMedicamento'];
                $quantidade = $user_data['quantidadeMedicamento'];
			}
		
		}else{
			
			header('Location:dasMedicamento.php');
		}
	}
?>	
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Medicamentos</title>
    
    <style>
        body {
            background-image: url('../imagen/img.png'); /* Substitua 'img.png' pelo caminho da sua imagem */
            background-size: cover; /* Para cobrir todo o fundo */
            background-position: center; /* Para centralizar a imagem */
            background-repeat: no-repeat; /* Para evitar repetição da imagem */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .content {
            background-color: rgba(255, 255, 255, 0.9); /* Fundo semi-transparente */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Sombra mais suave */
            max-width: 600px;
            width: 100%;
        }
        h2 {
            background: linear-gradient(120deg, #3acbf0 0%, #8bb0ff 100%);
            padding: 20px;
            text-align: center;
            color: #000;
            margin-top: -20px; /* Ajuste para compensar o espaçamento negativo */
            border-radius: 10px 10px 0 0; /* Arredondamento dos cantos superiores */
        }
        .centro {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 18px;
            font-weight: bold;
            flex-wrap: wrap; /* Quebra de linha se necessário */
        }
        .form-group {
            flex: 0 0 calc(33.33% - 10px); /* Calcula a largura dos campos */
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-group textarea {
            width: 100%;
            height: 90px;
            padding: 10px;
            font-size: 16px; /* Reduzido o tamanho da fonte */
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 5px;
            width: 100%;
            font-size: 18px; /* Aumentado o tamanho da fonte */
        }
        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="content">
        <h2>Adicionar Medicamentos</h2>
        <form action="salEdMe.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome Medicamento</label>
                <input type="text" id="nome" name="nome" value = "<?php echo $nome ?>" required>
            </div>
            <div class="centro">
                <div class="form-group">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" id="quantidade" name="quantidade" value = "<?php echo $quantidade ?>" required>
                </div>
                <div class="form-group">
                    <label for="codigo">Código</label>
                    <input type="text" id="codigo" name="codigo" value = "<?php echo $codigo ?>" required>
                </div>
                <div class="form-group">
                    <label for="data_expiracao">Data de Expiração</label>
                    <input type="date" id="dataExpiracao" name="dataExpiracao" value = "<?php echo $validade ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea id="descricao" name="descricao" required><?php echo $descricao ?></textarea>
            </div>
            <div class="form-group">
                <input type="text" name="id" value = "<?php echo $id ?>" hidden>
                <input type="submit" name="submit">
            </div>
        </form>
    </div>
</body>
</html>

       