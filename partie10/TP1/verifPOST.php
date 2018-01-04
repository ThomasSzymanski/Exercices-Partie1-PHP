<?php

    if (isset($_POST['surname']))
    {
        $_POST['surname'] = strip_tags($_POST['surname']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

        if (!preg_match($nameRegex, $_POST['surname']))
        {
            $validSurname = false;
        }else{
            $validSurname = true;
        }
    }
?>
<?php
    if (isset($_POST['name']))
    {
        $_POST['name'] = strip_tags($_POST['name']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

        if (!preg_match($nameRegex, $_POST['name']))
        {
            $validName = false;
        }else{
            $validName = true;
        }
    }
?>
<?php
    if (isset($_POST['birthday']))
    {
        $_POST['birthday'] = strip_tags($_POST['birthday']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer
        $verifMajority = strtotime($_POST['birthday']);
                
        //Vérification de la majorité d'un candidat
        // Timestamp actuelle - Timestamp correspondant à une période de 18 ans et comparer la date saisie par l'utilisateur au résultat précédent.

        $verifAge = (time() - (18 * 31556926));
        
        if($verifMajority > $verifAge)
        {
            $validBirthday = false;
        }else{
            $validBirthday = true;
        }
    }
?>
<?php
    if (isset($_POST['birthCountry']))
    {
        if ($_POST['birthCountry'] == 'birthCountryEmpty')
        {
            $validNationality = false;
        }else{
            $validNationality = true;
        }
    }
?>
<?php
    if (isset($_POST['nationality']))
    {
        if ($_POST['nationality'] == 'nationalityEmpty')
        {
            $validNationality = false;
        }else{
            $validNationality = true;
        }
    }
?>
<?php
    if (isset($_POST['address']))
    {
        $_POST['address'] = strip_tags($_POST['address']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

        if (!preg_match($addressRegex, $_POST['address']))
        {
            $validAddress = false;
        }else{
            $validAddress = true;
        }
    }
?>
<?php
    if (isset($_POST['postalCode']))
    {
        $_POST['postalCode'] = strip_tags($_POST['postalCode']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

        if (!preg_match($postalCodeRegex, $_POST['postalCode']))
        {
            $validPostalCode = false;
        }else{
            $validPostalCode = true;
        }
    }
?>
<?php
    if (isset($_POST['city']))
    {
        $_POST['city'] = strip_tags($_POST['city']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

        if (!preg_match($cityRegex, $_POST['city']))
        {
            $validCity = false;
        }else{
            $validCity = true;
        }
    }
?>
<?php

    if (isset($_POST['country']))
    {
        if ($_POST['country'] == 'countryEmpty')
        {
            $validCountry = false;
        }else{
            $validCountry = true;
        }
    }
?>
<?php
    if (isset($_POST['mail']))
    {
        $_POST['mail'] = strip_tags($_POST['mail']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

        if (!preg_match($mailRegex, $_POST['mail']))
        {
            $validMail = false;
        }else{
            $validMail = true;
        }
    }
?>
<?php
    if (isset($_POST['phoneNumber']))
    {
        $_POST['phoneNumber'] = strip_tags($_POST['phoneNumber']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

        if (!preg_match($phoneNumberRegex, $_POST['phoneNumber']))
        {
            $validPhoneNumber = false;
        }else{
            $validPhoneNumber = true;
        }
    }
?>
<?php
    if (isset($_POST['diploma']))
    {
        if ($_POST['diploma'] == 'diplomaEmpty')
        {
            $validDiploma = false;
        }else{
            $validDiploma = true;
        }
    }
?>
<?php
    if (isset($_POST['poleEmploi']))
    {
        $_POST['poleEmploi'] = strip_tags($_POST['poleEmploi']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

        if (!preg_match($poleEmploiRegex, $_POST['poleEmploi']))
        {
            echo 'Veuillez saisir un identifiant Pôle-Emploi valide – 8 caractères avec chiffres et lettres en majuscules.';
            $validPoleEmploi = false;
        }else{
            $validPoleEmploi = true;
        }
    }
?>
<?php
    if (isset($_POST['urlCodecademy']))
    {
        $_POST['urlCodecademy'] = strip_tags($_POST['urlCodecademy']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

        if (!preg_match($codecademyRegex, $_POST['urlCodecademy']))
        {
            $validUrlCodecademy = false;
        }else{
            $validUrlCodecademy = true;
        }
    }
?>
<?php
    if (isset($_POST['badgeNumber']))
    {
        if ($_POST['badgeNumber'] == 'badgeNumberEmpty')
        {
            $validBadgeNumber = false;
        }else{
            $validBadgeNumber = true;
        }
    }
?>
<?php
    if (isset($_POST['hero']))
    {
        $_POST['hero'] = strip_tags($_POST['hero']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer
    }
?>
<?php
    if (isset($_POST['hacks']))
    {
        $_POST['hacks'] = strip_tags($_POST['hacks']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer
    }
?>
<?php
    if (isset($_POST['experience']))
    {
        $_POST['experience'] = strip_tags($_POST['experience']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer
    }
?>
