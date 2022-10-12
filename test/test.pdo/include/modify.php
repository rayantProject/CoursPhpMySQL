

<?php  



include('./test.php'); 






$query =  "UPDATE livre SET tittle = :tittle, author = :author, sumury = :sumury, pages = :pages, publication = :publication WHERE id_livre = :id";

$insertRequest = $mysqlConnection->prepare($query);

$insertRequest->execute
([

    'id' => $_POST["id_livre"],
    
    'tittle' => $_POST["titre"], 
    'author' => $_POST["auteur"], 
    'sumury' => $_POST["sumury"], 
    'pages'  => $_POST["page"], 
    'publication' => $_POST["date"],

]);


?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    
    <title>page1</title>
</head>
<body>
    
    <main>
        <div class="container-fluid vh-100 bg-dark d-flex justify-content-center align-items-center">
            <div class="text-center">
            <h1 class="text-white">
                Merci votre livre est modifier
            </h1>
            <h2 class="text-white">
                <a href="../index.php">Revenir à la page d'acceuil</a>
            </h2>

            </div>
        </div>
    </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


