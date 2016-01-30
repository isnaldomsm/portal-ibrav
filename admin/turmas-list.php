
<?php 
require('data/conexao.php');
?>
<!doctype html>
<html>
   <head>
      <?php include("includes/inc-head.php");?>
   </head>
   <body>
      <div class="page-container list-menu-view">
      <!--Leftbar Start Here -->
      <div class="left-aside desktop-view">
         <div class="left-navigation">
            <ul class="list-accordion">
               <?php include("includes/inc-menu-lateral.php");?>
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
                              <h2 class="breadcrumb-titles">Lista das Turmas </h2>
                              <ul class="list-page-breadcrumb">
                                 <li><a href="#">Home</a>
                                 </li>
                                 <li class="active-page"> Lista das turmas</li>
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
                           <span class="h-icon"><i class="fa fa-th"></i></span>
                           <h4>Turmas</h4>
                        </div>
                        <div class="widget-container">
                           <div class=" widget-block">
                              <table class="table dt-table">
                                 <thead>
                                    <tr>
                                       <th>
                                          Id
                                       </th>
                                       <th>
                                          Nome
                                       </th>
                                       <th>
                                          Ano
                                       </th>
                                       <th>
                                          Cidade
                                       </th>
                                    </tr>
                                 </thead>
                                 <tfoot>
                                    <tr>
                                       <th>
                                          Id
                                       </th>
                                       <th>
                                          Nome
                                       </th>
                                       <th>
                                          Ano
                                       </th>
                                       <th>
                                          Cidade
                                       </th>
                                    </tr>
                                 </tfoot>
                                 <tbody>
                                    <?php 
                                            $dados        = "SELECT * FROM turmas";
                                            $query        = mysql_query($dados);
                                            $conta        = mysql_num_rows($query);
                                                if($conta):
                                                    while($row = mysql_fetch_array($query)):
                                                          $id       = $row['id'];
                                                          $nome     = $row['nome'];
                                                          $ano      = $row['ano'];
                                                          $cidade   = $row['cidade'];
                                    ?>
                                    <tr>
                                    <a href="turmas.php?id=<?php echo $id;?>">
                                       <td>
                                          <?php echo $id;?>
                                       </td>
                                       <td>
                                           <?php echo $nome;?>
                                       </td>
                                       <td>
                                          <?php echo $ano;?>
                                       </td>
                                       <td>
                                          <?php echo $cidade;?>
                                       </td>
                                       </a>
                                    </tr>
                                    <?php 
                                            endwhile;
                                        endif;
                                    ?>
                                 </tbody>
                              </table>
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
                           <span>&copy; 2016 <a target="_BLANK" href="https://www.facebook.com/proj.criativos/?fref=ts&ref=br_tfhttps://www.facebook.com/proj.criativos/?fref=ts&ref=br_tf">Projetos Criativos</a></span>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="footer-right">
                           <span class="footer-meta">Desenvolvido&nbsp;<i class="fa fa-heart"></i>&nbsp;by&nbsp;<a target="_BLANK"href="https://www.facebook.com/proj.criativos/?fref=ts&ref=br_tfhttps://www.facebook.com/proj.criativos/?fref=ts&ref=br_tf">Projetos Criativos</a></span>
                        </div>
                     </div>
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <script src="js/jquery-1.11.2.min.js"></script>
      <script src="js/jquery-migrate-1.2.1.min.js"></script>
      <!--Load Mask-->
      <script src="js/jquery.loadmask.js"></script>
      <script src="js/jRespond.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/nav-accordion.js"></script>
      <script src="js/hoverintent.js"></script>
      <!--Materialize Effect-->
      <script src="js/waves.js"></script>
      <!--iCheck-->
      <script src="js/icheck.js"></script>
      <!--Select2-->
      <script src="js/select2.js"></script>
      <!--jquery.mentionsInput-->
      <script src="js/underscore.js"></script>
      <script src="js/jquery.elastic.js"></script>
      <script src="js/jquery.events.input.js"></script>
      <script src="js/jquery.mentionsInput.js"></script>
      <!--Text Editor-->
      <script src="js/summernote.min.js"></script>
      <!--CHARTS-->
      <script src="js/chart/sparkline/jquery.sparkline.js"></script>
      <script src="js/chart/easypie/jquery.easypiechart.min.js"></script>
      <!--Smart Resize-->
      <script src="js/smart-resize.js"></script>
      <!--Data Tables-->
      <script src="js/jquery.dataTables.js"></script>
      <script src="js/dataTables.responsive.js"></script>
      <script src="js/dataTables.tableTools.js"></script>
      <script src="js/dataTables.bootstrap.js"></script>
      <script src="js/stacktable.js"></script>
      <!--Layout Initialize-->
      <script src="js/layout.init.js"></script>
      <!--Template Plugins Initialize-->
      <script src="js/matmix.init.js"></script>
      <!--High Resolution Ready-->
      <script src="js/retina.min.js"></script>
   </body>
</html>
