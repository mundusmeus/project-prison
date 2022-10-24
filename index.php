<?php
    include_once 'header.php';
?>

<section class="index-intro">
    <?php
        if (isset($_SESSION["useremail"])){
            echo "<p>Bejelenzketve: " . $_SESSION["username"] . "</p>";
        }
    ?>
    <h2>Üdvözöljük a Székesfehérvári Fogház és Korrekciós Központ weboldalán!</h2>
    <p>A szabályszegők büntetésének és rehabilitációjának radikálisan új megközelítésével esélyt teremtünk a fogvatartottak és a társadalom együttműködésére
        és a közös alapokon nyúgvó fejlődésre mind materiális, mind szellemi értelemben.</p>
</section>
<p>Ismerje meg intézményünk működését,</p>
<?php
    include_once 'footer.php';
?>