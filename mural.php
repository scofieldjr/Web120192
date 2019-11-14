<?php 
	include_once('includes/header.php');
 ?>
<div id="TamanhoContainer" class="container">
      <h1>Mural dos <span class="badge badge-secondary">Filmes</span></h1>
  </div>

<form action="action/_postagem.php" method="POST" style="margin-top: 30px">
<div class="container">
 <label>Titulo</label>
    <input type="text" class="form-control" name="title" placeholder="Titulo" autocomplete="off" required="required">
 
 <label>Diretor</label>
    <input type="text" class="form-control" name="director" placeholder="Diretor" autocomplete="off" required="required">
  
  <label>Ano</label>
    <input type="text" class="form-control" name="year" placeholder="Ano" autocomplete="off" required="required">

    <label>Duração</label>
    <input type="text" class="form-control" name="duration" placeholder="Duração" autocomplete="off" required="required">
 
  </div>

<div class="container">
  <button type="submit" class="btn btn-success btn-sm" style="margin-top: 5px">Cadastrar</button>
</div>
</form>
	


<div class="container" style="margin-top: 40px;">

<h3>Lista de Filmes</h3>
<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Titulo</th>
      <th scope="col">Diretor</th>
      <th scope="col">Ano</th>
      <th scope="col">Duração</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
    	<?php 
    		include 'conexao.php';
    		$sql = "SELECT * FROM `movies`";
    		$busca = mysqli_query($conexao, $sql);

    		while ($array = mysqli_fetch_array($busca)) {
    			
    			$id_mural = $array['id'];
    			$title = $array['title'];
    			$director = $array['director'];
    			$year = $array['year'];
          $duration = $array['duration'];
    	 ?>    	

    <tr>
		<td><?php echo $title ?></td>

		<td><?php echo $director ?></td>

		<td><?php echo $year ?></td>

    <td><?php echo $duration ?></td>

		<td><a class="btn btn-warning btn-sm" style="color: #fff" href="action/_editpost.php?id=<?php echo $id_mural ?>" role="button"><i class="far fa-edit"></i>&nbsp; Editar</a> 

      <a class="btn btn-danger btn-sm" style="color: #fff" href="action/_deletepost.php?id=<?php echo $id_mural ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp; Deletar</a>

    </td>

    </tr>
    	<?php } ?>
</table>

</div>


 <?php 
   include_once('includes/footer.php');
    ?>