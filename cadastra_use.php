<?php

include './DB/connect.php';
if(isset($_POST['cadastrar'])){

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];

$sql = "INSERT INTO usuario (nome,cpf,fone,email) VALUES  ('$nome','$cpf','$fone','$email')";

$result = mysqli_query($conn,$sql);

if($result){
    echo 'Cadastrado';


}else{
    die (maysqli_error($conn));
}

}