<?php require_once 'action/db_connect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>PHP CRUD | Add User</title>

    <style>
    body {
        background-color: #A5D8FF;
    }

    .card {
        background-color: #AFD0D6;
    }

    .my-3 {
        width: 10rem;
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
    <div class="container">
        <h1>Add Media</h1>
        <div class="container mt-5">
            <div class="form-group justify-content-center">
                <form action="action/a_create.php" method="post">
                    <input class="form-control" type="text" name="title" placeholder="Title">
                    <input class="form-control" type="text" name="image" placeholder="Image URL">
                    <input class="form-control" type="text" name="author_first_name" placeholder="Author's first Name">
                    <input class="form-control" type="text" name="author_last_name" placeholder="Author's last Name">
                    <input class="form-control" type="text" name="isbn" placeholder="ISBN">
                    <input class="form-control" type="text" name="short_description" placeholder="Short Description">
                    <input class="form-control" type="date" name="publish_date" placeholder="publish_date">
                    <input class="form-control" type="text" name="publisher_name" placeholder="Publisher Name">
                    <input class="form-control" type="text" name="publisher_address" placeholder="Publisher Address">
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
                    <input type="submit" name="submit" value="Add Media" class='btn btn-dark my-3'>
                </form>
            </div>
        </div>
        <button type="submit" class='btn btn-dark m-auto'><a href="index.php">Back</a></button>

    </div>


</body>

</html>