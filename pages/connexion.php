<?php
    $login = $_POST["login"] ?? "";
    $password = $_POST["password"] ?? "";
    
    if(!empty($login)) {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE login LIKE ?");
        $stmt->execute([$login]);
        $row = $stmt->fetch();
        $hash = $row["password"];
        if(password_verify($password, $hash)) {
            $_SESSION["utilisateur"] = $login;
            header("Location: http://localhost:8888/boutique/?page=accueil");
        }
    }
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Connexion</h1>
            
            <form method="POST">
                <input type="hidden" name="page" value="connexion">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="login" id="login" value="<?= (isset($login)) ? $login : "" ?>"placeholder="Login">
                    </div>
                    <div class="form-group col-md-4">
                        <input
                            type="password"
                            class="form-control" name="password"
                            id="password" value="<?= (isset($password)) ? $password : "" ?>" placeholder="Password">
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="S'inscrire">
            </form>
        </div>
    </div>
</div>