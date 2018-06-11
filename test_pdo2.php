<?php

include("lib/connexion.php");

// INSERT
$pdo->prepare('INSERT INTO users (login, password, email, created) VALUES (?,?,?,?)')->execute(['laudesj', '123456', 'laudesj@gmail.com', '2018-06-07']);

// UPDATE
// faire un update de l'id 1 : mettre son login = maldoror

// DELETE
// faire un delete de tous les enregistrements sauf id 1 et id 2