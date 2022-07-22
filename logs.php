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
    echo $fileContent;
    foreach ($contentArray as $content) {
        if (strpos($content, 'error', 0)) {
            echo ("<div style=background-color:red;>");
        } else {
            echo ("<div>");
        }
        echo ("<span>$content</span></div>");
    }
    ?>
</body>

</html>