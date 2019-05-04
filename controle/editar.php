<?php 
	include_once 'conexao.php';
	$id =  $_GET['id'];
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];

	$query = "update usuarios set nome='$nome', idade=$idade where id=$id"; 
	$atualizar = mysqli_query($conn, $query);
	header('location:../visao/formVisualizar.php');