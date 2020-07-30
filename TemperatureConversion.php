<!DOCTYPE html>
<!--proj10a ADHAM OUDEIF AND YAHYA-->
<html>
<title> Project 10 A</title>
<body>
<h1> F to C Temperature conversion program: </h1>
<p> This program Generates 5 random numbers in Fahrenheit and will convert them to celcius</p>
<p> How many numbers would you like to convert?(min of 5) </p>
<form method="post" action="Project10a.php">
   Enter Amount : <input type="number" min="5" name="amt"><br>
   
   <input type="submit">
   <br><br>
</form>

<?php

// define variables and set to empty values
$amt= "";

function getNum() {
     return rand(-50,120);
  }
$pet = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $amt = test_input($_POST["amt"]);
   
   for ($i = 0; $i < $amt; $i++){
    $pet[$i] = getNum();
}
   
   for ($i = 0; $i < $amt; $i++){
    if ($i == ($amt - 1))
       echo $pet[$i];
    else
       echo $pet[$i].", ";
       }
       
       echo "<br><br>";
       
   
   if (empty($amt)) {
       echo "Need all data to begin";
   }
   else if($amt < 5){
   	echo "<br> Hey I said minimum of 5 you jerk!!!!";
   	} else {
       echo "Converting Farenheit to Celcies...";
   }
   
   


for ($j = 0; $j<$amt; $j++){
	
       $Cel="";
       
    $Cel = (($pet[$j]) - 32) * 5 / 9;
        
    
 echo "<br> Conversion of  " .  ($pet[$j]+$j) .  " Fahrenheit is " . $Cel . " Celcius";
 }
 
 
 }



function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>

</body>
</html>
