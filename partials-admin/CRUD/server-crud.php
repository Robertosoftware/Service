<?php
session_start();
$nombre="";
$descripcion="";
$db = mysqli_connect('localhost', 'root', '254088Ma!', 'mydb');
      mysqli_set_charset($db, 'utf8');
if (isset($_POST['categoria'])) {
$nombre="";
$descripcion="";
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $query = "Insert into categoria (nombre, descripcion) values ('$nombre','$descripcion')";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Categoria');}
    else{
                echo "ERROR";
    }
}
if (isset($_POST['zona'])) {
$nombre="";
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $query = "Insert into zona (nombre) values ('$nombre')";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Zona');}
    else{
                echo "ERROR";
    }
}
if (isset($_GET['dzona'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dzona']);
    $query = "Delete from zona where idzona='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Zona');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['ezona'])) {
         $edit = mysqli_real_escape_string($db, $_GET['ezona']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Zona-editar');
}
if (isset($_POST['zona_editar'])) {
$nombre="";
$descripcion="";
$id="";
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $query = "Update zona set nombre='$nombre' where idzona = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Zona');}
    else{
                echo "ERROR";
    }
}
if (isset($_POST['categoria_editar'])) {
$nombre="";
$descripcion="";
$id="";
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $query = "Update categoria set nombre='$nombre', descripcion='$descripcion' where idcategoria = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Categoria');}
    else{
                echo "ERROR";
    }
}
if (isset($_POST['actualizar'])) {
                $apellidop =mysqli_real_escape_string($db, $_POST['apellido_paterno']);
                $apellidom = mysqli_real_escape_string($db, $_POST['apellido_materno']);
                $direccion = mysqli_real_escape_string($db, $_POST['direccion']);
                $celular = mysqli_real_escape_string($db, $_POST['celular']);
                $carrera = mysqli_real_escape_string($db, $_POST['carrera']);
                $horas = mysqli_real_escape_string($db, $_POST['horas']);
     $id = mysqli_real_escape_string($db, $_POST['id']);
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $email = mysqli_real_escape_string($db, $_POST['email']);                                         
    $query = "Update asesor set nombre='$nombre', apellido_paterno='$apellidop', apellido_materno='$apellidom', direccion='$direccion', celular='$celular', email='$email', carrera='$carrera', horas='$horas' where idasesor = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Actualizar');}
    else{
                echo "ERROR";
    }
}
if (isset($_GET['dcategoria'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dcategoria']);
    $query = "Delete from categoria where idcategoria='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Categoria');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['ecategoria'])) {
         $edit = mysqli_real_escape_string($db, $_GET['ecategoria']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Categoria-editar');
}
if (isset($_POST['materia'])) {
$nombre="";
$descripcion="";
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $query = "Insert into materia (nombre, descripcion) values ('$nombre','$descripcion')";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Materia');}
    else{
                echo "ERROR";
    }
}
if (isset($_GET['emateria'])) {
         $edit = mysqli_real_escape_string($db, $_GET['emateria']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Materia-editar');
}
if (isset($_GET['dmateria'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dmateria']);
    $query = "Delete from materia where idmateria = '$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Materia');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_POST['materia_editar'])) {
$nombre="";
$descripcion="";
$id="";
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $query = "Update materia set nombre='$nombre', descripcion='$descripcion' where idmateria = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Materia');}
    else{
                echo "ERROR";
    }
}
?>