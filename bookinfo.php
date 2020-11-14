<?php 

require_once 'action/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM biglibrary WHERE id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <title><?php echo $data['title'] ?></title>
   <style>
        body{
            background-color: #A5D8FF;
        }
        .card{
            background-color: #AFD0D6;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark mb-5">
        <a class="navbar-brand m-auto" href="index.php">
            <img src="https://i.pinimg.com/originals/5f/fb/de/5ffbdeceb84323decd76084b2efca958.png" width="30" height="30"
                class="d-inline-block align-top" alt="" loading="lazy">
            Big Library
        </a>
    </nav>

	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-11 col-lg-7 d-flex justify-content-center">
                <?php 
                    echo"<div class='card'>
                    <img src='".$data['image']."' class='card-img-top img-fluid'>
                    <div class='card-body '>
                        <h5 class='card-title text-center'>".$data['title']."</h5>
                        <h5 class='card-title'>By: ".$data['author_first_name']." ".$data['author_last_name']."</h5>
                        <p class='card-text'>Type: ".$data['type']."</p>
                        <p class='card-text'>ISBN: ".$data['isbn']."</p>
                        <p class='card-text'>Short Description:<br><br> ".$data['short_description']."</p>
                        <p class='card-text'>Status: ".$data['status']."</p>
                        <p class='card-text'>Publishing date: ".$data['publish_date']."</p>
                        <p class='card-text'>Publisher name: ".$data['publisher_name']."</p>
                        <p class='card-text'>Publishing address: ".$data['publisher_address']."</p>
                        <p class='card-text'>Size: ".$data['size']."</p>
                        
                        <div class='btn-class d-flex'>
                            <a href='update.php?id=".$data['id']."' class='btn btn-dark m-auto'>Update</a>
                            <a href='delete.php?id=".$data['id']."' class='btn btn-dark m-auto'>Delete</a>
                        </div>
                    </div>
                </div>"
                ?>
            </div>
        </div>
    </div>

</body>
</html>
