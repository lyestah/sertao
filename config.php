<?php
try {
	$con=new PDO("mysql:host=localhost;dbname=sertao","root","");
} catch (PDOException $e) {
	echo "Erro a acessar banco de Dados";
}