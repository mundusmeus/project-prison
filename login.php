<?php
    include_once 'header.php';
?>

<section class="signup-form">
    <h2>Bejelentkezés</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="email" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Jelszó">
        <button type="submit" name="submit">Bejelentkezés</button>
    </form>

    <?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Töltsön ki minden mezőt!</p>";
    }
    else if ($_GET["error"] == "wronglogin") {
        echo "<p>Sikertelen bejelentkezés!</p>";
    }
}
?>

</section>

<?php
    include_once 'footer.php';
?>