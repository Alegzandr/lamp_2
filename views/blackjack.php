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
        <label for="yes">Tirer une carte</label>
        <input type="radio" name="choice" id="yes" value="yes" checked><br>

        <label for="no">S'arrêter</label>
        <input type="radio" name="choice" id="no" value="no"><br>

        <label for="restart">Recommencer</label>
        <input type="radio" name="choice" id="restart" value="restart"><br>

        <br><input type="submit"><br>
    </form>

    <br>
    <?php
    require_once '../controllers/game.php';
    ?>
</fieldset>
</body>
</html>