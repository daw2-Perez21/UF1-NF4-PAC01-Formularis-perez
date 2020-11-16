<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];
        $number3 = $_POST['number3'];   
        $sum =  $number1+$number2+$number3;     
echo "The sum of $number1 and $number2 and $number3 is: ".$sum;   
}  
?>  