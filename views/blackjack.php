<?php
if (isset($_POST['choice'])) {
    header('Location: ' . $_SERVER['REQUEST_URI']);
    exit;
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Blackjack PHP</title>
</head>
<body>
<fieldset>
    <legend>Blackjack</legend>
    <form method="POST" name="game">
        <label for="choice-y">Tirer une carte</label>
        <input type="radio" name="choice" id="choice-y" value="yes" checked><br>

        <label for="choice-y">S'arrêter</label>
        <input type="radio" name="choice" id="choice-n" value="no"><br>

        <br><input type="submit" value="Jouer"><br>
    </form>

    <br>
    <?php
    require_once '../controllers/game.php';
    ?>
</fieldset>
</body>
</html>