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
    <h1>Les fonctions :</h1>

    <div>
        <h2>
            Utiliser les fonctions prédifinies : 
        </h2>

        <p>
            <code>str_replace</code> pour rechercher et remplacer des mots dans une variable ; <br>
            <code>move_uploaded_file</code> pour envoyer un fichier sur un serveur ;<br>

            <code>imagecreate</code> pour créer des images miniatures (aussi appelées "thumbnails") ;<br>

            <code>mail</code> pour envoyer un mail avec PHP (très pratique pour faire une newsletter) ;<br>

            de nombreuses options pour modifier des images, y écrire du texte, tracer des lignes, des rectangles, etc. ;<br>

            <code>crypt</code> pour chiffrer des mots de passe ;<br>

            <code>date</code>  pour renvoyer l'heure, la date, 
        </p>


        <p class="alert text-break">
            Nous ne pourrons jamais toutes les passer en revue (j'ai dit qu'il y en avait des centaines et des centaines !), mais avec l'expérience de ces premières fonctions et la <a href="https://www.php.net/manual/fr/index.php">documentation de PHP</a>, vous n'aurez aucun mal à aller plus loin tout seul.
        </p>

        <h3>Manipuler du texte avec des fonctions :</h3>
        <p>
        De nombreuses fonctions permettent de manipuler le texte. En voici trois qui peuvent être utiles : <br>

            <code>strlen</code> pour calculer la longueur d'une chaîne de caractères ; <br>

            <code>str_replace</code> pour rechercher et remplacer une chaîne de caractères ; <br>

            <code>sprintf</code> pour formater une chaîne de caractères. <br>
        </p>
        <h4><code>strlen</code></h4>        
        <code class="codeBlock">
        &lsaquo;?php
        $recipe = 'Etape 1 : des flageolets ! Etape 2 : de la saucisse toulousaine';
        $length = strlen($recipe);
        
        
        echo 'La phrase ci-dessous comporte ' . $length . ' caractères :' . PHP_EOL . $recipe;
        </code>


        <p>
            resultat :
            <pre>
            $ php exemple.php 
            La phrase ci-dessous comporte 63 caractères :
            Etape 1 : des flageolets ! Etape 2 : de la saucisse toulousaine
            </pre>
            </p>


        <p class="note text-break">
            Dans le même ordre d'idée, la fonction <code>count</code> permet aussi de compter le nombre d'éléments dans un tableau ; car en PHP une chaîne de caractères, c'est… un tableau de caractères !
        </p>   


        <h4><code>str_replace</code></h4>
        <p>
            <code class="codeBlock">
            &lsaquo;?php
                echo str_replace('c', 'C', 'le cassoulet, c\'est très bon');
            </code>
        </p>
        <p>
            resultat :
            <pre>
                $ php exemple.php
                le Cassoulet, C'est très bon

            </pre>
        </p>


        <h4><code>sprintf</code></h4>
        <p>
            <code class="codeBlock">
            &lsaquo;?php
                $recipe = [
                    'title' => 'Salade Romaine',
                    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
                    'author' => 'laurene.castor@exemple.com',
                ];

                echo sprintf(
                    '%s par "%s" : %s',
                    $recipe['title'],
                    $recipe['author'],
                    $recipe['recipe']
                );
            </code>
        </p>
        <p>
            <pre>
            $ php exemple.php
            Salade Romaine par "laurene.castor@exemple.com" : Etape 1 : Lavez la salade ; Etape 2 : euh ...
            </pre>
        </p>

        <!--  -->
        <h4>
            la fonction <code>date</code> :
        </h4>

        <p>
        Nous allons découvrir la fonction qui renvoie l'heure et la date. Il s'agit de <code>date</code>  (un nom facile à retenir, avouez !).
                <br>
        Cette fonction peut donner beaucoup d'informations. Voici les principaux paramètres à connaître :
        </p>
        <p>
        H

        Heure <br>

        i

        Minute <br>

        d

        Jour <br>

        m

        Mois <br>

        Y

        Année
        </p>
        
        <code class="codeBlock" >
        &lsaquo;?php
    // Enregistrons les informations de date dans des variables

                $day = date('d');
                $month = date('m');
                $year = date('Y');

                $hour = date('H');
                $minut = date('i');

    // Maintenant on peut afficher ce qu'on a recueilli
                echo 'Bonjour ! Nous sommes le ' . $day . '/' . $month . '/' . $year . 'et il est ' . $hour. ' h ' . $minut;
            ?>
        </code>
        <p>
            resultat
            <pre>
            <?php
    // Enregistrons les informations de date dans des variables

                $day = date('d');
                $month = date('m');
                $year = date('Y');

                $hour = date('H');
                $minut = date('i');

    // Maintenant on peut afficher ce qu'on a recueilli
                echo 'Bonjour ! Nous sommes le ' . $day . '/' . $month . '/' . $year . 'et il est ' . $hour. ' h ' . $minut;
            ?>
            </pre>
        </p>


        <h2>
            Creer nos fonctions : 
        </h2>

        <code class="codeBlock" >
        &lsaquo;?php
    // Enregistrons les informations de date dans des variables

                $day = date('d');
                $month = date('m');
                $year = date('Y');

                $hour = date('H');
                $minut = date('i');

    // Maintenant on peut afficher ce qu'on a recueilli
                echo 'Bonjour ! Nous sommes le ' . $day . '/' . $month . '/' . $year . 'et il est ' . $hour. ' h ' . $minut;
            ?>
        </code>



        
        


        

        
    </div>
    </div>


</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


