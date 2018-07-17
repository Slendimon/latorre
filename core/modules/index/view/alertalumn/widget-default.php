<a href="#VentanaAlerta" data-toggle="modal">Presionar</a>

<div class="container">
	<div class="modal fade" id="VentanaAlerta" >
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button style="button" class="close" data-dismiss="modal" aria-hadden="true">&times;</button>
					<h4 class="modal-title h5">Lista de Alumnos con faltas</h4>
				</div>

				<div class="modal-body">
					<div class="h5">
						<table class="table table-bordered table-condensed table-hover">
							<?php
							$alumns = AssistanceData::Alertas();
							if(sizeof($alumns)==0){
								echo ("NO HAY ALUMNOS EN LA LISTA");
							}
							else {
								echo (sizeof($alumns));
								?>
									<tr class="success h5">
										<th>Nombre del Alumno </th>
										<th>Canal y Turno</th>
										<th>Faltas</th>
									</tr>
								<?php							
								foreach($alumns as $mostrar){
									if($mostrar->faltas >= 3){
										$alumn = PersonData::getById($mostrar->person_id);
										$turno = array(null=>"S/A","1"=>"Mañana","2"=>"Tarde");
										$canal = array(null=>"S/A","1"=>"1","2"=>"2","3"=>"3","4"=>"4");
										?>
										<tr class="danger">
											<td><?php echo ($alumn->name)." ".($alumn->lastname); ?></td>
											<td><?php echo ("C ").($canal[$alumn->canal]).(" - T ").($turno[$alumn->turno]); ?></td>
											<td><?php echo ($mostrar->faltas); ?></td>
										</tr>
										
										<?php
									}									
								}									
							}
							?>							
						</table> 
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>
