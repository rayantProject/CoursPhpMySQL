<?php

$condition = true; 

if ($condition) {
    echo"la condtion est vrai";
}

if ($condition) :
    echo"forme deux de la condition est vrai";
endif;

// operateu rtertiaire 
$reponse = ($condition) ? "oui" : "non" ;