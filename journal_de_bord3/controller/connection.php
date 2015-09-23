<?php

	// Initialisation de la session
	session_start();

	include_once('../model/queries.php');
	include_once('password.php');


	// Si on a reçu les données d'un formulaire
	if( isset( $_POST[ 'email_usager' ] ) && isset( $_POST[ 'mot_de_passe' ] ) )
	{
	   // On les récupère
	   $emailusager = $_POST[ 'email_usager' ];
	   $motdepasse = getCryptedPassword($_POST['mot_de_passe']);

	   $_SESSION[ 'email' ] = $emailusager;

	   // On teste si les informations sont valides
	   if( verification( $emailusager, $motdepasse ) )
	   {
		  unset($_SESSION[ 'email' ]);
		  $_SESSION[ 'email_usager' ] = $emailusager;
		  $_SESSION[ 'info_connexion' ] = "Vous avez été correctement identifié.";
		  $_SESSION[ 'connected' ] = true;
		  header('Location: ../view/index.php');
	   }
	   else
	   {
		  // Sinon on avertit l'utilisateur
	   	  $_SESSION[ 'info_connexion' ] =  "Adresse email ou mot de passe invalide.";
		  header('Location: ../view/index.php');
	   }
	}

	function verification( $emailusager, $motdepasse )
	{
	   $connected = false;

	   $bdd = dbConnect();

		// On va récupérer l'utilisateur précis
		$reponse = getUser($bdd, $emailusager);
   

	   	// On vérifie si l'adresse email et mot de passe correspondent
	   	if ($reponse[0][ "MotDePasse" ] == $motdepasse)
		{
			$connected = true;
			$_SESSION['first_name'] = $reponse[0]['Prenom'];
			$_SESSION['last_name'] = $reponse[0]['Nom'];
			$_SESSION['user_type'] = $reponse[0]['TypeUtilisateur'];
		} else {
			$connected = false;
		}

	   return $connected;
	}

	?>