<?php

require_once "classes/card.class.php";

    function createDeck() {

        $faces =["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];
        $suits = ["D", "H", "C", "S"];
        $deck = [];

        foreach ($faces as $face) {
            foreach ($suits as $suit) {
                $card = new playing_card($face, $suit, getValues($face));
                array_push($deck, $card);
            }
        }
        return $deck;
    }

    function getValues($face)
    {
        switch ($face) {
            case "A" :
                return 11;
            case "2" :
                return 2;
            case "3" :
                return 3;
            case "4" :
                return 4;
            case "5" :
                return 5;
            case "6" :
                return 6;
            case "7" :
                return 7;
            case "8" :
                return 8;
            case "9" :
                return 9;
            case "10" :
                return 10;
            case "J" :
                return 10;
            case "Q" :
                return 10;
            case "K" :
                return 10;
        }
    }


?>

