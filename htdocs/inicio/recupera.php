<html>
   <head>
      <title>
         Recuperar Password
      </title>
      <link href="Login_files/bootstrap.css" rel="stylesheet"/>
      <link href="Login_files/bootstrap-theme.css" rel="stylesheet"/>
      <script crossorigin="anonymous" src="https://kit.fontawesome.com/a076d05399.js">
      </script>
      <style type="text/css">
         .fondo {
         background-image: url("./img/fondo.jpeg");
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
   </head>
   <body>
      <div class="fondo">
         <div class="container">
            <div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" id="loginbox" style="margin-top:50px;">
               <div class="panel panel-info carta">
                  <div class="panel-heading">
                     <div class="panel-title">
                        Recuperar Password
                     </div>
                     <div style="float:right; font-size: 80%; position: relative; top:-10px">
                        <a href="inicio.php">
                           Iniciar Sesión
                        </a>
                     </div>
                  </div>
                  <div class="panel-body" style="padding-top:30px">
                     <div class="alert alert-danger col-sm-12" id="login-alert" style="display:none">
                     </div>
                     <form action="<?php $_SERVER['PHP_SELF'] ?>" autocomplete="off" class="form-horizontal" id="loginform" method="POST" role="form">
                        <div class="input-group" style="margin-bottom: 25px">
                           <span class="input-group-addon">
                              <i class="fas fa-at">
                              </i>
                           </span>
                           <input class="form-control" id="email" name="email" placeholder="email" required="" type="email"/>
                        </div>
                        <div class="form-group" style="margin-top:10px">
                           <div class="col-sm-12 controls">
                              <button class="btn btn-success" id="btn-login" type="submit">
                                 Enviar
                              </button>
                           </div>
                        </div>
                     </form>
                     <div class="form-group">
                        <div class="col-md-12 control">
                           <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                              No tiene una cuenta!
                              <a href="registro.php">
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