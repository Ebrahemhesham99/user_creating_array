<?php 

if(isset($_POST['submitted'])){
   $num_keys = $_POST["num_keys"];
    $i=1;
    $arr = [];
    while($i<=$num_keys){
        array_push($arr, $_POST["key_val".$i]);
        $i++;
    }
    
    function calc_sum(...$args):int{
        $sum = 0;
        foreach($args as $key){
            $sum+=$key; 
        }
        return $sum;
    }
    echo calc_sum(...$arr);
}
?> 