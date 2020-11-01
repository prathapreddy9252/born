<?php

   $day=$_POST["day"];
   $month=$_POST["month"];
   $year=$_POST["year"];
   $sum=0;
   function filter($value,$result=0){
	   	while ($value) {
	   	$result=$result+($value%10);
	   	$value=$value/10;
	   }
	   return $result;
   }
   if($day>12)
	{
		echo "day's are just 31 or below ";
		return 0;
   }
   if($month>31){
   	echo "moth's are just  12";
   	return 0;
   }
   $sum1=filter($day);
   echo "sum1 $sum1<br>";
   $sum2=filter($month);
   echo "sum2 $sum2<br>";
   $sum3=filter($year);
   echo "sum3 $sum3<br>";
   $sum=$sum1+$sum2+$sum3;
   while ($sum>=10) {
   	$sum=filter($sum);
   	# code...
   }
   
   $sum_final=$sum;
   echo "$sum_final";

   if ($sum_final==1)
        echo "YOUr LOve IS TRue";
   elseif($sum_final==2)
        echo "YOUr FAMIly IS GOod";
   elseif($sum_final==3)
        echo "YOUr VOIce IS SWEet";
   elseif($sum_final==4)
        echo "YOUr A TALENTed PERSIon";
   elseif($sum_final==5)
        echo "YOUr LOve IS WAITIng For You";
   elseif($sum_final==6)
        echo "YOUr LIfe IS GREat";
   elseif($sum_final==7)
        echo "INTELLIGEnt";
   elseif($sum_final==8)
        echo "BOrn TO Win";  
   elseif($sum_final==9)
		echo "COnFUSED pERSIon";  
?>