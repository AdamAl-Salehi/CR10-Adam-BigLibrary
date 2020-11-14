<?php 

include("db_connect.php");

if($_POST){
    $id = $_POST['id'];
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
    $sql="UPDATE `biglibrary` SET `title`='$title',`image`='$image',`author_first_name`='$author_first_name',`author_last_name`='$author_last_name',`isbn`='$isbn',`short_description`='$short_description',`publish_date`='$publish_date',`publisher_name`='$publisher_name',`publisher_address`='$publisher_address',`size`='$size',`type`='$type',`status`='$status'WHERE id='{$id}'";
    if($connect->query($sql)=== TRUE){
        echo"<p>Successfully updated</p>";
        echo"<button><a href='../index.php'>Home</a></button>";
    }else{
        echo"Error" .$sql. ' '. $connect->connect_error;
    }
    
}else{
    echo"Please fill all fields";
    echo"<button ><a href='../create.php'>Back</a></button>";
    echo"<button><a href='../index.php'>Home</a></button>";
}

   

}
$connect->close();

?>