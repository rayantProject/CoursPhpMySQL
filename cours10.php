
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

<style>

    .value{
        color: purple;
        font-style: italic;
    }


    .param{
        color: green;

    };
    

</style>

    <div class="container-fluid mx-auto" style="width: 80%;">
    <h1>Écoutez la requête de vos utilisateurs grâce aux URL :</h1>
        <div>
            <p class="note">
            Lorsque vous faites une recherche sur Google pour trouver le site d'OpenClassrooms en tapant le mot "OpenClassrooms", la barre d'adresse contient une URL un peu longue qui ressemble à ceci :

                <span class="txt-important">http://www.google.fr/search?rlz=1C1GFR343&q=openclassrooms</span>

            </p>
            <h2>Envoyer des parametres dans une URL</h2>

            <p class="bg-dark text-white rounded p-3">
            http://www.monsite.com/page.php<span class="text-warning">?</span><span class="param">param1</span>=<span class="value">valeur1</span><span class="text-danger">&</span><span class="param">param2</span>=<span class="value">valeur2</span>
            </p>
            <p>
            Le point d'interrogation sépare le nom de la page PHP des paramètres.

                Les paramètres s'enchaînent selon la forme <span class="param">nom</span>=<span class="value">valeur</span> et sont séparés les uns des autres par le symbole   <span class="text-danger">&</span>  .
            </p>
            <p class="alert">
            La seule limite est la longueur de l'URL. En général, il n'est pas conseillé de dépasser les 256 caractères, mais les navigateurs arrivent parfois à gérer des URL plus longues.
            </p>



            <p>
                <code class="codeBlock">
                &lsaquo;a href="bonjour.php?nom=Dupont&#38;amp;prenom=Jean">Dis-moi bonjour !&lsaquo;/a>
                </code>
            </p>

            <p class="alert">
                Comme vous le voyez, le &  dans le code a été remplacé par &#38;amp;  dans le lien.

                Ça n'a rien à voir avec PHP : simplement, en HTML, on demande à ce que les &  soient écrits &-a-m-p-;("pas détaché comme çà");  dans le code source.

                Si vous ne le faites pas, le code ne passera pas la validation W3C.
            </p>

            <h2>
                Créez un formulaire avec la méthode HTTP GET
            </h2>


            <p>
            Nous pouvons faire cela avec une balise form qui a pour attribut method la valeur GET.

                <code class="codeBlock">
                &lsaquo;form action="contact.php" method="GET">
                    <!-- données à faire passer à l'aide d'inputs -->
                    &lsaquo;input name="nom">
                    &lsaquo;input name="prenom">
                &lsaquo;/form>
                </code>
            </p>

            <p class="validation">
            Les données soumises à l'aide du formulaire se retrouveront dans l'URL, comme pour un lien.
            <a type="btn" class="btn btn-warning" href="./test/test.form.php">ici</a>
        
            </p>

            <h2>
                Récupérez les paramètres en PHP

            </h2>

            <p class="note">
            Lors de la soumission, une variable superglobale appelée <code>$_GET</code> va contenir les données envoyées. Il s'agit d'un tableau associatif dont les clés correspondent aux noms des paramètres envoyés dans l'URL :
            </p>

           <p>
           <code class="codeBlock">
                &lsaquo;?php echo $_GET['nom']; ?>
                &lsaquo;?php echo $_GET['prenom']; ?>
            </code>
           </p>
            <p class="alert">
            il ne faut JAMAIS faire confiance aux variables qui transitent de page en page, comme $_GET  que nous étudions ici.
            </p>


            <p class="note">
            la fonction <code>isset()</code> permet de verifier que les champs ne sont pas vide on prut créer une condition avec les champs passé sous cette fonction pour empecher l'utilisateur de modifier l'URL et avoir des champ vide.
            </p>

            <p>
                comme ceci :
                <code class="codeBlock">
                &lsaquo;?php
                    if (
                        (!isset($_GET['email']) || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL))
                        || (!isset($_GET['message']) || empty($_GET['message']))
                        )
                    {
                        echo('Il faut un email et un message valides pour soumettre le formulaire.');
                        return;
                    }
                    ?>
                </code>
            </p>


            <p class="note">
                il y'a d'autre fonction de validation de champ comme filter_var 
                je laisse lien de tout ce qui concerne la validation <a type="btn" class="btn btn-success" href="https://www.php.net/manual/fr/filter.examples.validation.php">ici</a>
            </p>
        </div>
    </div>
    

</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


