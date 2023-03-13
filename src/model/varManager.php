<?php

namespace App\Model;

class varManager 
{
    /*  Increment a number in a the name of a given value
    *enter a name and the position of the variable which you wanna increment
    * ex : plate1 to make it plate2, enter plate1 and 6
    *@return modified name
    */
    public function IncrementName ( &$name, int $positionint)
    {
        $lenghttocut = -(strlen($name)-positionint-1);
        
        $i = substr($name, ($positionint-1) ,$lenghttocut );

        $leftpart = substr($name,0, ($lenghttocut+1));
        $rightpart = substr($name,$positionint);
        $i++;
        $name = ${"$leftpart.$i_$rightpart"};

        return $name;
    }

    public function getInttoincrement(string $name) : int
    {
        
        
        return $i;

    }
}