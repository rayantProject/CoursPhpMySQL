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

    <div class="container-fluid mx-auto" style="width: 80%;">
    <h1>Les Tableaux </h1>

    <div>
        <p>Il exciste deux types de <code>arrays</code></p>
        <p><span class="m-important">Les tableaux numérotés</span>, et les <span class="m-important">paire clé valeurs</span></p>

        
        <h2>tableaux numérotés</h2>
        <p>
        La maniére de generer un Array
        <code class="codeBlock">
        
        &lsaquo;?php
        $recipes = ['Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César',];

        // La fonction array permet aussi de créer un array
        $recipes = array('Cassoulet', 'Couscous', 'Escalope Milanaise');
        ?&rsaquo;
        </code>
        une autre manniére on assigne les valeurs une à une. 
        <code class="codeBlock">
        
        &lsaquo;?php
        $recipes[0] = 'Cassoulet';
        $recipes[1] = 'Couscous';
        $recipes[2] = 'Escalope Milanaise';
        ?&rsaquo;
        </code>

        pour afficher un tableau numéroté
        <code class="codeBlock">
        
        &lsaquo;?php
        echo $recipes[1]; // Cela affichera : Couscous
        ?&rsaquo;
        </code>
        </p>

        <h2>Les tableaux asociatifs </h2>
        <!-- <p class="note text-break">
            </p> -->
            
        <p>
        Les tableaux associatifs fonctionnent sur le même principe, sauf qu'au lieu de numéroter les cases, on va les étiqueter en leur donnant à chacune un nom différent
        <code class="codeBlock">
        
        &lsaquo;?php

        $recipe = [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
        'author' => 'john.doe@exemple.com',
        'enabled' => true,
        ];

        //Il est aussi possible de créer le tableau case par case, comme ceci :

        $recipe['title'] = 'Cassoulet';
        $recipe['recipe'] = 'Etape 1 : des flageolets, Etape 2 : ...';
        $recipe['author'] = 'john.doe@exemple.com';
        $recipe['enable'] = true;
        ?&rsaquo;
        </code>
        </p>
        
        <!-- <p class="note text-break">
        </p> -->
        
        <p>
        Pour afficher un élément, il suffit d'indiquer le nom de cet élément entre crochets, ainsi qu'entre guillemets ou apostrophes, puisque l'étiquette du tableau associatif est un texte.
        <code class="codeBlock">
        
        &lsaquo;?php

        echo $recipe['title'];
        ?&rsaquo;
        </code>
        </p>
        

        <p class="note text-break"> 
        <span class="l-important">Les tableaux numérotés</span> permettent de stocker une série d'éléments du même type, comme des prénoms. Chaque élément du tableau contiendra alors un prénom.
            <br>
        <span class="l-important">Les tableaux associatifs</span> permettent de découper une donnée en plusieurs sous-éléments. Par exemple, une adresse peut être découpée en nom, prénom, nom de rue, ville…
        </p>


        <h2>Parcourir un tableau</h2>

        <p>Trois methodes s'offrent à nous : 
        <ol>
            <li>la boucle <code>for</code></li>
            <li>la boucle <code>forEach</code></li>
            <li>la focntion <code>print_r</code></li>
        </ol>
        </p>
        <h3>
            La methode <code>for</code>
        </h3>

        <p>Nous l'avons déja vue :
        <code class="codeBlock">
        
        &lsaquo;?php

            $recipes = [
                ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
                ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
            ];

            for ($lines = 0; $lines <= 1; $lines++) {
                echo $recipes[$lines][0];
            }

        ?&rsaquo;
        </code>
        </p>

        <h3>
            La methode <code>forEach</code>
        </h3>

        <p>foreach passe en revue chaque ligne du tableau. Lors de chaque passage, elle met la valeur de cette ligne dans une variable temporaire (par exemple $element  ).
        <code class="codeBlock">
        
        &lsaquo;?php

            $recipe = [
                'title' => 'Cassoulet',
                'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
                'author' => 'mickael.andrieu@exemple.com',
                'enabled' => true,
            ];

            foreach ($recipe as $value) {
                echo $value;
            }

        ?&rsaquo;
        </code>
        <code>foreach</code> va mettre tour à tour dans la variable <code>$value</code>  :

            <ul>
                <li>le titre de la recette ;</li>
                <li>les étapes de la recette ;</li>
                <li>l'auteur ;</li>
                <li>et la réponse à "enabled"...</li>
            </ul>

        … contenus dans le tableau $recipe 
                On met donc entre parenthèses :

        <ul>
            <li>D'abord le nom du tableau, ici $recipe  .</li>
            <li>Ensuite le mot-clé as  (qui signifie « en tant que »).</li>
            <li>Enfin, le nom d'une variable que vous choisissez, et qui va contenir tour à tour chacune des valeurs du tableau, ici $value  .</li>
        </ul>

        </p>
        <p class="note text-break">Le <code>foreach</code> permet de parcourir des tableaux assiociatifs   
        </p>
        <p>
        le vrai avantage du <code>forEach</code>
        <code class="codeBlock">
        &lsaquo;?php

                    $recipes = [
                [
                    'title' => 'Cassoulet',
                    'recipe' => '',
                    'author' => 'mickael.andrieu@exemple.com',
                    'is_enabled' => true,
                ],
                [
                    'title' => 'Couscous',
                    'recipe' => '',
                    'author' => 'mickael.andrieu@exemple.com',
                    'is_enabled' => false,
                ],
                [
                    'title' => 'Escalope milanaise',
                    'recipe' => '',
                    'author' => 'mathieu.nebra@exemple.com',
                    'is_enabled' => true,
                ],
                [
                    'title' => 'Salade Romaine',
                    'recipe' => '',
                    'author' => 'laurene.castor@exemple.com',
                    'is_enabled' => false,
                ],
            ];

        foreach($recipes as $recipe) {
            echo $recipe['title'] . ' contribué(e) par : ' . $recipe['author'] . PHP_EOL; 
        }

        ?&rsaquo;
        </code>
        </p>
        <P>
            On obtient le resultat suivant :
            <pre>
            Cassoulet contribué(e) par : mickael.andrieu@exemple.com
            Couscous contribué(e) par : mickael.andrieu@exemple.com
            Escalope milanaise contribué(e) par : mathieu.nebra@exemple.com
            Salade Romaine contribué(e) par : laurene.castor@exemple.com
            </pre>
        </P>
        <p class="note text-break">
        Toutefois, avec cet exemple, on ne récupère que la valeur. Or, on peut aussi récupérer la clé de l'élément. On doit dans ce cas écrire foreach  , comme ceci :
        </p>
        <p>
            <code class="codeBlock">
                &lsaquo;?php foreach($recipe as $property => $propertyValue) ?>
            </code>

            <ul>
                <li>
                <code>$property</code> qui contiendra la clé de l'élément en cours d'analyse (« title », « author », etc.).
                </li>
                <li>
                <code>$propertyValue</code> qui contiendra la valeur de l'élément en cours (« Cassoulet », « laurene.castor@exemple.com », etc.).
                </li>
            </ul>

        </p>
        <p>
            exemple :

            <code class="codeBlock">
            &lsaquo;?php
                $recipe = [
                    'title' => 'Salade Romaine',
                    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
                    'author' => 'laurene.castor@exemple.com',
                ];

                foreach($recipe as $property => $propertyValue)
                {
                    echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL;
                }
            ?>
            </code>
            resultat:

            <pre>
            $ php exemple.php 
            [title] vaut Salade Romaine
            [recipe] vaut Etape 1 : Lavez la salade ; Etape 2 : euh ...
            [author] vaut laurene.castor@exemple.com
            </pre>

        </p>


            <h3>Le methode <code>print_r</code></h3>
            <p>
            Parfois, en codant votre site en PHP, vous aurez sur les bras un tableau et vous voudrez savoir ce qu'il contient, juste pour votre information.
            </p>
            <p class="note text-break">
            Mais si vous n'avez pas besoin d'une mise en forme spéciale et que vous voulez juste savoir ce que contient le tableau, vous pouvez faire appel à la fonction print_r  . C'est une sorte de echo  spécialisé dans les tableaux.
            </p>
            <p>
            elle ne renvoir pas du code html
            </p>

            <p>
                Exemple:
            <code class="codeBlock">
                &lsaquo;?php  
                    $recipes = [
                    [
                        'title' => 'Cassoulet',
                        'recipe' => '',
                        'author' => 'mickael.andrieu@exemple.com',
                        'is_enabled' => true,
                    ],
                    [
                        'title' => 'Couscous',
                        'recipe' => '',
                        'author' => 'mickael.andrieu@exemple.com',
                        'is_enabled' => false,
                    ],
                ];
               

                    echo '&lsaquo;pre>';
                            print_r($recipes);
                    echo '&lsaquo;/pre>';
                ?&rsaquo; 
            </code>
            </p>
            <p>

            
        resutat:
        <?php 
            $recipes = [
                [
                    'title' => 'Cassoulet',
                    'recipe' => '',
                    'author' => 'mickael.andrieu@exemple.com',
                    'is_enabled' => true,
                ],
                [
                    'title' => 'Couscous',
                    'recipe' => '',
                    'author' => 'mickael.andrieu@exemple.com',
                    'is_enabled' => false,
                ],
            ];

                echo '<pre>';
                    print_r($recipes);
                echo '</pre>';
                
        ?>
           </p>


        

        
    </div>
    </div>


</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


