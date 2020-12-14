<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">

    <title>Escola Intermediária</title>
  </head>
  <body>
    <form class="container login-container my-5" action="login.php" method="POST">                 
        <div class="col-md-6 login-form">
                <h3>Login</h3>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email" />
            </div>
            <div class="form-group">
                <input type="password" name="senha" class="form-control" placeholder="Senha" />
            </div>
            <div class="form-group">
                <input type="submit" class="btnSubmit" value="Entrar" />
            </div>
        </div>
    </form>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>