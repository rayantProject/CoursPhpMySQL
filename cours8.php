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
    <h1>Les ERREURS php :</h1>
        <div>

            <h2>"Parse error" = si vous formulez mal une instruction</h2>

            <div>

            <pre class="pre-terminal ">
            Parse error: syntax error in error.php on line 7
            </pre>

            <p class="alert">
            Généralement, cela veut dire que votre problème se situe à la ligne 7, mais ce n'est pas toujours le cas (trop facile, sinon). Parfois, c'est la ligne précédente qui a un problème : pensez donc à regarder autour de la ligne indiquée.
            </p>



            <p>

            Une "parse error" est en fait une instruction PHP mal formée. Il peut y avoir plusieurs causes :

                <ul>
                    <li>
                    Oublier le point-virgule à la fin de l'instruction.
                    </li>
                    <li>
                    Oublier de fermer un guillemet (une apostrophe ou une parenthèse).
                    </li>
                    <li>
                    Se tromper dans la concaténation et oublier un point.
                    </li>
                </ul>

            </p>

            <h2>"Undefined function" = si vous utilisez une fonction non reconnue</h2>

            <p>
            Une autre erreur assez classique, c'est la fonction inconnue.
            Vous obtenez ce message d'erreur :
            </p>
            <p>
                <pre class="pre-terminal">
                Fatal Error: Call to undefined function: is_valid_recipe() in fichier.php on line 27
                </pre>
            </p>
            <p>
                Là, il faut comprendre que vous avez utilisé une fonction qui n'existe pas.
            </p>
            <p>
                Soit la fonction n'existe vraiment pas. 
            </p>
            <p>
                soit la fonction existe vraiment, mais PHP ne la reconnaît pas. C'est parce que cette fonction se trouve dans une extension de PHP que vous n'avez pas activée. Par exemple, si vous essayez d'utiliser la fonction imagepng alors que vous n'avez pas activé la bibliothèque nécessaire pour les images en PHP, on vous dira que la fonction n'existe pas. Activez la bibliothèque qui utilise la fonction, et tout sera réglé.
            </p>
            <h2>
                "Wrong parameter count" = si vous entrez un nombre incorrect de paramètres pour une fonction
            </h2>
            
            <p>
                <pre class="pre-terminal">
                Warning: Wrong parameter count for fonction() in fichier.php on line 112
                </pre>
            </p>
            
            <p>
            Cela signifie que :

                <ul>
                    <li>
                    vous avez oublié des paramètres pour la fonction ;
                    </li>
                    <li>
                    ou même que vous en avez trop mis.
                    </li>
                </ul>

                <p>
                    d'autre erreur plus rare <a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4240011-au-secours-mon-script-plante#/id/r-7353340">ici</a>
                </p>
            </p>



            </div>
            


    </div>


        

    </div>


</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


