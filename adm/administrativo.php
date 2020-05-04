<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
</head>
<body>
<?php
    session_start();
    include_once("conexao.php");
    if(!empty($_SESSION['id'])){
        //echo "Olá ".$_SESSION['usuario'].", Seja Bem Vindo <br>";
        $callback = "OK";
    }else{
        $_SESSION['msg'] = "Área Restrita";
        $callback = "ERRO";
        header("Location: login.php");
    }

?>    

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: -590px; width: 111%;background: linear-gradient(to right, #3c96ff 0%, #2dfbff 100%) !important;">
  <a class="navbar-brand" href="#" style='color:#ffffff;'><?php echo "Seja Bem Vindo " . $_SESSION['usuario']?></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color:#fff">Home <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cad.php" style="color:#fff">Cadastrar Cliente</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.html" style="color:#fff">Sair</a>
      </li>
    </ul>
  </div>
</nav>

<!-- <section id="titulo">
      <div id="tituloClientes">
        <h4 style="text-align:center;">Veja Aqui os clientes cadastrados no sistema facillitta</h4>
      </div>
</section> -->

<script language="javascript">
  function pegaPalavra(){
    var palavra = document.getElementById("txtBusca").value;
    var result = document.body.innerText.indexOf(palavra);
    if(result){
      alert("O cliente " + palavra + " está cadastrado no sistema");
    }else{
      alert("O cliente " + palavra + " não está cadastrado no sistema, tente novamente");
      return;
    }
  }
</script>

<?php
    $result_usuario = "SELECT * FROM clientes WHERE ativo = 'A'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    //var_dump($resultado_usuario);
    
    if(!isset($conn))
    {
        echo "<script language='javascript'>console.log('sem conexão')</script>";
    }
    else
    {
        echo "<script language='javascript'>console.log('Conectado com sucesso!')</script>";
    }

    if(mysqli_num_rows($resultado_usuario) <= 0)
    {
        echo "<center><h1 style='margin-left: -1300px;'>Ops! Parece que não temos nenhum cliente cadastrado no sistema!</h1></center>";
    }
    else
    {
      echo "<table class='table table-hover' style='margin-left: -1506px;'>";
      echo "<thead>";
      echo "<tr>";
      echo "<th scope='col'>Código</th>";
            echo "<th scope='col' style='text-align: center;'>Cliente</th>";
            echo "<th scope='col' style='text-align: center;'>Email</th>";
            echo "<th scope='col' style='text-align: center;'>Endereço</th>";
            echo "<th scope='col' style='text-align: center;'>Número</th>";
            echo "<th scope='col' style='text-align: center;'>Bairro</th>";
            echo "<th scope='col' style='text-align: center;'>Cidade</th>";
            echo "<th scope='col' style='text-align: center;'>Contato</th>";
            echo "<th scope='col' style='text-align: center;'></th>";
            echo "<th scope='col'></th>";
            echo "</tr>";
            echo "</thead>";
        while($rows = mysqli_fetch_assoc($resultado_usuario))
        {
            //echo "<center><h2>Veja seus clientes cadastrados no sistema</h2></center>";
            echo "<tbody>";
            echo "<tr>";
            echo "<td style='text-align: center;'>".$rows['CodClienteAdm']."</td>"."<br>";
            echo "<td style='text-align: center;'>".$rows["nome"]."</td>"."<br>";
            echo "<td style='text-align: center;'>".$rows["email"]."</td>"."<br>";
            echo "<td style='text-align: center;'>".$rows["endereco"]."</td>"."<br>";
            echo "<td style='text-align: center;'>".$rows["NumeroEndereco"]."</td>"."<br>";
            echo "<td style='text-align: center;'>".$rows["Bairro"]."</td>"."<br>";
            echo "<td style='text-align: center;'>".$rows["Cidade"]."</td>"."<br>";
            echo "<td style='text-align: center;'>".$rows["telefone"]."</td>"."<br>";
            echo "
              <td style='text-align: center;'>
              <a href='delCliente.php?idCliente=".$rows['idCliente']."' class='btn btn-danger'>Excluir
              </a>"."<br>"."</td>";
            echo "</tr>";
            echo "</tbody>";
        }
        echo "</table>";
    }
    
?>


</body>
</html>