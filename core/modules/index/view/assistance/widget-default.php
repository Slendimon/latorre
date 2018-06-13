<div class="row">
	<div class="col-md-12">
		<h1>Asistencia</h1>
<!--	<a href="index.php?view=list&team_id=<?php echo $_GET["team_id"]; ?>" class="btn btn-default"><i class='fa fa-check'></i> Asistencia</a> -->
<form class="form-horizontal" id="loadlist" role="form">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Seleccionar Fecha:</label>
    <div class="col-lg-7">
      <input type="date" name="date_at" value="<?php echo date("Y-m-d");?>" required class="form-control" >
    </div>
    <div class="col-lg-offset-3">
    <input type="hidden" name="team_id" value="<?php echo $_GET["team_id"];?>">
      <button type="submit" class="btn btn-primary">Buscar</button>
    </div>

  </div>
</form>

<div id="data">
	<p class="alert alert-warning">No hay datos, por favor selecciona una fecha.</p>
</div>

	
<p>EXPORTAR ARCHIVO DE ASISTENCIAS EXTERNO</P>
<link rel="stylesheet" href="core\modules\index\view\assistance\estilos.css">
<div class="form-group">
	<form name = "enviar_archivo_frm"  method = "post"  action = "core\modules\index\view\assistance\subir-archivo.php" enctype = "multipart/form-data">
		<div  id="estilo-foto" class="glyphicon glyphicon-download-alt "> Buscar	
			<input  type = "file"  name = "archivo_fls" id="foto">
		</div>
		<input  type = "submit"  name = "subir_btn"  value = "Subir Archivo" class="btn btn-primary ">	
	</form>
</div>


<div class="form-group">
	<iframe width="1000" height="500" scr="subir-archivo.php"></iframe>
</div>



</div>
</div>
<script>
	$("#loadlist").submit(function(e){
		e.preventDefault();
		var d = $("#loadlist").serialize();
		$.get("./?action=loadassistance",d,function(data){
			console.log(data);
			$("#data").html(data);

		});
	});
</script>

