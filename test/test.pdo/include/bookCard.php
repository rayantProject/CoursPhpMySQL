<!-- ici j'ai creer une fonction qui rajoute une nouvelle carte livre -->

<?php


    function bookComponent($tittle, $resume, $pages, $author, $publication, $id)
    {
        echo '<div class="card mt-3 mx-1" style="width: 18rem;">';
        echo '<div class="card-body">';
        echo '    <h5 class="card-title">'.$tittle.'</h5>';
        echo '    <p class="card-text">'.$resume.'</p>';
        echo '</div>';
        echo '<ul class="list-group list-group-flush">';
        echo '    <li class="list-group-item">auteur : '.$author.'</li>';
        echo '    <li class="list-group-item">publication : '.$publication.'</li>';
        echo '    <li class="list-group-item">pages : '.$pages;
        echo '    <li class="list-group-item ">  ';        
        echo '                <button class="btn btn-outline-warning"data-bs-toggle="modal" data-bs-target="#modify-form'.$id.'" >Modifier</button>';
        
        echo '                <button class="btn btn-outline-danger" >supprimer</button>';

        echo '            </li>';
        echo '</ul>';
        echo '</div>';
        
    }


    
    function bookModal($livre)
    {
        echo '                        <div class="modal fade" id="modify-form'.$livre["id_livre"].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">'; 
        echo '                        <div class="modal-dialog">'; 
        echo '                            <div class="modal-content">'; 
        echo '                            <div class="modal-header">'; 
        echo '                                <h1 class="modal-title fs-5" id="staticBackdropLabel">modifier un livre</h1>'; 
        echo '                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>'; 
        echo '                            </div>'; 
        echo '                            <form action="include/modify.php" method="post">'; 
        echo '                            <div class="modal-body">';                      
        echo '                                <div class="mb-3">'; 
        echo '                                    <label class="form-label" for="titre">titre</label>'; 
        echo '                                    <input class="form-control" require type="text" name="titre" id="titre" placeholder="'.$livre["tittle"].'">'; 
        echo '                                    <input type="hidden" value='.$livre["id_livre"].' name="id_livre"  >'; 
        echo '                                </div>'; 
        echo '                                <div class="mb-3">'; 
        echo '                                    <label class="form-label" for="auteur">auteur</label>'; 
        echo '                                    <input class="form-control"  type="text" name="auteur" id="auteur" placeholder="'.$livre["author"].'">'; 
        echo '                                </div>'; 
        echo '                                <div class="mb-3">'; 
        echo '                                    <label class="form-label" for="page">page</label>'; 
        echo '                                    <input class="form-control" type="number" require name="page" id="page" placeholder="'.$livre["pages"].'">'; 
        echo '                                </div>'; 
        echo '                                <div class="mb-3">'; 
        echo '                                    <label class="form-label" for="date">publication</label>'; 
        echo '                                    <input class="form-control" require type="date" name="date" id="date" placeholder="'.$livre["publication"].'">'; 
        echo '                                </div>'; 
        echo '                                <div class="mb-3">'; 
        echo '                                    <label class="form-label" for="sumury">résumé</label>'; 
        echo '                                    <textarea class="form-control" require name="sumury" id="sumury" cols="30" rows="5">'.$livre["sumury"].'</textarea>'; 
        echo '                                </div>         ';      
        echo '                            </div>'; 
        echo '                            <div class="modal-footer">'; 
        echo '                                <button type="button" class="btn btn-white" data-bs-dismiss="modal">fermer</button>'; 
        echo '                                <button type="submit" class="btn btn-dark">Modifier</button>'; 
        echo '                            </div>'; 
        echo '                            </form>'; 
        echo '                            </div>'; 
        echo '                        </div>'; 
        echo '                        </div>'; 
        echo '                        </div>'; 
        echo '                    </div>'; 
    }
?>







<!--  -->