<?php
session_start();
require ('connect.php');
 // se exixte submit ele acessa a minha pagina testLogin
	if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
		
	// Acessa
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	/*print_r('Email: '.$nomeAdministrador);
	print_r('<br>');
	print_r('Senha: '.$senha);*/
	
	$sql = "SELECT i.idIndividuo, i.emailIndividuo, i.senhaIndividuo, t.tipoIndividuo 
        FROM individuo i 
        JOIN tipoindividuo t ON i.fkTipoIndividuo = t.idTipoIndividuo 
        WHERE i.emailIndividuo = '$email' AND i.senhaIndividuo = '$senha'";

	$resultado = mysqli_query($connect,$sql);
	
	/*print_r($sql);
	print_r($resultado);*/
	
	if(mysqli_num_rows($resultado) < 1){
		//print_r('Não existe');
		unset($_SESSION['email']);
		unset($_SESSION['senha']);
		header('Location: index.php');

	}else{
		//print_r('Existe');
		/*$_SESSION['nomeAdministrador'] = $nomeAdministrador;
		$_SESSION['senha'] = $senha;
		header('Location: gestao.php');*/
        $row = $resultado->fetch_assoc();
        /*$email = $row["email"];
        $senha = $row["senha"];*/
		

        $tipo = $row["tipoIndividuo"];
        echo $tipo;
		if ($tipo == "Administrador") {
			header('Location: administrador/administrador.php');
			exit;
		} elseif ($tipo == "medico") {
			header('Location: medico/medico.html');
			exit;
		} elseif ($tipo == "farmaceutico") {
			header('Location: farmacia/farmacia.html'); 
			exit;
		} else {
			header('Location: index.php');   
			exit;
		}
	}
	}else{
		header('Location: index.php');		
	}

?>
