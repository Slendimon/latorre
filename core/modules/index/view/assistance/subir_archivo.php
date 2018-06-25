<?php

require '../../../../../Classes/PHPExcel/IOFactory.php'; //Agregamos la librería 
require '../../../../../conexion.php'; //Agregamos la conexión

	$archivo = (isset($_FILES["archivo_fls"])) ? $_FILES["archivo_fls"] : null;
    $destino = "../../../../../Documentos/asistencias.xlsx";
    
    if ($archivo) {
        $extension = pathinfo($archivo["name"], PATHINFO_EXTENSION);
        $extension = strtolower($extension);
        $extension_correcta = ($extension == 'xlsx');
       if ($extension_correcta) {
          
          $archivo_ok = move_uploaded_file($archivo["tmp_name"], $destino);
          
       }  
	}

	$sql = "TRUNCATE TABLE docexcel";
	$result = $mysqli->query($sql);


	//Variable con el nombre del archivo
	$nombreArchivo = '../../../../../Documentos/asistencias.xlsx';
	// Cargo la hoja de cálculo
	$objPHPExcel = PHPExcel_IOFactory::load($nombreArchivo);
	
	//Asigno la hoja de calculo activa
	$objPHPExcel->setActiveSheetIndex(0);
	//Obtengo el numero de filas del archivo
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	

	/*echo '<table border=1><tr><td>AC-No.</td><td>Nombre</td><td>Horario</td><td>Estado</td><td>NvoEstado</td><td>Excepción</td></tr>';*/
	
	for ($i = 2; $i <= $numRows; $i++) {
		
	   	$Id = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $Nombre = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		$Horario = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		$Estado = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $NvoEstado = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        $Excepcion = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
    
        /*
        echo '<tr>';
        echo '<td>'. $Id.'</td>';
		echo '<td>'. $Nombre.'</td>';
        echo '<td>'. $Horario.'</td>';
        echo '<td>'. $Estado.'</td>';
        echo '<td>'. $NvoEstado.'</td>';
        echo '<td>'. $Excepcion.'</td>';
		echo '</tr>';*/
		

		$Apellido="";
		list($Nomb, $Apellido1, $Apellido2) =  array_pad(explode(" ",$Nombre, 3),3,null);
		$Nombre=$Nomb;
	    $Apellido=$Apellido1 . " " . $Apellido2;

		$sql = "INSERT INTO docexcel (Id, Nombre, Apellido, Horario, Estado, NvoEstado, Excepcion) VALUES('$Id','$Nombre','$Apellido','$Horario','$Estado','$NvoEstado','$Excepcion' )";
		$mysqli->query($sql);


		//insertando a otra tabla las fechas......
		$fech=date("d/m/Y", strtotime($Horario));
		$hor=date("H:i", strtotime($Horario));
		
		//extrayendo horario de otra tabla...
		$hora1= strtotime($hor);
		$hora2m= strtotime('07:00');
		$hora2t_1= strtotime('16:30');
		$hora2t_2= strtotime('17:00');
		
		if('Repetido'!== $Excepcion)
		{
			if( ($hora1 <= $hora2m ) || ($hora1 >= $hora2t_1 && $hora1 <= $hora2t_2 ) || 'Horas extraordinarias en libertad' === $Excepcion)
			{
				$sql = "INSERT INTO assistance(id, kind_id, date_at, hour_at, person_id, user_id) VALUES(NULL, 1,STR_TO_DATE('$fech', '%d/%m/%Y'), STR_TO_DATE('$hor', '%H:%i'),$Id, 1)";			
			}else{
				$sql = "INSERT INTO assistance(id, kind_id, date_at, hour_at, person_id, user_id) VALUES(NULL, 3,STR_TO_DATE('$fech', '%d/%m/%Y'), STR_TO_DATE('$hor', '%H:%i'),$Id, 1)";
			}$mysqli->query($sql);
		}
	}

	
	/*
	echo '<table>';*/
	$sql = "TRUNCATE TABLE docexcel";
	$result = $mysqli->query($sql);
?>
	