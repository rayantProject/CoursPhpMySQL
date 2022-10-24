
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


<?php

class  HTMLement
{
    public function __construct(private string $name, private string $content)
    {
    }

    public function __invoke()
    {
       echo "<$this->name>$this->content</$this->content>";
    }
}

class  Component
{
     private string $test;
    public function __construct(protected string $name, protected HTMLement $elem)
    {
    }

    public function __clone(): void
    {
        $this->elem = clone $this->elem;
    }

    public function __toString(): string
    {
        return sprintf("this Component object is create with  name %d and her HTMLelement %d ", $this->name, $this->elem);
    }

}

$mySpan =  new HTMLement("span", "my carateristique content");


$component = new Component("mycompo", new HTMLement("test", "my test"));
$component2 = clone $component;
?>
<body>

    <main>
        <div class="container-fluid mx-auto" style="width: 80%;">
            <h1 class="">
                methode commune aux objets :

            </h1>
            <div class="">
                <p>
                    L'existence de ces méthodes est surveillée par PHP, et dès qu'il les détecte dans votre classe, il les utilise aux différents moments de leur vie. PHP y fait appel et les rend accessibles dès que vous les écrivez. Si vous essayez de les appeler sans les déclarer, vous obtenez une erreu
                    C’est parce que PHP les appelle dès que possible sans vous le demander que vous rencontrerez souvent le terme méthode magique. Ne pas les connaître donne une impression de magie, de boîte noire.
                </p>
                <p class="note">
                    ce jeu de méthodes est un moyen d'intervenir dans le processus de création, modification et suppression (entre autres) des objets de PHP, afin d'y ajouter des comportements personnalisés.
                </p>

                <p>

                    il sagit de methode commune au objet  qu'il soit  <b>instancié ou non</b>
                    comme la methode <code>__construct</code> ou <code>__destruct</code>


                    <code class="codeBlock">
                        declare(strict_types=1);

                        class Pont
                        {
                            private float $longueur;
                            private float $largeur;

                        public function __construct(float $longueur, float $largeur)
                        {
                            $this->longueur = $longueur;
                            $this->largeur = $largeur;
                        }
                        }

                        $towerBridge = new Pont(286.0, 62.0);


                    </code>

                </p>

                <p class="note">

                        depuis php8 il existe un forme plus courte
                </p>

                <p>

                    <code class="codeBlock">
                        declare(strict_types=1);

                        class Pont
                        {
                            public function __construct(private float $longueur, private float $largeur)
                            {
                            }
                        }

                        $towerBridge = new Pont(286.0, 62.0);
                        var_dump($towerBridge);
                    </code>

                </p>

                <h2>D'autre methode magique utile</h2>



                <p>
                    voici la structure de base pour les exemples:
                    <code class="codeBlock">
                        class  HTMLelement
                        {
                            public function __construct(private string $name, private string $content)
                            {
                            }
                        }

                        class  Component
                        {

                            public function __construct(private string $name, private HTMLement $elem)
                            {
                            }

                        }
                    </code>
                </p>

                <h3>
                    la methode <kbd>clone</kbd>
                </h3>
                <p>
                    pour clone un objet on peut peut utilser le mots clé <code>clone</code> comme ceci <code>$objClone = clone $obj</code>

                    <code class="codeBlock">

                        $component = new Component("mycompo", new HTMLelement("test", "my test"));
                        $component2 = clone $component;
                    </code>

                </p>
                <p>
                    cependant le clone au le meme <kbd>HTMLelement</kbd> or que nous voulions egalement un clone de celui-ci ainsi grace à la methode <code>clone</code>
                    on pourrait modifier celui-ci
                </p>
                <p>
                    en rajoutant cette FCT à <kbd>Component</kbd> on obtient un clone de <kbd>HTMLelement</kbd> également dans le clone de <kbd>Component</kbd>
                </p>
                <p>
                    <code class="codeBlock">
                        public function __clone(): void
                        {
                            $this->elem = clone $this->elem;
                        }
                    </code>
                </p>


                <h3>
                    la methode <kbd>toString</kbd>
                </h3>
                <p>
                    c'est la methode qui affiche quand il sagit d'objets

                    <code class="codeBlock">

                        public function __toString(): string
                        {
                            return sprintf("this Component object is create with  name %d and her HTMLelement %d ", $this->name, $this->elem);
                        }

                    </code>
                </p>
                <p>
                    TEST///////::::
                    <code class="codeBlock">
                            echo $component;
                    </code>

                </p>
                <p>
                    resultat:
                    <?php
                        echo "<div class=' '><span class=''>resultat : </span><span class='txt-important  bg-black rounded p-1'>$component</span></div>   ";
                    ?>
                </p>
                <h3><kbd>invoke</kbd>,  <kbd>sleep</kbd>  et  <kbd>wakeup</kbd></h3>
                <p>

                    <code>__invoke</code> permet d'utiliser la classe comme une FCT
                    <div>PHP doc:  La méthode <code>__invoke()</code> est appelée lorsqu'un script tente d'appeler un objet comme une fonction.</div>

                </p>
                <p>
                    <code class="codeBlock">
                            //dans la classe HTMLelement
                        public function __invoke(string $name, string $content)
                        {
                            $this->__construct($name, $content);

                        }

                    </code>

                </p>

                <p>
                    test :
                    <code class="codeBlock">
                        $myParagraphe =  new HTMLement("p", "my carateristique content");
                        //...
                        $myParagraphe();

                    </code>
                </p>
                <p class="">
                    resultat:
                    <?php
                        $mySpan();
                    ?>
                </p>
                <h3>Les methodes <kbd>serialize</kbd>,  <kbd>unserialize</kbd>, <kbd>get</kbd>, <kbd>set</kbd>, <kbd>isset</kbd>, <kbd>unset</kbd> et <kbd>call</kbd></h3>


                <p>
                    La méthode magique <code>__get()</code> va s’exécuter si on tente d’accéder à une propriété inaccessible (ou qui n’existe pas)
                </p>
                <p>
                    La méthode magique <code>__set()</code> s’exécute dès qu’on tente de créer ou de mettre à jour une propriété inaccessible (ou qui n’existe pas)
                </p>
                <p>
                    La fonction <code>isset()</code> va servir à déterminer si une variable est définie et si elle est différente de NULL tandis que la fonction <code>empty()</code> permet de déterminer si une variable est vide.
                </p>

                <p>Finalement, la méthode magique <code>__unset()</code> va s’exécuter lorsque la fonction unset() est appelée sur des propriétés inaccessibles.
                    La fonction <code>unset()</code> sert à détruire une variable.</p>

                <p>
                    La méthode magique <code>__call()</code> va être appelée dès qu’on essaie d’utiliser une méthode qui n’existe pas (ou qui est inaccessible) à partir d’un objet
                </p>

                <p class="note">
                    FLEMME: Nous n’étudierons pas ici les méthodes magiques __sleep(), __wakeup(), __set_state() et debugInfo() simplement car elles répondent à des besoins très précis et ne vont avoir d’intérêt que dans un contexte et dans un environnement spécifique.
                </p>

            </div>



        </div>
    </main>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


