<?php

namespace App\LegalZoom;


class Cards
{
    public function cardArray()
    {
        return array(
            '1'  => 1,
            '2'  => 2,
            '3'  => 3,
            '4'  => 4,
            '5'  => 5,
            '6'  => 6,
            '7'  => 7,
            '8'  => 8,
            '9'  => 9,
            '10' => 10,
            '11' => 'Jack',
            '12' => 'Queen',
            '13' => 'King',
        );
    }

    public function randomCard()
    {
        return array_rand($this->cardArray());
    }

    public function checkIfCardIsHigher($cardValue)
    {
        $nextCard = $this->randomCard();
        if ($cardValue == $nextCard) {
            return 'Same';
        } else if ($cardValue < $nextCard) {
            return 'Lower';
        } else {
            return 'Higher';
        }
    }
}