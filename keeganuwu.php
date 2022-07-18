<html style="background-color: #666666;">
<head>
</html>
<body>
<?php
?>

<a id="mya" href=""><span id="myspan"> hereismytext </span></a>
<script>
const characters ='abcdefghijklmnopqrstuvwxyz';
const charactersLength = characters.length;


var t=setInterval(oneSecondFunction,25);
function oneSecondFunction() {
    document.getElementById("mya").href=
    "https://prnt.sc/"+
    characters.charAt(Math.floor(Math.random() * charactersLength))+
    characters.charAt(Math.floor(Math.random() * charactersLength))+
    (Math.floor(Math.random() * 10)).toString()+
    (Math.floor(Math.random() * 10)).toString()+
    (Math.floor(Math.random() * 10)).toString()+
    (Math.floor(Math.random() * 10)).toString();
}
document.getElementById("myspan").textContent="screenshot time baby!";
</script>
</body>
</html>