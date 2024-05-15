<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário para Farmácias</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
    .content {
        background-color: rgba(255, 255, 255, 0.9); /* Fundo semi-transparente */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra mais suave */
        max-width: 600px;
        width: 100%;
        margin: 0 auto;
    }
    h2 {
        text-align: center;
    }
    label {
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    select {
      width: 100%;
      padding: 7px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
 
 <div class="content"> 
        <h2>Formulário para Farmácias</h2>

        <form action="salvar.php" method="Post">

        <label for="nome">Nome da Farmácia:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone">

        <!--<label for="email">E-mail:</label>
        <input type="email" id="email" name="email">

        <label for="local">Zona:</label>
        <select id="local" name="local">
            <option value="local">Bombom</option>
            <option value="local">cidade Capital</option>-->
            <!--<option value="local">Belo Horizonte</option>
            Adicione outras opções de cidades conforme necessário -->
        </select>

        <input type="text" name="farmacia" value="farma" hidden>
        <input type="submit" name="submit" value="Enviar">
        </form>
</div>  
</body>
</html>
