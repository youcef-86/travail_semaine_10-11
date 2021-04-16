<?php
    // Exercice : créer un formulaire d'upload et le fichier PHP de traitement correspondant, dans le fichier PHP écrivez juste
    // var_dump($_FILES);
    // echo ini_get("upload_max_filesize");connaître leur valeur du parametre
    // ini_set("upload_max_filesize", 104857600); Pour la modifier, on peut utiliser la fonction ini_set(), à placer en haut de votre formulaire :

    if(!empty($_FILES)){
        $file_name = $_FILES['fichier']['name'];
        $file_extension = strrchr($file_name, ".");
        // $file_type = $_FILES['fichier']['tmp_name'];
        // $file_type = $_FILES['fichier']['error'];
        // $file_type = $_FILES['fichier']['size'];
    
        // echo 'Nom: '.$file_name.'<br/>';
        // echo 'extension: '.$file_extension;

        $file_tmp_name = $_FILES['fichier']['tmp_name'];
        $file_dest = 'files/'.$file_name;

        $extensions_autorisees = array('.pdf', '.PDF');

        if(in_array($file_extension, $extensions_autorisees)){
            
            if(move_uploaded_file($file_tmp_name, $file_dest)){
                echo 'Fichier envoyé avec succés';
            } else {
            echo "Une erreur est survenue lors de l'envoi du fichier";
            }
        } 
            else{
            echo 'Seuls les fichiers PDF sont autorisés'; 
            }
    
    }
?>

<!doctype html>
<html>
    <head>
        <title>upload</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Uploader un fichier PDF</h1>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="fichier" /> <br />
            <input type="submit" value="Envoyer le fichier" />
        <!-- <form action="post.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fichier"> -->
        </form>
        </form>
    </body>
</html>