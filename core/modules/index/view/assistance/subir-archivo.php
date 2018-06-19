<?php

require '../../../../../Classes/PHPExcel/IOFactory.php'; //Agregamos la librería 
require '../../../../../conexion.php'; //Agregamos la conexión

foreach($_FILES["archivo_fls"] as $clave => $valor){
		echo "Propiedad: $clave --- Valor: $valor<br/>";
	}
	$archivo = (isset($_FILES["archivo_fls"])) ? $_FILES["archivo_fls"] : null;
    $destino = "../../../../../Documentos/asistencias.xlsx";
 
    
    if ($archivo) {
        $extension = pathinfo($archivo["name"], PATHINFO_EXTENSION);
        $extension = strtolower($extension);
        $extension_correcta = ($extension == 'xlsx');
       if ($extension_correcta) {
          
          $archivo_ok = move_uploaded_file($archivo["tmp_name"], $destino);
          echo "Archivo subido exitosamente";
       }else{
		echo "Solo se admiten archivos de EXCEL<br /><a href=\"enviar-archivo.php\">REGRESAR</a>";
        }   
    }

    
	$sql = "TRUNCATE TABLE docexcel";
	//Variable con el nombre del archivo
	$nombreArchivo = 'Documentos/asistencias.xlsx';
	// Cargo la hoja de cálculo
	$objPHPExcel = PHPExcel_IOFactory::load($nombreArchivo);
	
	//Asigno la hoja de calculo activa
	$objPHPExcel->setActiveSheetIndex(0);
	//Obtengo el numero de filas del archivo
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	

	echo '<table border=1><tr><td>AC-No.</td><td>Nombre</td><td>Horario</td><td>Estado</td><td>NvoEstado</td><td>Excepción</td></tr>';
	
	for ($i = 2; $i <= $numRows; $i++) {
		
        $Id = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $Nombre = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		$Horario = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		$Estado = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $NvoEstado = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        $Excepcion = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
    
        
        echo '<tr>';
        echo '<td>'. $Id.'</td>';
		echo '<td>'. $Nombre.'</td>';
        echo '<td>'. $Horario.'</td>';
        echo '<td>'. $Estado.'</td>';
        echo '<td>'. $NvoEstado.'</td>';
        echo '<td>'. $Excepcion.'</td>';
		echo '</tr>';
		

		$Apellido="";
		list($Nomb, $Apellido1, $Apellido2) =  array_pad(explode(" ",$Nombre, 3),3,null);
		$Nombre=$Nomb;
	    $Apellido=$Apellido1 . " " . $Apellido2;

		$sql = "INSERT INTO docexcel (Id, Nombre, Apellido, Horario, Estado, NvoEstado, Excepcion) VALUES('$Id','$Nombre','$Apellido','$Horario','$Estado','$NvoEstado','$Excepcion' )";
		$result = $mysqli->query($sql);
	}
	
	echo '<table>';







?>