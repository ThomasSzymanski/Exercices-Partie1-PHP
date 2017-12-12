<?php

	function chooseSex($genre, $age){
		if($genre == 'Homme' && $age >= 18){
		echo 'Vous êtes un homme et vous êtes majeur.';
	}elseif($genre == 'Homme' && $age < 18){
		echo 'Vous êtes un homme et vous êtes mineur.';
	}elseif($genre == 'Femme' && $age >= 18){
		echo 'Vous êtes une femme et vous êtes majeur.';
	}else{
		echo 'Vous êtes une femme et vous êtes mineur.';
	}
	}

	chooseSex('Homme', 21);
?>