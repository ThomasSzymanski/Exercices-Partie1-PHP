<!DOCTYPE html>
<html>
    <head>
        <title>TP 1 - Partie 10</title>
        <script src=""></script>
        <link rel="stylesheet" href=""/>
    </head>
    <body>
        <?php include 'selectCountry.php' ?>
        <form method="POST" name="candidateForm">
            <p>
                <label>Nom : <input type="text" name="surname"></label>
                <label>Prénom : <input type="text" name="name"></label>
            </p>
            <p> 
                <label>Date de naissance : <input type="date" name="birthday"></label>
                <label>Pays de naissance : 
                    <select name="birthCountry">
                        <option value="diplomaEmpty" selected="selected"></option>
                            <?php 
                                foreach($countries as $countrie){
                                    echo '<option value="' . $countrie . '">' . $countrie . '</option>';
                                }
                            ?>
                    </select>
                </label>
            </p>
            <p> <label>Nationalité : <input type="text" name="nationality"/></label></p>
            <p>
                <label>Adresse : <input type="text" name="address"></label>
                <label>Code postal : <input type="text" name="postalCode"></label>
                <label>Ville : <input type="text" name="city"></label>
            </p>
            <p> 
                <label>Pays : 
                    <select name="country">
                        <option value="diplomaEmpty" selected="selected"></option>
                            <?php 
                                foreach($countries as $countrie){
                                    echo '<option value="' . $countrie . '">' . $countrie . '</option>';
                                }
                            ?>
                    </select>
                </label>
            </p>
            <p>
                <label>Adresse email : <input type="email" name="mail"></label>
                <label>Téléphone : <input type="tel" name="phoneNumber"></label>
            </p>
            <p> 
                <label>Diplôme : 
                    <select name="diploma">
                        <option value="diplomaEmpty" selected="selected"></option>
                        <option value="notDiploma">Sans diplôme</option>
                        <option value="bac">BAC</option>
                        <option value="bac2">BAC +2</option>
                        <option value="bac3">BAC +3</option>
                        <option value="superieur">Diplôme(s) supérieur(s)</option>
                    </select>
                </label>
            </p>
            <p> <label>Numéro Pôle-Emploi : <input type="text" name="poleEmploi"></label></p>
            <p>
                <label>Liens codecademy : <input type="url" name="urlCodecademy"></label>
                <label>Nombre de badge : 
                    <select name="badgeNumber">
                        <option value="badgeNumberEmpty" selected="selected"></option>
                        <option value="verylow">Entre 0 et 10</option>
                        <option value="low">Entre 10 et 20</option>
                        <option value="medium">Entre 20 et 30</option>
                        <option value="high">30 et plus</option>
                    </select>
                </label>
            </p>
            <p> <label>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? : <textarea name="hero"></textarea></label></p>
            <p> <label>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :<textarea name="hacks"></textarea></label></p>
            <p> <label>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? : <textarea name="experience"></textarea></label></p>
            <p><input type="submit" name="send"/></p>
        </form>
    </body>
</html>