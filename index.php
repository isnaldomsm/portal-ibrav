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
            <form class="form-signin">
               <input type="text" id="cpf" tabindex="2"class="form-control cep-mask" placeholder="Número do cpf" required autofocus>
               <input type="password" tabindex="1" id="inputPassword" name="senha" class="form-control floatlabel " placeholder="Senha" maxlength="6" required>
               <button class="btn btn-primary btn-block btn-signin" type="submit">Login</button>
            </form>
            <a href="#" class="forgot-password">
            Esqueçeu sua senha?
            </a>
         </div>
         <div class="login-footer">
            Desenvolvido<i class="fa fa-heart"></i>por <a href="#">Projetos Criativos</a>
         </div>
      </div>
      <?php include("includes/inc-footer.php");?>
      <script>
         jQuery(function($){
                
                $("#cpf").mask("999.999.999-99");
                
         });
      </script>
   </body>
</html>