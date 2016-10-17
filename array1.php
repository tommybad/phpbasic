<?php
    
    //$car=  array("Honda","Kawasaki","Suzuki");
    $car=  ["Honda","Kawasaki","Suzuki"]; //php v.4 ขึ้นไป เขียนแบบนี้ได้
    
    print_r($car);
    echo '<hr>';
    
    $count_car=  count($car);
    echo $count_car.'<hr>';
    
    for ($x = 0; $x < $count_car; $x++){
        echo $car[$x].'<br>';        
    }
    

