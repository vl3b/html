<html style="background-color: #666666;">
<head>
</html>
<body>
<?php
for ($x = 0; $x <= 30; $x++) {
$number = strval(rand(1000,9999));
$lettera = chr(rand(97,122));
$letterb = chr(rand(97,122));
echo("<a href='https://prnt.sc/$lettera$letterb$number'><span>click me! $lettera$letterb$number</span></a><br>");
}
?>
</body>

</html>