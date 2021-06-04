<html>
<body bgcolor= "", style="color:white;font-size:20px;margin-inline-start:0.83em;margin-inline-end:0.83em;">
<?php
$x = 24;
$y = 6;
$z;
function main()
{
global $x, $y, $z;
$z = $x + $y;
echo "<h2>Addition</h2>";
echo $z ,"<br>";

$z = $x - $y;
echo "<h2>susbstraction</h2>";
echo $z, "<br>";

$z = $x * $y;
echo "<h2>mulplication</h2>";
echo $z, "<br>";

$z = $x / $y;
echo "<h2>divide</h2>";
echo $z, "<br>";

$z = $x ** $y;
echo "<h2>exponentiation</h2>";
echo $z;

}
main();
?>
</body>
</html>