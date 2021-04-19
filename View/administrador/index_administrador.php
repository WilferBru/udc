<?php

/*
 *****INDICE*****

 * CARDS
    $no_registrados
    $administrativos
    $registrados
    $encuestas


 */

$user['name'] = $_SESSION['name'];
$user['lastName'] = $_SESSION['lastName'];
$rows = $_SESSION['index'];
$consultas = array('estudiantes_pendientes', 'administrativos', 'estudiantes_registrados', 'encuestas_realizadas', 'SI', 'CC', 'MEI', 'MMI', 'AQI', 'OPI', 'hombre', 'mujer');
$i=0;

  foreach ($rows AS $number1){
      foreach ($number1 AS $number2){
          foreach ($number2 AS $row){
              ${$consultas[$i]} = $row;
              $i++;
          }
      }
  }

  if ($_SESSION['rol'] == 'administrador')
  { ?>

      <body id="page-top">

          <!-- Page Wrapper -->
          <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

              <!-- Sidebar - Brand -->
              <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                 <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">UdC+</div>
              </a>

              <!-- Divider -->
              <hr class="sidebar-divider my-0">

              <!-- Nav Item - Dashboard -->
              <li class="nav-item active">
                  <a class="nav-link" href="index.php">
                      <i class="fas fa-fw fa-tachometer-alt"></i>
                      <span>Inicio</span></a>
              </li>

              <!-- Divider -->
              <hr class="sidebar-divider">

              <!-- Heading -->
              <div class="sidebar-heading">
                Panel de Control
              </div>

              <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  <i class="fas fa-fw fa-cog"></i>
                  <span>Utilidades</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Opciones:</h6>
                    <a class="collapse-item" href="?a=registrarUsuario">Registrar Usuario</a>
                    <a class="collapse-item" href="?a=consultarEstudiante">Consultar Estudiante</a>
                      <a class="collapse-item" href="?a=consultarAdministrativos">Consultar Administrativos</a>
                  </div>
                </div>
              </li>

              <!-- Nav Item - Utilities Collapse Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                  <i class="fas fa-fw fa-wrench"></i>
                  <span>Ajustes Base de Datos</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Opciones:</h6>
                    <a class="collapse-item" href="?a=tablaEstudiantes">Tabla de Estudiantes</a>
                    <a class="collapse-item" href="?a=tablaAdministrativos">Tabla de Administrativos</a>
                  </div>
                </div>
              </li>

              <!-- Divider -->
              <hr class="sidebar-divider">

              <!-- Heading -->
              <div class="sidebar-heading">
                Datos de Encuesta
              </div>

              <!-- Nav Item - Tables -->
              <li class="nav-item">
                <a class="nav-link" href="?a=consultarEncuesta">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Consultar Encuesta</span></a>
              </li>

              <!-- Divider -->
              <hr class="sidebar-divider d-none d-md-block">

              <!-- Sidebar Toggler (Sidebar) -->
              <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
              </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

              <!-- Main Content -->
              <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                  </button>

                    <!-- Topbar Search --> <!--Pestaña de busqueda-->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                      <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                      </a>
                      <!-- Dropdown - Messages -->
                      <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                          <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                      <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter">1<!-- Número de mensajes --></span>
                      </a>
                      <!-- Dropdown - Alerts -->
                      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                          Notificaciones
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                          <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTL2zkWaXZLxmlVo40GupCiIfRY_R7LKt6dYHMX4ju_HOL94fid&usqp=CAU" alt=""> <!-- Imagen del autor -->
                            <div class="status-indicator bg-success"></div>
                          </div>
                          <div>
                            <div class="small text-gray-500"><?php $date=getdate(); ?> <?=$date['month']?> <?=$date['mday']?>, <?=$date['year']?> <!-- Fecha de Generación --> </div>
                            <span class="font-weight-bold">Felicidades <?=$_SESSION['name']?>! Ya eres parte de UdC+ <!-- Mensaje de notificacion --></span>
                          </div>
                        </a>
                        
                        <a class="dropdown-item text-center small text-gray-500" href="#">Ver Más</a>
                      </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                      <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-envelope fa-fw"></i>
                        <!-- Counter - Messages -->
                        <span class="badge badge-danger badge-counter">1<!-- Número de mensajes --></span>
                      </a>
                      <!-- Dropdown - Messages -->
                      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                        <!-- Notificaciones -->
                        <h6 class="dropdown-header">
                          Mensajes
                        </h6>
                        
                        <a class="dropdown-item d-flex align-items-center" href="#">
                          <div class="dropdown-list-image mr-2">
                            <img class="rounded-circle" src="https://revelationvr0.files.wordpress.com/2019/11/714c9-4417.jpg" alt=""> <!-- Imagen del autor -->
                            <div class="status-indicator bg-success"></div>
                          </div>
                          <div>
                            <span class="text-truncate"> Hola <?=$_SESSION['name']?>! Bienvenido a UdC+<!-- Mensaje --></span>
                            <div class="small text-gray-500"> Juan García<!-- Autor del Mensaje --> · Hace 1 minuto<!-- Fecha de notificacion --></div>
                          </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Ver Más </a>
                      </div>
                    </li>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$user['name']?> <?=$user['lastName']?></span>
                        <i class="fas fa-user-circle fa-3x" style="color: #4A6EFF;"></i>
                      </a>
                      <!-- Dropdown - User Information -->
                      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                          <a class="dropdown-item" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                              Perfil
                          </a>
                      <!--<div class="dropdown-menu align-baseline">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Separated link</a>
                          </div>-->

                        <a class="dropdown-item" href="#" id="configuracion">
                          <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                          Configuración
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                          Salir
                        </a>
                      </div>

                    </li>

                  </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Novedades</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#BuzonDeSugerencias"><i class="fas fa-download fa-sm text-white-50"></i> Buzón de Sugerencias</a>
                        </div>

                    </div>

                <!-- /.container-fluid -->
                <div class="container-fluid">

                        <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Estudiantes Pendientes</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$estudiantes_pendientes?></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Administrativos</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$administrativos?></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Estudiantes Registrados</div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$estudiantes_registrados?></div>
                                                    </div>
                                                    <!-- <div class="col">
                                                            <div class="progress progress-sm mr-2">
                                                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>-->
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Encuestas Realizadas</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$encuestas_realizadas?></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <!-- Area Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Programas de Formación</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <canvas id="myAreaChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-5">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Generos</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-pie pt-4 pb-2">
                                            <canvas id="myPieChart"></canvas>
                                        </div>
                                        <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                          <i class="fas fa-circle text-primary"></i> Hombres
                                        </span>
                                            <span class="mr-2">
                                          <i class="fas fa-circle text-danger"></i> Mujeres
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>

              </div>
              <!-- End of Main Content --> 

              <!-- Footer -->
              <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                    <span>Copyright &copy; UdC+ 2020</span>
                  </div>
                </div>
              </footer>
              <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

          </div>
          <!-- End of Page Wrapper -->

          <!-- Scroll to Top Button-->
          <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
          </a>

          <!-- Logout Modal-->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">¿Deseas Salir?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">¿Estas seguro de abandonar esta pagina?</div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                  <a class="btn btn-primary" href="model/destruir_sesion.php">Salir</a>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="BuzonDeSugerencias" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Buzon de Sugerencias</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <form action="?a=buzonDeSugerencias" method="post">
                              <div class="form-group">
                                  <label for="email" class="col-form-label">Para:</label>
                                  <input type="text" class="form-control" id="email" name="email" value="Soporte Tecnico de UdC+" readonly>
                              </div>

                              <div class="form-group">
                                  <label for="asunto" class="col-form-label">Asunto:</label>
                                  <select name="asunto" id="asunto" class="form-control">
                                      <option class="form-control" id="asunto" name="edad" value="Pregunta">Pregunta</option>
                                      <option class="form-control" id="asunto" name="edad" value="Queja">Queja</option>
                                      <option class="form-control" id="asunto" name="edad" value="Reclamo">Reclamo</option>
                                      <option class="form-control" id="asunto" name="edad" value="sugerencia">Sugerencia</option>
                                  </select>
                              </div>

                              <div class="form-group">
                                  <label for="sugerencia" class="col-form-label">Mensaje:</label>
                                  <textarea class="form-control" id="sugerencia" name="sugerencia" placeholder="¿Tienes un problema? Háznoslo saber..." required></textarea>
                              </div>

                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                      </div>

                      </form>

                  </div>
              </div>
          </div>

          <script type="text/javascript">
              // Set new default font family and font color to mimic Bootstrap's default styling
              Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
              Chart.defaults.global.defaultFontColor = '#858796';

              function number_format(number, decimals, dec_point, thousands_sep) {
                  // *     example: number_format(1234.56, 2, ',', ' ');
                  // *     return: '1 234,56'
                  number = (number + '').replace(',', '').replace(' ', '');
                  var n = !isFinite(+number) ? 0 : +number,
                      prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                      sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                      dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                      s = '',
                      toFixedFix = function(n, prec) {
                          var k = Math.pow(10, prec);
                          return '' + Math.round(n * k) / k;
                      };
                  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
                  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
                  if (s[0].length > 3) {
                      s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
                  }
                  if ((s[1] || '').length < prec) {
                      s[1] = s[1] || '';
                      s[1] += new Array(prec - s[1].length + 1).join('0');
                  }
                  return s.join(dec);
              }

              // Area Chart Example
              var ctx = document.getElementById("myAreaChart");
              var myLineChart = new Chart(ctx, {

                  type: 'line',
                  data: {
                      labels: ["S.I", "C.C", "M.E.I", "M.M.I", "A.Q.I", "O.P.I"],
                      datasets: [{
                          label: "Estudiantes inscritos: ",
                          lineTension: 0.3,
                          backgroundColor: "rgba(78, 115, 223, 0.05)",
                          borderColor: "rgba(78, 115, 223, 1)",
                          pointRadius: 3,
                          pointBackgroundColor: "rgba(78, 115, 223, 1)",
                          pointBorderColor: "rgba(78, 115, 223, 1)",
                          pointHoverRadius: 3,
                          pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                          pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                          pointHitRadius: 10,
                          pointBorderWidth: 2,
                          data: [<?=$SI?>, <?=$CC?>, <?=$MEI?>, <?=$MMI?>, <?=$AQI?>, <?=$OPI?>],
                      }],
                  },
                  options: {
                      maintainAspectRatio: false,
                      layout: {
                          padding: {
                              left: 10,
                              right: 25,
                              top: 25,
                              bottom: 0
                          }
                      },
                      scales: {
                          xAxes: [{
                              time: {
                                  unit: 'date'
                              },
                              gridLines: {
                                  display: false,
                                  drawBorder: false
                              },
                              ticks: {
                                  maxTicksLimit: 7
                              }
                          }],
                          yAxes: [{
                              ticks: {
                                  maxTicksLimit: 5,
                                  padding: 10,
                                  // Include a dollar sign in the ticks
                                  callback: function(value, index, values) {
                                      return '$' + number_format(value);
                                  }
                              },
                              gridLines: {
                                  color: "rgb(234, 236, 244)",
                                  zeroLineColor: "rgb(234, 236, 244)",
                                  drawBorder: false,
                                  borderDash: [2],
                                  zeroLineBorderDash: [2]
                              }
                          }],
                      },
                      legend: {
                          display: false
                      },
                      tooltips: {
                          backgroundColor: "rgb(255,255,255)",
                          bodyFontColor: "#858796",
                          titleMarginBottom: 10,
                          titleFontColor: '#6e707e',
                          titleFontSize: 14,
                          borderColor: '#dddfeb',
                          borderWidth: 1,
                          xPadding: 15,
                          yPadding: 15,
                          displayColors: false,
                          intersect: false,
                          mode: 'index',
                          caretPadding: 10,
                          callbacks: {
                              label: function(tooltipItem, chart) {
                                  var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                  return datasetLabel + number_format(tooltipItem.yLabel);
                              }
                          }
                      }
                  }
              });

          </script>

          <!-- Page level plugins -->
          <script type="text/javascript" >
              // Set new default font family and font color to mimic Bootstrap's default styling
              Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
              Chart.defaults.global.defaultFontColor = '#858796';

              // Pie Chart Example
              var ctx = document.getElementById("myPieChart");
              var myPieChart = new Chart(ctx, {
                  type: 'doughnut',
                  data: {
                      labels: ["Hombres", "Mujeres"],
                      datasets: [{
                          data: [<?=$hombre?>, <?=$mujer?>],
                          backgroundColor: ['#4e73df', '#fa5882'],
                          hoverBackgroundColor: ['#2e59d9', '#FE2E70'],
                          hoverBorderColor: "rgba(234, 236, 244, 1)",
                      }],
                  },
                  options: {
                      maintainAspectRatio: false,
                      tooltips: {
                          backgroundColor: "rgb(255,255,255)",
                          bodyFontColor: "#858796",
                          borderColor: '#dddfeb',
                          borderWidth: 1,
                          xPadding: 15,
                          yPadding: 15,
                          displayColors: false,
                          caretPadding: 10,
                      },
                      legend: {
                          display: false
                      },
                      cutoutPercentage: 80,
                  },
              });

          </script>

      </body>

    </html>

<?php 
  }else{
    header('location: ../../index.php');
  } 
?>

