
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/css/style.css">²
    <title>page1</title>
</head>
<body>
    <main>
        <div class="container-fluid mx-auto" style="width: 80%;">


        <h1>
             utiliser une methode heritage :
        </h1>


            <div>
                <h2>Accédez aux propriétés de la classe parente</h2>
                <div>
                    <code class="codeBlock">
                        Class Mother {

                        __construct(protected string $property) {
                        }
                        }

                    </code>
                    <p>
                        On utilise le <code>$this</code> pour acceder au parameter de maman
                    </p>
                    <div>
                        <code class="codeBlock">
                            Class Child {

                            function getProperty() {
                            return $this->property;
                            }
                            }
                        </code>
                    </div>
                    <p class="note mt-2">
                        C'est la meme avec les <code>  static  </code>s
                    </p>


                    <p>
                        Pouc acceder faire reference à la classe parente, le nouveau mot clé <code>Parent</code> . Il permet de faire référence à une classe parente.
                    </p>

                    <p><code class="codeBlock">

                            Class Parent {

                            __construct(protected string $property) {}

                            }
                        </code>
                    </p>
                    <p>
                        <code class="codeBlock">

                            Class Child extends Parent {

                                function getProperty() {

                                    parent::property;

                                }

                            }

                            }
                        </code>
                    </p>
                </div>




                <div>
                    <h2>Acceder au methode del a classe parente</h2>
                   <p>
                       <code class="codeBlock">
                           Class Mother {

                           __construct(protected string $property) {
                           }
                           }

                           function showProperty() {

                            return "my property "+$this->property;
                            }

                       </code>
                   </p>
                    <p>
                        on utilise le <code>this</code>
                    </p>
                    <p>
                        <code class="codeBlock">
                            Class Child  extends Mother{

                            function anotherShowProperty() {

                                $this->showProperty();

                            }
                            }

                        </code>
                    </p>
                    <p>
                        On peut appliquer us surcharge de methode grace à <code>parent</code>
                    </p>

                    <p>
                        <code class="codeBlock">
                            Class Mother {

                            __construct(protected string $property) {
                            }
                            }

                            function showProperty() {

                            return "my property "+$this->property;
                            }

                        </code>
                    </p>
                    <p>
                        on utilise le <code>this</code>
                    </p>
                    <p>
                        <code class="codeBlock">
                            Class Child  extends Mother{

                            function ShowProperty() {

                            return "from my new class "+$this->showProperty();

                            }
                            }

                        </code>
                    </p>


                </div>
            </div>

        </div>



    </main
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


