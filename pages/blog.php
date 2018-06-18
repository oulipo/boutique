<?php



?>
<div class="container" style="margin-top: 100px;">
    <div class="row">
    <div class="col">


    

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Auteur</th>
      <th scope="col">Date</th>
      <th scope="col">extrait</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include_once("lib/utils.php");
    $liste = get("/wp/v2/posts");
    ?>
    <?php foreach($liste as $post): ?>
        <tr>
            <th scope="row">
                <a href="?page=post&id=<?= $post->id ?>">
                    <?= $post->title->rendered ?>
                </a>
            </th>
            <td><?= $post->author ?></td>
            <td><?= $post->date ?></td>
            <td><?= substr($post->excerpt->rendered, 0, 20) . "..." ?></td>
        </tr>
    <?php endforeach ?>
  </tbody>
</table>

    </div>
    </div>
</div>

