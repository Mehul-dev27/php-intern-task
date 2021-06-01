<?php

$person = array('name' => 'Maria',
                'age' => 27,
                'hasDrivingLicence' => true);

foreach ($person as $key => $value){
    $result = $value == 1 ? "YES" : "$value";
    echo "$key => $result<br>";

    // if($value == 1) {
    //     echo " => Yes";
    // }else {
    //     echo " => $value<br>";
    // }
    
}



?>