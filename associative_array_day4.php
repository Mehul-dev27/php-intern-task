<?php


//Method 1  
$a[0] = 10;
$a['A'] ="Venkey";
$a['php'] = "Web Devlopment";
$a['K'] = "Rao";
$a[2] = "Two";
$a[50] = 50.50;

// Method 2
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

//Method 3
 $a = array(10,"Venkey","Web Devlopment","Rao","Two",50.50);
 
 echo $a[3];

for($i=0;$i<count($a);$i++)
{
    echo "<br/>".$a[$i];
}    
    
$sum = array_sum($a);
echo $sum;
echo"<pre>";
print_r($a);
 
var_dump($a);
echo"<pre>";



?>
