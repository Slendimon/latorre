<?php
    $dni = $_GET["dni"];
    $mes = $_GET["selectmes"];
    //$tipo_person = 1;
?>
  
        <div class="blog-header">
          <div class="container">
            <h1 class="blog-title">Reporte de asistencia</h1>
          </div>
        </div>
    
        <div class="container">
    
          <div class="row">
    
            <div class="col-sm-12 blog-main">
                <div class="calendar">
                  <?php
                  //supongamos que esta filtrado para 1 mes en especifico (p.e: Febrero) 
                  //$result = $mysqli->query('SELECT * FROM assistance WHERE MONTH(date_at)=$mes && person_id=5');
                  $result = AssistanceData::getByDni($dni,$mes);
                  if( !$result )
                      echo "No existe alumno con ese DNI";
                  else{
                  $events = array();
                       
                      $start_date = new DateTime($result->date_at);
                      $start_hour = new DateTime($result->hour_at);
                      //$end_date = new DateTime($row['fecha_fin']);
                      $day = $start_date->format('j');
                      switch ($result->kind_id) {
                          case '1':
                              $desc="Normal";
                              break;
                          case '2':
                              $desc="Tardanza";
                              break;
                          case '3':
                              $desc="Justificado";
                              break;
                          default:
                              # code...
                              break;
                      }
                      $events[$day][] = array(
                          'hora_llegada' => $start_hour->format('G:i a'),
                          //'end_hour' => $end_date->format('G:i a'),
                          //'team_code' => $row['cod_equipo'],
                          'description' => $desc
                      );
                  $datetime = new DateTime();
                  switch ($mes) {
                      case '1':
                          $datetime->setDate(2018, 1, 1);
                          break;
                      case '2':
                          $datetime->setDate(2018, 2, 1);
                          break;
                      case '3':
                          $datetime->setDate(2018, 3, 1);
                          break;
                      case '4':
                          $datetime->setDate(2018, 4, 1);
                          break;
                      case '5':
                          $datetime->setDate(2018, 5, 1);
                          break;
                      case '6':
                          $datetime->setDate(2018, 6, 1);
                          break;
                      case '7':
                          $datetime->setDate(2018, 7, 1);
                          break;
                      case '8':
                          $datetime->setDate(2018, 8, 1);
                          break;
                      case '9':
                          $datetime->setDate(2018, 9, 1);
                          break;
                      case '10':
                          $datetime->setDate(2018, 10, 1);
                          break;
                      case '11':
                          $datetime->setDate(2018, 11, 1);
                          break;
                      case '12':
                          $datetime->setDate(2018, 12, 1);
                          break;

                      default:
                          # code...
                          break;
                  }
                  

                  //mostrar mes que corresponde a cada fecha:
                  

                  // mes en texto
                  $txt_months = array(
                      'Enero', 'Febrero', 'Marzo',
                      'Abril', 'Mayo', 'Junio',
                      'Julio', 'Agosto', 'septiembre',
                      'Octubre', 'Noviembre', 'Diciembre'
                  );

                  $month_txt = $txt_months[$datetime->format('n')-1];

                  // ultimo dia del mes
                  $month_days = date('j', strtotime("last day of"));

                  echo '<h1>' . $month_txt . '</h1>';

                  foreach(range(1, $month_days) as $day)
                  {
                      $marked = false;
                      $events_list = array();

                      foreach($events as $event_day => $event)
                      {
                          // si el dia del evento coincide lo marcamos y guardamos la informacion
                          if($event_day == $day)
                          {
                              $marked = true;
                              $events_list = $event;
                              break;
                          }
                      }

                      echo '
                      <div class="day' . ($marked ? ' marked' : '') . '">
                          <strong class="day-number">' . $day . '</strong>
                          <div class="events" style="overflow-y:auto"><ul>';

                              foreach($events_list as $event)
                              {
                                  echo '
                                      <div class="scrollmenu" style="padding:10px";>
                                      <span>' . $event['description'] . '
                                          <strong>Llegada:</strong>
                                          ' . $event['hora_llegada'] . '</span>
                                      </div>
                                  ';
                              }

                          echo '</ul></div>
                      </div>';
                  }
              }
                  ?>
    </div>
    
            </div><!-- /.blog-main -->
    

