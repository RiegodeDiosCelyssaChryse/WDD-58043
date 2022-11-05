<html>
<head><title>Long Quiz 2</title></head>
<body bgcolor = "#FFB6C1">
<h3>Celyssa Chryse Riego de Dios</h3>
<h3>WDD - 58043</h3>
<br><h3>Problem 1</h3>
//Create a PHP program that will perform the following mathematical operations, to produce the required output.
</br>
<?php
	$Salary_Rate=600;
	$Salary= 0;
	$Taxable_Amount=0;
	$Net_Pay=0;
	echo"<br>Salary Rate: $Salary_Rate</br>";
		
	$Salary=$Salary_Rate * 15;
	echo"<br>Salary: $Salary</br>";
        
	$Taxable_Amount=.30 * $Salary;
	echo"<br>Taxable Amount: $Taxable_Amount</br>";
        
	$Net_Pay=$Salary - $Taxable_Amount;
	echo"<br>Net Pay: $Net_Pay</br>";

?>

<br><h3>Problem 2</h3>
//Create a PHP program that will add all positive integers from 1-50 using loop statement.</br>
<?php
	$n = 50;
	$i = 1;
	$sum = 0;

	while($i<=$n) 
	{
	$sum+=$i;
	$i++;
	}

	echo"<br>The Sum of Positive Integers is: $sum</br>";

?>  
</html>