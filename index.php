<?php
$openFile = "data";
if (isset($_POST['post'])){
    $post = explode(",",$_POST['post']);
    if ($post[0] === 'Post'){
        $openFile = "$post[2]/$post[1]";
    }
}
echo ("<h2>path: $openFile</h2>");
$files = scandir("$openFile");
foreach($files as $file) {
    if ($file != '.'){
    echo ("<span>$file: </span>");
    $fileExtension = explode(".","$openFile/$file");
    if (isset($myfileArray[1])){
        if ($fileExtension[1] == 'txt'){
            echo("text :)");
        }
    }
    if (is_dir("$openFile/$file")){
        echo ("<form action='' method='post'><input name='post' type='submit' value='Post,$file,$openFile'/></form>");
    }
    echo("<br>");
}
}
?>