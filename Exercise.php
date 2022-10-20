<html>
    <head><title>student's grades evuluator</title></head>
    <body>
        <div style="text-align: center;">
		<?php
           //Grade_System
			echo "<br>";
			$name = "Celyssa Chryse Riego de Dios";
			$grade = 83;
			if ($grade >= 70) 
			{
				echo "Name: ".$name . "<br>Grade: ". $grade . ", PASSED<br><br>";
			} 
			elseif (($grade >=60) && ($grade <=69))
			{
				echo "Name: ".$name . "<br>Grade: ".$grade . ", REMEDIAL<br><br>";
			}
			else
			{
				echo "Name: ".$name . "<br>Grade: ".$grade . ", FAILED<br><br>";
			}

?>

</body>
</html