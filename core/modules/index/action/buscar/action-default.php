<?php
  
      $buscar = $_POST['b'];
        
      if(!empty($buscar)) {
            buscar($buscar);
      }
        
      function buscar($b) {

        
            $sql = $b;
            echo ($sql);
            $alums = Persondata::SearchAlum($sql);

            if(sizeof($alums)==0){
                  echo "No se han encontrado resultados para '<b>".$b."</b>'.";
            }else{
            ?>
                  <table class="table table-bordered table-hover">
			<thead>
			<th>Nombre</th>
			<th></th>
			</thead>
			<?php
				foreach($alums as $al){
					$alumn = $al;
					//if ($alumn->tipo_person==0)  // 1: profesores 0: alumnos por defecto
					//{
			?>
					<tr>
					<td><?php echo $alumn->name." ".$alumn->lastname; ?></td>
					<td style="width:160px;">
				 	<a href="index.php?view=editperson&id=<?php echo $alumn->id;?>" class="btn btn-warning btn-xs">Editar</a> <a href="index.php?action=delperson&id=<?php echo $alumn->id;?>" class="btn btn-danger btn-xs">Eliminar</a></td>
					</tr>
			<?php

					//}
		}

echo "</table>";
        }
  }
        
?>