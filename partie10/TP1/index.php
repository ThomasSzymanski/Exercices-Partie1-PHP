<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-08" />
        <title>TP 1 - Partie 10</title>
        <script src=""></script>
        <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet"> 
        <link rel="canonical" href="https://www.jquery-az.com/bootstrap-select-5-beautiful-styles/" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
    </head>
    <body>
        <?php setlocale(LC_TIME, 'fr_FR.utf8','fra');?>
        <?php include 'selectCountry.php' ?>
        <?php include 'selectNationality.php' ?>
        <?php include 'regexVerifList.php' ?>
        <?php include 'verifPOST.php' ?>
        <h1>Formulaire de candidature E2N</h1>
        <?php
		if(!isset($_POST['send']) || !$validSurname || !$validName || !$validBirthday || !$validNationality || !$validAddress || !$validPostalCode || !$validCity || !$validCountry || !$validMail || !$validPhoneNumber || !$validDiploma || !$validPoleEmploi || !$validUrlCodecademy || !$validBadgeNumber){?>
        <div class="container-fluid blocForm col-lg-offset-3 col-lg-6">
            <form method="POST" name="candidateForm">
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-4">
                        <div class="blocInputNames input-group">
                                <span class="input-group-addon">Nom</span><input class="form-control input-lg" type="text" name="surname" value="<?php if (isset($_POST['surname'])){echo $_POST['surname'];} ?>" required>
                        </div>
                    </div>
                    <div class="col-lg-offset-2 col-lg-4">
                        <div class="blocInputNames input-group removeRadius">
                                <span class="input-group-addon">Prénom</span><input class="form-control input-lg inputRadiusRight" type="text" name="name" value="<?php if (isset($_POST['name'])){echo $_POST['name'];} ?>"required>  
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-4 errorText">
                        <?php
                            if (isset($_POST['surname']))
                            {
                                $_POST['surname'] = htmlspecialchars($_POST['surname']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

                                if (!preg_match($nameRegex, $_POST['surname']))
                                {
                                    echo 'Veuillez saisir un nom de famille valide.';
                                    $validSurname = false;
                                }else{
                                    $validSurname = true;
                                }
                            }
                        ?>
                    </div>
                    <div class="col-lg-offset-2 col-lg-4 errorText">
                        <?php
                            if (isset($_POST['name']))
                            {
                                $_POST['name'] = htmlspecialchars($_POST['name']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

                                if (!preg_match($nameRegex, $_POST['name']))
                                {
                                    echo 'Veuillez saisir un prénom valide.';
                                    $validName = false;
                                }else{
                                    $validName = true;
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="blocInputNames input-group">
                            <span class="input-group-addon hidden-xs">Date de Naissance</span><input type="date" class="form-control input-lg" name="birthday" value="<?php if (isset($_POST['birthday'])){echo $_POST['birthday'];} ?>"required>
                        </div>
                    </div>
                    <div class="col-lg-offset-2 col-lg-5">
                            <select name="birthCountry" class="col-lg-4 form-control selectForm selectBirthCountry" data-style="btn-primary" required>
                                <option value="birthCountryEmpty" selected="selected">Sélectionnez votre pays de naissance</option>
                                    <?php 
                                        sort($countries);
                                        foreach($countries as $countrye)
                                        {
                                    ?>
                                        <option value="<?php echo $countrye ?>"<?php echo (isset($_POST['birthCountry']) && $_POST['birthCountry'] == $countrye ) ? 'selected' : ''; ?>><?php echo $countrye ?></option>
                                    <?php
                                       }
                                    ?>
                            </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 errorText">
                        <?php
                            if (isset($_POST['birthday']))
                            {
                                $_POST['birthday'] = htmlspecialchars($_POST['birthday']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer
                                $verifMajority = strtotime($_POST['birthday']);

                                //Vérification de la majorité d'un candidat
                                // Timestamp actuelle - Timestamp correspondant à une période de 18 ans et comparer la date saisie par l'utilisateur au résultat précédent.

                                $verifAge = (time() - (18 * 31556926));

                                if($verifMajority > $verifAge)
                                {
                                    echo 'Vérifiez votre date de naissance – Nous vous rappelons que les candidatures sont réservées aux personnes majeures.';
                                    $validBirthday = false;
                                }else{
                                    $validBirthday = true;
                                }
                            }
                        ?>
                    </div>
                    <div class="col-lg-offset-2 col-lg-5 errorText">
                        <?php
                            if (isset($_POST['birthCountry']))
                            {

                                if ($_POST['birthCountry'] == 'birthCountryEmpty')
                                {
                                    echo 'Veuillez sélectionner votre pays de naissance.';
                                    $validNationality = false;
                                }else{
                                    $validNationality = true;
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6">
                                <select name="nationality" class="form-control selectForm selectRadiusAll" required>
                                    <option value="nationalityEmpty" selected="selected">Sélectionnez votre nationalité</option>
                                        <?php 
                                            sort($nationalities);
                                            foreach($nationalities as $nationalitie)
                                            {
                                        ?>
                                            <option value="<?php echo $nationalitie ?>"<?php echo (isset($_POST['nationality']) && $_POST['nationality'] == $nationalitie ) ? 'selected' : ''; ?>><?php echo $nationalitie ?></option>
                                        <?php 
                                            }
                                        ?>
                                </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 errorText errorTextMargin">
                        <?php
                            if (isset($_POST['nationality']))
                            {

                                if ($_POST['nationality'] == 'nationalityEmpty')
                                {
                                    echo 'Veuillez sélectionner votre nationalité.';
                                    $validNationality = false;
                                }else{
                                    $validNationality = true;
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-lg-offset-1 col-lg-10">
                        <div class="input-group inputMarginTop">
                            <span class="input-group-addon">Adresse</span><input type="text" name="address" class="form-control input-lg" value="<?php if (isset($_POST['address'])){echo $_POST['address'];} ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-lg-offset-1 col-lg-10 errorText errorTextMargin">
                        <?php
                            if (isset($_POST['address']))
                            {
                                $_POST['address'] = htmlspecialchars($_POST['address']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

                                if (!preg_match($addressRegex, $_POST['address']))
                                {
                                    echo 'Veuillez saisir une adresse postale valide.';
                                    $validAddress = false;
                                }else{
                                    $validAddress = true;
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-4">
                        <div class="input-group inputMarginTop">
                            <span class="input-group-addon">Code Postal</span><input type="text" name="postalCode" class="form-control input-lg" value="<?php if (isset($_POST['postalCode'])){echo $_POST['postalCode'];} ?>" required>
                        </div>
                    </div>
                    <div class="col-lg-offset-2 col-lg-4">
                        <div class="input-group inputMarginTop removeRadius">
                            <span class="input-group-addon">Ville</span><input type="text" name="city" class="form-control input-lg inputRadiusRight" value="<?php if (isset($_POST['city'])){echo $_POST['city'];} ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-4 errorText errorTextMargin">
                        <?php
                            if (isset($_POST['postalCode']))
                            {
                                $_POST['postalCode'] = htmlspecialchars($_POST['postalCode']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

                                if (!preg_match($postalCodeRegex, $_POST['postalCode']))
                                {
                                    echo 'Veuillez saisir un code postal valide.';
                                    $validPostalCode = false;
                                }else{
                                    $validPostalCode = true;
                                }
                            }
                        ?>
                    </div>
                    <div class="col-lg-offset-2 col-lg-4 errorText errorTextMargin">
                        <?php
                            if (isset($_POST['city']))
                            {
                                $_POST['city'] = htmlspecialchars($_POST['city']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

                                if (!preg_match($cityRegex, $_POST['city']))
                                {
                                    echo 'Veuillez saisir un nom de ville valide.';
                                    $validCity = false;
                                }else{
                                    $validCity = true;
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6">
                        <select name="country" class="form-control selectForm selectRadiusAll inputMarginTop" required>
                                    <option value="countryEmpty">Sélectionnez votre pays de résidence</option>
                                        <?php 
                                            sort($countries);
                                            foreach($countries as $countrie){?>
                                                <option value="<?php echo $countrie ?>"<?php echo (isset($_POST['country']) && $_POST['country'] == $countrie ) ? 'selected' : ''; ?>><?php echo $countrie ?></option>
                                           <?php }
                                        ?>
                        </select>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 errorText errorTextMargin">
                        <?php
                            if (isset($_POST['country']))
                            {

                                if ($_POST['country'] == 'countryEmpty')
                                {
                                    echo 'Veuillez sélectionner votre pays de résidence.';
                                    $validCountry = false;
                                }else{
                                    $validCountry = true;
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="input-group inputMarginTop">
                            <span class="input-group-addon">Mail</span><input type="email" name="mail" class="form-control input-lg" value="<?php if (isset($_POST['mail'])){echo $_POST['mail'];} ?>" required>
                        </div>
                    </div>
                    <div class="col-lg-offset-2 col-lg-4">
                        <div class="input-group inputMarginTop removeRadius">
                            <span class="input-group-addon">Téléphone</span><input type="tel" name="phoneNumber" class="form-control input-lg inputRadiusRight" value="<?php if (isset($_POST['phoneNumber'])){echo $_POST['phoneNumber'];} ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 errorText errorTextMargin">
                        <?php
                            if (isset($_POST['mail']))
                            {
                                $_POST['mail'] = htmlspecialchars($_POST['mail']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

                                if (!preg_match($mailRegex, $_POST['mail']))
                                {
                                    echo 'Veuillez saisir une adresse email au format : pseudo@hebergeur.nomdedomaine';
                                    $validMail = false;
                                }else{
                                    $validMail = true;
                                }
                            }
                        ?>
                    </div>
                    <div class="col-lg-offset-2 col-lg-4 errorText errorTextMargin">
                        <?php
                            if (isset($_POST['phoneNumber']))
                            {
                                $_POST['phoneNumber'] = htmlspecialchars($_POST['phoneNumber']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

                                if (!preg_match($phoneNumberRegex, $_POST['phoneNumber']))
                                {
                                    echo 'Veuillez saisir un numéro de téléphone valide.';
                                    $validPhoneNumber = false;
                                }else{
                                    $validPhoneNumber = true;
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-lg-offset-3 col-lg-6">
                        <select name="diploma" class="form-control selectForm selectRadiusAll inputMarginTop" required>
                            <option value="diplomaEmpty" selected="selected">Sélectionnez votre niveau de diplôme</option>
                            <option value="Non diplômé" <?php echo (isset($_POST['diploma']) && $_POST['diploma'] == 'Non diplômé' ) ? 'selected' : ''; ?>>Sans diplôme</option>
                            <option value="BAC" <?php echo (isset($_POST['diploma']) && $_POST['diploma'] == 'BAC' ) ? 'selected' : ''; ?>>BAC</option>
                            <option value="BAC +2" <?php echo (isset($_POST['diploma']) && $_POST['diploma'] == 'BAC +2' ) ? 'selected' : ''; ?>>BAC +2</option>
                            <option value="BAC +3" <?php echo (isset($_POST['diploma']) && $_POST['diploma'] == 'BAC +3' ) ? 'selected' : ''; ?>>BAC +3</option>
                            <option value="Niveau supérieur" <?php echo (isset($_POST['diploma']) && $_POST['diploma'] == 'Niveau supérieur' ) ? 'selected' : ''; ?>>Diplôme(s) supérieur(s)</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 errorText errorTextMargin">
                        <?php
                            if (isset($_POST['diploma']))
                            {

                                if ($_POST['diploma'] == 'diplomaEmpty')
                                {
                                    echo 'Veuillez sélectionner votre niveau de diplôme.';
                                    $validDiploma = false;
                                }else{
                                    $validDiploma = true;
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6">
                        <div class="input-group inputMarginTop">
                            <span class="input-group-addon">Identifiant Pôle Emploi</span><input type="text" name="poleEmploi" class="selectRadiusAll form-control input-lg" value="<?php if (isset($_POST['poleEmploi'])){echo $_POST['poleEmploi'];} ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 errorText errorTextMargin">
                        <?php
                            if (isset($_POST['poleEmploi']))
                            {
                                $_POST['poleEmploi'] = htmlspecialchars($_POST['poleEmploi']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

                                if (!preg_match($poleEmploiRegex, $_POST['poleEmploi']))
                                {
                                    echo 'Veuillez saisir un identifiant Pôle-Emploi valide – 8 caractères avec chiffres et lettres en majuscules.';
                                    $validPoleEmploi = false;
                                }else{
                                    $validPoleEmploi = true;
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="input-group inputMarginTop">
                            <span class="input-group-addon">Lien Codecademy</span><input type="url" name="urlCodecademy" class="form-control input-lg" value="<?php if (isset($_POST['urlCodecademy'])){echo $_POST['urlCodecademy'];} ?>" required>
                        </div>
                    </div>
                    <div class="col-lg-offset-1 col-lg-5">    
                            <select name="badgeNumber" class="form-control selectForm inputRadiusRight inputMarginTop" required>
                                <option value="badgeNumberEmpty" selected="selected">Sélectionnez votre nombre de badge</option>
                                <option value="entre 0 et 10" <?php echo (isset($_POST['badgeNumber']) && $_POST['badgeNumber'] == 'entre 0 et 10' ) ? 'selected' : ''; ?>>Entre 0 et 10</option>
                                <option value="entre 10 et 20" <?php echo (isset($_POST['badgeNumber']) && $_POST['badgeNumber'] == 'entre 10 et 20' ) ? 'selected' : ''; ?>>Entre 10 et 20</option>
                                <option value="entre 20 et 30" <?php echo (isset($_POST['badgeNumber']) && $_POST['badgeNumber'] == 'entre 20 et 30' ) ? 'selected' : ''; ?>>Entre 20 et 30</option>
                                <option value="plus de 30" <?php echo (isset($_POST['badgeNumber']) && $_POST['badgeNumber'] == 'plus de 30' ) ? 'selected' : ''; ?>>Plus de 30</option>
                            </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 errorText errorTextMargin">
                        <?php
                            if (isset($_POST['urlCodecademy']))
                            {
                                $_POST['urlCodecademy'] = htmlspecialchars($_POST['urlCodecademy']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

                                if (!preg_match($codecademyRegex, $_POST['urlCodecademy']))
                                {
                                    echo 'Veuillez saisir un lien valide du type : https://www.codecademy.com/pseudo';
                                    $validUrlCodecademy = false;
                                }else{
                                    $validUrlCodecademy = true;
                                }
                            }
                        ?>
                    </div>
                    <div class="col-lg-offset-1 col-lg-5 errorText errorTextMargin">
                        <?php
                            if (isset($_POST['badgeNumber']))
                            {

                                if ($_POST['badgeNumber'] == 'badgeNumberEmpty')
                                {
                                    echo 'Veuillez sélectionner votre nombre de badge sur le site https://www.codecademy.com/';
                                    $validBadgeNumber = false;
                                }else{
                                    $validBadgeNumber = true;
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 labelTextarea"><p>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</p></div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-10"><textarea  name="hero" class="form-control textareaForm" rows="6" required><?php if (isset($_POST['hero'])){echo $_POST['hero'];} ?></textarea></div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-10 errorText errorTextMargin">
                        <?php 
                                if(isset($_POST['send'])){
                                    if (empty($_POST['hero']))
                                        {
                                            echo 'Veuillez remplir ce champ'; 
                                        } 
                                }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 labelTextarea"><p>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</p></div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-10"><textarea  name="hacks" class="form-control textareaForm" rows="6" required><?php if (isset($_POST['hacks'])){echo $_POST['hacks'];} ?></textarea></div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-10 errorText errorTextMargin">
                        <?php   
                                if(isset($_POST['send'])){
                                    if (empty($_POST['hacks']))
                                        {
                                            echo 'Veuillez remplir ce champ'; 
                                        }  
                                }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 labelTextarea"><p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p></div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-10"><textarea  name="experience" class="form-control textareaForm" rows="6" required><?php if (isset($_POST['experience'])){echo $_POST['experience'];} ?></textarea></div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-10 errorText errorTextMargin">
                        <?php 
                                if(isset($_POST['send'])){
                                    if (empty($_POST['experience']))
                                        {
                                            echo 'Veuillez remplir ce champ'; 
                                        }
                                }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-4 positionButton">
                            <input type="submit" class="btn buttonSend" value="Envoyer ma candidature" name="send"/>
                    </div>
                </div>
            </form>
        </div> <!-- Fermeture container -->
        <?php 
		}
        ?>
        <?php include 'affichageInfos.php' ?>  
    </body>
</html>