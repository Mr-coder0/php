<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FILE UPLOAD</title>
</head>
<body>
    <form action ="Q12.php" enctype="multipart/form-data" method="post">
        Select image :
        <input type="file" name="file"> <br/>
        <input type="submit" name="submit1" value="upload"> <br/>
</form>
<?PHP
     if (isset($_POST['submit1']))
{
    $filepath="image11/".$_FILES["file"]["name"];

    if(move_uploaded_file($_FILES["file"]["tmp_name"],$filepath))

    {
        echo "<img src=".$filepath." height=150 width=150/>";

    }
}

?>   
</body>
</html>
