<?php

	function getCryptedPassword($pass)
	{
		// Contenu de mon salt
		$salt = 'W9hvxBZpTHTj1YnO9QAhR94tw9rLs1bIKnwENsxd';

		return md5($pass.$salt);


		/* Ancien algorithme. Non-fonctionnel.
		// Source : http://www.gregboggs.com/php-blowfish-random-salted-passwords/

		// Caractères permis
		$Allowed_Chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789./';
		$Chars_Len = 63;

		// Longueur du salt
		$Salt_Length = 21;

		$salt = "";

		// Génère un salt au hasard
		for($i=0; $i<$Salt_Length; $i++)
		{
    		$salt .= $Allowed_Chars[mt_rand(0,$Chars_Len)];
		}

		// On crypte le salt
		global $Blowfish_Pre, $Blowfish_End;
		$bcrypt_salt = $Blowfish_Pre . $salt . $Blowfish_End;

		// On crypte le mot de passe avec le cryptage du salt
		return crypt($pass, $bcrypt_salt);*/
	}
?>