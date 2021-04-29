<?php

// passare come parametri GET name, email ed age
// verificare:
    // name sia > 3 caratteri
    // email contenga un . e una @
    // age sia un numero
// se è tutto okay stampare "Accesso riuscito"
// altrimenti stampare "Accesso negato"

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age '];

if (filter_var($email, FILTER_VALIDATE_EMAIL) && strpos($email, '@') && strpos($email, '.')) {
    echo 'seue';
} else {
    echo 'non seue';
}

?>