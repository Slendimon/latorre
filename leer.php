<?php
	require 'Classes/PHPExcel/IOFactory.php'; //Agregamos la librería 
	require 'conexion.php'; //Agregamos la conexión
	
	//Variable con el nombre del archivo
	$nombreArchivo = 'asistencia.xlsx';
	// Cargo la hoja de cálculo
	$objPHPExcel = PHPExcel_IOFactory::load($nombreArchivo);
	
	//Asigno la hoja de calculo activa
	$objPHPExcel->setActiveSheetIndex(0);
	//Obtengo el numero de filas del archivo
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	echo '<table border=1><tr><td>AC-No.</td><td>Nombre</td><td>Horario</td><td>Estado</td><td>NvoEstado</td><td>Excepción</td></tr>';
	
	for ($i = 1; $i <= $numRows; $i++) {
		
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
		
		$sql = "INSERT INTO docexcel (Id, Nombre, Estado, NvoEstado, Excepcion) VALUES('$Id','$Nombre','$Estado','$NvoEstado','$Exepcion' )";
		$result = $mysqli->query($sql);
	}
	
	echo '<table>';
?>