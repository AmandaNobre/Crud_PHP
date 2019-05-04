<?php
	include_once 'conexao.php';

	$query = "Select * from usuarios"; 
	$visualizar = mysqli_query($conn, $query);
	