<?php
require_once("models/GameState.php");
session_start();
if (isset($_POST['reset'])) {
    unset($_SESSION['game_state']);
}
if (!isset($_SESSION['game_state'])) {
    $state = new GameState("Julien");
    $state->initialDeal();
    $_SESSION['game_state'] = $state;
} else {
    $state = $_SESSION['game_state'];
}
include("views/home.php");