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
            '14' => 'Ace'
        );
    }

    public function randomCard()
    {
        $randomValue = array_rand($this->cardArray());

        return json_encode([
            'card_key' => $randomValue,
            'card_value' => $this->cardArray()[$randomValue]
        ]);
    }

    public function checkIfCardIsHigher($cardValue)
    {
        $nextCard = array_rand($this->cardArray());

        if ($cardValue == $nextCard) {
            return json_encode([
                'result'     => 'equal',
                'card_key'   => $nextCard,
                'card_value' => $this->cardArray()[$nextCard]
            ]);
        } else if ($cardValue < $nextCard) {
            return json_encode([
                'result'     => 'higher',
                'card_key'   => $nextCard,
                'card_value' => $this->cardArray()[$nextCard]
            ]);
        } else {
            return json_encode([
                'result'     => 'lower',
                'card_key'   => $nextCard,
                'card_value' => $this->cardArray()[$nextCard]
            ]);
        }
    }
}