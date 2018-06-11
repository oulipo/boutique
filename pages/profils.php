<h1>profils</h1>
<?php
$dir = "./profils/";

// Ouvre un dossier bien connu, et liste tous les fichiers
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            // echo "fichier : $file : type : " . filetype($dir . $file) . "\n";
            echo "<a href=\"index.php?page=fiche&file=$file\">$file</a><br>";
        }
        closedir($dh);
    }
}
?>