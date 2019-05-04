<?php  
	include_once '../modelo/menu.php';
?>
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
<form method="POST" action="../controle/cadastrar.php">
	<table>
		<tr>
			<td>Nome:</td>
			<td><input type="text" name="nome"></td>
		</tr>
		<tr>
			<td>Idade:</td>
			<td><input type="text" name="idade"></td>
		</tr>
		<tr>
			<td><a href="../controle/cadastrar.php"><button>Cadastrar</button></a></td>
		</tr>
	</table>
</form>




<?php 
	include_once '../modelo/footer.php'
?>