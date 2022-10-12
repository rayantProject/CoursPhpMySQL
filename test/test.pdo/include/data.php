

<?php 
    // 
    $requestTest = $mysqlConnection->prepare("SELECT * FROM `livre`");

    $requestTest->execute();

    $livres = $requestTest->fetchAll();


    // 

    // function InsertRequest($titre, $nombre_Page, $resume, $publication, $auteur)
    // {
    //     return "INSERT INTO `testbaselivre`(`titre`, `nombre_Page`, `resume`, `publication`, `auteur`) VALUES ($titre, $nombre_Page, $resume, $publication, $auteur)";
    // }














?>