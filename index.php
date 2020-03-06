<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
        <h2><?php 
    if(isset($_POST['submit'])){
    
    var_dump($_FILES);
    if($_FILES['image']['type'] == "image/png" && $_FILES['image']['size'] >= 100100){
    $tmp = $_FILES['image']['tmp_name'];
    echo $tmp;
    $img_name = uniqid.".jpg";
    move_uploaded_file($tmp, "photos/".$img_name);
}

else
{
    echo "not supported";
}
        }


    
    
    ?></h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
    <input type="submit" name="submit" value="upload">
  
    </form>
    
</body>
</html>