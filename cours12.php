
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style/css/style.css">
    <title>page5</title>
</head>
<body>
<main>


    <div class="container-fluid mx-auto" style="width: 80%;">
    <h1>Activez le partage de fichiers :</h1>
        <div>

            <h2>
            Paramétrez le formulaire d'envoi de fichier :
            </h2>

            <p>
                ils existent une super variables <code>$_FILES</code>,
                avec <code>&lsaquo;input type="file" name="" id=""></code>


                <form  method="POST" enctype="multipart/form-data">
                <!-- champs de formulaire -->

                <label for="screenshot" class="form-label">Choisir un fichier :</label>
                    <input type="file" class="form-control" id="screenshot" name="screenshot" />
               </form>

                
            </p>
            <p class="note">
                Le PHP réceptionne les données du formulaire et les 
                ajoutes dans un dossiers serveur.
            </p>

            <p class="alert">
            Attention : l'envoi du fichier peut être un peu long si celui-ci est gros. Il faudra dire au visiteur de ne pas s'impatienter pendant l'envoi.
            </p>


            <p>
    <code class="codeBlock">
    &lsaquo;form action="submit_contact.php" method="POST" enctype="multipart/form-data">
<!-- champs de formulaire -->
    &lsaquo;/form>

    </code>


                il faut ajouter l'attribut <code>enctype="multipart/form-data"</code>

                pour que le navigateur du visteur sait qu'il s'apprettre à envoyer des fichiers 

            </p>


            <h2>Traitement du fichier : </h2>

            <p>
                à la soumission le fichier est envoyer dans un dossier temporaire

                et on decide ensuite de de l'accepter ou non on utlisera a cet effet <code>move_uploaded_file(string $from, string $to): bool</code>


                pour chaque ficheier une variable <code> $_FILES['nom_du_champ'] </code>

            </p>
                <figure>
                    <img class="img-fluid" src="./asset/captureFilesTab.png" alt="" srcset="">
                </figure>


            <p>
                en deux temps avec <code>isset()</code> on test si l'utilisateur à envoyer un fichier
                et on verifie les erreurs, et autre conditions comme la taille, l'extention... et on l'envoie avec <code>move_uploaded_file()</code>

                <code class="codeBlock">
                if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0)
                {
                        // Testons si le fichier n'est pas trop gros
                        if ($_FILES['screenshot']['size'] <= 1000000)
                        {
                                // Testons si l'extension est autorisée
                                $fileInfo = pathinfo($_FILES['screenshot']['name']);
                                $extension = $fileInfo['extension'];
                                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                                if (in_array($extension, $allowedExtensions))
                                {
                                        // On peut valider le fichier et le stocker définitivement
                                        move_uploaded_file($_FILES['screenshot']['tmp_name'], 'uploads/' . basename($_FILES['screenshot']['name']));
                                        echo "L'envoi a bien été effectué !";
                                }
                        }
                }
                </code>
                
            </p>
            
            <p class="note">
                sur un serveur il faut verifier depuis son logiciel ftp si le dossier /Uploads et qu'il ales droit d' écriture 
            </p>



            <p class="alert">
            Soyez toujours très vigilant sur la sécurité ; vous devez éviter que quelqu'un puisse envoyer des fichiers PHP sur votre serveur.
            </p>
            
        </div>
    </div>
    

</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


