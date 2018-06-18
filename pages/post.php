<?php

include_once("lib/utils.php");
$id = $_GET["id"];
$post = get("/wp/v2/posts/$id");

?>
<div class="container" style="margin-top: 50px;">
<div class="row">
<div class="col">
    <h1><?= $post->title->rendered ?></h1>
    <p><?= $post->content->rendered ?></p>
</div>
</div>
</div>
