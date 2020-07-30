<html>
<head><h2> PROJECT 9B </h2></head>
<body>
<h1> REVERSE STRING || STRING REVERSE </h1>



<?php  

echo "This program creates and array of 5 strings and prints them out in reverse<br><br>";

function wordReverse($str) 
{ 
    $i = strlen($str) - 1; 
    $end = $i + 1; 
    $result = ""; 
      
    while($i >= 0) 
    { 
        if($str[$i] == ' ') 
        { 
            $start = $i + 1; 
            while($start != $end) 
                $result = $result . $str[$start++]; 
              
            $result = $result . ' '; 
              
            $end = $i; 
        } 
        $i--; 
    } 
    $start = 0; 
    while($start != $end) 
        $result = $result . $str[$start++]; 
      
    return $result; 
} 
  
// Driver code 


$str = array("This is fun","How are you","I am good","Embrace the force","Am i yoda");

for($i=0; $i<5; $i++){
echo $str[$i] . " || " ;
echo " " . wordReverse($str[$i]) . "<br>" ; 
}



?> 

</body>
</html>
