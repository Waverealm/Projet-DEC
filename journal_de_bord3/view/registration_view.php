<?php
   session_start();
?>

<!DOCTYPE html>
<html>
	<head>
    	<title>Journal de bord</title> 
		<meta charset="utf-8">
      <meta name="author" content="Léa Kelly"> 
      <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
		<link rel="Stylesheet" href="../css and js/css_global.css" />
      <script src="../css and js/js_global.js" ></script>
	</head>
	<body>
	  
      <div id="header_logo_inscription"><a href="index.php"><img src="../images/logo.png" alt="Logo" /></a></div>

      <form action="../controller/registration_controller.php" method="post">
          <div id="page_inscription">

                  <table id="table_inscription">

                     <tr>
                        <td colspan="2" id="titre_inscription">Inscription</td>
                     </tr>

                     <tr>
                        <td class="labelRow">Adresse courriel : </td>
                        <td>
                           <input class="champ_texte_inscription" type="text" name="email_usager" 
                           value="<?php if (isset($_SESSION[ 'email' ])) echo htmlentities(trim($_SESSION[ 'email' ])); ?>" />
                        </td>
                     </tr>

                     <tr>
                        <td class="labelRow">Nom : </td>
                        <td>
                           <input class="champ_texte_inscription" type="text" name="nom" 
                           value="<?php if (isset($_SESSION[ 'last_name' ])) echo htmlentities(trim($_SESSION[ 'last_name' ])); ?>" />
                        </td>
                     </tr>

                     <tr>
                        <td class="labelRow">Prénom : </td>
                        <td>
                           <input class="champ_texte_inscription" type="text" name="prenom" 
                           value="<?php if (isset($_SESSION[ 'first_name' ])) echo htmlentities(trim($_SESSION[ 'first_name' ])); ?>" />
                        </td>
                     </tr>

                     <tr>
                        <td class="labelRow">Type d'utilisateur : </td>
                        <td>
                           <select id="type_user" name="type_utilisateur" onchange="checkOption(this.value)">
                              <option value="Default">-</option>
                              <option value="Stagiaire">Stagiaire</option>
                              <option value="Responsable">Responsable</option>
                           </select>
                        </td>
                     </tr>

                     <tr id="num_ad" style="display: none">
                        <td class="labelRow">Numéro d'admission : </td>
                        <td><input class="champ_texte_inscription" type="text" name="num_ad_stagiaire" onkeyup="checkIfOnlyNumbers(this)" /></td>
                     </tr>

                     <tr id="lieu_stage" style="display: none">
                        <td class="labelRow">Lieu de mon stage : </td>
                        <td><input id="lieu_stage" class="champ_texte_inscription" type="text" name="lieu_stage_stagiaire" /></td>
                     </tr>

                     <tr id="type_resp" style="display: none">
                        <td class="labelRow" >Type de responsable : </td>
                        <td>
                           <select name="type_resp" >
                              <option value="choix1">-</option>
                              <option value="Superviseur">Superviseur</option>
                              <option value="Moniteur">Moniteur</option>
                           </select>
                        </td>
                     </tr>

                     <tr>
                        <td class="labelRow">Mot de passe : </td>
                        <td><input class="champ_texte_inscription" type="password" name="mot_de_passe" placeholder="Minimum 6 caractères" /></td>
                     </tr>

                     <tr>
                        <td class="labelRow">Confirmer le mot de passe : </td>
                        <td><input class="champ_texte_inscription" type="password" name="mot_de_passe_confirmation"  /></td>
                     </tr>

                     <tr>
                        <td colspan="2"><input class="button" type="submit" value="S'inscrire"></td>
                     </tr>

                  </table>

         </div>
      </form>

      <center>
         <?php 
            if( isset($_SESSION[ 'erreurs_inscription' ]) )
            {
               echo $_SESSION[ 'erreurs_inscription' ];
               unset($_SESSION[ 'erreurs_inscription' ]);
            }
         ?>
      </center>

	</body>
</html>