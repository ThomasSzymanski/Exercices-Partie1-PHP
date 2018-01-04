<?php
    if(isset($_POST['send']) && $validSurname && $validName && $validBirthday && $validNationality && $validAddress && $validPostalCode && $validCity && $validCountry && $validMail && $validPhoneNumber && $validDiploma && $validPoleEmploi && $validUrlCodecademy && $validBadgeNumber){
?>        
<div class="container-fluid blocForm col-lg-offset-3 col-lg-6">
    <div class="row">
        <div class="col-lg-12 thanksUser">
            <?php 
                echo 'Merci pour ta candidature ' . $_POST['name'] . ' ' . $_POST['surname'] . ' !';
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 recapInfos">
            <?php 
                echo 'Récapitulatif des informations saisies :';
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 infosUsers">
            <p>
                <span class="typeInfosUser">Naissance le : </span> <?php echo  strftime('%d %B %Y', strtotime($_POST['birthday'])) . ' (' . $_POST['birthCountry'] . ')' ?> 
                <span class="typeInfosUser">de nationalité : </span> <?php echo  $_POST['nationality']; ?>
            </p>
            <p>
                <span class="typeInfosUser">Adresse : </span> <?php echo $_POST['address'] . ' ' . $_POST['postalCode'] . ' ' . $_POST['city'] . ' - ' . $_POST['country']; ?>   
            </p>
            <p>
                <span class="typeInfosUser">Adresse mail : </span> <?php echo $_POST['mail']; ?>
            </p>
            <p>
                <span class="typeInfosUser">Numéro de téléphone : </span> <?php echo $_POST['phoneNumber']; ?>    
            </p>
            <p>
                <span class="typeInfosUser">Niveau de diplôme : </span> <?php echo $_POST['diploma']; ?>
            </p>
            <p>
                <span class="typeInfosUser">Identifiant Pôle Emploi : </span><?php echo $_POST['poleEmploi']; ?>
            </p>
            <p>
                <span class="typeInfosUser">Lien du profil Codecademy : </span> <a href="<?php echo $_POST['urlCodecademy']; ?>" <?php $_POST['urlCodecademy']?>>Profil Codecademy</a><?php echo ' avec ' . $_POST['badgeNumber'] . ' badges';?>
            </p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12 textareaQuestion">
            <p>
                <?php 
                    echo 'Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?';
                ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-offset-2 col-lg-8 infosTextareaUser">
                <?php 
                    echo $_POST['hero'];
                ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 textareaQuestion">
                <?php 
                    echo 'Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)';
                ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-offset-2 col-lg-8 infosTextareaUser">
                <?php 
                    echo $_POST['hacks'];
                ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 textareaQuestion">
                <?php 
                    echo 'Avez vous déjà eu une expérience avec la programmation et/ou l\'informatique avant de remplir ce formulaire ?';
                ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-offset-2 col-lg-8 infosTextareaUser">
                <?php 
                    echo $_POST['experience'];
                ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-offset-4 positionButton">
            <a href="http://formation.novei.fr/apprenant.php"><input type="button" class="btn buttonSend" value="Valider ma candidature" name="goodbye"/></a>
        </div>
    </div>
</div>
  <?php   
    }
	?>	
        
