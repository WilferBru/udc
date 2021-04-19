<?php

$date=getdate();

  if ($_SESSION['encuesta']==0 && $_SESSION['rol']=='estudiante') {

 ?> 

  <body class="bg-gradient-primary">

    <div class="container">

      <!-- Outer Row -->
      <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                  <div class="p-5">
                    <div class="text-center">
                      <h2 class="h2 text-gray-900 mb-4">¡Bienvenido Universitario!</h2>
                      <p class="text-gray-900 mb-4">Ya que eres parte de la Universidad de Cartagena, necesitamos que nos ayudes respondiendo la siguiente encuesta.</p>
                    </div>
                    <form class="user" action="?a=subirEncuesta" method="POST">
                      <div class="form-group row">
                        <div class="col-sm-4">
                          <label for="nombre">Nombres:</label>
                          <input type="text" class="form-control" id="nombre" name="nombre" maxlength="50" placeholder="Nombre Completo">
                        </div>
                        <div class="col-sm-4">
                          <label for="apellido">Apellidos:</label>
                          <input type="text" class="form-control" id="apellido" name="apellido" maxlength="50" placeholder="Apellido Completo">
                        </div>
                        <div class="col-sm-4">
                          <label for="edad">Fecha de nacimiento:</label>
                          <input type="date" class="form-control" id="edad" name="edad">
                        </div>
                                         
                        <div class="col-sm-4"><br>
                          <label for="genero">Genero: </label>
                          <select name="genero" id="genero" class="form-control">

                              <?php

                              $i=1;
                              foreach ($genero AS $number){
                                  foreach ($number AS $row){ ?>

                                          <option class="form-control" id="edad" name="edad" value="<?=$i?>"><?=$row?></option>

                                      <?php
                                      $i++;
                                  }
                              } ?>
                              
                          </select>
                        </div>
                        <div class="col-sm-4"><br>
                          <label for="estado_civil">Estado Civil: </label>
                          <select name="estado_civil" id="estado_civil" class="form-control">

                              <?php

                              $i=1;
                              foreach ($estado_civil AS $number){
                                  foreach ($number AS $row){ ?>

                                      <option class="form-control" id="edad" name="edad" value="<?=$i?>"><?=$row?></option>

                                      <?php
                                      $i++;
                                  }
                              } ?>
                              
                          </select>
                        </div>
                        <div class="col-sm-4"><br>
                          <label for="nivel_ingresos">Nivel de Ingresos: </label>
                          <select name="nivel_ingresos" id="nivel_ingresos" class="form-control">

                              <?php

                              $i=1;
                              foreach ($nivel_ingresos AS $number){
                                  foreach ($number AS $row){ ?>

                                      <option class="form-control" id="edad" name="edad" value="<?=$i?>"><?=$row?></option>

                                      <?php
                                      $i++;
                                  }
                              } ?>
                              
                          </select>
                        </div>
                        
                        <div class="col-sm-6"><br>
                          <label for="programa_formacion">Programa de Formación: </label>
                          <select name="programa_formacion" id="programa_formacion" class="form-control">

                              <?php

                              $i=1;
                              foreach ($programa_formacion AS $number){
                                  foreach ($number AS $row){ ?>

                                      <option class="form-control" id="edad" name="edad" value="<?=$i?>"><?=$row?></option>

                                      <?php
                                      $i++;
                                  }
                              } ?>
                              
                          </select>
                        </div>
                        <div class="col-sm-6"><br>
                          <label for="asignaturas_matriculadas">¿En Cuantas asignaturas Estas Maticulado?</label>
                            <select name="asignaturas_matriculadas" id="asignaturas_matriculadas" class="form-control">
                                <?php

                                for ($i=1;$i<=9;$i++){?>

                                        <option value="<?=$i?>"><?=$i?></option>

                                    <?php
                                } ?>
                            </select>
                        </div>
                        <div class="col-sm-4"><br>
                          <label for="tipo_institucion_procedencia">Tipo de Institucion de Procedencia: </label>
                          <select name="tipo_institucion_procedencia" id="tipo_institucion_procedencia" class="form-control">

                              <?php

                              $i=1;
                              foreach ($tipo_institucion_procedencia AS $number){
                                  foreach ($number AS $row){ ?>

                                      <option class="form-control" id="edad" name="edad" value="<?=$i?>"><?=$row?></option>

                                      <?php
                                      $i++;
                                  }
                              } ?>
                              
                          </select>
                        </div>
                        <div class="col-sm-5"><br>
                          <label for="calificacion_nivel_educacion">¿Como Calificas Nuestro Nivel de Educación? </label>
                          <select name="calificacion_nivel_educacion" id="calificacion_nivel_educacion" class="form-control">

                              <?php

                              $i=1;
                              foreach ($calificacion_nivel_educacion AS $number){
                                  foreach ($number AS $row){ ?>

                                      <option class="form-control" id="edad" name="edad" value="<?=$i?>"><?=$row?></option>

                                      <?php
                                      $i++;
                                  }
                              } ?>
                              
                          </select>
                        </div>
                        <div class="col-sm-3"><br>
                          <label for="fecha_graduacion">Año de Graduación:</label>
                          <select class="form-control" id="fecha_graduacion" name="fecha_graduacion">

                              <?php

                              for ($i=$date['year'];$i>=1970;$i--){ ?>

                                      <option value="<?=$i?>"><?=$i?></option>

                        <?php } ?>
                          </select>

                        </div>
                        <div class="col-sm-5"><br>
                          <label for="barrio">¿En Cual Barrio Vives? </label>
                          <select name="barrio" id="barrio" class="form-control">

                              <?php

                              $i=1;
                              foreach ($barrio AS $number){
                                  foreach ($number AS $row){ ?>

                                      <option class="form-control" id="edad" name="edad" value="<?=$i?>"><?=$row?></option>

                                      <?php
                                      $i++;
                                  }
                              } ?>
                              
                          </select>
                        </div>
                        <div class="col-sm-7"><br>
                          <label for="direccion">Dirección:</label>
                          <input type="text" class="form-control" id="direccion" name="direccion" maxlength="50" placeholder="EJ: TV.78 CLL.24h-42 APTO...">
                        </div>
                        <div class="col-sm-4"><br>
                          <label for="tipo_vivienda">Tipo de Vivienda: </label>
                          <select name="tipo_vivienda" id="tipo_vivienda" class="form-control">

                              <?php

                              $i=1;
                              foreach ($tipo_vivienda AS $number){
                                  foreach ($number AS $row){ ?>

                                      <option class="form-control" id="edad" name="edad" value="<?=$i?>"><?=$row?></option>

                                      <?php
                                      $i++;
                                  }
                              } ?>
                              
                          </select>
                        </div>
                        <div class="col-sm-4"><br>
                          <label for="nivel_educativo_padre">Nivel Educativo del Padre: </label>
                          <select name="nivel_educativo_padre" id="nivel_educativo_padre" class="form-control">

                              <?php

                              $i=1;
                              foreach ($nivel_educativo_padre AS $number){
                                  foreach ($number AS $row){ ?>

                                      <option class="form-control" id="edad" name="edad" value="<?=$i?>"><?=$row?></option>

                                      <?php
                                      $i++;
                                  }
                              } ?>
                              
                          </select>
                        </div>
                        <div class="col-sm-4"><br>
                          <label for="nivel_educativo_madre">Nivel educativo de la Madre: </label>
                          <select name="nivel_educativo_madre" id="nivel_educativo_madre" class="form-control">

                              <?php

                              $i=1;
                              foreach ($nivel_educativo_madre AS $number){
                                  foreach ($number AS $row){ ?>

                                      <option class="form-control" id="edad" name="edad" value="<?=$i?>"><?=$row?></option>

                                      <?php
                                      $i++;
                                  }
                              } ?>
                              
                          </select>
                        </div>
                        <div class="col-sm-6"><br>
                          <label for="profecion_padre">¿Cual es la Profeción de tu Padre?</label>
                          <input type="text" class="form-control" id="profecion_padre" name="profecion_padre" maxlength="50" placeholder="EJ: Empresario">
                        </div>
                        <div class="col-sm-6"><br>
                          <label for="profecion_madre">¿Cual es la Profeción de tu Madre?</label>
                          <input type="text" class="form-control" id="profecion_madre" name="profecion_madre" maxlength="50" placeholder="EJ: Asesora de Ventas">
                        </div>

                      </div>
                      
                      <br>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Enviar Respuestas</button>

                    </form>

                    <hr>
                    <p class="text-center">Copyright © UdC+ 2020</p>
                  </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

  </body>

</html> 

<?php 
} else {
  header('location: login.php');
}
?>
