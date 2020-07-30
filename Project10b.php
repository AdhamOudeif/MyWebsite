<!DOCTYPE html>
<!-- Project 10 b made by ADHAM AND YAHYA-->
<html>
<title> Program 10b </title>
<body>
<h1> Vowel Check Program:</h1>
<form method="post" action="Project10b.php">
   Phrase 1: <input type="text" size="34" name="name1"><br>
   Phrase 2: <input type="text" size="34" name="name2"><br>
   Phrase 3: <input type="text" size="34" name="name3"><br>
   Phrase 4: <input type="text" size="34" name="name4"><br>
   Phrase 5: <input type="text" size="34" name="name5"><br>
   
   <input type="submit">
   <br><br>
</form>

<?php

// define variables and set to empty values
$string1 = $string2 = $string3 = $string4 = $string5 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $string1 = test_input($_POST["name1"]);
   $string2 = test_input($_POST["name2"]);
   $string3 = test_input($_POST["name3"]);
   $string4 = test_input($_POST["name4"]);
   $string5 = test_input($_POST["name5"]);
   
   
   if (empty($string1)||empty($string2)||empty($string3)||empty($string4)||empty($string5)) {
       echo "Need all data to begin";
   } else {
       echo "scanning for vowels..";
   }
   
   $str = array($string1,$string2,$string3,$string4,$string5);
   for($i= 0; $i< 5; $i++){
   echo "<br>There are <strong>".preg_match_all('/[aeiou]/i',$str[$i],$matches)." vowels</strong> in the string <strong>".$str[$i]."</strong>";
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