<?php
// check more than two conditions
// bmi calculator
$weight = 50;
$height = 1.57;
$bmi = $weight / ($height * $height);
if($bmi < 18.5){
    echo "Underweight";
}elseif($bmi >= 18.5 && $bmi < 24.9){
    echo "Normal weight";
}elseif($bmi >= 25 && $bmi < 29.9){
    echo "Overweight";
}elseif($bmi >= 30){
    echo "Obesity";
}else{
    echo "Invalid input";
}
?>