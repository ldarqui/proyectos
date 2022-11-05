<?php

	if($_POST){
		require_once("conexion.php");

		if($_POST['action'] == 'listaGlobal'){

			$sql = "SELECT * FROM smar ORDER BY id DESC";

			$query_select = mysqli_query($conection,$sql);
			$num_rows = mysqli_num_rows($query_select);
			if($num_rows > 0){
				while($data = mysqli_fetch_assoc($query_select)){ 
					$arreglo['data'][] = $data;
				}
				echo json_encode($arreglo,JSON_UNESCAPED_UNICODE);
			}else{
				echo "notData";
			}
			exit;
		}

		if($_POST['action'] == 'searchProductKey'){
			$id = $_POST['dataSearch'];
			$sql = "SELECT * FROM smar WHERE marca LIKE '%$id%' OR
			modelo LIKE '%$id%' OR
			familia LIKE '%$id%' OR
			division LIKE '%$id%'";
			$query_select = mysqli_query($conection,$sql);
			$num_rows = mysqli_num_rows($query_select);
			if($num_rows > 0){
				while($data = mysqli_fetch_assoc($query_select)){ 
					$arreglo['data'][] = $data;
				}
				echo json_encode($arreglo,JSON_UNESCAPED_UNICODE);
			}else{
				echo "notData";
			}
			exit;
		}

		if($_POST['action'] == 'guardar'){
			
			$registro = $_POST['objeto'];
			
			$sql = "INSERT INTO json (objeto) VALUES ('$registro')";

			$query_select = mysqli_query($conection,$sql);

			
			$sql = "SELECT * FROM json ORDER BY id DESC";

			$query_select = mysqli_query($conection,$sql);
			$num_rows = mysqli_num_rows($query_select);
			if($num_rows > 0){
				while($data = mysqli_fetch_assoc($query_select)){ 
					$arreglo[] = $data;
				}
				echo json_encode($arreglo,JSON_UNESCAPED_UNICODE);
			}else{
				echo "notData";
			}

			exit;
		}	
	
		if($_POST['action'] == 'cargaAntecedentes'){
			
			$sql = "SELECT * FROM json ORDER BY id DESC";

			$query_select = mysqli_query($conection,$sql);
			$num_rows = mysqli_num_rows($query_select);
			if($num_rows > 0){
				while($data = mysqli_fetch_assoc($query_select)){ 
					$arreglo[] = $data;
				}
				echo json_encode($arreglo,JSON_UNESCAPED_UNICODE);
			}else{
				echo "notData";
			}

			exit;
		}	

	}
	
?>                                                   