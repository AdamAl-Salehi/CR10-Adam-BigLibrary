<?php 

require_once 'action/db_connect.php';
if ($_GET['author_last_name']) {
    $author_last_name = $_GET['author_last_name'];

    $sql = "SELECT * FROM `biglibrary` WHERE author_last_name = '{$author_last_name}'";
   $result = $connect->query($sql);

   $data = $result->fetch_all(MYSQLI_ASSOC);

   $connect->close();
}



?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <title>Books by <?php echo $author_last_name; ?></title>
   <style>
        body{
            background-color: #A5D8FF;
            color: #C49799;
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

            <?php 
            
            if($result->num_rows > 0){
                foreach($data as $value ){
                                
                    echo"
                    <div class='col-s-11 col-m-11 col-lg-4 mb-5'>
                        <div class='card'>
                            <img src='".$value['image']."' class='card-img-top img-fluid'>
                            <div class='card-body '>
                                <h5 class='card-title'>".$value['title']."</h5>
                                <a href='author.php?author_last_name=".$value['author_last_name']."'><h5 class='card-title'>".$value['author_first_name']." ".$value['author_last_name']."</h5></a>
                                <p class='card-text'>".$value['status']."</p>
                                <a href='bookinfo.php?id=".$value['id']."'>Show info</a>
                                <div class='btn-class d-flex mt-3'>
                                    <a href='update.php?id=".$value['id']."' class='btn btn-dark m-auto'>Update</a>
                                    <a href='delete.php?id=".$value['id']."' class='btn btn-dark m-auto'>Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>";
                }
            }
        ?>
        </div>
    </div>
           
</body>
</html>
