<?php

include_once 'conexao.php';

$idCliente = $_GET["idCliente"];

$resultConsulta = "UPDATE clientes SET ativo = 'I' WHERE idCliente = '$idCliente'";

$resultadoConsulta = mysqli_query($conn, $resultConsulta);

echo "
	<script>
		alert('Cliente excluido com sucesso!');
		javascript:window.location = 'administrativo.php';
	</script>
";
?>