
<?php 
require('data/conexao.php');
$id         = $_REQUEST['id'];

$dados      = mysql_query("SELECT * FROM turmas where id = {$id}");
$fetch      = mysql_fetch_array($dados);
$nome       = $fetch['nome'];
$cidade     = $fetch['cidade'];
$ano        = $fetch['ano'];


?>
<!doctype html>
<html>
<head>
     <?php include('includes/inc-head.php');?></head>
     <style type="text/css">
     .button {  
              color: #fff;
              background-color: #007180;
              width: 65px;
              height: 38px;
              display: inline-block;
              margin-bottom: 0;
              font-weight: 500;
              text-align: center;
              vertical-align: middle;
              touch-action: manipulation;
              cursor: pointer;
              outline: 0;
              background-image: none;
              white-space: nowrap;
              padding: 8px 12px;
              font-size: 14px;
              line-height: 1.42857143;
              border-radius: 3px;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
              -webkit-transition: all 0.2s ease-out;
              -moz-transition: all 0.2s ease-out;
              -o-transition: all 0.2s ease-out;
              transition: all 0.2s ease-out;
            }
     </style>
<body>
    
    <div class="page-container list-menu-view">
    <!--Leftbar Start Here -->
    <div class="left-aside desktop-view">
        
        <div class="left-navigation">
            <ul class="list-accordion">
                
                <?php 
                include('includes/inc-menu-lateral.php');
                ?>
                
                
            </ul>
        </div>
    </div>
        <div class="page-content">
        <!--Topbar Start Here -->
        <header class="top-bar">
            <div class="container-fluid top-nav">
                <div class="search-form search-bar">
                    <form>
                        <input name="searchbox" value="" placeholder="Search Topic..." class="search-input">
                    </form>
                    <span class="search-close waves-effect"><i class="ico-cross"></i></span>
                </div>
                <?php include('includes/inc-topo.php');?>
            </div>
        </header>
            <div class="main-container">
                <div class="container-fluid">
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="page-breadcrumb-wrap">

                                <div class="page-breadcrumb-info">
                                    <h2 class="breadcrumb-titles">Cadastro de turmas<small></small></h2>
                                    <ul class="list-page-breadcrumb">
                                        <li><a href="#">Home</a>
                                        </li>
                                        <li class="active-page"> Cadastro de turmas</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-widget widget-module">
                            <div class="widget-head clearfix">
                                <span class="h-icon"><i class="fa fa-bars"></i></span>
                                <h4>Elementos</h4>
                            </div>
                            <div class="widget-container">
                                <div class=" widget-block">
                                    <div class="page-header">
                                        <h2>Formulario</h2>
                                        <p>
                                             Cadastro de todas as turmas através desse formulario.
                                        </p>
                                    </div>
                                    <form action="controller/turmas.php" class="form-horizontal">
                                        <div class="form-group">
                                            
                                            <div class=" col-md-8">
                                                <input type="text" class="form-control" value="<?php echo $nome;?>" name="nome" required placeholder="Insira o nome da turma">
                                                <p class="input-instruction">
                                                   
                                                </p>
                                            </div>
                                            <div class=" col-md-8">
                                                <input type="text" class="form-control" name="cidade" value="<?php echo $cidade?>" required placeholder="Insira a cidade da turma.">
                                                <p class="input-instruction">
                                                  
                                                </p>
                                            </div>
                                            <div class=" col-md-8">
                                                <input type="text" maxlength="4" class="form-control" name="ano" value="<?php echo $ano?>" required placeholder="Insira o ano de formação da turma.">
                                                <p class="input-instruction">
                                                  
                                                </p>
                                            </div>
                                        </div>
                                        <?php 
                                            if(isset($id)){
                                        ?>
                                        
                                        <input type="hidden" name="tipo" id="tipo" value="edt">
                                        <input type="hidden" name="id"   id="id"   value="<?php echo $id;?>">                                     
                                        <?php } else { ?>
                                        
                                        <input type="hidden" name="tipo" id="tipo" value="add">
                                        
                                        <?php 
                                            }
                                        ?>
                                        <div class="form-group">
                                            <label class="col-md-12 control-label">&nbsp;</label>
                                            <div class="col-md-8">
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                                    <a class="button" href="">Excluir</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    
                </div>
            </div>
            </div>
        <!--Footer Start Here -->
        <footer class="footer-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="footer-left">
                                <span>&copy; 2016 </span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="footer-right">
                                <span class="footer-meta">Desenvolvido&nbsp;<i class="fa fa-heart"></i>&nbsp;by&nbsp;<a target="_BLANK" href="https://www.facebook.com/proj.criativos/?fref=ts&ref=br_tfhttps://www.facebook.com/proj.criativos/?fref=ts&ref=br_tf">Projetos Criativos</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--Rightbar Start Here -->
    
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jRespond.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/nav-accordion.js"></script>
    <script src="js/hoverintent.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/switchery.js"></script>
    <script src="js/jquery.loadmask.js"></script>
    <script src="js/icheck.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/bootstrap-filestyle.js"></script>
    <script src="js/bootbox.js"></script>
    <script src="js/animation.js"></script>
    <script src="js/colorpicker.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/sweetalert.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/calendar/fullcalendar.js"></script>
    
</body>


</html>