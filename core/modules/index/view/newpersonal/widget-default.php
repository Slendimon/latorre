
<div class="row">
  <div class="col-md-offset-1 col-md-11">
  <div class="h1">Datos de Personal</div>
  <br>
    <form class="form-horizontal" method="post" id="addcategory" action="index.php?view=addpersonal" role="form" onsubmit="return ValidarInput();">

  <div class="form-group">
    <label for="nombre" class="control-label col-md-2">Nombres*</label>
    <div class="col-md-5">
      <input type="text" name="name"  class="form-control" id="nombre" placeholder="Nombre" autocomplete="off">
    </div>
    <div class="col-md-3">
      <span id="Snombre" class="control-label"></span>
    </div>
  </div>

  <div class="form-group">
    <label for="apellido" class="control-label col-md-2">Apellidos*</label>
    <div class="col-md-5">
      <input type="text" name="lastname"  class="form-control" id="apellido" placeholder="Apellidos" autocomplete="off">
    </div>
    <div class="col-md-3">
      <span id="Sapellido" class="control-label"></span>
    </div>
  </div>

  <div class="form-group">
    <label for="domicilio" class="control-label col-md-2">Domicilio*</label>
    <div class="col-md-5">
      <input type="text" name="address"  class="form-control" id="domicilio" placeholder="Domicilio" autocomplete="off">
    </div>
    <div class="col-md-3">
      <span id="Sdomicilio" class="control-label"></span>
    </div>
  </div>

  <div class="form-group">
    <label for="email" class="control-label col-md-2">Email</label>
    <div class="col-md-5">
      <input type="text" name="email"  class="form-control" id="email" placeholder="Email" autocomplete="off">
    </div>
    <div class="col-md-3">
      <span id="Semail" class="control-label"></span>
    </div>
  </div>

  <div class="form-group">
    <label for="telefono" class="control-label col-md-2">Telefono*</label>
    <div class="col-md-5">
      <input type="text" name="phone"  class="form-control" id="telefono" placeholder="Telefono" autocomplete="off">
    </div>
    <div class="col-md-3">
      <span id="Stelefono" class="control-label"></span>
    </div>
  </div>  


  <div class="form-group">  
    <label for="turno" class="control-label col-md-2">Turno*</label>
    <div class="col-md-2">
      <select name="turno"class="form-control" id="turno">
        <option value="0">Sin asignar</option>
        <option value="1">Manaña</option>
        <option value="2">Tarde</option>
      </select>   
    </div>    
  </div>

  

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="team_id" value="<?php echo $_GET["team_id"];?>">
      <button type="submit" class="btn btn-primary">Agregar Personal</button>
    </div>
  </div>
</form>
  </div>
</div>