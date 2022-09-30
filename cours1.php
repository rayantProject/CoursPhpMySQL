<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style/css/style.css">
    <title>page1</title>
</head>
<body>
    
    <main>
        <div class="container-fluid mx-auto" style="width: 80%;">
        <h1 class="">
            Les fondamentaux du php
        </h1>
        <div>
            <p class="text-break">
                Le php s'écrit dans les balise <code>&lsaquo;?php ?&rsaquo;</code>
                on peut la metre au milieu d'une page HTML. 

                On peut la metre n'import ou dans du code HTML


            </p>
                <!-- on me metre du code ^php un peu partout  -->

            <h2>Afficher du text</h2>
            <code class="codeBlock">
            &lsaquo;?php echo "Ceci est du texte"; ?&rsaquo;<br>
            &lsaquo;!-- Ou bien, avec des parenthèses --&rsaquo;<br>
            &lsaquo;? echo("Ceci est du texte"); ?&rsaquo;
            </code>

            <p class="">
                l'instruction <code>echo</code> permet de d'afficher la chaine de caractere
            </p>

            <p class="note">
            Notez qu'il existe une instruction identique à echo  appelée <code>print</code> , qui fait la même chose.
            Cependant,<code>echo</code> est plus couramment utilisée.
            </p>


            <p>
                on peut aussi afficher une balise comme un lien <code>&lsaquo;<a href=""></a>&rsaquo;</code>
                par exemple :
            </p>

            <code class="codeBlock">
            &lsaquo;?php echo(" Affiche le lien<code>&lsaquo;<a href=""></a>&rsaquo;</code>"); ?&rsaquo;
            </code>


            <p class="mt-2">
                Utiliser la touche anti slash pour afficher <kbd>/</kbd> pour afficher des charactere speciaux
            </p>

            <h2>Les commentaires</h2>

            <p>
                Les commentaire s'affiche avec <code>//commentaire</code>
                commentaire multi-ligne <code>/*commentaire*/</code>
            </p>
        </div>
        </div>
    </main>

<?php



?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


