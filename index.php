<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First php code</title>
</head>
<body>

<form  method='POST' step="0.001">
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
      <select name="operator">
      <option>NONE</option>
      <option>ADD</option>
      <option>SUBTRACT</option>
      <option>MULTIPLY</option>
      <option>DIVIDE</option>
      </select>
         <br>
         <br> 
           <button name="submit" type="submit" value="submit">CALCULATE</button>
</form>
   <p>THE ANSWER IS - </p>
   
<?php

   function ADD($a , $b){
      return $a + $b;
   
   }
   function SUBTRACT($a , $b){
      return $a - $b;
      
   }
   function MULTIPLY($a , $b){
      return $a * $b;
      
   }
   function DIVIDE($a , $b){
      return $a / $b;
      
   }


    if (isset($_POST['submit'])) {

     $result1 = $_POST['num1'];
     $result2 = $_POST['num2'];
     $operator = $_POST['operator'];

    if ($operator=='NONE'){
      echo "ERROR! YOU NEED TO ADD A METHOD!";
    }
    
    elseif ($operator=='ADD'){
      echo ADD($result1,$result2);
    }
     
    elseif ($operator=='SUBTRACT'){
      echo SUBTRACT($result1,$result2);
    }
     
    elseif ($operator=='MULTIPLY'){
      echo MULTIPLY($result1,$result2);
    }
  
    else {
       echo DIVIDE($result1,$result2);
    }
    }

  
?>



</body>
</html>