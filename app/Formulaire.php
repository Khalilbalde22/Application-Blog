<?php
namespace App ;

class Formulaire {
    /** @var array
    *variable tableaur
    */

    private $data ;
    private $p='p';

    public function __construct($data = []){
    
        $this->data = $data;
    }

    protected function entourer($html) {
        return "<{$this->p}>.$html.</{$this->p}>";
    }

    public function input($name, $placeholder, $options = []){
     
        $type = isset($options['type']) ? $options['type'] : 'text';
        return $this->entourer('<input type="'.$type.'" name="' . $name .'" value = "'.$this->getValue($name).'" placeholder"'.$placeholder.'"</input>');
    }

    public function getValue($value) {
        if(is_object($this->data)){
            return isset($this->data->$value);
            }
            
        return isset($this->data[0]->$value) ? $this->data[0]->$value : null;

    }

    public function submit(){
        return '<button name = "submit" >envoyer </button>';
    }

}