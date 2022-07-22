<html>

<head>
</head>

<body>
    <?php
        include 'header.html';
    ?>
    <form action='' method='post'>
        <input type='submit' value='build from git now' name='openshellfile' />
    </form>
    <?php
    if (isset($_POST['openshellfile'])) {
        echo $res = shell_exec('/var/www/html/shscripts/manual_gitclone.sh');
    }
    ?>
</body>

</html>