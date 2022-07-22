<html>

<head>
    <title>Title!</title>
</head>

<body>
    <form action='' method='post'>
        <input type='submit' value='build from git' name='openshellfile' />
        <input type='submit' value='test button' name='test' />
    </form>
    <?php
    if (isset($_POST['openshellfile'])) {
        echo ("trueee");
        echo $res = shell_exec('/var/www/html/manual_gitclone.sh');
    }
    if (isset($_POST['test'])) {
        echo $_POST;
    }
    ?>
    <p>tet85</p>
</body>

</html>