<?php 

require_once 'db_connect.php'; 

if($_POST){
    $title=$_POST['title'];
    $image=$_POST['image'];
    $author_first_name=$_POST['author_first_name'];
    $author_last_name=$_POST['author_last_name'];
    $isbn=$_POST['isbn'];
    $short_description=$_POST['short_description'];
    $publish_date=$_POST['publish_date'];
    $publisher_name=$_POST['publisher_name'];
    $publisher_address=$_POST['publisher_address'];
    $size=$_POST['size'];
    $type=$_POST['type'];
    $status=$_POST['status'];
    $empty="false";

    if(isset($_POST['submit'])){
        if(empty($title) || empty($author_first_name)|| empty($isbn)||empty($author_last_name) || empty($image) || empty($short_description) || empty($publish_date) || empty($publisher_name) || empty($publisher_address)){
            $empty="true";
        }
}

if($empty==="false"){
    $sql="INSERT INTO `biglibrary`( `title`, `image`, `author_first_name`, `author_last_name`, `isbn`, `short_description`, `publish_date`, `publisher_name`, `publisher_address`,`size`, `type`, `status`) VALUES ('$title','$image','$author_first_name','$author_last_name','$isbn','$short_description','$publish_date','$publisher_name','$publisher_address', '$size','$type', '$status')";
    if($connect->query($sql)=== TRUE){
        echo"<p>New record has been created</p>";
        echo"<button><a href='../create.php'>Back</a></button>";
        echo"<button><a href='../index.php'>Home</a></button>";
    }else{
        echo"Error" .$sql. ' '. $connect->connect_error;
    }
    $connect->close();
}else{
    echo"Please fill all fields";
    echo"<button ><a href='../create.php'>Back</a></button>";
    echo"<button><a href='../index.php'>Home</a></button>";
}

   

}


?>