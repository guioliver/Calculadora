<?php

$num1= $_POST ["num1"];
$num2= $_POST ["num2"];
$op= $_POST   ["op"];
$calcular=0;

if($op =="+")
{
  $calcular = $num1+$num2;
}
else if($op =="-")
{
  $calcular = $num1-$num2;
}
else if($op =="*")
{
  $calcular = $num1*$num2;
}
else if($op =="\")
{
  $calcular = $num1\$num2;
}


echo ("O resultado é: ");
echo ($calcular);

?>