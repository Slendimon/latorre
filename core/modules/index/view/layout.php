<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1,.0, minimum-scale=1.0">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>.: Academia La Torre :.</title>

    <!-- Bootstrap core CSS -->
    <link href="res/bootstrap3/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
	<link href="css/padres.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="shake.css.css">
    <link href='https://fonts.googleapis.com/css?family=0swald:400,300,700' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <script src="js/jquery-1.10.2.js"></script>




    <script src="js/validar.js"></script>
    <script src="js/buscar.js"></script>

<?php if(isset($_GET["view"]) && $_GET["view"]=="home"):?>
<link href='res/fullcalendar.min.css' rel='stylesheet' />
<link href='res/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='res/js/moment.min.js'></script>
<script src='res/fullcalendar.min.js'></script>
<?php endif; ?>

  </head>


  <body style="background-color:#00808B">

  <body>


    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        
        <div class="navbar-header">

          <a class="title" href="./"> <img style="float:left" src="mini-logo.png" width="44px" height="43px"></img>Academia Pre Universitaria La Torre</a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav menu">
         <ul class="nav navbar-nav">
          </ul>
<?php if(!isset($_SESSION["user_id"])):?>
          <li><a href="./"><i class="fa fa-home"></i> Inicio</a></li>
<?php endif;?>
<?php 
$u=null;
if(Session::getUID()!=""):
  $u = UserData::getById(Session::getUID());
?>
          <br />

          <li><a href="index.php?view=home"><i class="fa fa-home" style="margin-right: 4px; font-size:30px;"></i>  Inicio</a></li>
          <li><a  href="index.php?view=assistance"><i class="fa fa-check-square-o" align="center" style="margin-right: 14px;font-size:30px;"></i>Asistencia</a></li>
          <li><a  href="index.php?view=persons"><i class="fa fa-graduation-cap" style="font-size:27px; margin-right: 3px"></i>  Alumnos</a></li>
          <li><a href="index.php?view=personal"><i class="fa fa-male" style="margin-right: 15px; margin-left: 7px;font-size:32px"></i> Personal</a></li>
          <li><a  href="index.php?view=list"><i class="fa fa-table" style="margin-right: 12px; font-size:29px"></i>  Reporte<i class="fa fa-sort-down up" style="float:right; margin-right:15px;"></i> </a>
            <ul class="nav navbar-nav sub-menu" style="display:none" >
              <li><a href="index.php?view=alumno" ><ul class="fa fa-graduation-cap" style="margin-right: 8px" ></ul>Alumno</a></li>

               <li><a href="index.php?view=report" ><ul class="fa fa-server" style="margin-right: 12px; font-size:22px"></ul>Canal y Turno</a></li>

                <li><a href="index.php?view=alumno" ><ul class="fa fa-male" style="margin-right: 18px; font-size:29px"></ul>Personal</a></li>
            </ul>
          </li>
          <?php if($u->is_admin):?>
          <li><a  href="index.php?view=users"><i class="fa fa-users" style="margin-right: 9px; font-size:29px"></i>  Usuarios </a></li>

          <li style=" margin-top:228%; position:absolute;">
                
            

          <div class="widget">
            <div class="fecha">
              <p id="diaSemana" class="diaSemana">     </p>
              <p id="dia" class="dia">     </p>
              <p class="dia">     </p>
              <p id="mes" class="mes">   </p>
              
              <p id="year" class="year"></p>
            </div>
        
            <div class="reloj">
              <p id="horas" class="horas"></p>
              <p class="horas">:</p>
              <p id="minutos" class="minutos"></p>
              <p class="minutos">:</p>
              <div class="caja-segundos">
                <p id="ampm" class="ampm"></p>
                <p id="segundos" class="segundos"></p>
              </div>
            </div>
          </div>
      
        
          </li>


        <?php endif;?>





<?php endif;?>
          </ul>


<?php if(Session::getUID()!=""):?>
<?php 
$u=null;
if(Session::getUID()!=""){
  $u = UserData::getById(Session::getUID());
  $user = $u->name." ".$u->lastname;

  }?>
          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <?php echo $user; ?> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="logout.php">Salir</a></li>
        </ul>
<?php else:?>
<?php endif; ?>




        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

<?php 
  // puedo cargar otras funciones iniciales
  // dentro de la funcion donde cargo la vista actual
  // como por ejemplo cargar el corte actual
  View::load("login");

?>

<hr>
<p class="peque">Copyright 2018 - La Torre</p>

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->

<script src="res/bootstrap3/js/bootstrap.min.js"></script>

<script src="shake.js"></script>
<script src="main.js"></script>




  </body>
</html>
