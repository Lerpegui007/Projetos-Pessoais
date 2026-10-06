<?php

$nome=$_POST['nome-turma'];
$serie=$_POST['ano-turma'];
$turno=$_POST['turno-turma'];
$curso=$_POST['curso'];

require('conexao.php');
$sqlinsert="insert into turmas values('','$nome','$serie','$turno','$curso')";
mysqli_query($db,$sqlinsert) or die('Não foi possivel cadastrar');
echo "<scipt>alert('turma cadastrada com sucesso')</scipt>";


?>