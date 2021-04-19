
<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                  <img src="Assets/img/login.png" width="100%">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">¡Bienvenido de Nuevo!</h1>
                  </div>
                  <form class="user" action="?a=validateLogin" method="POST">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Correo Electronico">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="contraseña">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Recordar mis Datos</label>
                      </div>
                    </div>
                      <button type="submit" class="btn btn-primary btn-user btn-block">Iniciar Sesión</button>

                    <!--
                    <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>
                  </form>
                    -->
                  <hr>
                  <div class="text-center">
                    <a class="small" href="?a=ForgotPassword">¿Se te Olvido tu Contraseña?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="?a=Register">¿No Tienes Cuenta? Create una!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <?php
  if (isset($_REQUEST['toast']) && $_REQUEST['toast']==1 ){

      ?>

      <script>
          Command: toastr["error"]("Las Datos Ingresados NO son Validos.", "Error al Iniciar Sesión")

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
          Command: toastr["error"]("Por Favor, Rellena Todos los Campos.", "Error al Iniciar Sesion")

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

  <?php } ?>

</body>

</html>
