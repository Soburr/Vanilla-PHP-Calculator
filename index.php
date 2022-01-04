<?php

$result = '';
$is_submitted = false;

function ADD($a, $b)
{
   return $a + $b;
}
function SUBTRACT($a, $b)
{
   return $a - $b;
}
function MULTIPLY($a, $b)
{
   return $a * $b;
}
function DIVIDE($a, $b)
{
   return $a / $b;
}


if (isset($_POST['submit'])) {

   $operator = $_POST['operator'];


   $is_submitted = true;

   if ($operator == 'ADD') {
      $result =  ADD($_POST['num1'], $_POST['num2']);
   }

   if ($operator == 'SUBTRACT') {
      $result =  SUBTRACT($_POST['num1'], $_POST['num2']);
   }

   if ($operator == 'MULTIPLY') {
      $result =  MULTIPLY($_POST['num1'], $_POST['num2']);
   }

   if ($operator == 'DIVIDE') {
      $result =  DIVIDE($_POST['num1'], $_POST['num2']);
   }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Calculator</title>
</head>

<body>

   <div class="bg-img">
      <div class="content">
         <h2>CALCULATOR</h2>

         <form method='POST' step="0.001">
            <div class="field">
               <input type="text" name="num1" placeholder="Number 1" required>
            </div><br>

            <div class="field">
               <input type="text" name="num2" placeholder="Number 2" required>
            </div><br>

            <select name="operator" class="classic" required>
               <option selected>ADD</option>
               <option>SUBTRACT</option>
               <option>MULTIPLY</option>
               <option>DIVIDE</option>
            </select>
            <br><br>
            <div class="field">
               <input name="submit" type="submit" value="CALCULATE">
            </div>
         </form>

         <?php
          if($is_submitted) { 
         ?>

         <div class="color">
            <p>THE ANSWER IS - </p>
            <p style="color: white;">
            <?= $result; ?>
            </p>
         </div>
      
         <?php } ?>

</body>

</html>