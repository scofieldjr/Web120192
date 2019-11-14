<?php 

$id = $_GET['id'];

$sql = "DELETE FROM `movies` WHERE id = $id";
$delete = mysqli_query($conexao, $sql); 

 ?>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <div class="container" style="width: 300px; padding-top: 30px;" >
 <center>
<h4>Deletado com sucesso!</h4>
 </center>	

<div style="padding-top: 30px">
	<center>
<a href="../index.php" role="button" class="btn btn-sm btn-primary"> Voltar para o </a>
	</center>
</div>

 </div>