<?php
require_once '../models/card.php';
require_once 'deck.php';
require_once 'player.php';

$deck = new Deck();
$deck->shuffle();
$bank = new Bank();
$bank->take($deck->deal(2));
//tire 2 cartes du deck, la banque les prends
while ($bank->getHandValue() < 17) {
    //tant que la banque a moins de 17, elle tire
    $bank->take($deck->deal(1));
}
if ($bank->getHandValue() > 21) {
    echo "La banque perd " . $bank->getHandValue();
} else {
    echo "La banque a " . $bank->getHandValue();
}