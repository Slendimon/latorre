<form id="reportsql" role="form" class="form-horizontal">
        <div class="row">
            <div class="col-md-2">
                <label class="control-label" for="selectcanal">por Canal</label>
                <select name="selectcanal" id="selectcanal" class="form-control">
                    <option value="">Todos</option>
                    <option value="1">Canal 1</option>
                    <option value="2">Canal 2</option>
                    <option value="3">Canal 3</option>
                    <option value="4">Canal 4</option>
                </select>
            </div>
            
            <div class="col-md-2">
                <label class="control-label" for="selectturno">por Turno</label>
                <select name="selectturno" id="selectturno" class="form-control">
                    <option value="">Todos</option>
                    <option value="1">Mañana</option>
                    <option value="2">Tarde</option>
                </select> 
            </div>

            <div class="col-md-6">
                <div class="form-check form-check-inline">
                    <label for="check1" class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="check1" id="check1" value="1">Asistencia
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label for="check2" class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="check2" id="ckeck2" value="3">Tardanza
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label for="check3" class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="check3" id="ckeck3" value="2">Inasistencia
                    </label>
                </div>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-outline-primary"> Reporte</button>
            </div>
        </div>          
</form>

<div id="data">
</div>

<script>
	$("#reportsql").submit(function(e){
		e.preventDefault();
		var d = $("#reportsql").serialize();
		$.get("./?action=reportsql",d,function(data){
			$("#data").html(data);
		});
	});
</script>
