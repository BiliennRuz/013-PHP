<?php 

require_once "formulaire.php";

    class Form2 extends Form{

        public function __construct($action,$method,$name)
        {
            parent::__construct($action,$method,$name);
        }

        public function setRadio($label,$nom,$type="radio"){
            //  $this->form .= 
            $this->form = $this->form . 
            "
                <div>
                    <label for='$nom' > $label </label>
                    <input type='$type' id='$nom' name='$nom'> 
                </div>    
            ";
        }

        public function setCheckbox($label,$nom,$type="checkbox"){
            //  $this->form .= 
            $this->form = $this->form . "
                <div>
                    <label for='$nom' > $label </label>
                    <input type='$type' id='$nom' name='$nom'> 
                </div>    
            ";
        }

    }