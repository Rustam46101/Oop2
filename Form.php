<?php

namespace App\Form;

class Form
{
    public $inputvalue;
    public $passvalue;

    /*public function __construct($intype,$inval,$pasval,$subval,$placeh,$textarea,$act,$meth)
    {
        $this->inputtype=$intype;
        $this->inputvalue=$inval;
        $this->passvalue=$pasval;
        $this->submitvalue=$subval;
        $this->placeholder=$placeh;
        $this->textareavalue=$textarea;
        $this->action=$act;
        $this->method=$meth;

    }*/

    private function convertArrayToString($node, $array)
    {
        $str = "<$node ";
        foreach ( $array as $key=>$value ) {

            $str .= "$key='$value'";

        }
        $str .= '>';
        return $str;
    }
    function input($array)
    {
        echo self::convertArrayToString('input', $array);
        if(empty($array)){
            $form1=new SmartForm();
            echo self::convertArrayToString('input',$form1->inputvalue);

        }
    }
    function summit($array)
    {
        echo self::convertArrayToString('input',$array);
    }
    function password($array)
    {
        echo self::convertArrayToString('input',$array);

    }
    function textarea($array)
    {
        echo self::convertArrayToString('textarea',$array);
    }
    function open($array)
    {
        echo self::convertArrayToString('form',$array);
    }
    function close()
    {
        echo '</form>';
    }
}

?>
