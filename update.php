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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Update Media</title>
    <style>
    body {
        background-color: #A5D8FF;
        color: #C49799;
    }

    .card {
        background-color: #AFD0D6;
    }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark mb-5">
        <a class="navbar-brand m-auto" href="index.php">
            <img src="https://i.pinimg.com/originals/5f/fb/de/5ffbdeceb84323decd76084b2efca958.png" width="30"
                height="30" class="d-inline-block align-top" alt="" loading="lazy">
            Big Library
        </a>
    </nav>
<div class="container mt-5">

    <form action="action/a_update.php" method="post" class="form-group">
        <input class="form-control"type="hidden" value="<?php echo $data['id'] ?>" name="id">
        <input class="form-control"type="text" value="<?php echo $data['title'] ?>" name="title">
        <input class="form-control"type="text" value="<?php echo $data['image'] ?>" name="image">
        <input class="form-control"type="text" value="<?php echo $data['isbn'] ?>" name="isbn">
        <input class="form-control"type="text" value="<?php echo $data['author_first_name'] ?>" name="author_first_name">
        <input class="form-control"type="text" value="<?php echo $data['author_last_name'] ?>" name="author_last_name">
        <input class="form-control"type="text" value="<?php echo $data['short_description'] ?>" name="short_description">
        <input class="form-control"type="date" value="<?php echo $data['publish_date'] ?>" name="publish_date">
        <input class="form-control"type="text" value="<?php echo $data['publisher_name'] ?>" name="publisher_name">
        <input class="form-control"type="text" value="<?php echo $data['publisher_address'] ?>" name="publisher_address">
        <select class="form-control" name="size" placeholder="Size">
            <option value="Big" selected>Big</option>
            <option value="Medium">Medium</option>
            <option value="Small">Small</option>
        </select>
        <select class="form-control" name="type" placeholder="Type">
            <option value="Book" selected>Book</option>
            <option value="CD">CD</option>
            <option value="DVD">DVD</option>
        </select>
        <select class="form-control" name="status" placeholder="Status">
            <option value="available" selected>available</option>
            <option value="reserved">reserved</option>
        </select><br>
        <input type="submit" value="Update"  class='btn btn-dark mt-2'>
    </form>
        
</div>

</body>

</html>