<?php

include("lib/connexion.php");

function genererFormulaire($table, $dbh) {
    $stmt = $dbh->query("DESCRIBE $table");
    $rows = $stmt->fetchAll();
    print_r($rows);
    $form = "";
    $form .= "<h1>$table</h1>";
    $form .= "<form>";
    $form .= "<input type=\"text\">";
    $form .= "</form>";

    return $form;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <?= genererFormulaire("chansons", $pdo); ?>
    </div>
</body>
</html>