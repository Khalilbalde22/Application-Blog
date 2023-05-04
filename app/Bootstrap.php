<?php
namespace App ;

class Bootstrap extends Formulaire{

    private function row($contenu){
        return '<div class = "row" style="margin-left:400px;"> <div class="col-md-6" >'.$contenu.'</div></div>';
    }

    public function entourer($html){
        return '<div class="form-control" >'.$html.'</div>';
    }

    public function input($name, $placeholder, $options =[]){

        $type = isset($options['type']) ? $options['type'] : 'text';

        $label = '<label>'.$name.'</label> ';
        if($type === 'textarea'){
            $input = '<textarea name="'.$name.'" class="form-control">'.$this->getValue($name).'</textarea>';
        }else{
            $input = '<input type="'.$type.'" name="'.$name.'" value = "'.$this->getValue($name).'" class="form-control" </input>';
        }
        
        return $this->row($label.$input);
    }
    

    public function select($name, $input, $options){
      
        // var_dump($options);
        $label = '<label>'.$name.'</label> ';
        $input = '<select class = "form-control col-md-6" style="margin-left:400px; margin-top:10px;" name="'.$name.'">';
            foreach($options as $k => $v) {
                $attributs = '';
                if($k === $this->getValue($name) ){
                    $attributs = 'selected';
                }
                $input.= "<option value='$k'$attributs>$v</option>" ;
            }
        $input.= '</select>' ;

        return $input ;
         
    }

    public function submit(){
    
        return '<button class = "btn btn-primary" name = "submit" style="margin-left:500px; margin-top:5px;margin-bottom:20px; "> envoyer </button>';
    
    }

}