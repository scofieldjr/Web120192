<?php 
	include_once('includes/header.php');
 ?>
<div class="container" id="TamanhoContainer">
 <legend><h1 class="display-6">Login</h1></legend> <br>
<form>
  <div class="form-group">
    <label>Usuario</label>
    <input type="email" class="form-control" placeholder="Digite seu usuario">
  </div>
  <div class="form-group">
    <label>Senha</label>
    <input type="password" class="form-control" placeholder="Digite sua senha">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<br>
  <div style="text-align: right;">
<a href="index.php" class="btn btn-secondary">Cadastro</a>
  </div>
</div>


 <?php 
   include_once('includes/footer.php');
    ?>