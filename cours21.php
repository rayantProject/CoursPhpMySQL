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

        <h1>Les fonctions SQL et regouper des données :</h1>

            <p class="validation good-to-know">

            On écrit les noms des fonctions SQL en majuscules, comme on le fait déjà pour la plupart des mots-clés comme SELECT  , INSERT  , etc.

            Ce n'est pas une obligation mais plutôt une convention, une habitude qu'ont prise les programmeurs.

            </p>

            

            <div>
                <h2>Les fcts SQL</h2>
                <p>
                ils existent deux types de fct en sql :
                    <li>les <b>fcts scalaire</b> => elles agissent sur chaq entrée</li>
                    <li>les <b>fcts d'agrégat</b> => sur l'ensemble de la table pour retourner une valeur</li>
    
                </p>
                
                <h3>fct Scalaire sql</h2>

                <p>
                    on a l'exemple de la fct <code>DATE_FORMAT()</code> qui renvoie la date au format que l'on decide sans la modifier dans la bd

                </p>

                <p>
                    <code class="codeBlock">
                        SELECT *, DATE_FORMAT(c.created_at, "%d/%m/%Y") FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = 1
                    </code>

                    la fct ajoute un "champ virtuel" juste le temps de la requete. on nomme ce champ avec <kbd>AS</kbd>
                </p>
                <p>
                    <code class="codeBlock">
                        SELECT DATE_FORMAT(c.created_at, "%d/%m/%Y") AS comment_date FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = 1
                    </code>
                    on appele ce champ virtuel l'<b>alias</b>

                </p>


                <h3>Les fcts d'agrégats</h2>
                <p class="note">
                    Ces fonctions diffèrent assez des précédentes. Plutôt que de modifier des valeurs une à une, elles font des opérations sur plusieurs entrées pour retourner une seule valeur.
                </p>

                <p>
                    on a par exemple <code>ROUND()</code> qui permet d'arrondir (fonction scalaire)
                    on a aussi <code>AVG()</code> qui renvoie une seule entrée: la valeur moyenne de toutes les lignes
                </p>
                <code class="codeBlock">
                SELECT AVG(c.review) as rating FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = 1
                </code>

                <p>
                    comme dans le php on peut utiliser des fct sur des fct ici on utilse une fct pour arrondir tout ca
                </p>
                <p>
                    <code class="codeBlock">
                        SELECT ROUND(AVG(c.review),1) as rating FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = 1
                    </code>
                </p>
                <p>
                    voici la config la plus facile pour afficher ces données 
                    <code class="codeBlock">
                    
                        $sqlQuery = 'SELECT ROUND(AVG(c.review),1) as rating FROM recipes r LEFT JOIN comments c on r.recipe_id = c.recipe_id WHERE r.recipe_id = 1';

                        // Préparation
                        $averageRatingStatment = $db->prepare($sqlQuery);

                        // Exécution
                        $averageRatingStatment->execute();

                        /** La fonction fetch est plus performante que fetchAll()
                        * quand nous sommes certain(e)s de ne récupérer qu'une ligne.
                        * https://www.php.net/manual/fr/pdostatement.fetch.php
                        */
                        $averageRating = $averageRatingStatment->fetch();
                    </code>
                </p>



                <p class="alert">
                Vous ne devez pas récupérer d'autres champs de la table quand vous utilisez une fonction d'agrégat, contrairement à tout à l'heure avec les fonctions scalaires.
                </p>

                <h2>Regrouper les données </h2>
                <h3>avec <kbd>GROUP BY</kbd> et <kbd>HAVING</kbd></h3>
                <p>
                    Pour faire cela, on doit utiliser un nouveau mot-clé : GROUP BY qui signifie « grouper par ».
                    On utilise cette clause en combinaison d'une fonction d'agrégat (comme AVG ) pour obtenir des informations intéressantes sur des groupes de données.
                </p>
                <p class="note">
                Il faut utiliser GROUP BY  en même temps qu'une fonction d'agrégat, sinon il ne sert à rien.
                </p>
                <h3>Filtrer les données avec <kbd>HAVING</kbd></h3>
                <p>
                <kbd>HAVING</kbd>  est un peu l'équivalent de <kbd>WHERE</kbd>  , mais il agit sur les données une fois qu'elles ont été regroupées. C'est donc une façon de filtrer les données à la fin des opérations.
                </p>
                <p>
                    <code class="codebLOCK">
                    SELECT AVG(review) AS rating, recipe_id FROM comments GROUP BY recipe_id HAVING rating >= 3
                    </code>
                </p>
                <ul class="note">

                    la diff entre :
                    
                    <li><kbd>WHERE</kbd>  agit en premier, avant le groupement des données ; </li>   

                    <li><kbd>HAVING</kbd>  agit en second, après le groupement des données.</li>

                    on peut meme les combiner 
                </ul>
                <p>
                    <code class="codeBlock">SELECT AVG(review) AS rating, recipe_id FROM comments WHERE user_id = 1 GROUP BY recipe_id HAVING rating >= 2</code>
                </p>
            </div>

        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


