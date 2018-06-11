<h1>fiche</h1>
<?php
$fiche = "";
$handle = @fopen("./profils/" . $_GET["file"], "r");
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        //echo $buffer;
        $tmp = explode("=", $buffer);
        $fiche .= "<p>" . $tmp[0] . " : " . $tmp[1] . "</p>";
    }
    if (!feof($handle)) {
        //echo "Erreur: fgets() a échoué\n";
    }
    fclose($handle);
}
?>
<?= $fiche ?>