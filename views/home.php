<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BlackJack</title>
</head>
<body>

<h3>Vos cartes</h3>
<ul class="card_list">
    <?php
    $hand = $state->player->getHand();
    foreach ($hand as $card):
        ?>
        <li><?php echo $card; ?></li>
        <?php
    endforeach;
    ?>
</ul>

<form id="play_form" method="POST" action="./play.php">
    <input type="submit"
           name="player_action"
           value="hit">
    <input type="submit"
           name="player_action"
           value="stand">
</form>
<form method="POST" action="./index.php">
    <input type="submit"
           name="reset"
           value="reset">
</form>
<!-- TODO: Ajax call
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="./js/ajax.js"></script> -->
</body>
</html>