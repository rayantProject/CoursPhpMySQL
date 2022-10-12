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
        <h1 class="">
            effectuer des requetes : 
        </h1>
            
            <div>
                <p>
                    on ûtilse le langage sql pour effectuer des requetes 

                    <code class="codeBlock">
                    SELECT * FROM `testbaselivre`
                    </code>
                </p>

                <p>
                    En sql le premier mot indique ce que la requete doit faire 

                    <ul>
                        <li>
                            <kbd>SELECT</kbd> :   . Ce mot-clé demande à MySQL d'afficher ce que contient une table.
                        </li>
                        <li>
                            <kbd>FROM </kbd>(veut dire "dans") : fait la liaison entre le nom des champs et le nom de la table.
                        </li>

                        <li>
                            <kbd>testbaselivre</kbd> :  le nom de la table
                        </li>

                        <li class="note">
                            le <kbd>*</kbd> veut dire tout
                        </li>
                    </ul>


                    pour résumer <span class="txt-important">PREND TOUT DANS LA TABLE:testbaselivre</span>
                    
                </p>


                <p>
                    avec le pdo on fait comme ceci :

                    <code class="codeBock">
                    &lsaquo;?php
                        $baseLivreStatement = $db->prepare('SELECT * FROM testbaselivre');
                    ?>
                    </code>
                    à ce stade <code>$recipesStatement</code> est innexploitable et renvoir un objet : <kbd>PDOstatement</kbd>

                    il contient la requete sql et par la suite les infos récuperer 

                    
                </p>
                <p>
                    pour rendre ces données exploitables il faut executer la requete sql 
                    pour cela on utilse la fonction <code>execute()</code>
                    et ensuite les convertir en tableau php avec <code>fetchAll()</code>


                    <code class="codeBlock">
                    $baseLivreStatement->execute();
                    $livres = $baseLivreStatement->fetchAll();
                    </code>


                </p>

                <p id="note_personnel_30_09_22-1" class="note-p">
                    ici j'ai eu quelques problemes avec l'agorithmie j'en ai conclue que <kbd>-></kbd> c'est comme point en js <kbd>.</kbd>
                    donc quand on écrit <br> <code style="color: #fffefd;" contenteditable="true">$baseLivreStatement = $db->prepare('SELECT * FROM testbaselivre');</code>
                    <br>
                    sa vaut : 
                        <br>
                    
                    <code style="color: #fffefd;" contenteditable="true">let baseLivreStatement = db.prepare('SELECT * FROM testbaselivre');</code>
                </p>


                <h3>Traquer les erreurs :</h3>

                <p>
                    une erreur de requete SQL se manifeste sur la ligne <code>fetchAll()</code>
                    pour afficher les erreurs il faut parametrer l'objet PDO à cet effet.
                    
                </p>
                <p >
                    <code class="codeBlock">
                    $db = new PDO(
                        'mysql:host=localhost;dbname=my_recipes;charset=utf8',
                        'root',
                        'root',
                        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
                    );
                    </code>
                </p>



            </div>

    
        </div>
    </main>





</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


