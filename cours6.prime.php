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
    <h1>Les Tableaux </h1>

    <div>
        <h2>
            Rechercher des les tableaux
        </h2>
        <p>
            Il existe trois moyens de rechercher dans les tableaux 
        </p>

        <ul>
            <li>
                <kbd>array_key_exists</kbd> pour vérifier si une clé existe dans le tableau.
            </li>
            <li>
                <kbd>in_array</kbd> pour vérifier si une valeur existe dans le tableau.
            </li>
            <li>
                <kbd>array_search</kbd> pour récupérer la clé d'une valeur dans le tableau.
            </li>
        </ul>

            <h3>Vérifiez si une clé existe dans un tableau avec <kbd>array_key_exists</kbd></h2>

            <p class="text-break">
                cette fonction va parcourir et verifier si la clé dans le tableau 
                elle renvoie une <kbd>boolean</kbd>
                en gros :
            </p>
            <p>
                <code class="codeBlock">
                &lsaquo;?php array_key_exists('cle', $array); ?>
                </code> 
            </p>

            <p class="note text-break">     
                La fonction renvoie <code>true</code> si la clé est trouvée et <code>false</code>
                si non trouvée
            </p>

            <h3>
            Vérifiez si une valeur existe dans un tableau avec <kbd>in_array</kbd>
            </h3>

            <p>
            Le principe est le même que <kbd>array_key_exists</kbd> mais cette fois on recherche dans les valeurs. 
            </p>
            <p>
                Exemple :
                <code class="codeBlock">
                &lsaquo;?php
                    $users = [
                        'Mathieu Nebra',
                        'Mickaël Andrieu',
                        'Laurène Castor',
                    ];

                    if (in_array('Mathieu Nebra', $users))
                    {
                        echo 'Mathieu fait bien partie des utilisateurs enregistrés !';
                    }

                    if (in_array('Arlette Chabot', $users))
                    {
                        echo 'Arlette fait bien partie des utilisateurs enregistrés !';
                    }
                </code>
            </p>

            <h3>
            Récupérez la clé d'une valeur dans un tableau avec <kbd>array_search</kbd>
            </h3>
            <p>
                <kbd>array_search</kbd> fonctionne comme <kbd>in_array</kbd> : il travaille sur les valeurs d'un tableau.
            </p>

            <ul class="note text-break" >
            <p>Voici ce que renvoie la fonction :</p>
            <li>
                Si elle a trouvé la valeur, <kbd>array_search</kbd> renvoie la clé correspondante (dans le cas d'un tableau numéroté, la clé sera un numéro ; dans le cas d'un tableau associatif, la clé sera un nom).
            </li>
                <br>
            <li>
                Si elle n'a pas trouvé la valeur, <kbd>array_search</kbd> renvoie <code>false</code>  .
            </li>

            </ul>

            <p>
                <code class="codeBlock">
                &lsaquo;?php
                    $users = [
                        'Mathieu Nebra',
                        'Mickaël Andrieu',
                        'Laurène Castor',
                    ];

                    $positionMathieu = array_search('Mathieu Nebra', $users);
                    echo '"Mathieu" se trouve en position ' . $positionMathieu . PHP_EOL;

                    $positionLaurène = array_search('Laurène Castor', $users);
                    echo '"Laurène" se trouve en position ' . $positionLaurène . PHP_EOL;
                </code>
            </p>
            <p>
            resultat :
            <pre>
            $ php exemple.php 
            "Mathieu" se trouve en position 0
            "Laurène" se trouve en position 2
            </pre>
            </p>
    </div>
    </div>


</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


