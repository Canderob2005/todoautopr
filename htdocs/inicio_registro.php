<html>
   <head>
      <title>
         Registro
      </title>
      <meta content="text/html; charset=utf-8" http-equiv="content-type"/>
      <link href="./inicio/Registro_files/bootstrap.css" rel="stylesheet"/>
      <link href="./inicio/Registro_files/bootstrap-theme.css" rel="stylesheet"/>
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
</html>
<body>
   <div class="fondo">
      <div class="container">
         <div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" id="signupbox" style="margin-top:50px">
            <div class="panel panel-info carta">
               <div class="panel-heading">
                  <div class="panel-title">
                     Regístrate
                  </div>
                  <div style="float:right; font-size: 85%; position: relative; top:-10px">
                     <a href="inicio_index.php" id="signinlink">
                        Iniciar Sesión
                     </a>
                  </div>
               </div>
               <div class="panel-body">
                  <form action="./server/registro/registro.php" autocomplete="off" class="form-horizontal" id="signupform" method="POST" role="form"target="_blank">
                     <div class="alert alert-danger" id="signupalert" style="display:none">
                        <p>
                           Error:
                        </p>
                        <span>
                        </span>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3 control-label" for="nombre">
                           Nombre:
                        </label>
                        <div class="col-md-9">
                           <input class="form-control" name="nombre" placeholder="Nombre" required="" type="text"/>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3 control-label" for="usuario">
                           Usuario
                        </label>
                        <div class="col-md-9">
                           <input class="form-control" name="nombre_usuario" placeholder="Usuario" required="" type="text"/>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3 control-label" for="password">
                           Password
                        </label>
                        <div class="col-md-9">
                           <input class="form-control" name="password" placeholder="Password" required="" type="password"/>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3 control-label" for="con_password">
                           Confirmar Password
                        </label>
                        <div class="col-md-9">
                           <input class="form-control" name="con_password" placeholder="Confirmar Password" required="" type="password"/>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3 control-label" for="email">
                           Email
                        </label>
                        <div class="col-md-9">
                           <input class="form-control" name="email" placeholder="Email" required="" type="email"/>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                           <button class="btn btn-info" id="btn-signup" type="submit">
                              <i class="icon-hand-right">
                              </i>
                              Registrar
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
