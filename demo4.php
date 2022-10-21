<html>
<head><title>My Looping Statement</title></head>
<?php
//Application 1

for ($x=0;$x<11;$x++)
{
	if($x==11)
	{
	break;
	}
	echo "Hello $x <br>";
}


//Application 2
for($x=1;$x<10;++$x)
{	
	if($x<=2)
	{
	continue;
	}
	echo "The number is: $x"." <br>";
}


// while loop
$fuel = 10;
while (--$fuel>=0)
	echo "There's enough fuel"."<br>";

	//break;


// do while
$count = 1;
do
	echo "$count times 12 is ".$count*12 . "<br>";
while(++$count<=12);


//for loop
for($gas =10;$gas>=1;--$gas)
	echo "There's enough Gas"."<Br>";


//foreach loop
$color = array("blue","red","green","yellow");
foreach ($color as $val)
	echo $val."<br>";


//break (Show 4 Only)
for($x=1;$x<10;++$x)
{	if($x==4)
	{
		echo" The number is: $x"." <br>";
		break;
	}
}


//continue
for($x=1;$x<10;++$x)
{	if($x==4)
	{
		continue;
	}
	echo" The number is: $x"." <br>";
}

?>
</html>