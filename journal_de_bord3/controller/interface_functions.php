<?php

	// Fonction affichant un message pour mentionner que l'inscription 
	// s'est effectuée avec succès
	function showRegistrationSucceeded()
	{
		if (isset($_SESSION[ 'registered' ]))
		{
			if($_SESSION[ 'registered' ] == true)
			{
				echo '<head><meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" /></head>
      				 <h2>Inscription réussie</h2>
      				 <p>Bienvenue! Vous &ecirctes maintenant inscrit sur le journal de bord des stages </p>';
			}

			unset($_SESSION[ 'registered']);
		}
	}

	function showPublicationSucceeded()
	{
		if (isset($_SESSION[ 'posted' ]))
		{
			if($_SESSION[ 'posted' ] == true)
			{
				echo'<h3>Publication post&eacutee !</h3>';
			}

			unset($_SESSION[ 'posted']);
		}
	}

	function showAppriopriateMenu()
	{
		if(isset($_SESSION[ "user_type" ]) && isset($_SESSION[ "connected" ]))
		{
			if($_SESSION[ "connected" ])
			{
				if($_SESSION[ "user_type" ] == "Stagiaire")
				{
					?>

					<a href="post_journal_view.php">Publier dans mon journal</a>  <br>
                     <a href="consult_journal_view.php">Mon journal</a>  <br>

                    <?php
				}

				else if($_SESSION[ "user_type"] == "Responsable")
				{
					?>

					<a href="URL.php">Mes stagiaires</a>  <br>

                    <?php
				}
			}
		}
	}

	function showAppriopriateHeader()
	{
		if(isset($_SESSION[ "user_type" ]) && isset($_SESSION[ "connected" ]))
		{
			if($_SESSION[ "connected" ])
			{
				if($_SESSION[ "user_type" ] == "Stagiaire")
				{
					?> 

					<div class="section_user_header">
                        <form action="../controller/deconnection.php" method="post">
                           <a href="post_journal_view.php"><img src="../images/Publier_Icon.png" alt="Publier_Icon" /></a><?php echo $_SESSION['last_name'].", ".$_SESSION['first_name']."   "; ?><input class="button" type="submit" value="Déconnexion" >
                        </form>
      				</div>

      				<?php
				}

				else if($_SESSION[ "user_type"] == "Responsable")
				{
					?>

					<div class="section_user_header">
                        <form action="../controller/deconnection.php" method="post">
                           <?php echo $_SESSION['last_name'].", ".$_SESSION['first_name']."   "; ?><input class="button" type="submit" value="Déconnexion" >
                        </form>
      				</div>

      				<?php
				}
			}
		}

		else 
		{
			showVisitorHeader();
		}
	}

	function showVisitorHeader()
	{
		?>

		<form class="section_user_header " action="../controller/connection.php" method="post">
            <input class="champ_texte" type="text" name="email_usager" placeholder="Adresse courriel" 
                   value="<?php if (isset($_SESSION[ 'email' ])) echo htmlentities(trim($_SESSION[ 'email' ])); ?>" />
            <input class="champ_texte" type="password" name="mot_de_passe" placeholder="Mot de passe" />
            <input class="button" type="submit" value="Se connecter">
            <a href="registration_view.php"><input class="button" type="button" value="S'inscrire"></a>
        </form>

        <?php
	}

?>