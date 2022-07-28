<html>

<head>
</head>

<body>
    <?php
    include 'header.html';
    $path = getcwd();
    $filepath = "$path/logs";
    $fileContent = file_get_contents($filepath);
    $contentArray = explode('startofscript', $fileContent);
    foreach (array_reverse($contentArray) as $content) {
        if (strpos($content, 'Already up to date.', 0)){
            if (strpos($content, 'error', 0) or strpos($content, 'fatal', 0)) {
                echo ("<div style=background-color:red;>");
            } else {
                echo ("<div>");
            }
            echo ("<span>$content</span></div>");
        }
    }
    ?>
</body>

</html>
