<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    body{
    background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),url(background.jpg);
     height:100vh;
    background-size:cover;
    background-position:center;
    font-family: "Roboto",sans-serif;
    }

    form input {
        background-color:skyblue;
        font-size:20px;
        padding:1% 1%;
        border-radius:5px;
        border-width:10%;
       
      
    }

</style>
<body>

<center>

<?php 

if (isset($_POST['submit'])) { 
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    $height=$height/100;
    $total=($height*$height);
    $bmi= $weight/$total;
 
    if ($bmi <= 18.5) {
    $result= "You are underweight" ;
    } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
    $result= "Your weight is normal!";

    } else if ($bmi > 24.9 AND $bmi<=29.9) {
    $result= "You are overweight!";

    } else if ($bmi > 30.0) {
    $result= "You are Obese";
    }
    echo 
    "<p style='display: center; 
    font-size: 20px; 
    border: 1px solid; padding: 3% 3%; 
    margin-right: 30%; margin-left: 30%; background-color:pink;
    margin-top: 20%; color:black; border-radius: 10px'>" ."Your BMI value is  " . $bmi . "</br>".$result
    ."</p>";
}

?>
<form action="index.php">
<input type="submit" name="back" method="post" value="Go back to Calculator" >
</form>

</center>
 
</body>
</html>