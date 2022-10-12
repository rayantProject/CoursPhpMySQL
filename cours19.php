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
        <h1>
            Rajouter , metre à jour, supprimer la BD
        </h1>
        <div class="">
            <h2>
                ajouter avec <kbd>INSERT INTO</kbd>
            </h2>

            <P>
                <kbd>INSERT INTO</kbd> permet d'inserer dans une table par exemple pour le faire dans une table recipe :
            </P>
            <p>
                <code class="codeBlock">
                $sqlQuery = 'INSERT INTO recipes(title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)';
                </code>
            </p>


            <p>
                en suite avec le <kbd>VALUE</kbd> on insert les elements dans le même ordre que ceux de l'<kbd>INSERT</kbd>
            </p>

            <h2>
                Éditez avec l'instruction <kbd>UPDATE</kbd>
            </h2>

            <p>
                <code class="codeBlock">
                    UPDATE recipes SET title = :title, recipe = :recipe WHERE recipe_id = :id
                </code>
                
                
                
            </p>
            <h2>
                supprimer avec <kbd>DELETE</kbd>
            </h2>

            <p>
                <code class="codeBlock">
                    DELETE FROM recipes WHERE recipe_id=:id
                </code>
            </p>
            <P class="note">
                le reste de l'instruction sera en génerale toujours la meme.
            </P>

        </div>


        </div>
    </main>





</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


