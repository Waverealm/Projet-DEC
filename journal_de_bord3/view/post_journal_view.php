<?php
   session_start();

   include_once('../controller/interface_functions.php');
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Journal de bord</title> 
      <meta charset="utf-8">
      <meta name="author" content="Léa Kelly"> 
      <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
      <link rel="Stylesheet" href="../css and js/css_global.css" />
   </head>
   <body>

      <div class="page">
         <div class="div_page_content" > 

            <div class="header_global" >
               <div class="header_user" >
                  <?php showAppriopriateHeader() ?>
               </div>
               <a href="index.php"><img src="../images/logo.png" alt="Logo" /></a>
            </div>

            <div class="menu">
               <div class="container_titre_menu" >
                  <div class="titre_menu">Navigation</div>
                     <?php showAppriopriateMenu(); ?>
                     <a href="URL">Manuel (à venir)</a>
                  <div class="titre_menu">Collège</div>
                     <a href="http://depinfo2013.clg.qc.ca/">Depinfo</a><br>
                     <a href="http://www.clg.qc.ca/">Site officiel</a>
               </div>
            </div>

            <div class='titre'><h3>Publier dans mon journal</h3></div>

            <div class="content"> 
               <form action="../controller/post_journal_controller.php" method="post">
                  <table>
                     <tr>
                        <td><div class='titre'>Avant-midi</div></td>
                        <td><div class='titre'>Après-midi</div></td>
                     </tr>
                     <tr>
                        <td><textarea rows="15" cols="32" name="morning_content" placeholder="Écrire ici" /></textarea></td>
                        <td><textarea rows="15" cols="32" name="afternoon_content" placeholder="Écrire ici" /></textarea></td>
                     </tr>
                     <tr><td colspan="2" style="text-align: right"><input class="button" type="submit" value="Publier"></td></tr>
                  </table>
               </form>
            </div>

         </div>   

         <footer class="page_footer">
            <a href="about.php">À propos</a>
            <label> - </label>
            <a href="developers.php">Développeurs</a>
         </footer>
      
      </div>
   </body>
</html>

<?php 
   if( isset($_SESSION[ 'erreurs_journal' ]))
   {
      ?>
      <script>alert("<?php echo $_SESSION[ 'erreurs_journal' ]; ?>");</script>
      <?php
      unset($_SESSION[ 'erreurs_journal' ]);

   }
?>