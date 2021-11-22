





<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8"/>
      <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
      <title>
         Login
      </title>
      <link href="./inicio/Login_files/bootstrap.css" rel="stylesheet"/>
      <link href="./inicio/Login_files/bootstrap-theme.css" rel="stylesheet"/>
      <script crossorigin="anonymous" src="https://kit.fontawesome.com/a076d05399.js">
      </script>
      <style type="text/css">
         .fondo {
         /*background-image: url("./img/fondo.jpeg");*/
         /*background-color: #cccccc;*/
         background-repeat: no-repeat;
         background-size: cover;
         height: 100%;
         width: 100%;
         }
         .carta{
         background-color: rgba(255, 255, 255, 0.7);
         }
      </style>
        <script src="./js/chat/chat.js">
  </script>
   </head>
   <body>
      <div class="">
         <div class="container">
            <div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" id="loginbox" style="margin-top:50px;">
               <div class="panel panel-info carta">
                  <div class="panel-heading">
                     <div class="panel-title">
                        Iniciar Sesión
                     </div>
                     <div style="float:right; font-size: 80%; position: relative; top:-10px">
                        <a href="inicio_recupera.php">
                           ¿Se te olvidó tu contraseña?
                        </a>
                     </div>
                  </div>
                  <div class="panel-body" style="padding-top:30px">
                     <div class="alert alert-danger col-sm-12" id="login-alert" style="display:none">
                     </div>
                     <form action="../php/inicio_sesion/inicio_sesion.php" autocomplete="off" class="form-horizontal" id="loginform" method="POST" role="form">
                        <div class="input-group" style="margin-bottom: 25px">
                           <span class="input-group-addon">
                              <i class="fas fa-user-alt">
                              </i>
                           </span>
                           <input class="form-control" id="usuario" name="usuario" placeholder="usuario o email" required="" type="text" value=""/>
                        </div>
                        <div class="input-group" style="margin-bottom: 25px">
                           <span class="input-group-addon">
                              <i class="fas fa-key">
                              </i>
                           </span>
                           <input class="form-control" id="password" name="password" placeholder="password" required="" type="password"/>
                        </div>
                        <div class="form-group" style="margin-top:10px">
                           <div class="col-sm-12 controls">
                              <button class="btn btn-success" id="btn-login" type="submit">
                                 Iniciar Sesión
                              </button>
                           </div>
                        </div>
                     </form>
                     <div class="form-group">
                        <div class="col-md-12 control">
                           <div style="border-top: 1px solid #888; padding-top:15px; font-size:85%">
                              No tiene una cuenta!
                              <a href="inicio_registro.php">
                                 Registrate aquí
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
