
<?php
/**
 * Created by Danny
 * Date: 2019-12-12
 * Time: 10:07
 */

require 'create_deck.php';
require 'create_players.php';
require_once "classes/card.class.php";

session_start();

function create_game(){

  if ( !isset($_POST['surrender']) ){
      if ( !isset($_POST['hit'])){
          if( !isset($_POST['stand'])){
              $deck = createDeck();
              shuffle($deck);
              $_SESSION['deck']= $deck;
              $_SESSION['players'] = createPlayer();
          }
      }
  }
  $deck = $_SESSION['deck'];
  $players = $_SESSION['players'];
  $dealer = $players[0];
  $player = $players[1];
  cards_for_dealer($deck, $dealer);
  cards_for_player($deck, $player);
  calculate_score_player($players, 1);
}

function cards_for_dealer($deck,$dealer){
  $i= 1;
  if( !isset($_POST['surrender'])){
      if (!isset($_POST['stand'])) {
        $dealer->updateHand($deck[$i]);
      }
  }
  $f = $deck[$i]->get_face();
  $s = $deck[$i]->get_suit();
  ?>
  <div class="col-12">
    <p class="text-warning"> <?php echo $dealer->getName();?></p>
    <img src="<?php echo 'images/' . $s . $f . '.png'; ?>" class="mb-2 px-2" width="125px" alt="card">

    <?php
    $i +=2;
    if(!isset($_POST['surrender'])) {
        if (!isset($_POST['stand'])) {
            $dealer->updateHand($deck[$i]);
        }
    }
    $f = $deck[$i]->get_face();
    $s = $deck[$i]->get_suit();

    if(!isset($_POST['surrender'])){
        if(!isset($_POST['stand'])){?>
          <img src="<?php echo 'images/red_back.png';?>" class="mb-2 px-2" width="125px" alt="card">
          <p class =""><?php echo "score: ?" ?></p>
    <?php }
    }
    else{ ?>
      <img src="<?php echo 'images/' . $s . $f . '.png'; ?>" class="mb-2 px-2" width="125px" alt="card">
        <?php $players = $_SESSION['players'];
        calculate_score_player($players, 0);
    }?>

  <div>
  <?php
}

function cards_for_player($deck,$player){
    $i= 0;
    if(!isset($_POST['surrender'])) {
        if ( !isset($_POST['hit'])){
            if ( !isset($POST['stand'])){
                $player->updateHand($deck[$i]);
            }
        }
    }
    $f = $deck[$i]->get_face();
    $s = $deck[$i]->get_suit();
    ?>
    <div class="col-12">
      <p class="text-warning"> <?php echo $player->getName();?></p>
      <img src="<?php echo 'images/' . $s . $f . '.png'; ?>" class="mb-2 px-2" width="125px" alt="card">
        <?php
        $i +=2;
        if(!isset($_POST['surrender'])) {
            if ( !isset($_POST['hit'])){
                if ( !isset($POST['stand'])){
                $player->updateHand($deck[$i]);
                }
            }
        }
        $f = $deck[$i]->get_face();
        $s = $deck[$i]->get_suit();
        ?>
      <img src="<?php echo 'images/' . $s . $f . '.png'; ?>" class="mb-2 px-2" width="125px" alt="card">
      <?php
      if ( (isset($_POST['hit']) )|| ( isset($_POST['hit']) && (isset($_POST['surrender']))) || ( isset($_POST['hit']) && (isset($_POST['stand']))) ){
        $i +=1;
        add_card_to_player($deck, $player, $i);
      }
      //calculate_score_player($player);?>
    <div>
<?php
}

function calculate_score_player($players,$j){
    $sum = 0;
    for ($i=0; $i<count($players[$j]->hand); $i++){
        //var_dump(($players[1]->hand));
        //var_dump(count($players[1]->hand));
        if (($players[$j]->getHand()[$i]->get_Value() === 11) && ($sum > 10)){
          $sum += 1;
          $_SESSION['sum']=$sum;
        }
        else {
            $sum += $players[$j]->getHand()[$i]->get_Value();
            $_SESSION['sum']=$sum;
        }
    }
    ?><p class =""><?php echo "score: ".$sum; ?></p></div><?php
}

function add_card_to_player($deck, $player, $i){
    $f = $deck[$i]->get_face();
    $s = $deck[$i]->get_suit();
    ?>
    <img src="<?php echo 'images/' . $s . $f . '.png'; ?>" class="mb-2 px-2" width="125px" alt="card">
      <?php
        if( !isset($_POST['stand'])){
            $player->updateHand($deck[$i]);
        }
}


