
<?php
// connexion à la base de données
include("lib/connexion.php");

$q = $_GET["q"] ?? "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test pdo</title>
</head>
<body>
    <div>
    <?php
    // SELECT
        $sql = "SELECT * FROM users WHERE login LIKE '%$q%' OR email LIKE '%$q%'";
        $stmt = $pdo->query($sql);
        // print_r($stmt);
        // while($row = $stmt->fetch()) {
        //     echo $row["pseudo"] . " " . $row["password"] . "<br>";
        // }
        $rows = $stmt->fetchAll();
        print_r($rows);
    ?>
            <table border="1">
                <tr><th>id</th><th>login</th><th>email</th><th>created</th></tr>
                <?php foreach($rows as $row): ?>
                <tr>
                    <td><?= $row["id"]?></td>
                    <td><?= $row["login"]?></td>
                    <td><?= $row["email"]?></td>
                    <td><?= $row["created"]?></td>
                </tr>
                <?php endforeach ?>
            </table>

    </div>
</body>
</html>
