<html>
<head>
</html>
<body>
<?php
for ($x = 0; $x <= 10; $x++) {
$number = strval(rand(1000,9999));
$lettera = chr(rand(97,122));
$letterb = chr(rand(97,122));
echo("<a href='https://prnt.sc/$lettera$letterb$number'><p>click me! $lettera$letterb$number</p></a>");
}
?>
</body>

</html>