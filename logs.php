<html>

<head>
</head>

<body>
    <?php
        include 'header.html';
        $fileContent = file_get_contents('logs');
        $contentArray = explode("\n", $fileContent);
        foreach ($contentArray as $content){
            if (str_contains($content,'=') && str_contains($content,'gitclone.sh')){
                echo ("<br>");
                echo ("<span>$content</span>");
            } else {
                echo ("<span>$content</span>");
            }
        }
    ?>
</body>

</html>