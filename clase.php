<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php include('session.php') ?>
<?php session_start();?>
<?php
$db = mysqli_connect('localhost', 'id8502144_root', '254088Ma!', 'id8502144_mydb');
mysqli_set_charset($db, 'utf8')
          ?>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="resources/favicon.ico">
	<title>Registrar clase</title>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
    	<link rel="stylesheet" type="text/css" href="style2.css">

	<style type="text/css">
		.list-group-item:hover{
			color: #337ab7;
			text-shadow:  0 0 1em #337ab7;
			cursor: pointer;
		}
	</style>
</head>
<body>
<br><br>
	<div class="col-md-2">
		<br>
	</div>
	<div class="container col-md-8">
        <div class="jumbotron labelac">
                <h1><strong>REGISTRA </strong>TÚ CLASE</h1>
	<form action='partials/CRUD/server-crud.php' method='post'>
        <label>Paquete</label>
      <select required name="paquete1" class="form-control dropd">   
        <?php
              echo'<option value=""></option>';
        $query="select * from paquete";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idpaquete'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
               <label>Número de horas impartidas</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="horas" aria-describedby="sizing-addon1" value="" required>
</div>
               <label>Fecha de la clase</label>
      <div class="input-group input-group-md">
           <span class="input-group-addon" id="sizing-addon1"></span>
          <input type="text" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" class="dat" name="fecha" value="" placeholder="aaaa-mm-dd" aria-describedby="sizing-addon1" required>
</div>
               <label>Zona</label>
       <select required name="zona1" class="form-control dropd">   
        <?php
                  echo'<option value=""></option>';
        $query="select * from zona order by idzona";
        $query="select * from zona order by idzona";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idzona'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
               <label>Alumno</label>
            <input type='text' name='alumno2' value='' class='auto form-control dropd' placeholder="Selecciona tú alumno, en base a tú busqueda de su nombre (sin acentos), puedes empezar por cualquier parte.">
               <label>Categoría</label>
      <select required name="categoria1" class="form-control dropd"> 
        <?php
          echo'<option value=""></option>';
        $query="select * from categoria";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idcategoria'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
               
                    <label>Materia</label>
       <select required name="materia1" class="form-control dropd">   
        <?php
                     echo'<option value=""></option>';
        $query="select * from materia";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idmateria'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
          <label>Descripción</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input style="height:100px" type="text" class="form-control" name="descripcion" aria-describedby="sizing-addon1" value="">
</div>
        <button type="submit" class="btn btn-info btn-lg btn2" name="venta">Registrar clase</button>
        
        <br>
        <br>
         <a href="index.php#">¿Deseas regresar?</a>
	</form>
            </div>
    </div>	
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>	
<script type="text/javascript">
$(function() {
	
	//autocomplete
	$(".auto").autocomplete({
		source: "search.php",
		minLength: 1
	});				

});
</script>
</body>
</html>
