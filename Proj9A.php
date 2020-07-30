<!DOCTYPE html>


<html>
<head><h2> PROJECT 9A </h2></head>
<body>

  <h1>Sum of Digits</h1>
 
  <?php
 
  echo "This program will generate 5 random numbers between 100 and 100000 and will sum its digits. For Example: </p>
Number 87301 has 19 as its sum<br><br>now our demonstration<br><br>";

function getNum() {
     return rand(100,100000);
  }

$pet = [];
$n;



for ($i = 0; $i < 5; $i++){
    $pet[$i] = getNum();
}
for ($i = 0; $i < 5; $i++){
    if ($i == 4)
       echo $pet[$i];
    else
       echo $pet[$i].", ";
       }
       
       
for ($j=0; $j<5; $j++){
	
       $sum = 0;
       while($pet[$j] > 0)
        {
            $n = $pet[$j] % 10;
            $sum = $sum + $n;
            $pet[$j] = $pet[$j] / 10;
        }
    
 echo "<br> Sum of digits of number " .  ($pet[$j]+$j) .  " is " . $sum;
 
 
 }

  
       

?>

</body>
</html>