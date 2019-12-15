<?php

require_once "classes/player.class.php";

function createPlayer()
{
    $player_Array = ["Dealer", "Player1", "Player2", "Player3", "Player4"];
    $playerlist =[];


    for ($i = 0; $i < 2; $i++) {
        $player = new cardPlayer($player_Array[$i]);
        array_push($playerlist, $player);
    }
    return $playerlist;
}


?>