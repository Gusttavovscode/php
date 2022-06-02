<?php
include "conexao.php";
if( isset($_GET["nome"]) ){
	$nome = $_GET["nome"];
	$sql = "SELECT * FROM usuarios WHERE nome ='$nome'";
	$dados = mysqli_query($con, $sql) or die(mysqli_error($conexao));
	while( $linha = mysqli_fetch_assoc($dados) ){
		$endereco = $linha["endereco"];
		$telefone = $linha["telefone"];
		echo "<pre>Endereco: {$endereco}<br />Telefone: {$telefone}</pre>";
	}
	mysqli_close($con);
}
?>