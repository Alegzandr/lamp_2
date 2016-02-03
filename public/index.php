<?php

require_once("../models/GameState.php");
session_start();


if(!isset($_SESSION['game_state'])){
  $state =  new GameState("Julien");
  $_SESSION['game_state'] = $state;
}else{
  $state = $_SESSION['game_state'];
}

include("../views/home.php");
