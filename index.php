<?php
$name = "";
if (!file_exists("cookies.txt")){
    $myfile = fopen("cookies.txt", "a");
    fwrite($myfile, "\n");
    fclose($myfile);
}
if (!file_exists("userData.txt")){
    $myfile = fopen("userData.txt", "a");
    fwrite($myfile, "\n");
    fclose($myfile);
}
$myfile = fopen("cookies.txt", "r");
$myfileArray = explode("\n",fread($myfile,filesize("cookies.txt")));
$loggedInUser = $myfileArray[0];
if (isset($myfileArray[1]))$currentPostEdit = $myfileArray[1];
if (!isset($_POST['post'])) $_POST['post'] = ''
?>
<!doctype html>
<html>
<head>
<?php
?>
</head>
<body>
    <form action="" method="post">
        <label name="name_of_person">Please enter your Name:</label><input type="text" name="name_of_person" value='<?php echo $name; ?>'/><br>
        <input name="post" type="submit" value="Login"/>
        <input name="post" type="submit" value="Register"/>
    </form>
<?php
if ($_POST['post'] === 'Register'){
    $name = $_POST['name_of_person'];
    if (!empty($name)){
        $myfile = fopen("userData.txt", "r");
        $usernameArray = explode("\n",fread($myfile,filesize("userData.txt")));
        if(!in_array($name,$usernameArray)){
            fclose($myfile);
            echo "Registered: $name";
            $myfile = fopen("userData.txt", "a");
            fwrite($myfile, "$name\n");
            fclose($myfile);
        } else {
            echo "username already exists";
        }
    } else {
        echo "username can't be empty";
    };
} else if ($_POST['post'] === 'Login'){
    $name = $_POST['name_of_person'];
    if (!empty($name)){
        $myfile = fopen("userData.txt", "r");
        $usernameArray = explode("\n",fread($myfile,filesize("userData.txt")));
        if(in_array($name,$usernameArray)){
            fclose($myfile);
            echo "Logged in on user: $name";
            if (!file_exists("userData")) mkdir("userData");
            if (!file_exists("userData/$name")) mkdir("userData/$name");
            $myfile = fopen("cookies.txt", "w");
            fwrite($myfile, "$name");
            fclose($myfile);
            $loggedInUser = $name;
        } else {
            echo "user doesnt exist";
        }
    } else {
        echo "username can't be empty";
    };
}
?>
    <?php if (isset($loggedInUser)) echo("<h2>Logged in user: $loggedInUser</h2>") ?>

<form action="" method="post">
    <label name="post_name">Post Title:</label><input type="text" name="post_name" value=''/><br>
    <input name="post" type="submit" value="Post"/>
    <input name="post" type="submit" value="Edit"/>
    <input name="post" type="submit" value="Delete"/>
    <input name="post" type="submit" value="Upload"/>
</form>
<?php
if ($_POST['post'] === 'Post'){
    $post = $_POST['post_name'];
    if (!empty($post)){
        if (!file_exists("userData/$loggedInUser/$post.txt")){
            $myfile = fopen("userData/$loggedInUser/$post.txt", "a");
            fwrite($myfile, " ");
            fclose($myfile);
            $myfile = fopen("cookies.txt", "w");
            fwrite($myfile, "$loggedInUser\n$post.txt");
            fclose($myfile);
            echo(
                "<form action='' method='post'>
                <label name='post_edit'>Post Message:</label><input type='text' name='post_edit' value=''/><br>
                <input name='post' type='submit' value='Post Edit'/>
                </form>"
                );
        } else {
            echo "post already exists";
        }
    } else {
        echo "post can't be empty";
    }
}

if ($_POST['post'] === 'Delete'){
    $post = $_POST['post_name'];
    if (!empty($post)){
        if (file_exists("userData/$loggedInUser/$post")){
            unlink("userData/$loggedInUser/$post");
        } else {
            echo "post doesnt exist";
        }
    } else {
        echo "post can't be empty";
    }
}

if ($_POST['post'] === 'Edit'){
    $post = $_POST['post_name'];
    $myfile = fopen("cookies.txt", "w");
    fwrite($myfile, "$loggedInUser\n$post");
    fclose($myfile);
    if (!empty($post)){
        if (file_exists("userData/$loggedInUser/$post")){
            echo(
            "<form action='' method='post'>
            <label name='post_edit'>Edit Post:</label><input type='text' name='post_edit' value=''/><br>
            <input name='post' type='submit' value='Post Edit'/>
            </form>"
            );
        } else {
            echo "post doesnt exist";
        }
    } else {
        echo "post can't be empty";
    }   
}
if ($_POST['post'] === 'Post Edit'){
    $postedit = $_POST['post_edit'];
    if (!empty($postedit)){
        $myfile = fopen("userData/$loggedInUser/$currentPostEdit", "w");
        fwrite($myfile, $postedit);
    } else {
        echo "post can't be empty";
    }
}

if ($_POST['post'] === 'Upload'){
    $post = $_POST['post_name'];
    $myfile = fopen("cookies.txt", "w");
    fwrite($myfile, "$loggedInUser\n$post");
    fclose($myfile);
    echo(
    "<form name='form' action='upload.php' method='post' enctype='multipart/form-data'>
    <input name='my_file' type='file'/>
    <input name='submit' type='submit' value='Upload'/>
    </form>"
    );
}

echo('<h3> Posts </h3>');
$files = scandir("userData/$loggedInUser");
foreach($files as $file) {
    if ($file != '.' && $file != '..'){
    echo ("<span>$file: </span>");
    $fileExtension = explode(".","userData/$loggedInUser/$file");
    if ($fileExtension[1] == 'txt'){
        $myfile = fopen("userData/$loggedInUser/$file", "r");
        $fileContent = fread($myfile,filesize("userData/$loggedInUser/$file"));
        echo ("<span>$fileContent<span><button>Edit</button>");
    }
    echo("<br>");
}
};
?>
</body>
</html>