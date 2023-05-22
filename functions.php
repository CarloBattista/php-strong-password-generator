<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Verifica se è stata inviata una richiesta GET
    if (isset($_GET['length']) && !empty($_GET['length'])) {
        $passwordLength = intval($_GET['length']); // Ottiene la lunghezza della password come intero

        // Genera la password casuale
        $password = generateRandomPassword($passwordLength);

        // Stampa la password all'utente
        echo "La tua password generata è: $password";
    } else {
        echo "Errore: specifica la lunghezza della password.";
    }
}

function generateRandomPassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $password = '';

    // Genera la password casuale utilizzando la lunghezza specificata
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, strlen($characters) - 1);
        $password .= $characters[$randomIndex];
    }

    return $password;
}
?>
