<?php
    include_once 'header.php';
?>

<section class="index-intro">
    <?php
        if (isset($_SESSION["useremail"])){
            echo "<p>Üdvözöljük " . $_SESSION["username"] . "!</p>";
        }
    ?>
    <h1>This is an introduction</h1>
    <p>Here is an important paragraph that explains the purpose of the website</p>
</section>

<?php
    include_once 'footer.php';
?>