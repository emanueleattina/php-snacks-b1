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
$age = $_GET['age'];

echo 'incolla sopra: ?name=INSERISCI&email=INSERISCI&age=INSERISCI<br>';

if (strlen($name) > 3 && filter_var($email, FILTER_VALIDATE_EMAIL) && strpos($email, '@') && strpos($email, '.') && is_numeric($age)) {
    echo '<br>name: '.$name;
    echo '<br>email: '.$email;
    echo '<br>age: '.$age;
    echo '<br><br><strong>accesso riuscito!</strong>';
} else {
    echo '<br><strong>accesso negato</strong>';
}

?>