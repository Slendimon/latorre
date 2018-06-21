<?php 
$alumn = PersonData::getById($_GET["id"]);
?>

<div class="row">
	<div class="col-md-offset-1 col-md-11">
	<div class="h1">Datos de Alumno</div>
	<br>
		<form class="form-horizontal" method="post" id="addcategory" action="index.php?action=updateperson" role="form" onsubmit="return ValidarInput();">

  <div class="form-group">
    <label for="nombre" class="control-label col-md-2">Nombre *</label>
    <div class="col-md-5">
      <input type="text" name="name"  class="form-control" id="nombre" placeholder="Nombre" autocomplete="off" value="<?php echo $alumn->name; ?>" >
    </div>
    <div class="col-md-3">
      <span id="Snombre" class="control-label"></span>
    </div>
  </div>

  <div class="form-group">
    <label for="apellido" class="control-label col-md-2">Apellidos*</label>
    <div class="col-md-5">
      <input type="text" name="lastname"  class="form-control" id="apellido" placeholder="Apellidos" autocomplete="off" value="<?php echo $alumn->lastname; ?>">
    </div>
    <div class="col-md-3">
      <span id="Sapellido" class="control-label"></span>
    </div>
  </div>

  <div class="form-group">
    <label for="domicilio" class="control-label col-md-2">Domicilio*</label>
    <div class="col-md-5">
      <input type="text" name="address"  class="form-control" id="domicilio" placeholder="Domicilio" autocomplete="off" value="<?php echo $alumn->address; ?>">
    </div>
    <div class="col-md-3">
      <span id="Sdomicilio" class="control-label"></span>
    </div>
  </div>

  <div class="form-group">
    <label for="email" class="control-label col-md-2">Email</label>
    <div class="col-md-5">
      <input type="text" name="email"  class="form-control" id="email" placeholder="Email" autocomplete="off" value="<?php echo $alumn->email; ?>">
    </div>
    <div class="col-md-3">
      <span id="Semail" class="control-label"></span>
    </div>
  </div>

  <div class="form-group">
    <label for="telefono" class="control-label col-md-2">Telefono*</label>
    <div class="col-md-5">
      <input type="text" name="phone"  class="form-control" id="telefono" placeholder="Telefono" autocomplete="off" value="<?php echo $alumn->phone; ?>">
    </div>
    <div class="col-md-3">
      <span id="Stelefono" class="control-label"></span>
    </div>
  </div>

  <script>console.log(<?php echo $alumn->turno; ?>)</script>

  <div class="form-group">  
    <label for="turno" class="control-label col-md-2">Turno*</label>
    <div class="col-md-2">
      <select name="turno"class="form-control" id="turno" selected="<?php echo $alumn->turno; ?>">
        <option value="0">Sin asignar</option>
        <option value="1">Manaña</option>
        <option value="2">Tarde</option>
      </select>   
    </div>

     <script>console.log(<?php echo $alumn->canal; ?>)</script>    

    <label for="canal" class="col-md-1 control-label">Canal*</label>
    <div class="col-md-2">
      <select name="canal" class="form-control" id="canal" selected="<?php echo $alumn->canal; ?>">
        <option value="0">Sin asignar</option>
        <option value="1">Canal 1</option>
        <option value="2">Canal 2</option>
        <option value="3">Canal 3</option>
        <option value="4">Canal 4</option>
      </select>   
    </div>
    <div class="col-md-3">
      <span id="Scanalturno" class="control-label"></span>
    </div>
  </div>

  <div class="h1">Datos de Apoderado</div>
  <br>

  <div class="form-group">
    <label for="c1_nombre" class="control-label col-md-2">Nombres :</label>
    <div class="col-md-5">
      <input type="text" name="c1_fullname" class="form-control" id="c1_nombre" placeholder="Nombre completo" autocomplete="off" value="<?php echo $alumn->c1_fullname; ?>">
    </div>
    <div class="col-md-3">
      <span id="Sc1_nombre" class="control-label"></span>
    </div>
  </div>  

  <div class="form-group">
    <label for="c1_domicilio" class="control-label col-md-2">Domicilio :</label>
    <div class="col-md-5">
      <input type="text" name="c1_address"  class="form-control" id="c1_domicilio" placeholder="Domicilio" autocomplete="off" value="<?php echo $alumn->c1_address; ?>">
    </div>
    <div class="col-md-2">
      <span id="Sc1_domicilio" class="control-label"></span>
    </div>
  </div>

  <div class="form-group">
    <label for="c1_telefono" class="control-label col-md-2">Telefono :</label>
    <div class="col-md-5">
      <input type="text" name="c1_phone"  class="form-control" id="c1_telefono" placeholder="Telefono" autocomplete="off" value="<?php echo $alumn->c1_phone; ?>">
    </div>
    <div class="col-md-2">
      <span id="Sc1_telefono" class="control-label"></span>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="control-label col-md-2">Nota :</label>
    <div class="col-md-5">
      <textarea name="c1_note" value="<?php echo $alumn->c1_note; ?>" rows="3" class="form-control" maxlength="150" placeholder="Nota"></textarea>
    </div>
    <span>Tamaño maximo de 150 caracteres </span>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="alumn_id" value="<?php echo $_GET["id"];?>">
    <input type="hidden" name="tid" value="<?php echo $_GET["tid"];?>">
      <button type="submit" class="btn btn-primary">Actualizar Estudiante</button>
    </div>
  </div>
