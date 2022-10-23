<?php
    include_once 'header.php';
?>

<section class="signup-form">
    <h2>Regisztráció</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Név">
        <input type="text" name="email" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Jelszó">
        <input type="password" name="pwdrepeat" placeholder="Jelszó újra">
        <button type="submit" name="submit">Regisztráció</button>
    </form>

<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Töltsön ki minden mezőt!</p>";
    }
    else if ($_GET["error"] == "invalidemail") {
        echo "<p>E-mail cím nem megfelelő!</p>";
    }
    else if ($_GET["error"] == "pwdsdontmatch") {
        echo "<p>A jelszavak nem egyeznek!</p>";
    }
    else if ($_GET["error"] == "emailtaken") {
        echo "<p>Már létezik regisztráció ezzel az e-mail címmel!</p>";
    }
    else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Váratlan hiba, kérjük próbálja újra!</p>";
    }
    else if ($_GET["error"] == "none") {
        echo "<p>Sikeres regisztráció!</p>";
    }
}
?>
</section>


<?php
    include_once 'footer.php';
?>