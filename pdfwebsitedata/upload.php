<?php
if(isset($_POST['submit']) && isset($_FILES['file'])){
    include "dbconn.php";
    echo "<pre>";
    print_r($_FILES['file']);
    echo "</pre>";

    $file_name=$_FILES['file']['name'];
    $file_size=$_FILES['file']['size'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $error=$_FILES['file']['error'];

    if($error===0){
        if($file_size>125000000){
        $em="Sorry your file is too large to upload!";
        header("Location: index.php?error=$em");
        }else{
            $file_ex=pathinfo($file_name,PATHINFO_EXTENSION);
            $file_ex_lc= strtolower($file_ex);
            $allowed_exs=array("jpg","jpeg","png","pdf","txt","docx");
            if(in_array($file_ex_lc,$allowed_exs)){
                $new_file_name= $file_name;
                $file_upload_path='uploads/'.$new_file_name;
                move_uploaded_file($tmp_name,$file_upload_path);

                $sql="INSERT INTO files(filesup)
                    VALUES('$new_file_name')";
                    mysqli_query($conn,$sql);
                    header("Location: view.php");
            }else{
                $em="You cant upload this file type!";
                header("Location: index.php?error=$em");
            }
        }

    }else{
        $em="unknown error occured!";
        header("Location: index.php?error=$em");
    }
}else{
    header("Location:index.php");
}
?>  