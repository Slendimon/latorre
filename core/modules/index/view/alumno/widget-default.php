<form id="alumnsql" role="form" class="form-horizontal">
        <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-6 control-label">ID *</label>
                    <div class="col-md-6">
                        <input type="text" name="dni" class="form-control" id="dni" placeholder="ID/DNI">
                    </div>
            </div>
            <div class="form-group">
                <label class="col-lg-6 control-label" for="selectmes">Mes</label>
                <div class="col-md-6">
                    <select name="selectmes" id="selectmes" class="form-control">
                    <option value="1">Enero</option>
                    <option value="2">Febrero</option>
                    <option value="3">Marzo</option>
                    <option value="4">Abril</option>
                    <option value="5">Mayo</option>
                    <option value="6">Junio</option>
                    <option value="7">Julio</option>
                    <option value="8">Agosto</option>
                    <option value="9">Setiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>
                </div>

            </div>
            </div>
        
        <div class="col-md-2">
            <button type="submit" class="btn btn-outline-primary"> Buscar </button>
        </div>
        </div>         
</form>

<div id="data">
</div>
<script>
  $("#alumnsql").submit(function(e){
    e.preventDefault();
    var d = $("#alumnsql").serialize();
    $.get("./?action=alumnsql",d,function(data){
      $("#data").html(data);
    });
  });
</script>
<h5>Version beta 1.0</h5>