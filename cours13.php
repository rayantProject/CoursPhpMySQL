
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
    <h1>les sessions  :</h1>
        <div>

            <h2>creer une session</h2>



            <p>
                Les étapes de la création d'une session unique :

                <ol>
                    <li>
                    Un visiteur arrive sur votre site.
                    </li>
                    <li>
                    On demande à créer une session pour lui.
                    </li>
                    <li>
                    PHP génère alors un numéro unique.
                    </li>
                </ol>
            </p>

            <p class="note">
                il sagit d'un ID unique de l'utilisateur exemple: a02bbffc6198e6e0cc2715047bc3766f.
                php va le transmettre de page en page
            </p>


            <h2>creer des variables pour la sessions :</h2>
            <p>
                après la création de la session on peut autant de variables que l'on veut
            </p>

            <p>
                recuperer les variables se font depuis la superglobal 
                <code>$_SESSION</code>.
            </p>



            <p>

            on demare d'abord un essession avec :


                <code>session_start()</code>


            </p>



            <h2>
                Suppresson de la session:
            </h2>

            <p>
            pour ettre fin a une session on utilse <code>session_destroy()</code>
            </p>


            <p class="note">
                pour le faire de maniere manuel par l'utiliateur on creer un lien deconnection qui ramene vers la une page ou s'execute la fonction
            </p>

            
        </div>
    </div>
    

</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


