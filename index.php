<?php
require_once "Htmlgenerator.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    seo("Template PHP","deskripsi situs.");
    sbt(); 
    ?>    
</head>
<body>

    <?php
    a("https://google.com/","Google","nofollow");
    ?>

    <?php endbt(); ?>
</body>
</html>