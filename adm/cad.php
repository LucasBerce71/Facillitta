'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="jQuery.3.3.1/Scripts/jquery-3.3.1.js"></script>
    <script src="jQuery.3.3.1/Scripts/jquery.mask177.min.js"></script>
    <script src="jQuery.Validation.1.17.0/Scripts/jquery.validate.js"></script>
    <title>Cadastrar Clientes</title>
</head>
<body>
<?php
    session_start();
    include_once("conexao.php");
    if(!empty($_SESSION['id'])){
        $callback = "OK";
    }else{
        $_SESSION['msg'] = "Área Restrita";
        $callback = "ERRO";
        header("Location: login.php");
    }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: -600px; width: 100%;background: linear-gradient(to right, #3c96ff 0%, #2dfbff 100%) !important;">
  <a class="navbar-brand" href="#" style="color:#ffffff;">Seja Bem vindo <?php echo $_SESSION['usuario']?></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="administrativo.php" style="color:#fff;">Visualizar Clientes<span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="cad.php" style="color:#fff;">Cadastrar Cliente</a>
      </li>
    </ul>
  </div>
</nav>

<form method="POST" action="" style="margin-left: -1250px;">

<div class="form-group row">
    <label for="inputCod" class="col-sm-2 col-form-label">CÓDIGO:</label>
    <div class="col-sm-10">
      <input type="text" style="margin-left: 20px;" class="form-control" id="inputCod" name="CodClienteAdm" placeholder="Ex: 100">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputNome" class="col-sm-2 col-form-label">NOME:</label>
    <div class="col-sm-10">
      <input type="text" style="margin-left: 20px;" class="form-control" id="inputNome" name="nome" placeholder="Ex: Maria da Silva">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputTel" class="col-sm-2 col-form-label">CONTATO:</label>
    <div class="col-sm-10">
      <input type="text" style="margin-left: 20px;" class="form-control" id="inputTel" name="telefone" placeholder="Ex: (DDD) 0000-0000" maxlength="14">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">EMAIL:</label>
    <div class="col-sm-10">
      <input type="text" style="margin-left: 20px;" class="form-control" id="inputEmail" name="email" placeholder="Ex: cliente@serviço.com">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEndereco" class="col-sm-2 col-form-label">ENDEREÇO:</label>
    <div class="col-sm-10">
      <input type="text" style="margin-left: 20px;" class="form-control" id="inputEndereco" name="endereco" placeholder="Ex: Rua exemplo, N° exemplo, Bairro exemplo">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputNumeroEndereco" class="col-sm-2 col-form-label">NÚMERO:</label>
    <div class="col-sm-10">
      <input type="text" style="margin-left: 20px;" class="form-control" id="inputNumeroEndereco" name="NumeroEndereco" placeholder="Ex: N° exemplo">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputBairro" class="col-sm-2 col-form-label">BAIRRO:</label>
    <div class="col-sm-10">
      <input type="text" style="margin-left: 20px;" class="form-control" id="inputBairro" name="Bairro" placeholder="Ex:  Bairro exemplo">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputCidade" class="col-sm-2 col-form-label">CIDADE:</label>
    <div class="col-sm-10">
      <input type="text" style="margin-left: 20px;" class="form-control" id="inputCidade" name="Cidade" placeholder="Ex: Carapicuíba, BArueri, Jandira...">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputCpf" class="col-sm-2 col-form-label">CPF:</label>
    <div class="col-sm-10">
      <input type="text" style="margin-left: 20px;" onkeypress="toUpperCase()" class="form-control" id="inputCpf" name="cpf" placeholder="Ex: 000.000.000-00">
    </div>
  </div>

  <div class="btnControllers" style="margin-left: 125px;">
      <i class="fa fa-check" aria-hidden="true" style="margin-left: 6px; position: absolute; margin-top: 11px; color: #fff;"></i>
      <input type="submit" class="btn btn-success" name="btnCadCliente" value="   Cadastrar Cliente"/> 
      <button class="btn btn-warning" style="color: #fff;" onclick="limparDados()"><i class="fa fa-minus-circle" aria-hidden="true"></i> Limpar Tudo</button>
  </div>
  </form>




    <script language="javascript">
        document.getElementById("inputCod").innerText = "";
        document.getElementById("inputNome").innerText = "";
        document.getElementById("inputTel").innerText = "";
        document.getElementById("inputEmail").innerText = "";
        document.getElementById("inputEndereco").innerText = "";
        document.getElementById("inputNumeroEndereco").innerText = "";
        document.getElementById("inputBairro").innerText = "";
        document.getElementById("inputCidade").innerText = "";
        document.getElementById("inputCpf").innerText = "";

        function validaCampos
      }
    </script>

  <?php
    $btnCadCliente = filter_input(INPUT_POST, 'btnCadCliente', FILTER_SANITIZE_STRING);
    if($btnCadCliente){
        include_once 'conexao.php';
        $dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        $erro = false;

       $dados_st = array_map('strip_tags', $dados_rc);
       $dados = array_map('trim', $dados_st);

       if(in_array('',$dados)){
           $erro = true;
           $_SESSION['msg'] = "<center><label style='color:red;'>Necessário preencher todos os campos</label></center>";
          }else{
           $result_cadastro = "SELECT idCliente FROM clientes 
           WHERE cpf = '" .$dados['cpf']. "'";
           $resultado_cadastro = mysqli_query($conn, $result_cadastro);
           if(($resultado_cadastro) AND ($resultado_cadastro->num_rows != 0)){
               $erro = true;
               echo "<script language='javascript'>alert('Ops! Parece que este cliente já está cadastrado no sistema')</script>";
           }

           $result_cadastro = "SELECT idCliente FROM clientes
           WHERE email = '" .$dados['email']. "'";
           $resultado_cadastro = mysqli_query($conn, $result_cadastro);
           if(($resultado_cadastro) AND ($resultado_cadastro->num_rows != 0)){
               $erro = true;
               echo "<script language='javascript'>alert('Ops! Parece que este email já está associado para algum cadastro no sistema')</script>";
           }

           $result_cadastro = "SELECT idCliente FROM clientes WHERE CodClienteAdm = '" .$dados['CodClienteAdm']. "'";
           $resultado_cadastro = mysqli_query($conn, $result_cadastro);
           if(($resultado_cadastro) AND ($resultado_cadastro->num_rows != 0)){
             $erro = true;
             echo "<script language='javascript'>alert('Ops! Parece que este código de cliente já está associado para algum cadastro no sistema')</script>";
           }
       }


       //var_dump($dados);
        if(!$erro){
            //var_dump($dados);
       //$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

       $result_cadastro = "INSERT INTO clientes (CodClienteAdm, nome, telefone, email, endereco, cpf, NumeroEndereco, Bairro, Cidade) 
       VALUES(
           '" .$dados['CodClienteAdm']. "', 
           '" .$dados['nome']. "', 
           '" .$dados['telefone']. "', 
           '" .$dados['email']. "',
           '" .$dados['endereco']. "',
           '" .$dados['cpf']. "',
           '" .$dados['NumeroEndereco']. "',
           '" .$dados['Bairro']. "',
           '" .$dados['Cidade']. "'
           )";
        $resultado_cadastro = mysqli_query($conn, $result_cadastro);
        if(mysqli_insert_id($conn)){
          echo "<script language='javascript'>alert('O Cliente foi cadastrado com sucesso')</script>";
            //header("Location: administrativo.php");
        }else{
          echo "<script language='javascript'>alert('Ops! Parece que algo inesperado ocorreu ao tentar cadastrar o cliente no sistema!')</script>";
        }
        }  
    }

    $result_cidades = "SELECT * FROM clientes WHERE Cidade != 'Carapicuíba' AND ativo = 'A'";
    $result_carapicuiba = "SELECT * FROM clientes WHERE Cidade = 'Carapicuíba' AND ativo = 'A'";
    $clientes_ativos = "SELECT * FROM clientes WHERE ativo = 'A'";
    $clientes_inativos = "SELECT * FROM clientes WHERE ativo != 'A'";
    $resultado_statistics = mysqli_query($conn, $result_carapicuiba);
    $resultado_cidades = mysqli_query($conn, $result_cidades);
    $resultado_ativos = mysqli_query($conn, $clientes_ativos);
    $resultado_inativos = mysqli_query($conn, $clientes_inativos);

    if(!isset($conn)){
      echo "<script language='javascript'>console.log('sem conexão')</script>";
    }else{
      echo "<script language='javascript'>console.log('Conectado com sucesso!')</script>";
    }

    if(mysqli_num_rows($resultado_ativos) <= 0){
      echo "<p style='margin-left: 350px; color: red;'>Sem estatísticas disponíveis no momento</p>";
    }else{
      $carapicuiba = mysqli_num_rows($resultado_statistics);
      $cidades = mysqli_num_rows($resultado_cidades);
      $ativos = mysqli_num_rows($resultado_ativos);
      $inativos = mysqli_num_rows($resultado_inativos);
      echo "<table class='table table-dark container' style='width: 750px; height: 10px; font-size: 16px; margin-left: 70px; margin-top: -363px;'>";
      echo "<thead>";
      echo "<tr>";
      echo "<th>Clientes cadastrados que moram na região (Carapicuíba)</th>";
      echo "<th>Clientes cadastrado que moram nas demais regiões (Barueri, Osasco, etc)</th>";
      echo "<th>Clientes ativos no sistema</th>";
      echo "<th>Clientes inativos no sistema</th>";
      echo "</tr>";
      echo "</thead>";

      while($rows = mysqli_fetch_assoc($resultado_statistics)){
        echo "<tbody>";
        echo "<tr>";
        echo "<td>".$carapicuiba." Cliente(s)</td>"."<br>";
        echo "<td>".$cidades." Cliente(s)</td>"."<br>";
        echo "<td>".$ativos." Cliente(s)</td>"."<br>";
        echo "<td>".$inativos." Cliente(s)</td>"."<br>";
        echo "</tr>";
        echo "</tbody>";
      }
      echo "</table>";
    }

?>
<script src="script/mascaras.js"></script>
</body>
</html>