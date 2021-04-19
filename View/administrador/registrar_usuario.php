<?php

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
                <li class="nav-item active">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Utilidades</span>
                    </a>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Opciones:</h6>
                            <a class="collapse-item active" href="?a=registrarUsuario">Registrar Usuario</a>
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

                        <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-800 text-center"> Registrar Usuario en UdC+</h1>

                    </div>

                    <!-- /.container-fluid -->
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="text-center">
                                <img src="assets/img/undraw_posting_photo.svg" style="width: 20%">
                            </div>
                            <div class="col-lg-10">
                                <div class="p-3">
                                    <form class="user" action="?a=validateRegister" method="POST">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nombres" maxlength="50">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-user" id="lastName" name="lastName" placeholder="Apellidos" maxlength="50">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="number" class="form-control form-control-user" id="identificacion" name="identificacion" placeholder="Número de Identificacion" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control form-control-user" id="phone" name="phone" placeholder="Número de Celular" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Correo Electronico" maxlength="50">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Contraseña (Maximo 15 caracteres)" maxlength="15">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control form-control-user" id="repeatPassword" name="repeatPassword" placeholder="Repetir Contraseña" maxlength="15">

                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">Registrar Usuario</button>
                                    </form>
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

            <?php
            if (isset($_REQUEST['toast']) && $_REQUEST['toast']==1 ){

                ?>

                <script>
                    Command: toastr["error"]("El Correo Ingresado Ya se Encuenta en Uso.", "Error al Registrar Usuario")

                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                </script>

            <?php }elseif (isset($_REQUEST['toast']) && $_REQUEST['toast']==2 ){

            ?>

                <script>
                    Command: toastr["error"]("Por favor, Rellene Todos los Campos e Intente de Nuevo.", "Error al Registrar Usuario")

                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                </script>

            <?php }elseif (isset($_REQUEST['toast']) && $_REQUEST['toast']==3 ){

            ?>

                <script>
                    Command: toastr["error"]("Lo Sentimos... Pero tu identificacion no se encuentra en la base de datos. En Caso de que Seas Estudiante de la UdC, comunicate con un administrador.", "Usuario no Valido")

                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                </script>

            <?php }elseif (isset($_REQUEST['toast']) && $_REQUEST['toast']==4 ){

            ?>

                <script>
                    Command: toastr["error"]("Hemos Detectado que ya te encuentras registrado, Si no es asi intenta registrarte nuevamente. Si el problema persiste comunicate con un Administrador.", "Error de Registro")

                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                </script>

            <?php }elseif (isset($_REQUEST['toast']) && $_REQUEST['toast']==5 ){

            ?>

                <script>
                    Command: toastr["error"]("Las Contraseñas no Coinciden.", "Error de Registro")

                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                </script>

            <?php }elseif (isset($_REQUEST['toast']) && $_REQUEST['toast']==6 ){

                ?>

                <script>
                    Command: toastr["success"]("El Usuario Ha Sido Registrado Exitosamente en UdC+", "¡Usuario Registrado! :D")

                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-bottom-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                </script>

            <?php } ?>
        

    </body>

    </html>

    <?php
}else{
    header('location: index.php');
}
?>