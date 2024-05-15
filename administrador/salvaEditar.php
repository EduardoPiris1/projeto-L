<?php
require '../connect.php';

if(isset($_POST['botton'])) {

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sexo = $_POST['genero'];
    $morada = $_POST['morada'];
    $dataNascimento = $_POST['dataNascimento'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $utilizador = $_POST['utilizador'];

    $editar = "UPDATE individuo  SET nomeIndividuo = '$nome',sexoIndividuo = '$sexo',moradaIndividuo = '$morada', 
    dataNascimento = '$dataNascimento', telefoneIndividuo = '$telefone',emailIndividuo = '$email',senhaIndividuo = '$senha',fkTipoIndividuo ='$utilizador'
        where idIndividuo = '$id'";

    $resultado = mysqli_query($connect,$editar);

    header('Location:administrador.php');

}else{
    header('Location:editar.php');
}
?>