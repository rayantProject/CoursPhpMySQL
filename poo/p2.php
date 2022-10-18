
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
            creer des classes
            
        </h1>
        <div>
            <p>
                <code class="codeBlock">
                class NomDeLaClasse
                    {
                    }
                </code>
            </p>
            <p>
                pour acceder aux propriété de la classe :
                <code class="codeBlock">
                declare(strict_types=1);

                class Pont
                {
                public float $longueur = 0;
                }

                $pont = new Pont;
                $pont->longueur = 263.0;

                var_dump($pont);
                </code>
            </p>
            <p>
                L' intérêt de déclarer nos propriétés, c'est que nous allons pouvoir typer nos propriétés, c’est-à-dire garantir qu'elles contiennent bien la valeur attendue. Ça vous protège d'un mauvais usage de vos classes.
            </p>
            <p class="note">
                <!-- utile  -->
                Le mot clé <code>declare</code> permet d'indiquer à PHP un comportement spécifique pour le fichier dans lequel nous nous trouvons.
            
                <a href="https://www.php.net/manual/fr/control-structures.declare.php">ici pour plus de précition</a>
            </p>
            <p>
                exemple avec les <code>.this</code> 
                <code class="codeBlock">
                declare(strict_types=1);

                class Pont
                {
                public float $longueur;
                public float $largeur;
                
                public function getSurface(): float
                {
                    return $this->longueur * $this->largeur;
                }
                }

                $towerBridge = new Pont;
                $towerBridge->longueur = 286.0;
                $towerBridge->largeur = 15.0;

                $manhattanBridge = new Pont;
                $manhattanBridge->longueur = 20 89.0;
                $manhattanBridge->largeur = 36.6;

                $towerBridgeSurface = $towerBridge->getSurface();
                $manhattanBridgeSurface = $manhattanBridge->getSurface();

                var_dump($towerBridgeSurface);
                var_dump($manhattanBridgeSurface);
                </code>
            </p>

            <h2>La gestion public/private</h2>

            <p>

                <code class="codeBlock">

                    declare(strict_types=1);

                    class Pont
                    {
                    private string $unite = 'm²';
                    
                    private float $longueur;
                    private float $largeur;
                    
                    public function setLongueur(float $longueur): void
                    {
                        if ($longueur < 0) {
                            trigger_error(
                                'La longueur est trop courte. (min 1)',
                                E_USER_ERROR
                            );
                        }
                        
                        $this->longueur = $longueur;
                    }
                    }

                    $towerBridge = new Pont;
                    $towerBridge->setLongueur(286.0);
                    $towerBridge->setLongueur(-286.0);
                </code>

            </p>
            <p>
            Vous réduisez la complexité d’utilisation des classes en privatisant les méthodes et les propriétés avecprivate.

            Nous pouvons appliquer le principe d’encapsulation, en utilisant des getters et des setters, permettant d’accéder aux propriétés et de les modifier en s’assurant de garder des valeurs cohérentes.

            En réduisant la complexité, vous réduisez le risque d’erreur.
            </p>
        </div>
        </div>
    </main>

<?php



?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


