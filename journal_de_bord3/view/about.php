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

            <div class="titre">
               <h3>Présentation du projet</h3>
            </div>

            <div class="content">
                  <label>Dans le cadre des stages lors de la sixième session des techniques de l'informatique au Collège Lionel-Groulx, les étudiants ont la tâche quotidienne d'écrire en quelques lignes dans un journal ce qu'ils font durant leur séjour en entreprise.<br><br>

                  Bien que ce celui-ci se remplissait habituellement sur papier, mon projet consiste à implémenter ce système de journal de bord sur un site web affilié à celui du département de l'informatique. <br><br>

                  Le but principal du projet est avant tout de faciliter la tâche aux stagiaires autant qu'aux superviseurs et moniteurs de stages tout en leur offrant une interface simple et la possibilité d’interagir entre eux.<br><br>

                  Les étudiants pourront donc publier dans leur journal sur une base quotidienne et ce, complètement en ligne, tout en permettant à leur superviseur, moniteur et au coordonnateur d'avoir également accès au contenu de leurs publications.<br><br>

                  Le journal de bord en ligne sera également une bonne façon d'aider les stagiaires à faire un suivi de leur stage.<br><br>

                  <strong>Client</strong> : François Boileau<br>
                  <strong>Superviseur</strong> : Alexandre André-Lespérance
                  <br></label>
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