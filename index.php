<html>

<head>
    <title>Title!</title>
</head>

<body>
    <form action='' method='post'>
        <input type='submit' value='gaming' name='openshellfile' />
    </form>
    <?php
    if (isset($_POST['openshellfile'])) {
        echo $res = shell_exec('/var/www/html/test.sh');
    }
    ?>
    <p>test8</p>
</body>

</html>