<!DOCTYPE html>
<html>
    <head>
        <title>TP - Calendrier</title>
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Risque" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="jquery-3.2.1.js"></script>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div class="container">
        <form method="POST" class="selectDate">
            <select name="month" class="selectMonth selectpicker">
                <option value=1 <?php echo (isset($_POST['month']) && $_POST['month'] == 1 ) ? 'selected' : ''; ?>>Janvier</option>
                <option value=2 <?php echo (isset($_POST['month']) && $_POST['month'] == 2 ) ? 'selected' : ''; ?>>Février</option>
                <option value=3 <?php echo (isset($_POST['month']) && $_POST['month'] == 3 ) ? 'selected' : ''; ?>>Mars</option>
                <option value=4 <?php echo (isset($_POST['month']) && $_POST['month'] == 4 ) ? 'selected' : ''; ?>>Avril</option>
                <option value=5 <?php echo (isset($_POST['month']) && $_POST['month'] == 5 ) ? 'selected' : ''; ?>>Mai</option>
                <option value=6 <?php echo (isset($_POST['month']) && $_POST['month'] == 6 ) ? 'selected' : ''; ?>>Juin</option>
                <option value=7 <?php echo (isset($_POST['month']) && $_POST['month'] == 7 ) ? 'selected' : ''; ?>>Juillet</option>
                <option value=8 <?php echo (isset($_POST['month']) && $_POST['month'] == 8 ) ? 'selected' : ''; ?>>Aout</option>
                <option value=9 <?php echo (isset($_POST['month']) && $_POST['month'] == 9 ) ? 'selected' : ''; ?>>Septembre</option>
                <option value=10 <?php echo (isset($_POST['month']) && $_POST['month'] == 10 ) ? 'selected' : ''; ?>>Octobre</option>
                <option value=11 <?php echo (isset($_POST['month']) && $_POST['month'] == 11 ) ? 'selected' : ''; ?>>Novembre</option>
                <option value=12 <?php echo (isset($_POST['month']) && $_POST['month'] == 12 ) ? 'selected' : ''; ?>>Décembre</option>
            </select>
            <select name="year" class="selectYear selectpicker">
                <?php for($year = 1996; $year < 2050; $year ++){ ?>
                <option value=<?php echo $year ?> <?php echo (isset($_POST['year']) && $_POST['year'] == $year ) ? 'selected' : ''; ?>><?php echo $year ?></option>
                <?php } ?>
            </select>
            <input type="submit" title="Valider" value="Valider" class="btn btn-primary"/>
        </form>
        <?php
        setlocale(LC_TIME, 'fr_FR.UTF8');
            if (isset($_POST['month']) && isset($_POST['year'])){
                $year = $_POST['year'];
                //Récupére le nombre de jour dans un mois
                $numberDayMonth = idate('t', mktime(0, 0, 0, $_POST['month'], 1, $year));
                //Récupére le nom du mois en français en toute lettre
                $month = strftime('%B', mktime(0, 0, 0, $_POST['month'], 1, $_POST['year']));
                //Récupére le premier jour mois
                $firstDayOfMonth = strftime('%A', mktime(15, 0, 0, $_POST['month'], 1, $_POST['year']));
                //Récupère le premier jour du mois - 0 correspond à Dimanche - 6 correspond à Samedi
                $firstDay = idate('w', mktime(0, 0, 0, $_POST['month'], 1, $_POST['year']));
            }
            else{
                $year = 1996;
                $month = 'Janvier';
                $numberDayMonth = 31;
                $firstDayOfMonth = strftime('%A', mktime(0, 0, 0, 1, 1, $year));
                $firstDay = idate('w', mktime(0, 0, 0, 1, 1, $year));
            }
        ?>
        <caption>
            <div class="titleTable">
            <?php 
                echo $month . ' ' . $year;
            ?>
            </div>
        </caption>
        <table class="globalTable col-lg-12">
            <tr>
              <th>Lundi</th>
              <th>Mardi</th>
              <th>Mercredi</th>
              <th>Jeudi</th>
              <th>Vendredi</th> 
              <th>Samedi</th>
              <th>Dimanche</th>
            </tr>
            <?php
                //Faire en sorte que le Dimanche qui vaut 0 à la base prenne la valeur 7
                if($firstDay == 0){
                    $firstDay = 7;
                }
            ?>
            <tr>
                <!-- On initialise une variable et tant que l'on est pas au premier jour du mois, on affiche un vide-->
                <?php for($navCalendar = 1; $navCalendar < $firstDay; $navCalendar ++){?>
                <td class="videEnd"><?php echo ' ';?></td><?php } ?>
                <!-- La variable prend la valeur du premier jour du mois puis on incrémente le jour jusqu'à 7 qui représente la longueur de la ligne -->
                <?php for($navCalendar = $firstDay, $daysCalendar = 1; $navCalendar <= 7; $navCalendar ++, $daysCalendar ++){?>
                <td><?php echo $daysCalendar;?></td><?php } ?>
            </tr>
            <!-- Initialisation d'une variable permettant de répéter la création de ligne pour le reste du calendrier -->
            <?php for($linesMiddle = 0; $linesMiddle <= 4; $linesMiddle ++){?>
            <tr>
                <!-- On crée une ligne pour sauter une ligne à chaque fois que l'on atteint 7 cases et on fait ça tant que le nombre de jour est inférieur ou égal au nombre total de jour dans le mois choisi -->
                <?php for($navCalendar = 1; $navCalendar <= 7 && $daysCalendar <= $numberDayMonth; $navCalendar ++, $daysCalendar ++){ ?>
                <td><?php echo $daysCalendar;?></td>
                <?php }?>
                <!-- A partir du moment où le nombre de jour dépasse le nombre total de jours du mois, on affiche des vides à nouveau jusqu'à la fin de la ligne, soit 7 -->
                <?php if($daysCalendar > $numberDayMonth){ ?>
                <?php for($navCalendar; $navCalendar <= 7; $navCalendar ++){?>
                <td class="videEnd"><?php echo ' '; ?></td>
                <?php 
                    }
                } 
                ?>
            </tr>
            <?php }?>
        </table>
        </div> <!-- Fin du container -->
        <audio id="mySoundClip">
	<source src="jul.mp3"></source>
	</audio>
        <script>
            var audio = $("#mySoundClip")[0];
            $(".videEnd").mouseenter(function() {
                audio.play();
            });
        </script>
    </body>
</html>
