<?php

include '../conexao.php';

$title = $_POST['title'];
$director = $_POST['director'];
$year = $_POST['year'];
$duration = $_POST['duration'];

$sql = "INSERT INTO `postagem`(`title`, `director`, `year`, `duration`) VALUES ('$title','$director','$year','$duration')";

$inserir = mysqli_query($conexao, $sql);

 ?>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <div class="container" style="width: 300px; padding-top: 30px;" >
 <center>
<h4>Postado com sucesso!</h4>
 </center>	

<div style="padding-top: 30px">
	<center>
<a href="../mural.php" role="button" class="btn btn-sm btn-primary"> Voltar para o mural </a>
	</center>
</div>

 </div>