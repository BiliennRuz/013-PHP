<?php

class Form {

    private $text;
    private $submit;
    private $form;

    public function __constrct()
    {
        $this->form = '
            <form action="" method="post">
                <fieldset>
                    <div class="mb-3">
                        <label for="{$this->text}" class="form-label">{$this->text}</label>
                        <textarea class="form-control" name="{$this->text}" rows="3"></textarea>
                    </div>
                    <button type="{$this->submit}" class="btn btn-secondary" name="{$this->submit}">{$this->submit}</button>
                </fieldset>
            </form>
            '; 
    }

    
    public function getForm() {
        return $this->form;
    }


    /**
     * Set the value of text
     *
     * @return  self
     */ 
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Set the value of submit
     *
     * @return  self
     */ 
    public function setSubmit($submit)
    {
        $this->submit = $submit;

        return $this;
    }
}