<?php
$nome=$_POST['nome_completo'];
$cpf=$_POST['numero-cpf'];
$telefone=$_POST['telefone-user'];
$email=$_POST['email'];
$formacao=$_POST['formacao-completa'];

require('conexao.php');
$sqlinsert="insert into professores values ('','$nome','$cpf','$telefone','$email','$formacao')";
mysqli_query($db,$sqlinsert) or die('Não foi possivel inserir');
echo "<script>alert('cadastro inserido com sucesso')</script>";
?>