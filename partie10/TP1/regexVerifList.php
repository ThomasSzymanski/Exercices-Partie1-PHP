<?php
//Liste des RegEx pour les différents champs du formulaire
$nameRegex = '#^[a-zA-Z\'àâéèêëôùûïçÀÂÉÈÔÙÛÇ\s-]{2,25}$#';
$addressRegex = '#^[0-9]{1,4}[ ,.-]+([0-9a-zA-Z\' àâéèêëôùûïîçÀÂÉÈÔÙÛÇ\s-]{1,30}){1,20}$#';
$postalCodeRegex = '#^[0-9]{5}$#';
$cityRegex = '#^[a-zA-Z\'àâéèêëôùûïîçÀÂÉÈÔÙÛÇ\s-]{2,25}$#';
$mailRegex = '#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#';
$phoneNumberRegex = '#^0[1-79]([-. /]?[0-9]{2}){4}$#';
$poleEmploiRegex = '#^[0-9A-Z]{8}$#';
$codecademyRegex = '#^https:\/\/www\.codecademy\.com[\/]?[a-z]{0,2}\/[0-9a-zA-Z\'àâéèêëôùûïçÀÂÉÈÔÙÛÇ@-]{2,25}$#';