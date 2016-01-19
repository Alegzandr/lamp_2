<?php

class Cards
{
    private $face, $color;

    public function __construct($color, $face)
    {
        $this->face = $face;
        $this->color = $color;
    }

    public function getFace()
    {
        return $this->face;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getValue()
    {
        if (is_int($this->face)) {
            return $this->face;
        } else {
            return 10;
        }
    }

    public function __toString()
    {
        return $this->face . ' de ' . $this->color;
    }
}

class Deck
{
    private $cards;

    public function __construct()
    {
        $this->cards = [];
        $faces = range(1, 10);
        $faces = array_merge($faces, ['Jack', 'Queen', 'King']);
        $colors = ['Heart', 'Club', 'Diamond', 'Spade'];

        foreach ($colors as $color) {
            foreach ($faces as $face) {
                $this->cards[] = new Cards($color, $face);
            }
        }
    }

    public function shuffle()
    {
        shuffle($this->cards);
        return $this;
    }

    public function deal($n = 1)
    {
        $cards = array_splice($this->cards, 0, $n);
        return $cards;
    }
}

$d = new Deck();
list($card) = $d->shuffle()->deal(1);

echo $card;


class Player
{
    private $hand;
    private $nickname;

    public function __construct($name)
    {
        $this->hand = [];
        $this->nickname = $name;
    }

    public function take($cards)
    {
        //TODO
    }

    public function getHandValue()
    {
        //TODO
    }
}

$p = new Player('Julien');

class Bank extends Player
{

}

// Scenario 1

$deck = new Deck();
$deck->shuffle();
$bank = new Bank();

$bank = take($deck->deal(2));

while ($bank->getHandValue() < 17) {
    $bank->take($deck->deal(1));
}

if ($bank->getHandValue() > 21) {
    echo 'La banque perd';
} else {
    echo 'La banque a ' . $bank->getHandValue();
}