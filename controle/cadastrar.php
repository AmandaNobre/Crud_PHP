<?php
	include_once 'conexao.php';

	$nome = $_POST['nome'];
	$idade = $_POST['idade'];

	$query = "insert into usuarios (nome, idade) values ('$nome', $idade)"; 
	$cadastra = mysqli_query($conn, $query);
	header('location:../visao/formVisualizar.php');