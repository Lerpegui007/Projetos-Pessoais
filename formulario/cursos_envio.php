<?php

$nome=$_POST['nome-curso'];
$descricao=$_POST['descr-curso'];
$duracao=$_POST['duracao-curso'];

require('conexao.php');
$sqlinsert="insert into cursos values('','$nome','$descricao','$duracao')";
mysqli_query($db,$sqlinsert) or die('Não foi possivel cadastras');
echo "<script>alert('cadastro inserido com sucesso')</script>"


?>