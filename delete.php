<?php 

require_once 'action/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM biglibrary WHERE id = {$id}" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <title >Delete Media</title>
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


<h3>Do you really want to delete this Media?<br>You won't be able to get it back if you choose Yes!</h3>
<form action ="action/a_delete.php" method="post">

   <input type="hidden" name= "id" value="<?php echo $data['id'] ?>" />
   <button type="submit">Yes, delete it!</button >
   <a href="index.php"><button type="button">No, go back!</button ></a>
</form>

</body>
</html>

<?php
}
?>

