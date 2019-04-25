<?php 

$input = array("red", "green", "blue","Brow", "yellow", "black"); 
//array_splice($input[4); // Array ( [0] => yellow )  
//print_r($input); //Array ( [0] => red [1] => green [2] => blue ) 



function array_retira_a_posicao_informada ($array, $pos)
{
    if (array_key_exists ($pos, $array))
        unset ($array[$pos]);
    
    return $array;
}



echo "<br /><br />";
$arr = array_retira_a_posicao_informada($input, 3);
$arr=array_filter($arr);
$arr=array_values($arr);
print_r ($arr);
?>



 ?>