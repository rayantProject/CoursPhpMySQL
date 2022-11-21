
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
            Heritage :
        </h1>
        <div>
            <p>
                L'hertiage permet de ne pas etre redondant et d'utiliser les memes propriétes pour deux classes diférentes
                il se fait grace au mots clé <kbd>extend</kbd>
            </p>

            <p>
                <code class="codeBlock">


                            declare(strict_types=1);

                            class User
                            {
                                public const STATUS_ACTIVE = 'active';
                                public const STATUS_INACTIVE = 'inactive';

                                public function __construct(public string $username, public string $status = self::STATUS_ACTIVE)
                                {
                                }

                                public function setStatus(string $status): void
                                {
                                    if (!in_array($status, [self::STATUS_ACTIVE, self::STATUS_INACTIVE])) {
                                        trigger_error(sprintf('Le status %s n\'est pas valide. Les status possibles sont : %s', $status, implode(', ', [self::STATUS_ACTIVE, self::STATUS_INACTIVE])), E_USER_ERROR);
                                    };

                                    $this->status = $status;
                                }

                                public function getStatus(): string
                                {
                                    return $this->status;
                                }
                            }

                            class Admin extends User
                            {
                                // Ajout d'un tableau de roles pour affiner les droits des administrateurs :)
                                public function __construct(public string $username, public array $roles = [], public string $status = self::STATUS_ACTIVE)
                                {
                                }

                                // Méthode d'ajout d'un rôle, puis on supprime les doublons avec array_filter.
                                public function addRole(string $role): void
                                {
                                    $this->roles[] = $role;
                                    $this->roles = array_filter($this->roles);
                                }

                                // Méthode de renvoie des rôles, dans lequel on définit le rôle ADMIN par défaut.
                                public function getRoles(): array
                                {
                                    $roles = $this->roles;
                                    $roles[] = 'ADMIN';

                                    return $roles;
                                }

                                public function setRoles(array $roles): void
                                {
                                    $this->roles = $roles;
                                }
                            }
                </code>

            </p>
            <p>
                L’héritage nous permet de passer les propriétés et méthodes d’une classe “parent” à des classes “enfants”.

                Vous pouvez structurer votre code et éviter la duplication en héritant d’une classe.

                L’héritage s’effectue avec l’usage du mot clé   extends  juste après le nom de la classe à étendre, suivi de la classe dont il faut hériter.
            </p>

                <h2>
                    Accédez aux propriétés de la classe parente
                </h2>
            <p>
                Lorsque vous utilisez l'héritage, depuis l'objet comme depuis la classe, vous pouvez accéder aux propriétés de la classe parente de la même manière qu'avant, avec la flèche   -> , comme vous pouvez le voir à la ligne 22 :
            </p>
            <code class="codeBlock">
                declare(strict_types=1);

                class User
                {
                public const STATUS_ACTIVE = 'active';
                public const STATUS_INACTIVE = 'inactive';

                public function __construct(public string $username, public string $status = self::STATUS_ACTIVE)
                {
                }
                }

                class Admin extends User
                {
                // ...

                public function printStatus()
                {
                // vous pouvez accéder au statut comme si la propriété appartenait à Admin :)
                echo $this->status;
                }
                }

                $admin = new Admin('Lily');
                $admin->printStatus();

            </code>
            <p>
                La façon d’accéder aux propriétés des classes parentes s’effectue avec la flèche <kbd>-></kbd>.

                <br> La façon d’accéder aux méthodes des classes parentes s’effectue également à l’aide de la flèche <kbd>-></kbd>.

                <br> Lorsqu’il s’agit d’une méthode ou d’une propriété statique parente, l’accès s’effectue avec le mot clé parent.

                <br>Vous pouvez ré-écrire une méthode existante dans un enfant, à condition de respecter sa signature.
            </p>
        </div>
        </div>



    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>


