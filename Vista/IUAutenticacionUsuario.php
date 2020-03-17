<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Autenticacion de Usuario</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
            <section id="cover">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                            <h1>Autentificaciòn Usuario</h1>
                  <br><br>              
                                 <form action="../Controlador/LogicaVerificarUsuario.php" method="post" name="LogicaAutenticacionUsuario">
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Contraseña</label>
                                    <input type="password" class="form-control" name="contrasenia" id="Contrasenia" placeholder="Contraseña">
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                                </form>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                    </div>
            </section>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>