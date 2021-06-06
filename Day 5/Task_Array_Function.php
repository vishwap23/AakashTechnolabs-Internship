<?php
    $a = array(11,12,13,14,15,'Abc',9,11,87);
    echo "Array a : ";
    echo "<pre>";
    print_r($a);
    echo "</pre>";

    // count --> count no of ele in an array
    echo "Count : ".count($a)."<br><br>";        
    
    // count values --> Count occurnce of the elein an array
    echo "Count values : ";            
    $cnt = array_count_values($a); 
    echo "<pre>";
    print_r($cnt);
    echo "</pre>";

    // sum 
    echo "Sum of the array ele : ".array_sum($a)."<br><br>";
    echo "Sum of the array ele : ".array_sum($cnt)."<br><br>";

    // product
    $arr = [1,2,3,4,5];
    echo "product of the array ele : ".array_product($arr)."<br><br>";

    // reverse
    $rev = array_reverse($a); 
    echo "Reversed array :";
    echo "<pre>";
    print_r($rev);
    echo "</pre>";

    // in_array()
    echo "check Abc present in array a : ".in_array('Abc',$a);

    //array_rand
    echo "Index of the array : ";
    $index = array_rand($a,2);
    echo "<pre>"; 
    print_r($index);
    echo "</pre>"; 

    foreach($index as $key => $value){
        echo "$key --> ".$a[$value]."<br><br>";
    }    

    // array_unique ---> remove all dupliate values from the array

    echo "<pre>";
    print_r(array_unique($a));
    echo "</pre>";

    // array_merge
    echo "<pre>";
    print_r(array_merge($a,$rev));
    echo "</pre>";
    
    // search --> if value exists then returns the key

    echo "is 9 present in arrray : ".array_search(9,$a);

    // range 
    // echo "<pre>";
    // print_r(range(11,20));
    // echo "</pre>";

    // sort
    $arr = array(1,9,0,7,5);
    sort($arr);
    rsort($arr);
    asort($a);
   
    
    // ksort and krsort
    $arr = array(
        1 => 'A',
        0 => 'B',
        9 => 'C',
        4 => 'D',
        3 => 'E',
    );
    ksort($arr);
    krsort($arr);

    // Shuffle
    shuffle($arr);

    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    // array_key_change_case
    $b[0]=10;
    $b['a']= "apple";
    $b['php']="Web Development";
    $b[9] = 9.98;
    // $key = $array_change_key_case($b,$CASE_UPPER);
    // echo "<pre>";
    // print_r($key);
    // echo "</pre>";


    // array_key_exists
    echo "key 1 present in array : ".array_key_exists(1,$a)."<br><br>";

    // array_combine

    echo "<pre>";
    // print_r(array_combine($a,$rev));
    print_r(array_combine($rev,$a));
    echo "</pre>";

    echo end($a);  /** end ele  */

    $name = "ABC";
    $age = 20;
    // $comp = compact($name,$age);

    // compact --> 
    echo "compact array :<pre>";
    print_r(compact("name","age"));
    echo "</pre>";

    // array_flip --> flip key value pair
    echo "array after flip :<pre>";
    print_r(array_flip($arr));
    echo "</pre>";

    // array_diff --> compare values of two array and return the diffrence

    $a1 = array('A','B','C','D');
    $a2 = array('A','O','P','D');

    echo "array diff :<pre>";
    print_r(array_diff($a1,$a2));
    echo "</pre>";

    $a1 = array(0=>'A',1=>'B',2=>'C');
    $a2 = array(0=>'P',1=>'B',2=>'R');

    echo "array intersect :<pre>";
    print_r(array_intersect($a1,$a2));
    echo "</pre>";

    $a1 = array('a'=>'php','b'=>'python','c'=>'java');
    foreach($a1 as $key=>$value){
        echo "$key => $value<br>";
    }

    // array_push

    array_push($a1,'k','l');

    // array_pop()
    array_pop($a1);

    echo "array intersect :<pre>";
    print_r($a1);
    echo "</pre>";

    // explode --> braek string into an array

    $str = "Hello world! This is Explode function.";
    $explode = explode(" ",$str);

    echo "Explode  :<pre>";
    print_r($explode);
    echo "</pre>";

    $implode = implode(" ",$explode);
    echo "Implode : $implode";


