<?php
    include("lib/connexion.php");

    $login = $_POST["pseudo"] ?? "";
    $password = $_POST["motdepasse"] ?? "";

    // $sql = "SELECT * FROM users WHERE login LIKE '$login' AND password LIKE '$password'";
    // $stmt = $pdo->query($sql);

    // 1ere méthode
    $stmt = $pdo->prepare('SELECT * FROM users WHERE login = ? AND password = ?');
    $stmt->execute([$login, $password]);

    // 2eme méthode
    // $stmt = $pdo->prepare('SELECT * FROM users WHERE login = :login AND password = :password');
    // $stmt->execute(['login' => $login, 'password' => $password]);

    $rows = $stmt->fetchAll();

    $connected = (!empty($rows)) ? true : false;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<?php if(!$connected): ?>
    <form method="post">
        <input type="text" name="pseudo" id="login" placeholder="login"><br>
        <input type="password" name="motdepasse" id="password" placeholder="password">
        <button type="submit">Se connecter</button>
    </form>
<?php else: ?>
    <h2>Bonjour, vous êtes connecté !</h2>
<?php endif ?>
</body>
</html>