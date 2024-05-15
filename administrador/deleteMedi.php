<?php
 require '../connect.php';

// verificar se existe um não esta vazia id
	if (!empty($_GET['id'])) {
		
		$id = $_GET['id'];
		
		$delete = "DELETE FROM medicamento WHERE idMedicamento=$id";
		
		$resultado = mysqli_query($connect,$delete);
			
		header('Location:dasMedicamento.php');
		
	}
?>	