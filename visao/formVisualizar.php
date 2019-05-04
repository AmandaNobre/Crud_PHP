<?php  
	include_once '../modelo/menu.php';
	include_once '../controle/visualizar.php';
?>
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
<form method="POST" action="../controle/deletar.php">
	<table>
		<tr>
			<td>Nome de Usuário</td>
			<td>&nbsp;&nbsp;&nbsp;Idade do Usuário</td>
		</tr>

		<?php 
			while ($linha = mysqli_fetch_array($visualizar)) {
				echo '<tr><td>'.$linha['nome'].'</td>';
				echo '<td>&nbsp;&nbsp;&nbsp;'.$linha['idade'].'</td>';
		?>
		<td>
			<a href="../controle/deletar.php?id=<?php echo $linha['id']; ?>" style="text-decoration: none; color: black;">
			Deletar</a>
		</td>
		<td >
			<a href="formEditar.php?id=<?php echo $linha['id']; ?>" style="text-decoration: none; color: black;">
			&nbsp;&nbsp;&nbsp;Editar</a>
		</td></tr>
		<?php
		 }
		?>
		 
	</table>
</form>

<?php 
	include_once '../modelo/footer.php'
?>