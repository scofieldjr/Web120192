<?php 
	include_once('includes/header.php');
 ?>
<div id="TamanhoContainer" class="container">

      <form action="action/_insert_user.php" method="POST" style="margin-top: 30px">
  <div class="form-group">
    <label>Digite seu nome</label>
    <input type="text" class="form-control" name="name" placeholder="Nome" autocomplete="off" required="required">
    <label>Digite seu sobrenome</label>
    <input type="text" class="form-control" name="surname" placeholder="Sobrenome" autocomplete="off" required="required">
    <label style="margin-top: 3px">Digite seu email</label>
    <input type="email" class="form-control" name="email" placeholder="Insira seu email" required="required">
    <small class="form-text text-muted">Ex: fulano@gmail.com / Rani@hotmail.com</small>
    <label style="margin-top: 5px">Crie uma senha</label>
    <input type="password" class="form-control" name="password" placeholder="Senha" autocomplete="off" required="required">
  </div>

  <!--<div class="input-group">
    <label>Sexo</label>
  </div>
  <select class="custom-select" name="gender">
    <option value="1">Masculino</option>
    <option value="2">Feminino</option>
  </select>-->

  <button type="submit" class="btn btn-success btn-sm" style="margin-top: 5px">Cadastrar</button>
</form>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-6">Já é cadastrado?</h1>
    <p class="lead">Então Clique aqui para fazer Login</p>
    <a class="btn btn-primary btn-sm"  href="login.php" role="button">Login</a>
  </div>
</div>
</div>

<a class="btn btn-primary btn-sm"  href="mural.php" role="button">Mural</a>

   <?php 
   include_once('includes/footer.php');
    ?>