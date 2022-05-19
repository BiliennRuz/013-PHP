<?php 

    class Form{

        protected $form;

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
            return $this;
        }

        public function setSubmit($nom){
            $this->form = $this->form . "                
                <input type='submit' id='$nom' name='$nom' value='$nom' > 
            ";
            return $this;
        }

        public function getForm(){
            return $this->form."</fieldset></form>";
        }

    }