<?php

	Class Conexion{
	
		static public function conectar(){
		
			#PDO("nombre del servidor"; "nombre de la base de datos", "usuario", "contraseña")
		
			$link = new PDO("mysql:host=localhost;dbname=preciosesco",
							"root",
							"");
							
			$link ->exec("set names utf8");
			
			return $link;
		
		}
	
	}
	
	class ModeloFormularios{
		
		static public function mdlSeleccionarRegistros($tabla, $item, $valor){

			if($item == null && $valor == null){
		
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
				
				$stmt-> execute();
				
				return $stmt-> fetchAll();
			
			}else{
			
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
				
				$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
				
				$stmt-> execute();
				
				return $stmt-> fetch();
			
			}
			
				$stmt->close();
			
				$stmt = null;
			
		}
	
	}
	
	$datos = ModeloFormularios::mdlSeleccionarRegistros("smar", null, null);
	echo json_encode($datos);
	
?>