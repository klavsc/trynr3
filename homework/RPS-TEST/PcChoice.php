<?php

require_once 'Rock.php';
require_once 'Paper.php';
require_once 'Spock.php';
require_once 'Scissors.php';
require_once 'Lizard.php';

class PcChoice
{


    public function getRandom()
    {
        return rand(1,5);
    }

    public function pcRand()
    {
        $paper = new Paper();
        $rock = new Rock();
        $scissors = new Scissors();
        $spock = new Spock();
        $lizard = new Lizard();



        if ($this->getRandom() == 1) {
            return $paper;
        } elseif ($this->getRandom() == 2) {
            return $rock;
        } elseif ($this->getRandom() == 3) {
            return $scissors;
        } elseif ($this->getRandom() == 4) {
            return $spock;
        } else {
            return $lizard;
        }
    }

    function pcImage()
    {
        $paper = new Paper();
        $rock = new Rock();
        $scissors = new Scissors();
        $spock = new Spock();


        if($this->getRandom() == $paper)
        {
            return 'paper.jpg';
        }elseif($this->getRandom() == $spock){
            return 'spock.jpg';
        }elseif($this->getRandom()== $rock){
            return 'rock.jpg';
        }elseif($this->getRandom() == $scissors){
            return 'scissors.jpg';
        }else{
            return 'lizard.jpg';
        }
    }

}
