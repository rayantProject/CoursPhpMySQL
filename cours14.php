
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style/css/style.css">
    <title>les cookies</title>
</head>
<body>
<main>


    <div class="container-fluid mx-auto" style="width: 80%;">
    <h1>les cookies  :</h1>
        <div>
            <p>
                à peut pré pareil aux sessions.
                il sagit d'un petit fichier qui s'enregirstre sur l'ordinateur du visiteur
                il contient du texte et permt de retenir des infos des utilsateurs.
            </p>


            <p class="note">
            Chaque cookie stocke généralement une information à la fois.

                Si vous voulez stocker le pseudonyme du visiteur et sa date de naissance, il est donc recommandé de créer deux cookies.
            </p>


            <p>
                les cookies sont stocker (généralent) suivant le navigateur, ils sont classé par celui
            </p>


            <h2>
                écrire un cookie
            </h2>

            <p>
                on utilse la fonction <code>setcookie</code>

                qui a trois param:

                <ol>
                    <li>
                        son nom 
                    </li>
                    <li>
                        sa valeur
                    </li>
                    <li>
                        la date d'expiration
                    </li>
                </ol>
            </p>
            <p class="note">
                la date d'expiraiton du cookie est un  timestamp' le nmbr de seconde écoul" depuis le 1er janvier 1970, le
                <b>timestamp</b> est une valeur qui augmente de 1 toute les seconde, pour l'obtenir on fait <code>time()</code>
                pour une duré de 1an du cookie il faut donc ecrire : time() + 365*24*3600
            </p>


           

            <h2>
                cookie avec les propriétés httpOnly et secure
            </h2>
            <p>
                httpOnly et secure permet (en gros) de rendre les cookie innaccesible en JS donc d'eviter les <a href="./securite.php/#Bloquer_lexcution_de_js_dans_form">faille xss</a>

            </p>

            <p>

            Exemple d'utilisation de la fct setcookie avec secure et httponly :
                <code class="codeBlock">
                setcookie(
                    'LOGGED_USER',
                    'utilisateur@exemple.com',
                    [
                        'expires' => time() + 365*24*3600,
                        'secure' => true,
                        'httponly' => true,
                    ]
                );
                </code>
            </p>
            <p class="alert">
            Ne placez donc JAMAIS le moindre code HTML avant d'utiliser setcookie !
            </p>
            <p>
                on tilse la <code>$_COOKIE</code> pour acceder aux cookies
            </p>
            <p>
                pour modifier un cookie il suffit de réecrire la fct setcookie en gardant le meme nom de cookie
            </p>
            <p>
                <code class="codeBlock">
                setcookie(
                    'LOGGED_USER',
                    'laurene.castor@exemple.com',
                    [
                        'expires' => time() + 365*24*3600,
                        'secure' => true,
                        'httponly' => true,
                    ]
                );
            </code>
            </p>


            <p class="alert">
            Les cookies viennent du visiteur. Comme toute information qui vient du visiteur, elle n'est pas sûre. N'importe quel visiteur peut créer des cookies et envoyer ainsi de fausses informations à votre site.
            </p>
        </div>
    </div>
    

</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


