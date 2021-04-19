<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block"><img src="assets/img/register.jpg" width="110%" height="100%"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">¡Create una cuenta!</h1>
              </div>
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

                  <button type="submit" class="btn btn-primary btn-user btn-block">Registrase</button>

                <!--
                <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
              -->
              </form>
              <hr>

              <div class="text-center">
                <a class="small" href="index.php">¿Ya Tienes Cuenta? Inicia Sesion!</a>
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
          Command: toastr["error"]("Las Contraseñas NO Coinciden.", "Datos No validos")

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
