<?php
session_start();
$db = mysqli_connect('localhost', 'root', '254088Ma!', 'mydb');
      mysqli_set_charset($db, 'utf8');
if (isset($_POST['alumnor'])) {
     $id = mysqli_real_escape_string($db, $_POST['alumno2']);
    echo $id;
}
?>