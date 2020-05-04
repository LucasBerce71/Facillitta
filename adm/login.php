<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Login com PHP</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
</head>
<body>
<div class="alert alert-danger" role="alert" style='margin-top: -570px;'>
  ATENÇÃO!!! Essa áre é restrita somente aos administradores do sistema
</div>
<div class="container">
<div class="form-signin" style="background: #42dea4; margin-left: 115px;">
    <center><h2>Entre como administrador</h2></center><br>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    if(isset($_SESSION['msgcad'])){
        echo $_SESSION['msgcad'];
        unset($_SESSION['msgcad']);
    }
    ?>
    <form method="POST" action="valida.php">
    <!--<label>Usuário</label>-->
    <input type="text" name="usuario" placeholder="Digite o seu usuário" class="form-control"><br>

    <!--<label>Senha</label>-->
    <input type="password" name="senha" placeholder="Digite a sua senha" class="form-control"><br>

    <center><input type="submit" name="btnLogin" value="Acessar" class="btn btn-success btn-block"></center><br>

    <!--<center><a href="cadastrar.php" class="btn btn-primary btn-block">Primeiro Acesso</a></center>-->
    </form>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>