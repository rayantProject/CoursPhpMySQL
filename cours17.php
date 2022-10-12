<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style/css/style.css">
    <title>Mettre en place au BD</title>
</head>
<body>
    
    <main>
        <div class="container-fluid mx-auto" style="width: 80%;">
        <h1 class="">
            Le PDO : 
        </h1>
            
            <div>
                <p>
                    pour connecter php et msql on peut utiliser <kbd>pdo</kbd>
                    extension PHP appelée PDO ("PHP Data Objects").
                </p>


                <p class="note">
                    <kbd>php info</kbd> est une page d'information php qui regroupe toute les informations disponibles sur php et ses extensions 
                    <kbd>php.ini</kbd> les le fichier de config de php qui gere les extentions 
                </p>



                <p>

                    Un objet PDO ont trois parametres :

                    <ul>
                        <li>
                            <b>le nom d'hôte : </b>
                            c'est l'adresse IP de l'ordinateur où MySQL est installé. Le plus souvent, MySQL est installé sur le même ordinateur que PHP : dans ce cas, mettez la valeur <kbd>localhost</kbd> 
                        </li>
                        <li>
                            <b>La base :</b>
                            c'est le nom de la base de données à laquelle vous voulez vous connecter.

                        </li>
                        <li>
                            <b>L'identifiant et le mot de passe :</b>
                            ils permettent de vous identifier. Renseignez-vous auprès de votre hébergeur pour les connaître.
                        </li>
                    </ul>


                    un exemple :

                    <code class="codeBlock">
                    &lsaquo;?php
                    // Souvent on identifie cet objet par la variable $conn ou $db
                        $mysqlConnection = new PDO(
                            'mysql:host=localhost;dbname=my_recipes;charset=utf8',
                            'root',
                            'root'
                        );
                    ?>
                    </code>

                </p>
                <p class="note">
                Le premier paramètre (qui commence par mysql  ) s'appelle le DSN : Data Source Name. C'est généralement le seul qui change en fonction du type de base de données auquel on se connecte.
                </p>


                <p>
                    le mieux c'est de prevoir les erreurs en utilisant un <code>try catch</code>
                </p>


                <p>
                    <code class="codeBlock">
                    &lsaquo;?php
                        try
                        {
                            $db = new PDO('mysql:host=localhost;dbname=my_recipes;charset=utf8', 'root', 'root');
                        }
                        catch (Exception $e)
                        {
                                die('Erreur : ' . $e->getMessage());
                        }
                        ?>
                    </code>
                </p>


            </div>
    
        </div>
    </main>





</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


