<?php
 require '../connect.php';

 if(isset($_POST)) {

   if($_POST['salvaUtilizador'] == "usuario") {   

      $nome = $_POST['nome'];
      $sexo = $_POST['genero'];
      $morada = $_POST['morada'];
      $dataNascimento = $_POST['dataNascimento'];
      $telefone = $_POST['telefone'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $utilizador = $_POST['utilizador'];

      $insert = "INSERT INTO individuo (nomeIndividuo, sexoIndividuo, moradaIndividuo, dataNascimento, telefoneIndividuo, emailIndividuo, senhaIndividuo, fkTipoIndividuo) VALUES 
      ('$nome', '$sexo', '$morada', '$dataNascimento', '$telefone', '$email', '$senha', '$utilizador')";

      $resultado = mysqli_query($connect,$insert);

      header('Location:administrador.php');

      }else if($_POST['salvaMedicamento']=="medicamento"){

      $nome = $_POST['nome'];
      $quantidade = $_POST['quantidade'];
      $codigo = $_POST['codigo'];
      $dataExpiracao = $_POST['dataExpiracao'];
      $descricao = $_POST['descricao'];

      $insert = "INSERT INTO medicamento (nomeMedicamento,descricao,validadeMedicamento,codigoMedicamento,quantidadeMedicamento) Value
      ('$nome',' $descricao','$dataExpiracao','$codigo','$quantidade')";

      $resultado = mysqli_query($connect,$insert);

      header('Location:administrador.php');

      }else if($_POST['farmacia']=="farma"){

      $nome = $_POST['nome'];
      $endereco = $_POST['endereco'];
      $telefone = $_POST['telefone'];
     

      $insert = "INSERT INTO farmacia (nomeFarmacia,telefone,localizacaoFarmacia) VALUE
      ('$nome','$endereco','$telefone')";

      $resultado = mysqli_query($connect,$insert);

      header('Location:administrador.php');
      }

}
// Definir a mensagem que você deseja exibir
$mensagem = "Erroa ao cadastra!";

// Saída da mensagem como um script JavaScript para exibir um alerta
echo "<script>alert('$mensagem');</script>";

header('Location:administrador.php');
?>