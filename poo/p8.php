
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


        <h1>
            Abstraction :
        </h1>
            <div>
                <p>
                    Pour bloquer l'heritage on utilise l'abstraction
                </p>

                <p>
                    <code class="codeBlock">
                        abstract class User
                        {
                        }
                    </code>
                </p>

                <p class="note">
                    La classe n'est pas declarable
                </p>

                <p>

                    <code class="codeBlock">
                        class User
                        {
                        }
                    </code>
                </p>


                <p>
                    Ce qui est pratique avec le mot clé   abstract  qui se situe devant le mot clé class, c’est qu’une fois qu’il est là, on peut aussi l’utiliser devant une méthode de classe ! Cela permet de déclarer la signature de la méthode (visibilité, statique ou non, nom, arguments, et type de retour) comme nécessaire, mais nous n'écrivons pas son comportement.
                </p>

                <p>
                    <code class="codeBlock">
                        abstract class User
                        {
                            __construct(protected string $username, protected string $password){
                            }

                            function showUserInfo(){
                            }
                                return "my user "+$this->username
                            }


                            function showPasswordInfo(): string

                        }
                    </code>
                </p>
                <p>
                    <code class="codeBlock">
                        abstract class UserTest extends User
                        {


                            function showPasswordInfo()
                            }
                                return $this->showUserInfo()+"my password "+$this->password
                            }
                        }

                        }
                    </code>
                </p>
                <p>On peut empeche l'heritage de cette classe avec le mots clé <code>final</code></p>


                <p>
                    <code class="codeBlock">
                        final class UserTest
                        {
                           ...
                        }
                </p>

            </div>
        </div>



    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


