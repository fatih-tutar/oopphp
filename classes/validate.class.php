<?php
class formControl{
    private $errors = array();
    public function control($source, $datas = array()){
        foreach ($datas as $data => $rules) {
            $inputValue = $source[$data];
            foreach ($rules as $rule => $ruleValue) {
                if($rule == "required" && empty($inputValue)){
                    $this->addError("{$data} field can not be left blank.");
                }else if(!empty($inputValue)){
                    switch($rule){
                        case 'min' :
                            if(mb_strlen($inputValue) < $ruleValue){
                                $this->addError("{$data} field is not smaller than {$ruleValue}");
                            }
                            break;
                        case 'max':
                            if (mb_strlen($inputValue) > $ruleValue) {
                                $this->addError("{$data} field is not bigger than {$ruleValue}");
                            }
                            break;
                        case 'email':
                            if(!filter_var($inputValue,FILTER_VALIDATE_EMAIL)){
                                $this->addError("{$data} field must be email address");
                            }
                            break;
                        case 'confirm':
                            if($inputValue != $source[$ruleValue]){
                                $this->addError("{$data} field must be equal to {$ruleValue}");
                            }
                        default:
                            break;
                    }
                }
            }
        }
    }

    private function addError($message){
        $this->errors[] = $message;
    }

    public function printError(){
        if(count($this->errors) != 0){
            foreach($this->errors as $error){
                echo "{$error}<br/>";
            }
        }
    }

    public function isPozitif(){
        if (count($this->errors) == 0) {
            return true;
        } else {
            return false;
        }
    }
}