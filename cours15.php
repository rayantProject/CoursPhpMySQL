<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style/css/style.css">
    <title>les bases de données</title>
</head>
<body>
    
    <main>
        <div class="container-fluid mx-auto" style="width: 80%;">
        <h1 class="">
            les bases de données 
        </h1>
            <div>
                <p>
                    Nous allons utiliser le Système de Gestion de Base de Données (SGBD) avec MySQL,
                    pour communiquer avec SGBD il faut lui donner des ordres en SQL.
                </p>
            </div>

            <h2>representation d'une base de donnée sql</h2>
            <p>
            <div>
                <p>
                    <b class="text-warning">
                        base
                    </b>
                </p>
                <div>
                    <div class="">
                        <div class="vr me-3"></div>
                        <span class="text-danger"> <b>Table</b> </span>
                        <div class="ms-5">
                            <div class="vr me-3"></div>
                            <span class="text-success"> <b>Champs</b> </span>
                        </div>
                        <div class="ms-5">
                            <div class="vr me-3"></div>
                            <span class="text-success"> <b>Champs</b> </span>
                            <div class="ms-5">
                                <div class="vr me-3"></div>
                                <span class="text-primary"> <b>entrée</b> </span>
                            </div>
                        </div>
                        <div class="ms-5">
                            <div class="vr me-3"></div>
                            <span class="text-success"> <b>Champs</b> </span>
                            <div class="ms-5">
                                <div class="vr me-3"></div>
                                <span class="text-primary"> <b>entrée</b> </span>
                            </div>
                            <div class="ms-5">
                                <div class="vr me-3"></div>
                                <span class="text-primary"> <b>entrée</b> </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="vr me-3"></div>
                        <span class="text-danger"> <b>Table</b> </span>
                    </div>
                    <div>
                        <div class="vr me-3"></div>
                        <span class="text-danger"> <b>Table</b> </span>
                    </div>
                    <div>
                        <div class="vr me-3"></div>
                        <span class="text-danger"> <b>Table</b> </span>

                        <div class="ms-5">
                            <div class="vr me-3"></div>
                            <span class="text-success"> <b>Champs</b> </span>
                        </div>
                    </div>
                    <div>
                        <div class="vr me-3"></div>
                        <span class="text-danger"> <b>Table</b> </span>
                    </div>
                    <div>
                        <div class="vr me-3"></div>
                        <span class="text-danger"> <b>Table</b> </span>
                    </div>
                </div>
                


            </div>
            </p>

            <p>
                voici la structure d'une bd :
                <span class="text-warning">Base</span>(armoire) > <span class="text-danger">Table</span>(tirroire) > <span class="text-success">Champ</span>(colone) > <span class="text-primary">entrée</span>(ligne)
                
                
                <figure>
                    <img src="./asset/fig_tab_sql.png" alt="" class="ing-fluid">
                </figure>
            </p>

            <p class="note">
            Rappel : chaque table est en fait un tableau où les colonnes sont appelées champs et où les lignes sont appelées entrées.
            Il y'a souvent unc champ ID qui sert d'identifient
            </p>


            <p>
                cette représentation n'est qu'un moyen de bien voir les données sinon elle sont écrite sur un fichier qu'il faut surtout éviter de toucher et le modifier via sql
            </p>
        </div>
    </main>

<?php



?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


