<?php
    $check=0;
    $expresion1="";
    $expresion2="";
    $buscar="";
    $canal = $_GET["selectcanal"];
    $turno = $_GET["selectturno"];
    switch($canal){
        case 1:
            $expresion1="canal=1";
        break;
        case 2:
            $expresion1="canal=2";
        break;
        case 3:
            $expresion1="canal=3";
        break;
        case 4:
            $expresion1="canal=4";
        break;
        default:
    }
    switch($turno){
        case 1:
            $expresion2="turno=1";
        break;
        case 2:
            $expresion2="turno=2";
        break;
        default:
    }
    if(($canal=="") &&  ($turno=="")){
        $buscar="";    
    }else if($canal==""){
        $buscar=" and " .$expresion2;
    }else if($turno==""){
        $buscar=" and " .$expresion1;
    }else{
        $buscar=" and " .$expresion1. " and ".$expresion2;
    }
    ?>
		<script>console.log("<?php echo $buscar;?>");</script>
	<?php
    $alumns = PersonData::getAlumn($buscar);
    if(sizeof($alumns)==0){
        echo "<p class='alert alert-danger'>No hay alumnos registrados</p>";
    }
    else {
?>
        <div class="container">
            <div class="row">
                <table class="table table-bordered table-condensed table-hover">
                    <?php
                            $Asistencia = AssistanceData::getAll();
                            if(sizeof($alumns)==0){
                                echo ("NO HAY ALUMNOS EN LA LISTA");
                            }
                            else {
                    ?>
                                <tr class="success h5 ">
                                    <th class="col-md-4">Nombre del Alumno </th>
                                    <th class="col-md-3">Canal y Turno</th>
                                    <?php if(!empty($_REQUEST["check1"])==true){?> <th>Asistencia</th> <?php } ?>
                                    <?php if(!empty($_REQUEST["check2"])==true){?> <th>Tardanzas</th> <?php } ?>
                                    <?php if(!empty($_REQUEST["check3"])==true){?> <th>Inasistencia</th> <?php } ?>
                                </tr>
                            <?php							
                                foreach($alumns as $al){
                                    /*if(($canal==$al->canal) && ($turno==$al->turno)){*/
                                        $turno = array(""=>"Sin asignar","1"=>"Mañana","2"=>"Tarde");
                            ?>
                                        <tr>                                            
                                            <td> <?php echo ($al->name)." ".($al->lastname); ?> </td>
                                            <td> <?php echo ("Canal ").($al->canal).(" - ").($turno[$al->turno]); ?> </td>
                                            <?php 
                                                if(!empty($_REQUEST["check1"])==true){?> 
                                                    <td>
                                                        <?php
                                                            $valor = "";
                                                            $valor = AssistanceData::Report($_GET["check1"],$al->id);
                                                            if($valor!=null){
                                                                echo ($valor->valor);
                                                            }
                                                            else{
                                                                echo ("0");
                                                            }
                                                        ?>
                                                    </td> <?php } ?>
                                            <?php 
                                                if(!empty($_REQUEST["check2"])==true){?> 
                                                    <td>
                                                        <?php
                                                            $valor = "";
                                                            $valor = AssistanceData::Report($_GET["check2"],$al->id);
                                                            if($valor!=null){
                                                                echo ($valor->valor);
                                                            }
                                                            else{
                                                                echo ("0");
                                                            }
                                                        ?>
                                                    </td> <?php } ?>
                                            <?php 
                                                if(!empty($_REQUEST["check3"])==true){?> 
                                                    <td>
                                                        <?php
                                                            $valor = "";
                                                            $valor = AssistanceData::Report($_GET["check3"],$al->id);
                                                            if($valor!=null){
                                                                echo ($valor->valor);
                                                            }
                                                            else{
                                                                echo ("0");
                                                            }
                                                        ?>                                                    
                                                    </td> <?php } ?>
                                        </tr>
                            <?php
                                   /* }*/
                                }
                            ?>							
                </table>
            </div> 
        </div>
<?php
            
        }
    }
?>