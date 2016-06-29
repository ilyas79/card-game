<?php

namespace App\Http\Controllers;

use App\LegalZoom\Cards;
use Illuminate\Http\Request;

use App\Http\Requests;

class CardController extends Controller
{
    public function randomCard()
    {
        $cards = new Cards();
        return $cards->randomCard();
    }
    
    public function checkCard(Request $request)
    {
        $currentCard = $request->get('card');

        $cards = new Cards();
        return $cards->checkIfCardIsHigher($currentCard);
    }
}
