<?php  
	include_once '../modelo/menu.php';
	include_once '../controle/visualizar.php';
?>
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
<?php while ($linha = mysqli_fetch_array($visualizar)) { ?>
	<?php if($linha['id'] == $_GET['id']){?>
		<form method="POST" action="../controle/editar.php?id=<?php echo $linha['id']?>">
			<table>
				<tr>
					<td>Nome:</td>
					<td><input type="text" name="nome" value="<?php echo $linha['nome']?>"></td>
				</tr>
				<tr>
					<td>Idade:</td>
					<td><input type="text" name="idade" value="<?php echo $linha['idade']?>"></td>
					</tr>
				<tr>
					<td><a href="../controle/editar.php?id=<?php echo $linha['id']?>"><input type="submit" name="" value="Editar"></a></td>
				</tr>
			</table>
		</form>
	<?php } ?>		
<?php } ?>
<?php 
	include_once '../modelo/footer.php'
?>