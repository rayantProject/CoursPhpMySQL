<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="style/css/style.css">
<title>page4</title>
</head>
<body>

<main>
<div class="container-fluid mx-auto" style="width: 80%;">
<h1>
Les conditions
</h1>
<div>

<h2>
Operateurs conditionnels
</h2>
<p>
<pre>
== Est égal à
> Est supérieur à
< Est inférieur à
>= Est supérieur ou égal à
<= Est inférieur ou égal à
!= Est différent de
</pre>
</p>


<h2>Condition <code>if...else</code></h2>
<p>
toujour les classique <code>if...else</code>
<code class="codeBlock">
&lsaquo;?php 
$isEnabled = true;

if ($isEnabled == true) {
    echo "Vous êtes autorisé(e) à accéder au site ✅";
}
else {
    echo "Accès refusé ❌ ";
}
?&rsaquo;
</code>
</p>


<p>l'insctrcution avec <code>elseif</code> en plus</p>

<p>
<code class="codeBlock">
&lsaquo;?php
    $isAllowedToEnter = "Oui";

    // SI on a l'autorisation d'entrer
    if ($isAllowedToEnter == "Oui") {
        // instructions à exécuter quand on est autorisé à entrer
    } // SINON SI on n'a pas l'autorisation d'entrer
    elseif ($isAllowedToEnter == "Non") {
        // instructions à exécuter quand on n'est pas autorisé à entrer
    } // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
    else {
        echo "Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ?";
    }
?&rsaquo;
</code>
</p>
<p>

Le cas précédant avec de bool
<code class="codeBlock">
&lsaquo;?php
    $isAllowedToEnter = true;

    if ($isAllowedToEnter) {
        //permet de verifier que isAll... est en true
        echo "Bienvenue petit nouveau. :o)";
    }
    else {
        echo "T'as pas le droit d'entrer !";
    }
?&rsaquo;
</code>
</p>
<h3>Les condtions mutliple</h3>

<h4>Operateurs</h4>
<p>
<pre>
AND Et &&
OR  Ou ||
</pre>  
<code class="codeBlock">
&lsaquo;?php
    $isEnabled = true;
    $isOwner = false;
    $isAdmin = true;

    if (($isEnabled && $isOwner) || $isAdmin) {
        echo 'Accès à la recette validé ✅';
    } else {
        echo 'Accès à la recette interdit ! ❌';
    }

?&rsaquo;
</code> 
</p>



<h3 class="bg-success border-5 text-white">
ASTUCE A CONNAITRE
</h3>

<p>
<code class="codeBlock">
&lsaquo;?php
    $chickenRecipesEnabled = true;

    if ($chickenRecipesEnabled) {
        echo '&lsaquo;?phph1>Liste des recettes à base de poulet&lsaquo;/h1>';
    }
?&rsaquo;
</code>

est equivalent à :
<code class="codeBlock">
&lsaquo;?php $chickenRecipesEnabled = true; ?>

&lsaquo;?php if ($chickenRecipesEnabled): ?> <!-- Ne pas oublier le ":" -->
    
    &lsaquo;h1>Liste des recettes à base de poulet&lsaquo;/h1>
    
&lsaquo;?php endif; ?><!-- Ni le ";" après le endif -->
    </code>    
    </p>
    
    
    <h2>Condition <code>switch</code></h2>
    <p>
    <code class="codeBlock">
    &lsaquo;?php
    
        $grade = 10;
            
        switch ($grade) // on indique sur quelle variable on travaille
        { 
        case 0: // dans le cas où $grade vaut 0
            echo "Tu es vraiment un gros nul !!!";
        break;

        case 5: // dans le cas où $grade vaut 5
            echo "Tu es très mauvais";
        break;

        case 7: // dans le cas où $grade vaut 7
            echo "Tu es mauvais";
        break;

        case 10: // etc. etc.
            echo "Tu as pile poil la moyenne, c'est un peu juste…";
        break;

        case 12:
            echo "Tu es assez bon";
        break;

        case 16:
            echo "Tu te débrouilles très bien !";
        break;

        case 20:
            echo "Excellent travail, c'est parfait !";
        break;

        default:
            echo "Désolé, je n'ai pas de message à afficher pour cette note";
        }
    ?>
    
    </code>
    </p>

    <h2>Condition tertiare</h2>
    <p>
        <code class="codeBlock">
            
        &lsaquo;?php
        $userAge = 24;

        $isAdult = ($userAge >= 18) ? true : false;

        // Ou mieux, dans ce cas précis
        $isAdult = ($userAge >= 18);
        ?>
        </code>
    </p>
    <p>
    La condition testée est $userAge >= 18  .

        Si c'est vrai, alors la valeur indiquée après le point d'interrogation (ici true) sera affectée à la variable  $isAdult  .

        Sinon, c'est la valeur qui suit le symbole : (ici false ) qui sera affectée à  $isAdult  .

        C'est un peu tordu, mais ça marche.
    </p>
    </div>
    </div>     
    </main>
    
    <!-- 
                                &lsaquo;?php
                                ?>
                                </code>
                                -->
                                </body>
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
                                </html>
                                
                                
