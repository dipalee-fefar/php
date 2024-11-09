<?php
    $target_dir = "upload/";
    $target_file = $target_dir.
    basename($_FILES["fileToUpload"]["name"]);
    $uploadok = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    //Check if image file is a actual image or other extension file...
    if(isset($_POST["Submit"])){
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false){
            echo "File is an image.". $check["mime"].".";
            $uploadok = 1;
        }else{
            echo "File is not an image.";
            $uploadok = 0;
        }
    }

    //Check if file already exists...
    if(file_exists($target_file)){
        echo "Sorry, File already exists.";
        $uploadok = 0;
    }

    //Check file size...
    if($_FILES["fileToUpload"]["size"]>5000000)
    {
        echo "Sorry, Your file is too large.";
        $uploadok = 0;
    }

    //Allow cerain file formats...
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
        echo "Sorry, Only JPG,JPEG,PNG & GIF files are allowed.";
        $uploadok = 0;
    }

    //Check if $upload is set to obyan error...
    if($uploadok == 0){
        echo "Sorry, Your file was not uploaded.";

        //if everything is ok, try to upload file
    }else{
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){
            echo "The file".
            htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). "has been uploaded";
        }else{
            echo "Sorry, There was an error uploading your file.";
        }
    }
?>