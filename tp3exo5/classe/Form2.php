<?php

    require_once "Form.php";

    class Form2 extends Form{


        public function setCheckbox($label,$nom){
            parent::setText($label,$nom,"checkbox");
            return $this;
        }

        public function setRadioButton($label,$nom,$group){
            $this->form .= "
                <div>
                    <label for='$nom' > $label </label>
                    <input type='radio' id='$nom' value='$nom' name='$group'> 
                </div>  
            ";
            return $this;
        }


    }