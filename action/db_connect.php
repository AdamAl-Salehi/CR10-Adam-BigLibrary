<?php 

define ('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define ('DBNAME', 'cr10-adam-biglibrary');

$connect = new  mysqli(DBHOST,DBUSER,DBPASS,DBNAME);

if($connect->connect_error) {
    die("connection failed: " . $connect->connect_error);
}else {

}

?>