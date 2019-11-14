<?php 
include '../conexao.php';
include '../script/password.php';


$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO `users`(`name`, `surname`, `email`, `password`) VALUES ('$name','$surname','$email', sha1('$password'))";

$inserir = mysqli_query($conexao, $sql);

 ?>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <div class="container" style="width: 300px; padding-top: 30px;" >
 <center>
<h4>Cadastrado com sucesso!</h4>
 </center>	

<div style="padding-top: 30px">
	<center>
<a href="../index.php" role="button" class="btn btn-sm btn-primary"> Voltar para o cadastramento</a>
	</center>
</div>

 </div>