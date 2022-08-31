<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style/css/style.css">
    <title>page3</title>
</head>
<body>
    
    <main>
    <div class="container-fluid mx-auto" style="width: 80%;">
        <h1>
                Les Variables :
        </h1>
        
        <div>

            <p>
                Variable (tu connais pas besoin de defintion) <br>
                variable se compose de  son 
                <var>NOM</var> et de sa <var>VALEUR</var>
            </p>
            <p>
                <code class="codeBlock">
                &lsaquo;?php 
                    $nom = "valeur"; 
                    $noValue = NULL;
                    $intValue =  1;
                    $floatValue = 12.3;
                    $boolValue = true;
                ?&rsaquo;
                </code>
            </p>


            <p class="">
            
            Les chaînes de caractères (<var>string</var>) : c'est le nom informatique qu'on donne au texte. 
            <br>
            Les nombres entiers (<var>int</var>) : ce sont les nombres du type 1, 2, 3, 4, etc. On compte aussi parmi eux les entiers relatifs : -1, -2, -3…
            <br>
            Les nombres décimaux (<var>float</var>) : ce sont les nombres à virgule, comme 14,738. Attention, les nombres doivent être écrits avec un point au lieu de la virgule (c'est la notation anglaise).
            <br>
            Les booléens (<var>bool</var>) : c'est un type très important qui permet de stocker soit vrai soit faux. 
            <br>
            Rien (<var>NULL</var>) : aussi bizarre que cela puisse paraître, on a parfois besoin de dire qu'une variable ne contient rien. Ce n'est pas vraiment un type de données, mais plutôt l'absence de type.
            </p>




            <h2>
                Afficher une valeur
            </h2>


            <p>
                <code class="codeBlock">
                &lsaquo;?php 
                    $nom = "valeur"; 
                    echo $nom;
                ?&rsaquo;
                </code>
            </p>

            
            <h2>
                Concatenation
            </h2>


            <p>
                <code class="codeBlock">
                &lsaquo;?php 
                    $fullname = "Rayan TRAORE";
                    echo "Bonjour $fullname et bienvenue sur le site !"
                ?&rsaquo;
                </code>
            </p>

            <h2>
                Calcul avec variable
            </h2>

            <h3>Les operateurs</h3>

            <p>
                <pre>
                + Addition
                - Soustraction
                * Multiplication
                / Division
                % Modulo
                </pre>
            </p>
            <p>
                <h3>Exemple de calcul</h3>
            <code class="codeBlock">
                &lsaquo;?php 
                
                    $number = 2 + 4; // $number prend la valeur 6
                    $number = 5 - 1; // $number prend la valeur 4
                    $number = 3 * 5; // $number prend la valeur 15
                    $number = 10 / 2; // $number prend la valeur 5

                    // Allez on rajoute un peu de difficulté
                    $number = 3 * 5 + 1; // $number prend la valeur 16
                    $number = (1 + 2) * 2; // $number prend la valeur 6
            
                ?&rsaquo;
            </code>
            </p>
        </div>
    </div>     
    </main>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


