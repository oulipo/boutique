<?php
$stmt = $pdo->prepare("SELECT * FROM catalogue");
$stmt->execute();
$rows = $stmt->fetchAll();
?>
<h1>catalogue</h1>
<div class="container">
<div class="row">
<div class="col">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Durée</th>
      <th scope="col">Album</th>
      <th scope="col">Prix</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($rows as $row): ?>
        <tr>
        <th scope="row"><?= $row["id"] ?></th>
        <td><?= $row["titre"] ?></td>
        <td><?= $row["duree"] ?></td>
        <td><?= $row["album_titre"] ?></td>
        <td><?= $row["prix"] ?></td>
        <td><a href="index.php?page=ajout_panier&id=<?= $row["id"] ?>&titre=<?= $row["titre"] ?>&type=chanson&prix=<?= $row["prix"] ?>">ajouter au panier</a></td>
        <td>détail</td>
    </tr>
<?php endforeach ?>
</tbody>
</table>
</div></div></div>