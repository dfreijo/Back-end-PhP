<?php

$id = "";
$username = "";
$password = "";
$email = "";

if (isset($_GET['id_usuario']) && isset($_GET['username']) && isset($_GET['password']) && isset($_GET['email'])) {
    $id = $_GET['id_usuario'];
    $username = $_GET['username'];
    $password = $_GET['password'];
    $email = $_GET['email'];
} else {
    echo "No se han recibido las variables correctamente.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Calendario con Bootstrap</title>
    
    <link rel="stylesheet" href="../css/usuarioVista.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
        <div class="jumbotron mt-3 text-center">
            <h1 class="display-4">CALENDARIO DE <?php echo $username; ?>
            <a href="../../index.php" class="btn btn-primary button-cerrar">Cerrar sesión</a>
        </h1>
            <p class="lead">Correo electrónico: <?php echo $email; ?></p>
            <form action="./perfilUsuarioVista.php" method="get">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="username" value="<?php echo $username; ?>">
                <input type="hidden" name="password" value="<?php echo $password; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <button class="btn btn-primary usuario" type="submit">Mi perfil</button>
            </form></br>
            <form action="./inscribirseVista.php" method="get">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="username" value="<?php echo $username; ?>">
                <input type="hidden" name="password" value="<?php echo $password; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <button class="btn btn-primary usuario"  type="submit">Inscripciones</button>
            </form></br>
            <form action="./desincribirseVista.php" method="get">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="username" value="<?php echo $username; ?>">
                <input type="hidden" name="password" value="<?php echo $password; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <button class="btn btn-primary usuario"  type="submit">Desinscripciones</button>
            </form>
            <div class="text-center mt-3 botones-calendario">
            <button class="btn btn-primary mr-2 calendario" onclick="window.location.href='usuarioVista.php?view=mes&id_usuario=<?php echo $id; ?>&username=<?php echo $username; ?>&password=<?php echo $password; ?>&email=<?php echo $email; ?>'">Mes</button>
            <button class="btn btn-primary mr-2 calendario" onclick="window.location.href='usuarioVista.php?view=semana&id_usuario=<?php echo $id; ?>&username=<?php echo $username; ?>&password=<?php echo $password; ?>&email=<?php echo $email; ?>'">Semana</button>
            <button class="btn btn-primary calendario" onclick="window.location.href='usuarioVista.php?view=dia&id_usuario=<?php echo $id; ?>&username=<?php echo $username; ?>&password=<?php echo $password; ?>&email=<?php echo $email; ?>'">Día</button>   
            <div>
        </div>
        <div class="view">
            <!-- Contenido de las tablas (mes, semana y día) se mostrará aquí según se haga clic en los botones -->
        </div>
        
        <?php 

        //Muestro el mes la semana y el dia segun el boton
        if(isset($_GET['view'])) {

            // Obtener los eventos
            require_once '../../controlador/inscribirUsuarioControlador.php';
                
            $actosPersonas = leerActosDePersona($id);
            $diasActosInscritos = array();
            $horasActosInscritos = array();

            if ($actosPersonas && is_iterable($actosPersonas)) {
                foreach ($actosPersonas as $actoPersona) {
                    $actoPersonaId = $actoPersona['id_acto'];
                    $resultados = obtenerActos();
                    foreach ($resultados as $acto) { 
                        $actoGeneral = $acto['Id_acto'];
                        if ($acto['Id_acto'] === $actoPersonaId) {
                            $Fecha = $acto['Fecha'];
                            $Hora = $acto['Hora'];
                            $eventMonth = date('n', strtotime($Fecha));
                            $eventYear = date('Y', strtotime($Fecha));
                            $currentMonth = date('n');
                            $currentYear = date('Y');
                            if ($eventMonth === $currentMonth && $eventYear === $currentYear) {
                                $diasActosInscritos[] = date('j', strtotime($Fecha));
                                $horasActosInscritos[] = date('H:i', strtotime($Hora));
                            }
                        }
                    }
                }
            }
            
            // Crear un array para almacenar las fechas de los eventos
            $actosTotales = obtenerActos();
            $diasActos = array();
            $horasActos = array();

            if ($actosTotales && is_iterable($actosTotales)) {
                foreach ($actosTotales as $acto) {
                    $Fecha = $acto['Fecha'];
                    $Hora = $acto['Hora'];
                    $currentMonth = date('n');
                    $currentYear = date('Y');
                    $eventMonth = date('n', strtotime($Fecha));
                    $eventYear = date('Y', strtotime($Fecha));
                    if ($eventMonth === $currentMonth && $eventYear === $currentYear) {
                        $diasActos[] = date('j', strtotime($Fecha));
                        $horasActos[] = date('H:i', strtotime($Hora)); 
                    }
                }
            }

            foreach($horasActosInscritos as $index => $hora) {
                if(isset($diasActosInscritos[$index])) {
                    $combinacionInscritos[] = array('hora' => $hora, 'dia' => $diasActosInscritos[$index]);
                }
            }
            
            // Combinar horasActos con diasActos
            foreach($horasActos as $index => $hora) {
                if(isset($diasActos[$index])) {
                    $combinacionActos[] = array('hora' => $hora, 'dia' => $diasActos[$index]);
                }
            }

            $view = $_GET['view'];
/**************************************************************************************************************************************** */
            if ($view === 'mes') {
         
                echo "<div class='calendar mt-5'>";
                // Obtener el mes actual y el año
                $month = date('n');
                $year = date('Y');

                // Obtener el primer día del mes
                $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);

                // Obtener el número de días en el mes
                $numberDays = date('t', $firstDayOfMonth);

                // Obtener el día de la semana del primer día del mes
                $dayOfWeekIndex = date('w', $firstDayOfMonth);

                // Nombres de los meses y días de la semana
                $monthNames = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
                $dayOfWeek = array('Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom');

                // Crear el encabezado del calendario
                echo "<div class='calendar mt-5'>";
                echo "<h2 class='text-center mb-4'>{$monthNames[$month - 1]} $year</h2>";
                echo "<table class='table table-bordered'>";
                echo "<tr>";
                foreach ($dayOfWeek as $day) {
                    echo "<th scope='col'>$day</th>";
                }
                echo "</tr>";

                echo "<tr>";
                // Rellenar los espacios en blanco hasta el primer día del mes
                for ($i = 0; $i < $dayOfWeekIndex; $i++) {
                    echo "<td></td>";
                }

                // Mostrar los días del mes
                for ($day = 1; $day <= $numberDays; $day++, $dayOfWeekIndex++) {
                    // Verificar si el día actual coincide con un evento y resaltar en verde si es así
                    $isEventDay = in_array($day, $diasActos);
                    $isGreenEventDay = in_array($day, $diasActosInscritos);
                    $cellClass = $isEventDay ? ($isGreenEventDay ? 'event-day-green' : 'event-day') : '';

                    if ($dayOfWeekIndex % 7 == 0) {
                        echo "</tr><tr>";
                    }

                    // Agregar la clase CSS para el estilo de los días con eventos
                    echo "<td class='$cellClass'>$day</td>";
                }

                // Rellenar los espacios restantes hasta el final de la semana
                while ($dayOfWeekIndex % 7 != 0) {
                    echo "<td></td>";
                    $dayOfWeekIndex++;
                }

                echo "</tr></table>";
                echo "</div>";
/**************************************************************************************************************************************** */
            } elseif ($view === 'semana') {
                echo "<div class='container mt-5 semana'>";
                echo "<h2 class='mb-5'>Horario para la semana actual</h2>";
                echo "<div class='week row no-gutters'>";
               
                $currentDate = date('Y-m-d'); // Obtener la fecha actual
                
                for ($i = 0; $i <= 6; $i++) {
                    $day = date('Y-m-d', strtotime("+$i days", strtotime($currentDate))); // Obtener la fecha del día actual
                
                    echo "<div class='col-lg-auto day mt-3'>"; // Agregar la clase mt-3 para el margen superior
                    echo "<h4 class='mb-3 p-2'>$day</h4>";
                
                    echo "<table class='table table-bordered'>";
                    echo "<tbody>";
                
                    for ($hour = 8; $hour <= 24; $hour++) {
                        $hourFormatted = str_pad($hour, 2, '0', STR_PAD_LEFT) . ":00";
                        $datetime = $day . ' ' . $hourFormatted; // Combinar el día y la hora en una cadena de fecha/hora
                
                        $cellClass = '';
                
                        // Obtener solo la hora de la fecha/hora actual
                        $hourDatetime = date('H', strtotime($datetime));
                        
                        if(isset($combinacionActos) && !empty($combinacionActos)){
                            foreach ($combinacionActos as $combinacion) {
                                $combinacionDay = $combinacion['dia'];
                                $combinacionHour = date('H', strtotime($combinacion['hora'])); // Obtener solo la hora sin minutos
                                $dayOfMonth = date('j', strtotime($day));
                                if ($combinacionDay === $dayOfMonth && $combinacionHour === $hourDatetime) {
                                    $cellClass = 'red-cell'; 
                                    break; // Puedes detener el bucle una vez que encuentres la coincidencia
                                }
                            }
                        }

                        if(isset($combinacionInscritos) && !empty($combinacionInscritos)){
                            foreach ($combinacionInscritos as $combinacion) {
                                $combinacionDay = $combinacion['dia'];
                                $combinacionHour = date('H', strtotime($combinacion['hora'])); // Obtener solo la hora sin minutos
                                $dayOfMonth = date('j', strtotime($day));
                                if ($combinacionDay === $dayOfMonth && $combinacionHour === $hourDatetime) {
                                    $cellClass = 'green-cell'; 
                                    break; // Puedes detener el bucle una vez que encuentres la coincidencia
                                }
                            }
                        }

                
                        echo "<tr>";
                        echo "<td class='$cellClass'>$hourFormatted</td>";
                        echo "</tr>";
                    }
                
                    echo "</tbody>";
                    echo "</table>";
                    echo "</div>";
                }
                echo "</div>";
/**************************************************************************************************************************************** */
            } elseif ($view === 'dia') {

                echo "<div class='container mt-5 dia'>";
                echo "<h2 class='mb-5'>Horario para el día actual</h2>";
                echo "<table class='table table-bordered'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>Hora</th>";
                echo "<th>Actividad</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

                date_default_timezone_set('Europe/Madrid'); // Establecer la zona horaria de Madrid
                $currentDate = date('Y-m-d'); // Obtener la fecha actual

                for ($hour = 8; $hour <= 24; $hour++) {
                    $currentDateTime = $currentDate . " " . str_pad($hour, 2, "0", STR_PAD_LEFT) . ":00:00";
    
                    $isInscrito = false;
                    $isActo = false;
                    
                    $currentDay = date('Y-m-d', strtotime($currentDateTime)); // Obtener la fecha actual
                    
                    $diaMostrar = "";
                    $horaMostrar = "";
                    
                    // Verificar si la hora coincide con $combinacionActos[]
                    if(isset($combinacionActos) && !empty($combinacionActos)){
                        foreach ($combinacionActos as $acto) {
                            $actoHora = date('H', strtotime($acto['hora'])); // Obtener solo la hora en formato de 24 horas
                            $currentHora = date('H', strtotime($currentDateTime));
                            if ($acto['dia'] === date('d', strtotime($currentDateTime)) && $actoHora === $currentHora) {
                                $isActo = true;
                                $horaMostrar = $acto['hora'];
                                break;
                            }
                        }
                    }

                    // Verificar si la hora coincide con $combinacionInscritos[]
                    if(isset($combinacionInscritos) && !empty($combinacionInscritos)){
                        foreach ($combinacionInscritos as $inscrito) {
                            $inscritoHora = date('H', strtotime($inscrito['hora'])); // Obtener solo la hora en formato de 24 horas
                            $currentHora = date('H', strtotime($currentDateTime));
                            if ($inscrito['dia'] === date('d', strtotime($currentDateTime)) && $inscritoHora === $currentHora) {
                                $isInscrito = true;
                                $horaMostrar = $inscrito['hora'];
                                break;
                            }
                        }
                    }
                    $tituloDia = "";
                    //Recupero el titulo del evento por el dia y la hora
                    if($isInscrito){
                        $titulos = obtenerTitulo($currentDate,$horaMostrar);
                        foreach($titulos as $titulo){
                            $tituloDia = $titulo['Titulo'];
                        }
                    }
                    elseif ($isActo) {
                        $titulos = obtenerTituloPorDia($currentDate,$horaMostrar);
                        foreach($titulos as $titulo){
                            $tituloDia = $titulo['Titulo'];
                        }
                    }

                    // Imprimir la hora con el estilo correspondiente
                    echo "<tr>";
                    if ($isInscrito) {
                        echo "<td style='background-color: lightgreen;; font-weight: bold;'>" . date('H:00', strtotime($currentDateTime)) . "</td>";
                        echo "<td>". $tituloDia ."</td>";
                    } elseif ($isActo) {
                        echo "<td style='background-color: lightcoral; font-weight: bold;'>" . date('H:00', strtotime($currentDateTime)) . "</td>";
                        echo "<td>". $tituloDia ."</td>";
                    } else {
                        echo "<td>" . date('H:00', strtotime($currentDateTime)) . "</td>";
                        echo "<td> ---- </td>";
                    }
                    echo "</tr>";
                }

                echo"</tbody>";
                echo"</table>";
                echo "</div>";

            }
        }
        ?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
