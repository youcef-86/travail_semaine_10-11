<?php

// // On déclare une variable dont la valeur (contenu) sera écrite dans le fichier
// $myVar = "Bonjour le monde";

// // Ouverture en écriture seule 
// $fp = fopen("essai.txt", "a"); 

// // Ecriture du contenu ($myVar) 
// fputs($fp, $myVar); 

// // Fermeture du fichier  
// fclose($fp); 

// // Ouverture en lecture seule  
// $fp = fopen("essai.txt", "r"); 

// // Boucle jusqu'à la fin du fichier
// while (!feof($fp)) 
// { 
//     // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne  
//     $ligne = fgets($fp, 4096); 
//     echo $ligne."<br>"; 
// } 



// // On ouvre le fichier moncompteur.txt
// $fichier = fopen("moncompteur.txt","r+");

// // on lit le nombre indiqué dans ce fichier dans la variable
// $visiteurs = fgets($fichier,255);

// // on ajoute 1 au nombre de visiteurs
// $visiteurs++;

// // on se positionne au début du fichier
// fseek($fichier,0);

// // on écrit le nouveau nombre dans le fichier
// fputs($fichier,$visiteurs);

// // on referme le fichier moncompteur.txt
// fclose($fichier);

// // on indique sur la page le nombre de visiteurs
// print("$visiteurs personnes sont passées par ici");


// exercice 

$fichiers = fopen("ListeLiens.txt", "r");

if(!$fichiers)
    exit("Ouverture du fichier impossible");//die()

while(!feof($fichiers))
    echo fgets($fichiers).'<br>';

if(!fclose($fichiers))
exit("Fermeture du fichier echouee");


?>