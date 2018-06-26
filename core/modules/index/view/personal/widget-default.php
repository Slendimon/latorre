<?php
$personal = PersonalData::getAll();
?>
<div class="row">
	<div class="col-md-12">
		<h1>Personal </h1>
	<a href="index.php?view=newpersonal" class="btn btn-default"><i class='fa fa-asterisk'></i> Nuevo Personal</a>



<br><br>
		<?php

		if(count($personal)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre</th>
			<th></th>
			</thead>
			<?php
				foreach($personal as $al){
					$pers = $al;
					//if ($pers->tipo_person==1)  // 1: profesores 0: alumnos por defecto
					//{
			?>
				<tr>
				<td><?php echo $pers->name." ".$pers->lastname; ?></td>
				<td style="width:160px;">
				 <a href="index.php?view=editpersonal&id=<?php echo $pers->id;?>" class="btn btn-warning btn-xs">Editar</a> <a href="index.php?action=delpersonal&id=<?php echo $pers->id;?>" class="btn btn-danger btn-xs">Eliminar</a></td>
				</tr>	

			<?php
				//}
			}

echo "</table>";

		}else{
			echo "<p class='alert alert-danger'>No hay Personal registrado.</p>";
		}


		?>


	</div>
</div>