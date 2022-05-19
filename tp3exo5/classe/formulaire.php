<?php 

    class Form{

        private $form;

        public function __construct($action,$method,$name)
        {
            $this->form = "
                        <form action='$action'   method='$method' >
                        <fieldset><legend> $name </legend>
                    ";
        }


        public function setText($label,$nom,$type="text"){
            //  $this->form .= 
            $this->form = $this->form . "
                <div>
                    <label for='$nom' > $label </label>
                    <input type='$type' id='$nom' name='$nom'> 
                </div>    
            ";
        }

        public function setSubmit($nom){
            $this->form = $this->form . "                
                <input type='submit' id='$nom' name='$nom' value='$nom' > 
            ";
        }

        public function getForm(){
            return $this->form."</fieldset></form>";
        }

    }