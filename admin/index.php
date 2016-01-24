<?php 
require_once("data/conexao.php");

?>
<!doctype html>
<html>
   <head>
      <?php echo include('includes/inc-head.php');?>
   </head>
   <body class="login-page">
      <div class="page-container">
         <div class="login-branding">
         </div>
         <div class="login-container">
            <img class="login-img-card" src="images/logo.png" alt="login thumb" />
            <form class="form-signin" method="POST" action="controller/login.php">
               
               <input type="email" name="email" tabindex="1"class="form-control" placeholder="E-mail" required autofocus>
              
               <input type="password" tabindex="2" id="inputPassword" name="senha" class="form-control floatlabel " placeholder="Senha" required>
               <?php 
                 
                if($_SESSION["logged"]){
                  echo "<pre class='xdebug-var-dump' dir='ltr'><font color='#cc0000'>Usuário ou senha invalidos</font></pre>";
                  session_destroy();
                }
               ?>
               <button class="btn btn-primary btn-block btn-signin" type="submit">Login</button>
               <input type="hidden" name="tipo" id="tipo" value="login">
            </form>
            <a href="#" class="forgot-password">
            Esqueçeu sua senha?
            </a>
         </div>
         <div class="login-footer">
            Desenvolvido<i class="fa fa-heart"></i>por <a target="_BLANK" href="https://www.facebook.com/proj.criativos">Projetos Criativos</a>
         </div>
      </div>
      <?php include("includes/inc-footer.php");?>
   </body>
</html>



