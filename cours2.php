<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style/css/style.css">
    <title>page2</title>
</head>
<body>
    
    <main>
    <div class="container-fluid mx-auto" style="width: 80%;">
    <h1>
            Gestion des erreurs :
        </h1>
        
        <div>
            <p class="alert">
                Si erreur afficher sur navigateut non neccessaire
            </p>
            <h2>
                Configurer les erreurs
            </h2>
            <p>
                Par défaut, PHP n'affiche pas les erreurs.
                Pour des raison de sécurité.
            </p>
            <p class="note">
                La configuration de PHP se fait dans un fichier appelé php.ini
            </p>

            <p>
            Pour connaître l'ensemble des informations relatives au PHP utilisé par le serveur web, il existe une commande PHP, phpinfo() (on parle de fonction, mais on y reviendra).
            </p>
            <p>
            <code class="codeBlock">
            &lsaquo;?php phpinfo() ?&rsaquo;<br>
            </code>
            </p>
            
            <p>
                cliquer ici Si vous voulez voir le <a href="test/testCours2.php">resultat du phpinfo</a>
            </p>

            <p>
            Retrouvez la ligne "Loaded Configuration File" (ce qui signifie "fichier de configuration chargé", en anglais), et regardez la valeur.
            </p>   
            <p>

                <img class="img-fluid" src="asset/captureLoader.png" alt="" srcset="">
            </p>
            
            <p class="note">
            Dans le fichier de configuration, le point-virgule ( ; ) en début de ligne signifie que tout ce qui suit est un commentaire, et est donc ignoré.

            Si l'une de ces lignes (ou les deux) sont commentées, il suffit de retirer le point-virgule en début de ligne.
            </p>


            <h2>Config :</h2>

            <p>
            faut s'assurer que :

            la clé de configuration error_reporting a la valeur <code>E_ALL</code>

            la clé de configuration  <code>display_errors</code> a la valeur <code>On</code>  
            </p>

            <p>
                <img src="asset/sceen_of_php_edit.png" class="img-fluid" alt="">
            </p>

        </div>
    </div>     
    </main>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


