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
                Les jointures SQL:
            </h1>
            <div>
                <h2>
                    jointures internes:
                </h2>
                <p class="note">
                    Permet de recuperer que les données qui correspondent
                </p>
                <p>
                    <code class="codeBlock">
                    # Liste des noms et commentaires associés
                        SELECT u.full_name, c.comment
                        FROM users u
                        INNER JOIN comments c
                        ON u.user_id = c.user_id
                    </code>
                </p>
                <p>
                    On selection l'attribut <kbd>full_name</kbd> de la table <kbd>users</kbd> et <kbd>comment</kbd> de <kbd>comments</kbd>. 
                </p>
                <p>
                    on <kbd>INNER JOIN</kbd>, on fait la liason des champs avec le <kbd>ON</kbd>
                </p>
                <p>
                    on prut en option
                    <ul>
                        <li>
                            filtre avec <kbd>WHERE</kbd>
                        </li>
                        <li>
                            ordonne <kbd>ORDER BY</kbd>
                        </li>
                        <li>
                            on limit avec <kbd>LIMIT</kbd>
                        </li>
                    </ul>
                    <code class="codeBlock">
                        # Liste des noms et commentaires associés
                        # à la recette Cassoulet
                        # du plus vieux au plus récent
                        # limité à 10
                        SELECT u.full_name, c.comment
                        FROM users u
                        INNER JOIN comments c
                        ON u.user_id = c.user_id
                        WHERE u.recipe = "Cassoulet"
                        ORDER BY c.created_at DESC
                        LIMIT 10
                    </code>
                </p>
                <h2>
                    jointures externes:
                </h2>

                <p class="note">
                Les jointures externes permettent de récupérer toutes les données, même celles qui n'ont pas de correspondance.


                </p>

                <h2>
                    <kbd>
                        LEFT JOIN
                    </kbd>
                </h2>
                <p>
                <kbd>users</kbd>  est appelée la « table de gauche » et <kbd>comments</kbd>  la « table de droite ».
                </p>
                <p>
                    on ajuste à remplacer le <kbd>INNER</kbd> par <kbd>LEFT</kbd>
                    <code class="coceBlock">
                        # Liste des noms et commentaires associés
                        SELECT u.full_name, c.comment
                        FROM users u
                        LEFT JOIN comments c
                        ON u.user_id = c.user_id
                    </code>
                </p>
                <p>
                demande à récupérer tout le contenu de la table de gauche, donc tous les utilisateurs, même si ces derniers n'ont pas d'équivalence dans la table <kbd>comments</kbd>
                </p>
                <h2>
                    <kbd>
                        RIGHT JOIN
                    </kbd>
                </h2>
                <p>
                    Meme chose sauf que <kbd>LEFT</kbd>
                    <code class="codeBlock">
                        # Liste des noms et commentaires associés
                        SELECT u.full_name, c.comment
                        FROM users u
                        RIGHT JOIN comments c
                        ON u.user_id = c.user_id
                    </code>
                </p>
                <p>
                    pour plusieurs table :
                    <code class="codeBlock">
                        SELECT u.full_name, c.comment, r.title
                        FROM users u
                        JOIN comments c
                            ON u.user_id = c.user_id
                        JOIN recipes r
                            ON c.recipe_id = r.recipe_id
                    </code>
                </p>
            </div>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


