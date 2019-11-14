<?php 

include '../conexao.php'

 ?>
<?php 
include_once('../includes/header.php');
 ?>

<form action="action/_cadastro.php" method="POST" style="margin-top: 30px">

		<?php 

		$sql = "SELECT * FROM `postagem` WHERE id_mural = $id";
		$buscar = mysqli_query($conexao,$sql);
		while ($array = mysqli_fetch_array($buscar)) {

			$id_mural = $array['id_mural'];
    		$assunto = $array['assunto'];
    		$tipo = $array['tipo'];
    		$texto = $array['texto'];

		 ?>


  <div class="form-group">
    <label>Digite seu nome</label>
    <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $assunto ?>">
    <label>Crie um usuario</label>
    <input type="text" class="form-control" name="usuario" placeholder="Usuario" >
    <label>Informe sua idade</label>
    <input type="number" class="form-control" name="idade" placeholder="Idade" >
    <label>Crie uma senha</label>
    <input type="password" class="form-control" name="senha" placeholder="Senha" >
    <label style="margin-top: 3px">Digite seu email</label>
    <input type="email" class="form-control" name="email" placeholder="Insira seu email" >
    <small class="form-text text-muted">Ex: fulano@gmail.com / Rani@hotmail.com</small>
  </div>

  <div class="input-group">
    <label>Sexo</label>
  </div>
  <select class="custom-select" name="sexo">
    <option value="1">Masculino</option>
    <option value="2">Feminino</option>
  </select>

  <button type="submit" class="btn btn-success btn-sm" style="margin-top: 5px">Cadastrar</button>
  <?php }  ?>
</form>

<?php 
include_once('../includes/footer.php');
 ?>