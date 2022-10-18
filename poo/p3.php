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
            Propriété et methode static :
            
        </h1>
        <div>

            <p>
                <code class="codeBlock">
                    declare(strict_types=1);

                    class Pont
                    {
                    public static function validerTaille(float $taille): bool
                    {
                        if ($taille < 50.0) {
                            trigger_error(
                                'La longueur est trop courte. (min 50m)',
                                E_USER_ERROR
                            );
                        }
                        
                        return true;
                    }
                    }

                    var_dump(Pont::validerTaille(150.0));
                    var_dump(Pont::validerTaille(20.0));
                </code>
            </p>
            <p class="note">
                Pour dire à PHP que nous souhaitons faire référence à un élément de la classe, il faut utiliser <kbd>::</kbd>  à la place, comme pour les constantes. Sans ceci, il va chercher à utiliser la méthode d'un objet contenu dans une constante nommée <kbd>Pont</kbd>. Ce qui est faux dans notre cas.
            </p>


            <p>
                Vous devez utiliser le mot clé <kbd>self</kbd> pour cibler une méthode statique de classe, lorsque vous l'appelez depuis une instance de cette même classe. Remplaçons notre vérification de tout à l'heure :
            </p>
            <p>
                <code class="codeBlock">
                declare(strict_types=1);

                class Pont
                {
                public static function validerTaille(float $taille): bool
                {
                    if ($taille < 50.0) {
                        trigger_error(
                            'La taille est trop courte. (min 50m)',
                            E_USER_ERROR
                        );
                    }
                    
                    return true;
                }
                
                public function setLongueur(float $longueur): void
                {
                    self::validerTaille($longueur);
                    
                    $this->longueur = $longueur;
                }
                }

                $towerBridge = new Pont;
                $towerBridge->setLongueur(20.0);
                </code>
            </p>
            <p>
            Nous pouvons alors passer cette propriété en constante avec le mot-clé const :

            <ul>
                <li>
                    La propriété devrait être statique, car l’unité de surface s'exprime toujours en m² quelque soit le pont.
                </li>
                <li>
                    Cette propriété ne sera jamais modifiée au cours de l’exécution du programme.
                </li>
            </ul>
            </p>
            <p>
                <code class="codeBlock">
                    declare(strict_types=1);

                    class Pont
                    {
                        private const UNITE = ‘m²’;
                        private float $longueur;
                        private float $largeur;
                    
                    public function getSurface(): string
                    {
                        return ($this->longueur * $this->largeur) . self::UNITE;
                    }
                    // setLongueur et setLargeur ne changent pas
                    }

                        $towerBridge = new Pont;
                        $towerBridge->setLongueur(286.0);
                        $towerBridge->setLargeur(15.0);

                    echo $towerBridge->getSurface();
                </code>
            </p>
            <p class="note">
            les constantes ne sont pas préfixées par $ et par convention sont écrites en UPPER_SNAKE_CASE (tout en majuscule, avec les mots séparés par des underscores)
            </p>
            <p class="alert">
            Seules les expressions de type scalaire (bool, int, float et string) et des tableaux contenant uniquement des expressions scalaires sont acceptées pour les constantes.
            </p>
        </div>
        </div>
    </main>

<?php



?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