</form>
	</div>
</div>

<!--asdasdas 

<div class="row">
	<div class="col-md-12">
	<h1>Editar Alumno</h1>
	<br>
		<form class="form-horizontal" method="post" id="addcategory" action="index.php?action=updateperson" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="name" value="<?php echo $alumn->name; ?>" required class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellidos*</label>
    <div class="col-md-6">
      <input type="text" name="lastname" value="<?php echo $alumn->lastname; ?>" required class="form-control" id="name" placeholder="Apellidos">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Domicilio*</label>
    <div class="col-md-6">
      <input type="text" name="address"  class="form-control" value="<?php echo $alumn->address; ?>" id="name" placeholder="Domicilio">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email"  class="form-control" value="<?php echo $alumn->email; ?>" id="name" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
    <div class="col-md-6">
      <input type="text" name="phone" value="<?php echo $alumn->phone; ?>"  class="form-control" id="name" placeholder="Telefono">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Canal*</label>
    <div class="col-md-6">
      <input type="text" name="canal" value="<?php echo $alumn->canal; ?>"  class="form-control" id="name" placeholder="Canal">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Turno*</label>
    <div class="col-md-6">
      <input type="text" name="turno" value="<?php echo $alumn->turno; ?>"  class="form-control" id="name" placeholder="Turno">
    </div>
  </div>
<h2>Datos del Apoderado</h2>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre completo*</label>
    <div class="col-md-6">
      <input type="text" name="c1_fullname" value="<?php echo $alumn->c1_fullname; ?>" class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Domicilio*</label>
    <div class="col-md-6">
      <input type="text" name="c1_address" value="<?php echo $alumn->c1_address; ?>"  class="form-control" id="name" placeholder="Domicilio">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
    <div class="col-md-6">
      <input type="text" name="c1_phone" value="<?php echo $alumn->c1_phone; ?>"  class="form-control" id="name" placeholder="Telefono">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nota</label>
    <div class="col-md-6">
      <textarea name="c1_note"  class="form-control" placeholder="Nota"><?php echo $alumn->c1_note; ?></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="alumn_id" value="<?php echo $_GET["id"];?>">
    <input type="hidden" name="tid" value="<?php echo $_GET["tid"];?>">
      <button type="submit" class="btn btn-primary">Actualizar Estudiante</button>
    </div>
  </div>
</form>
	</div>
</div>   -->