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

            <div id="journal">

               <div class='titre' colspan="3">Journal de ...</div>

               <form id="week_dates" action="../controller/consult_journal_controller.php" method="post">
                  <input class="arrow_left" type="submit" />
                  <div class="titre" style="display: inline-block"><h2>Semaine du ... au ...</h2></div>
                  <input class="arrow_right" type="submit" />
               </form>

               <form id="form_day" action="../controller/consult_journal_controller.php" method="post">
                  <div id="week_day" name="day_name">MARDI</div>
                  <div name="date">Date</div>
                  <div class="inline_element">
                     <input class="arrow_left" type="submit" />
                     <div class="inline_element">Avant-Midi</div>
                     <div class="inline_element">BLABLA</div>
                     <input class="arrow_right" type="submit" />
                  </div>
                  <div style="margin: 0px auto;">
                     <div  class="inline_element">Après-Midi</div>
                     <div  class="inline_element">BLABLA</div>
                  </div>
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