<?php
session_start();
$db = mysqli_connect('localhost', 'id8502144_root', '254088Ma!', 'id8502144_mydb');
      mysqli_set_charset($db, 'utf8');
if (isset($_POST['alumnor'])) {
     $id = mysqli_real_escape_string($db, $_POST['alumno2']);
    echo $id;
}
?>