<?php

require_once './AbstractElement.php';
require_once './ElementInterface.php';
require_once './Paper.php';
require_once './Scissors.php';
require_once './Rock.php';
require_once './Spock.php';
require_once './Lizard.php';
require_once './PcChoice.php';

require_once './Result.php';
require_once './LoseResult.php';
require_once './WinResult.php';
require_once './TieResult.php';


$paper = new Paper();
$rock = new Rock();
$scissors = new Scissors();
$spock = new Spock();
$lizard = new Lizard();

$PcChoice = new PcChoice();


$playerChoice = $_POST['choice'];

$PC = $PcChoice->pcRand();
$pcImage = $PcChoice->pcImage();

$scorePc = 0;
$scorePlayer = 0;


/*
function pcRand()
{
    $paper = new Paper();
    $rock = new Rock();
    $scissors = new Scissors();
    $spock = new Spock();
    $lizard = new Lizard();

    $pc = rand(1, 5);

    if ($pc == 1) {
        return $paper;
    } elseif ($pc == 2) {
        return $rock;
    } elseif ($pc == 3) {
        return $scissors;
    } elseif ($pc == 4) {
        return $spock;
    } else {
        return $lizard;
    }
}




/*function pcImage($x)
{
    $paper = new Paper();
    $rock = new Rock();
    $scissors = new Scissors();
    $spock = new Spock();


    if($this->getRand() == $paper)
    {
        return 'paper.jpg';
    }elseif($x == $spock){
        return 'spock.jpg';
    }elseif($x == $rock){
        return 'rock.jpg';
    }elseif($x == $scissors){
        return 'scissors.jpg';
    }else{
        return 'lizard.jpg';
    }
}
*/




?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>RPSLS</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<div>
    <header>
        <h1>Rock Paper Scissors Lizard Spock </h1>
    </header>
</div>
<div class="score-board">
    <div id="user-label" class="badge">user</div>
    <div id="computer-label" class="badge">comp</div>
    <span id="user-score"><?php echo $scorePlayer ?></span>:<span id="computer-score"><?php echo $scorePc ?></span>
</div>

<div class="pc-player-choices">
    <div class="player-choice" id="player-choice">
        <img src="<?php echo $playerChoice ?>" alt="l" style="width:150px;height:150px">
    </div>
    <div class="pc-choice" id="pc-choice">
        <img src="<?php echo $pcImage?>" alt="l" style="width:150px;height:150px">
    </div>
</div>

<div class="result">
    <p> <?php if ($playerChoice === 'spock.jpg') {
            $result = $spock->beats($PC);
            echo $result->getMessage();
        } elseif ($playerChoice === 'rock.jpg') {

            $result = $spock->beats($PC);
            echo $result->getMessage();
        } elseif
        ($playerChoice === 'lizard.jpg') {

            $result = $lizard->beats($PC);
            echo $result->getMessage();
        } elseif
        ($playerChoice === 'paper.jpg') {

            $result = $paper->beats($PC);
            echo $result->getMessage();

        } elseif
        ($playerChoice === 'scissors.jpg') {

            $result = $scissors->beats($PC);
            echo $result->getMessage();
        } ?></p>
</div>
<form action="/" method="post">

    <div class="choices">
        <div class="choice" id="l">
            <button name="choice" value="lizard.jpg"><img src="lizard.jpg" alt="l" style="width:150px;height:150px">
            </button>
        </div>
        <div class="choice" id="spock">
            <button name="choice" value="spock.jpg"><img src="spock.jpg" alt="spock" style="width:150px;height:150px">
            </button>
        </div>
        <div class="choice" id="p">
            <button name="choice" value="paper.jpg"><img src="paper.jpg" alt="p" style="width:150px;height:150px">
            </button>
        </div>
        <div class="choice" id="s">
            <button name="choice" value="scissors.jpg"><img src="scissors.jpg" alt="s" style="width:150px;height:150px">
            </button>
        </div>
        <div class="choice" id="r">
            <button name="choice" value="rock.jpg"><img src="rock.jpg" alt="r" style="width:150px;height:150px">
            </button>
        </div>
    </div>
</form>
<p id="action-message">Make your move</p>
</html>


