<?php
require '../connect.php';

if(isset($_POST['submit'])) {

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $codigo = $_POST['codigo'];
    $dataExpiracao = $_POST['dataExpiracao'];
    $descricao = $_POST['descricao'];
   
    $editar = "UPDATE medicamento  SET nomeMedicamento = '$nome', descricao = '$descricao',
      validadeMedicamento = '$dataExpiracao',quantidadeMedicamento = '$quantidade',codigoMedicamento = '$codigo'
      where idMedicamento = '$id'";

    $resultado = mysqli_query($connect,$editar);

    header('Location:dasMedicamento.php');

}else{
    header('Location:editaMedi.php');
}
?>