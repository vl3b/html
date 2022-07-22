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
        echo ("trueee");
        echo $res = shell_exec('/var/www/html/manual_gitclone.sh');
    }
    ?>
    <p>tet85</p>
</body>

</html>