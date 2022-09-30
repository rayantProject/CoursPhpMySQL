
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
    <h1>Les formulaires </h1>
        <div>
            <h2>
                Les metodes de form
            </h2>

            <h3>
                la methode <code>get</code>
            </h3>

            <p>
                données transitants par l'URL récupérables avec le tableau <code>$_GET</code>
                il sagit d'une methode peut pratique et pas trés utilliser
            
            </p>
            <h3>
                la methode <code>post</code>
            </h3>

            <p>
                les données ne transitent pas par l'URL, on peut envoyer autant de données que l'on veut neamoin les données ne se sont pas d'autant plus ssécuriser il faut les faire validés 
        
            </p>
            <p class="note">
                on préfére en génerale 
                <code>Post</code>
            </p>
        
            <p class="note">
                Si la méthode est  POST  (bonne pratique), alors c'est la supervariable  <code>$_POST</code>  qui recevra les données.
            </p>

            <p class="alert">
                Pour une question de sécurité il est mieux d'utilser la fonction <code>htmlspecialchars($_POST['message']);</code> voir référence à securité : <a href="./securite.php/#Bloquer_lexcution_de_js_dans_form">faille xss</a>
            </p>    
            


            
        </div>
    </div>
    

</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


