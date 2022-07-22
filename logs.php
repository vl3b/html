<html>

<head>
</head>

<body>
    <p>test</p>
    <?php
        include 'header.html';
        $path = getcwd();
        $filepath = "$path/logs";
        $fileContent = file_get_contents($filepath);
        $contentArray = explode("startofscript", $fileContent);
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