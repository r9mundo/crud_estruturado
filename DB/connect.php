<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'crud_estruturado';

$conn = new mysqli($hostname,$username,$password,$db);

if(!$conn){
    echo 'Erro ao conectar!';
}
else{
    echo 'Conectado!';
}
