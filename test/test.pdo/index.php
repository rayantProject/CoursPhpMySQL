<?php  include('./include/test.php') ?>
<?php  include('./include/data.php') ?>
<?php  include('./include/bookCard.php') ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/css/style.css">
    
    <title>page1</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Book store</a>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Ajouter
                </button>

<!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Rajouter un livre</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="include/insertBook.php" method="post">
                    <div class="modal-body">
                        
                        <div class="mb-3">
                            <label class="form-label" for="titre">titre</label>
                            <input class="form-control" require type="text" name="titre" id="titre">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="auteur">auteur</label>
                            <input class="form-control" type="text" name="auteur" id="auteur">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="page">page</label>
                            <input class="form-control" type="number" require name="page" id="page">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="date">publication</label>
                            <input class="form-control" require type="date" name="date" id="date">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="sumury">résumé</label>
                            <textarea class="form-control" require name="sumury" id="sumury" cols="30" rows="5"></textarea>
                        </div>
                        


                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-bs-dismiss="modal">fermer</button>
                        <button type="submit" class="btn btn-dark">Ajouter</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </nav>
    </header>
    
   <main>

        <div class="container-fluid">
        <h1>
            J'aime les bonbons => I like GOOD-GOODS
        </h1>

        <div class="container-fluid mt-5">
        <div class="d-flex">

        <?php

        foreach ($livres as $livre) 
        {
            bookComponent($livre["tittle"], $livre["sumury"], $livre["pages"], $livre["author"], $livre["publication"], $livre["id_livre"]);

        }          
        

        ?>
        <div>

        <?php

        foreach ($livres as $livre) 
        {
            bookModal($livre);

        }          
        

        ?>

        </div>
        






        </div>
        </div>
        </div>

    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


