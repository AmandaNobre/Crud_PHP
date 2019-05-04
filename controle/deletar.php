<?php 
	include_once 'conexao.php';
	$id =  $_GET['id'];
	$query = "delete from usuarios where $id = id"; 
	$deletar = mysqli_query($conn, $query);
	header('location:../visao/home.php');
