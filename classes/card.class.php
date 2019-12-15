<?php

class playing_card{
  public $suit;
  public $face;
  public $value;

  public function __construct($suit,$face,$value){
    $this->face = $face;
    $this->suit =$suit;
    $this->value =$value;
  }

  /*public function __construct($)
<img src="<?php echo 'images/'.$face.$suit.'.png';?>" width="100px" alt="card">*/

  public function get_suit() {
    return $this->suit;
  }
  public function get_face(){
    return $this->face;
  }
  public function get_value(){
    return $this->value;
  }

}


