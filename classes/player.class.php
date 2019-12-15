<?php
/**
 * Created by PhpStorm.
 * User: danny
 * Date: 2019-12-12
 * Time: 16:03
 */


class cardPlayer
{
    public $hand = array();
    public $allowMoreCards = true;
    public $name;
    public $cardVisible;
    public $score;

    function __construct($playersName)
    {
        $this->name = $playersName;
    }

    //initially giving two random cards from the deck to the human and computer players
    public function addCardToHand($card)
    {
        array_push($this->hand, $card);
        return $this->hand;
    }

    /**
     * @return array
     */
    public function getHand(): array
    {
        return $this->hand;
    }

    /**
     * @param array $hand
     */
    public function updateHand( $card)
    {
        array_push($this->hand, $card);
    }

    /**
     * @return bool
     */
    public function isAllowMoreCards(): bool
    {
        return $this->allowMoreCards;
    }

    /**
     * @param bool $allowMoreCards
     */
    public function setAllowMoreCards(bool $allowMoreCards): void
    {
        $this->allowMoreCards = $allowMoreCards;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCardVisible()
    {
        return $this->cardVisible;
    }

    /**
     * @param mixed $cardVisible
     */
    public function setCardVisible($cardVisible): void
    {
        $this->cardVisible = $cardVisible;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     */
    public function setScore($score): void
    {
        $this->score = $score;
    }


}





















    /*public function showHand($staticPartOfthePath) {
        foreach ($this->hand as $card) {
            if ($this->cardVisible == true) {
                echo "<img src = " . $card->createImageString($staticPartOfthePath) . ">";
            } else {
                echo "<img src = " . "cards/blanc.jpg" . ">";
                //echo "<img src = " . $card->createImageString($staticPartOfthePath) . ">";
            }
            //make card as a local variable
        }
    }
    public function calculateScoreInHand() {
        $totalScoreinHand = 0;
        foreach ($this->hand as $cardValue) {
            {
                $totalScoreinHand += $cardValue->value;
            }
        }
        return $totalScoreinHand;
    }

}
class Computer extends Player {

    public function __construct($playersName)
    {
        $this->cardVisible = false;
        $this->scoreVisible = false;
        parent::__construct($playersName);
    }
}
class Human extends Player {

    public function __construct($playersName)
    {
        $this->scoreVisible = true;
        $this->cardVisible = true;
        parent::__construct($playersName);
    }

}*/