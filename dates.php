<?php
// afficher la date
// echo Date("d/m/Y");
// afficher l'heure
// echo date("H:i:s");

// on déclare une instance de l'objet PHP 'DateTime' : 
// $oDate = new DateTime();
// var_dump($oDate);

// $macolonne_sql est issue d'une requête SQL; avec pour valeur 2018-11-16 11:26:51 (par exemple) 
// $oDate = new DateTime($macolonne_sql);
// echo $oDate->format("d/m/Y H:\hi");


// Calcul sur les dates

// $datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
// $date = "01/10/2019";

// if (preg_match($datePattern, $date)) 
// {
//     echo"Date ".$date." valide.<br>";
// }
// else 
// {
//     echo"Date ".$date." erronée.<br>";
// } 



// $date = "01/10/2019";

// /* 
// * - On découpe la chaîne $date selon '/' avec la fonction explode() qui retourne un tableau 
// * - Les éléments du tableau sont directement afffecté à des variables ($dd, $mm, $yyyy) dans un ordre respectif grâce à la fonction list()      
// */
// list($dd, $mm, $yyyy) = explode('/', $date);

// /* Les variables $dd, $mm, $yyyy sont des chaînes, or la fonction checkdate()  
// * n'accepte que des entiers
// */
// echo gettype($dd); // indique que $dd est une chaîne

// /* On va donc 'caster' c'est-à-dire changer le type d'une variable,
// * ici on veut un entier, la syntaxe est de l'indiquer avec (int) 
// * devant la variable
// */ 
// $dd = (int) $dd;

// echo gettype($dd); // $dd est désormais bien un entier

// $mm = (int) $mm;
// $yyyy = (int) $yyyy;

// if (!checkdate($mm, $dd, $yyyy))
// {         
//     echo"Date ".$date." est erronée.";
// }


// $dateTime = DateTime::createFromFormat('m/d/Y', $date);

// $errors = DateTime::getLastErrors();

// if (!empty($errors['warning_count'])) 
// {
//    return FALSE;
// }


                                                             // EXERCICES

// exo 1 Affichez la date du jour au format mardi 2 juillet 2019.
// $oDate = new DateTime("02-07-2019");
// echo $oDate->format("d M Y");


// exo 2 Trouvez le numéro de semaine de la date suivante : 14/07/2019.
// $date_test = "2019-07-14";
// $good_format=strtotime ($date_test);
// echo date('W',$good_format);
// ?>
<!-- exemple2 -->
<!-- <?php
$date = new DateTime("2019-07-14");
$weekNumber = $date->format("W"); 
?>

<p>Numéro de la semaine: <?= $weekNumber; ?></p>     -->


<!-- Exercice 3
Combien reste-t-il de jours avant la fin de votre formation. -->

<!-- <?php

$finForm = new DateTime('2020-10-30');
$today = new DateTime();
$temps = $finForm->diff($today);
echo "Il reste ".$temps->days." jours.";

?> -->

<!-- Exercice 4
Reprenez l'exercice 3, mais traitez le problème avec les fonctions de gestion du timestamp, time() et mktime(). -->


<!-- Exercice 5
Quelle sera la prochaine année bissextile ? -->
<!-- 
<?php
    $date = new DateTime();
        for ($i = 0; $i < 4; $i++)
        {
            $date->modify('+1 years');
            if ($date->format('L') == 1)
            {
                ?>
                la prochaine année bissextile sera année <?= $date->format('Y') ?>  
                <?php
            }
        }
?> -->

<!-- Exercice 6
Montrez que la date du 17/17/2019 est erronée. fonctionne pas-->

<!-- <?php
  $date = "17/17/2019";
  $testDate = DateTime::createFromFormat('d/m/Y', $date); 
  $errors = $testDate->getLastErrors();
    if ($errors['warning_count'] >= 1)
        { 
        echo"Date ".$date." valide.<br>";
        }
        else 
        {
            echo"Date ".$errors." erronée.<br>";
        } 
?> -->

<!-- Exercice 7
Affichez l'heure courante sous cette forme : 11h25. -->
<!-- 
<?php
      date_default_timezone_set('Europe/Paris'); // => défini la localisation du fuseau utilisé
?>
    <?= date('H\hi e') ?> -->

    <!-- Exercice 8
Ajoutez 1 mois à la date courante. -->

<!-- <?php
        $date = date("d-m-Y");
          echo("Nous sommes le $date");
        $date2 = date('d-m-Y', strtotime(' + 1 month'));
          echo("Dans un mois nous serons le $date2");
?> -->




