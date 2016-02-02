<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Blackjack PHP</title>
</head>
<body>
<fieldset>
    <legend>Blackjack</legend>
    <form method="POST">
        <input type="radio" name="choice" value="yes" checked="checked">
        <input type="submit" value="ok">
    </form>

    <?php
    require_once '../controllers/game.php';
    ?>
</fieldset>
</body>
</html>