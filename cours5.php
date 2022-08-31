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
    <h1>Les tableaux et les boucles</h1>

<div>
    <h2>
        Les tableaux
    </h2>

    <p>Pour stocker des données (u connais !)

    <code class="codeBlock">
    &lsaquo;?php

        $user1 = ['Mickaël Andrieu', 'email', 'S3cr3t', 34];

        echo $user1[0]; // "Mickaël Andrieu"
        echo $user1[1]; // "email"
        echo $user1[3]; // 34

    ?&rsaquo;
    </code>
    </p>

    <p>
        Les tableaux a deux dimension

        <code class="codeBlock">
        &lsaquo;?php
        
        $mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
        $mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
        $laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];

        $users = [$mickael, $mathieu, $laurene];

        echo $users[1][1]; // "mathieu.nebra@exemple.com"   
        ?&rsaquo;   
        </code>
    </p>

    <h2>
        boucles 
    </h2>
    <p>comme dans les autres langages de programmation le php possede deux
        boucle : <code>while</code> et <code>for</code></p>
    <h3>while</h3>
    <p>
        <code class="codeBlock">
        &lsaquo;?php

        $condition

            while(condition) {

                //execution 

            }
        

            $lines = 3; // nombre d'utilisateurs dans le tableau
            $counter = 0;

            while ($counter < $lines) {
                echo $users[$counter][0] . ' ' . $users[$counter][1] . '<br />';
                $counter++; // Ne surtout pas oublier la condition de sortie !
            }
        ?&rsaquo;

        </code>
    </p>

    <h3>For</h3>
    <p>
        <code class="codeBlock">
        &lsaquo;?php
        
        for ($lines = 0; $lines <= 2; $lines++)
        {
            echo $users[$lines][0] . ' ' . $users[$lines][1] . '<br />';
        }
        
        ?&rsaquo;
        </code>
        </p>
        <p class="text-break">
        Après le mot for  , il y a des parenthèses qui contiennent trois éléments, séparés par des points-virgules ;  :

        Le premier sert à l'initialisation. C'est la valeur que l'on donne au départ à la variable (ici, elle vaut 0).

        Le second, c'est la condition. Comme pour le while : tant que la condition est remplie, la boucle est réexécutée. Dès que la condition ne l'est plus, on en sort.

        Enfin, le troisième c'est l'incrémentation. Cela permet d'ajouter 1 à la variable à chaque tour de boucle.

        </p>
</div>
    </div>


</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


