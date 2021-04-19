<?php

$input1 = array('nombre', 'apellido', 'edad', 'asignaturas_matriculadas','fecha_graduacion', 'direccion', 'profecion_padre', 'profecion_madre');
$input2 = array('nombre_genero','nombre_estado_civil', 'nombre_nivel_ingresos', 'nombre_programa_formacion', 'nombre_tipo_institucion_procedencia', 'nombre_calificacion_nivel_educacion', 'nombre_barrio', 'nombre_tipo_vivienda', 'nombre_nivel_educativo_padres', 'nombre_nivel_educativo_padres');
$input3 = array('genero','estado_civil', 'nivel_ingresos', 'programa_formacion', 'tipo_institucion_procedencia', 'calificacion_nivel_educacion', 'barrio', 'tipo_vivienda', 'nivel_educativo_padre', 'nivel_educativo_madre');

$a = 1;
$r = $this->model->visualizarEncuesta($_REQUEST['id']);

for ($i=0; $i < count($input1);$i++){

    ${$input1[$i]} = $r[0][0][$input1[$i]];

}

for ($i=0; $i < count($input2);$i++){

    ${$input3[$i]} = $r[$a][0][$input2[$i]];
    $a++;
}

if ($_SESSION['rol']=='administrador')
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
            <li class="nav-item">
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
            <li class="nav-item active">
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$_SESSION['name']?> <?=$_SESSION['lastName']?></span>
                                <i class="fas fa-user-circle fa-3x" style="color: #4A6EFF;"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
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

                    <a class="btn btn-primary float-right" href="?a=consultarEncuesta">Volver</a>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800 text-center"> Visualizacion de Encuesta </h1>

                </div>

                <!-- /.container-fluid -->
                <div class="container-fluid">

                    <form class="user">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="nombre">Nombres:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" maxlength="50" placeholder="Nombre Completo" value="<?=$nombre?>" readonly>
                                </div>
                                <div class="col-sm-4">
                                    <label for="apellido">Apellidos:</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido" maxlength="50" placeholder="Apellido Completo" value="<?=$apellido?>" readonly>
                                </div>
                                <div class="col-sm-4">
                                    <label for="edad">Fecha de nacimiento:</label>
                                    <input type="date" class="form-control" id="edad" name="edad" value="<?=$edad?>" readonly>
                                </div>

                                <div class="col-sm-4"><br>
                                    <label for="genero">Genero: </label>
                                    <select name="genero" id="genero" class="form-control" readonly="">
                                        <option><?=$genero?></option>
                                    </select>
                                </div>
                                <div class="col-sm-4"><br>
                                    <label for="estado_civil">Estado Civil: </label>
                                    <select name="estado_civil" id="estado_civil" class="form-control" readonly>
                                        <option><?=$estado_civil?></option>
                                    </select>
                                </div>
                                <div class="col-sm-4"><br>
                                    <label for="nivel_ingresos">Nivel de Ingresos: </label>
                                    <select name="nivel_ingresos" id="nivel_ingresos" class="form-control" readonly>
                                        <option><?=$nivel_ingresos?></option>
                                    </select>
                                </div>

                                <div class="col-sm-6"><br>
                                    <label for="programa_formacion">Programa de Formación: </label>
                                    <select name="programa_formacion" id="programa_formacion" class="form-control" readonly>
                                        <option><?=$programa_formacion?></option>
                                    </select>
                                </div>
                                <div class="col-sm-6"><br>
                                    <label for="asignaturas_matriculadas">¿En Cuantas asignaturas Estas Maticulado?</label>
                                    <input type="number" class="form-control" id="asignaturas_matriculadas" name="asignaturas_matriculadas" maxlength="1" value="<?=$asignaturas_matriculadas?>" READONLY>
                                </div>
                                <div class="col-sm-4"><br>
                                    <label for="tipo_institucion_procedencia">Tipo de Institucion de Procedencia: </label>
                                    <select name="tipo_institucion_procedencia" id="tipo_institucion_procedencia" class="form-control" readonly>
                                        <option><?=$tipo_institucion_procedencia?></option>
                                    </select>
                                </div>
                                <div class="col-sm-5"><br>
                                    <label for="calificacion_nivel_educacion">¿Como Calificas Nuestro Nivel de Educación? </label>
                                    <select name="calificacion_nivel_educacion" id="calificacion_nivel_educacion" class="form-control" readonly>
                                        <option><?=$calificacion_nivel_educacion?></option>
                                    </select>
                                </div>
                                <div class="col-sm-3"><br>
                                    <label for="fecha_graduacion">Año de Graduación:</label>
                                    <select class="form-control" id="fecha_graduacion" name="fecha_graduacion" readonly>
                                        <option><?=$fecha_graduacion?></option>
                                    </select>

                                </div>
                                <div class="col-sm-5"><br>
                                    <label for="barrio">¿En Cual Barrio Vives? </label>
                                    <select name="barrio" id="barrio" class="form-control" readonly>
                                        <option><?=$barrio?></option>
                                    </select>
                                </div>
                                <div class="col-sm-7"><br>
                                    <label for="direccion">Dirección:</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" maxlength="50" value="<?=$direccion?>" readonly>
                                </div>
                                <div class="col-sm-4"><br>
                                    <label for="tipo_vivienda">Tipo de Vivienda: </label>
                                    <select name="tipo_vivienda" id="tipo_vivienda" class="form-control" readonly>
                                        <option><?=$tipo_vivienda?></option>
                                    </select>
                                </div>
                                <div class="col-sm-4"><br>
                                    <label for="nivel_educativo_padre">Nivel Educativo del Padre: </label>
                                    <select name="nivel_educativo_padre" id="nivel_educativo_padre" class="form-control" readonly>
                                        <option><?=$nivel_educativo_padre?></option>
                                    </select>
                                </div>
                                <div class="col-sm-4"><br>
                                    <label for="nivel_educativo_madre">Nivel educativo de la Madre: </label>
                                    <select name="nivel_educativo_madre" id="nivel_educativo_madre" class="form-control" readonly>
                                        <option><?=$nivel_educativo_madre?></option>
                                    </select>
                                </div>
                                <div class="col-sm-6"><br>
                                    <label for="profecion_padre">¿Cual es la Profeción de tu Padre?</label>
                                    <input type="text" class="form-control" id="profecion_padre" name="profecion_padre" maxlength="50" value="<?=$profecion_padre?>" readonly>
                                </div>
                                <div class="col-sm-6"><br>
                                    <label for="profecion_madre">¿Cual es la Profeción de tu Madre?</label>
                                    <input type="text" class="form-control" id="profecion_madre" name="profecion_madre" maxlength="50" value="<?=$profecion_madre?>" readonly>
                                </div>

                            </div>
                        </form>

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

    </body>

    </html>

    <?php
}else{
    header('location: ./login.php');
}
?>

