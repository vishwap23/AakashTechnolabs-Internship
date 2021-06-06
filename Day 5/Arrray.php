<?php      
// basics
    // numerical Array
    // method 1
    $a[0]=10;
    $a[1]=5;
    $a[2]=8;
    $a[3]=1;
    $a[4]=9;
    $a[5]=3;
    echo "<pre>";
    print_r($a);
    echo "</pre>";

    // Method 2
    $a[]=2;
    $a[]=9;
    $a[]=7;
    $a[]=3;
    $a[]=6;
    echo "<pre>";
    print_r($a);
    echo "</pre>";
    
    // Method 3

    $a = array(10,3,'hello',10.5,'k');

    echo "<pre>";
    print_r($a);
    echo "</pre>";
for($i=0;$i<count($a);$i++){
    echo "$i = $a[$i]<br>";
}

echo "<pre>";
var_dump($a);
echo "</pre>";

 echo "Sum of the array : ".array_sum($a);
//  echo "Product of the Array : "array_product($a);
?>

<?php
    // Associative Array
    // Method 1
    $a[0]=10;
    $a['a']= "apple";
    $a['php']="Web Development";
    $a[9] = 9.98;

    echo "<br><br>Method 1";
    echo "<pre>";
    print_r($a);
    echo "</pre>";
    
    $a = array(
        0 => 79,
        's'=>'abcd',
        "queen" => 98,  
    );
        echo "Method 2";
        echo "<pre>";
        print_r($a);
        echo "</pre>";

        foreach($a as $key => $value){
            echo "key = $key Value = $value<br>";
        }
        
?>