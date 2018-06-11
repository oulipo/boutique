<?php
include("traitement_inscription.php");
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Inscription</h1>
            <?php if(!empty($erreurs)): ?>
            <div style="border:1px solid red;">
                <ul>
                    <?php foreach ($erreurs as $key => $value): ?>
                    <?php if(is_array($value)): ?>
                    <li><?= $key ?></li>
                    <ul>
                        <?php foreach ($value as $err): ?>
                        <li><?= $err ?></li>
                        <?php endforeach ?>
                    </ul>
                <?php  else: ?>
                    <li><?= "$key : $value" ?></li>
                    <?php endif ?>
                    <?php endforeach ?>
                </ul>
            </div>
            <?php endif ?>

            <!-- faire ensemble la vérification des erreurs sauf file -->
            <!-- afficher la liste des erreurs (et sous-erreurs...) ou ok -->

            <!-- intégrer le code de traitement dans inscription.php -->
            <!-- mettre la liste des erreurs dans une div spéciale -->
            <!-- include et require -->
            <!-- mettre les erreurs en regard des champs du formulaire -->

            <!-- mettres les pages dans un répertoire pages/ -->
            <!-- faire faire login sur le même modèle -->

            <form method="POST">
                <input type="hidden" name="page" value="inscription">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" value="<?= (isset($nom)) ? $nom : "" ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom" value="<?= (isset($prenom)) ? $prenom : "" ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="date" class="form-control" name="naissance" id="naissance" placeholder="Date de naissance" value="<?= (isset($naissance)) ? $naissance : "" ?>">
                    </div>
                </div>
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
                    <div class="form-group col-md-4">
                        <input
                            type="password"
                            class="form-control" name="confirmation"
                            id="confirmation" value="<?= (isset($confirmation)) ? $confirmation : "" ?>"
                            placeholder="Confirmation password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= (isset($email)) ? $email : "" ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name ="adresse" id="adresse" placeholder="Adresse" value="<?= (isset($adresse)) ? $adresse : "" ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="cp" id="cp" placeholder="Code postal" value="<?= (isset($cp)) ? $cp : "" ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="ville" id="ville" placeholder="Ville" value="<?= (isset($ville)) ? $ville : "" ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="tel" id="tel" placeholder="Téléphone" value="<?= (isset($tel)) ? $tel : "" ?>">
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="S'inscrire">
            </form>
        </div>
    </div>
</div>