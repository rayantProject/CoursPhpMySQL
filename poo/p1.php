<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/css/style.css">
    <title>page1</title>
</head>
<body>
    
    <main>
        <div class="container-fluid mx-auto" style="width: 80%;">
        <h1 class="">
            Orienté objet
            
        </h1>
        <div>



            <p>On déclare un objt avc le mots clé <kbd>new</kbd></p>
            <p>
                <code class="codeblock">
                    $date = new DateTime;
                </code>
            </p>
            <p>
                il sagit de l'instanciation à partir d'une classe 
                elle à trois étapes.
                <ul>
                    <li>
                        l’allocation et l'initialisation de données ;
                    </li>
                    <li> 
                        le stockage en mémoire du nouvel objet pour suivre son état ;
                    </li>
                    <li>
                        la construction d’une référence de l’objet pour le manipuler. 
                    </li>
                </ul>

            </p>

            <h2>les réferences </h2>
            <p>
                <code class="codeBlock">
                    // déclaration par référence avec le symbole &
                    function foo($var) {
                        $var = 2;
                    }


                    $a=1;
                    foo ($a);
                    // $a vaut toujours 1
                </code>


            </p>
            <p>
            

                <code class="codeBlock">
                // déclaration par référence avec le symbole &
                function foo(&$var) {
                    $var = 2;
                }
                
                $a=1;
                foo ($a);
                
                // $a vaut 2 maintenant
                </code>
            </p>
            <p class="note">
                Affecter une réference par <kbd>&</kbd> permet de fiare directement réference à l'objet en question sans que la fct qui l'utulise creer une copie
                Pour les objets en php il n'est pas neccessaire d'avoir le <kbd>&</kbd> pour les manipulés.
            </p>
            <p>
                <code class="codeBlock">
                    // déclaration de référence à l’objet
                    function foo(DateTime $date) {
                        $date->modify('+1 day'); // permet d'ajouter 1 jour à la date
                    }
                    
                    $date = new DateTime;
                    foo ($date);
                    
                    // $date est maintenant au lendemain
                </code>
            </p>
            <p>
                <code class="codeBlock">
                $dateUne = new DateTime;
                $dateDeux = $dateUne;
                
                $dateDeux->modify('+1 day');
                
                var_dump($dateUne, $dateDeux);
                
                // $dateUne et $dateDeux désignent le même objet en mémoire.
                // Ils sont donc tous les deux au lendemain
                </code>
            </p>
            <p class="note">
                Les objets se comparent de manière un peu différente des autres types de variables. Si vous créez 2 objets issus de la même classe, que vous leur assignez les mêmes valeurs et les comparez simplement (==), vous vérifiez que les 2 éléments possèdent les mêmes propriétés et les mêmes valeurs. Si vous testez strictement (===), alors vous vérifiez que vous êtes en train de manipuler la même instance.
            </p>

            <h2>Les objets</h2>
            <p>
                pour acceder au propriété d'un objet on utilise <kbd>-></kbd>
            </p>

            <p>
                Avec un <code>JSON</code> qui definie les objets comme ceci
            </p>
            <p>
                <code class="codeblock">
                {
                    "date":"2021-03-23 07:35:44.011207",
                    "timezone_type":3,
                    "timezone":"Europe/Paris"
                }
                </code>
            </p>
            <p>
                php sait les convertir en en entré en variable php.
                
            </p>
            <p>
                <code class="codeBlock"> 
                        $s = ‘
                        {
                            "date":"2021-03-23 07:35:44.011207",
                            "timezone_type":3,
                            "timezone":"Europe/Paris"
                        }
                        ‘;
                        
                        var_dump(json_decode($s));
                </code>
            </p>
        </div>
        </div>
    </main>

<?php



?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


