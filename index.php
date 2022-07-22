<html>

<head>
    <title>Title!</title>
</head>

<body>
    <form action='shell.php' method='post'>
        <input type='submit' value='gaming' name='openshellfile' />
    </form>
    <?php
    if (isset($_POST['openshellfile'])) {
        echo $res = shell_exec('/var/www/html/test.sh');
    }
    ?>
    <p>test7</p>
</body>

</html>