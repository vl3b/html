<html>

<head>
    <title>Title!</title>
</head>

<body>
    <form action='' method='post'>
        <input type='submit' value='build from git' name='run.sh manual_gitclone.sh' />
    </form>
    <?php
    if (isset($_POST['run manual_gitclone.sh'])) {
        echo($_POST);
        echo ("trueee");
        echo $res = shell_exec('/var/www/html/manual_gitclone.sh');
    }
    ?>
    <p>tet85</p>
</body>

</html>