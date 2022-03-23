<?php
//area function
 function getArea($type ='r' ,$length , $width =null){

    $area =null;
    $area_type ='';


    switch ($type) {
        case 'r':
            $area = $length * $width;
            $area_type ='rectangular';
            break;

        case 't':
             $area = 0.5 * $length * $width;
             $area_type ='triangle';
             break;

        case 's':
             $area = $length * $length;
             $area_type ='square';
             break;
                    
         case 'c':
             $area = 3.1416 *($length * $length);
             $area_type ='';
             break;

        default:
            $area = 'undefined';
            $area_type = 'undefined';
            break;
    }


 return "the area is {$area_type} and the area is {$area} <hr>";

}

//age function
 function agecal(string $name, int $year){

    $age = 2022- $year;
     
return "I am {$name} and I am {$age}years old <hr>";


 }
 //BMI
 function getBMI(string $name, int $weight, int $height){
     
    $BMI = $weight / ($height * $height);

    return "the BMI of {$name} is {$BMI}<hr>";
}
 
//CURRENCY_CONVERTER
function curcon(string $type, int $amount){
    $rate =null; 
    


     
    switch ($type) {
        case 'USD':
            $rate = 86.02;
            $BDT = $amount * $rate;
            break;

         case 'CAD':
                $rate = 68.34;
                $BDT = $amount * $rate;
                break;    
        
         case 'POUND':
                 $rate = 113.71;
                 $BDT = $amount * $rate;
                 break;

         case 'EURO':
             $rate = 94.73;
             $BDT = $amount * $rate;
                 break;

         case 'WON':
             $rate = 0.0708091;
             $BDT = $amount * $rate;
             break;
        default:
            $BDT ='undefined';
            break;
    }
 return "{$amount} {$type} = {$BDT}<hr>";
} 
//BOROLEKHA and CHOTOLEKHA
function haterlekha($type ='', $text =''){
    $text_type =null;

    switch ($type) {
        case 'u':
            $text_type ='uppercase';
            break;
        

         case 'l':
            $text_type ='lowercase';
            break;
        default:
            $text_type ='lowercase';
            break;
    }

return "<span style='text-transform:{$text_type}; color:red;'>{$text}</span><hr>";

}
//HEADING
function heading($title =null, $type = 'h1', $align = 'center', $ff = 'impact', $color ='000')
{
return "<${type} style ='text-align:{$align}; front-family:{$ff}'; color:{$color} >{$title}</{$type}><hr>";

}

 
 
 
 
 ?>