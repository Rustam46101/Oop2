<?php
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 10.03.2019
 * Time: 23:29
 */

namespace App\Form;


class SmartForm extends Form
{



public function __construct($a,$b)
{
if($a=='value')
{
    $this->inputvalue=$b;
}
else if($a=='password')
{
    $this->passvalue=$b;
}
}



}