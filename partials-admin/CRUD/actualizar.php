<?php include('../../session.php') ?>
  	<?php if (isset($_SESSION['success'])) : ?>
  	<?php endif ?>
<?php  if (isset($_SESSION['email'])) : ?>

    <!-- logged in user information -->
<div class="fondo">
     <div class="jumbotron labelac">
    <form method="post" action="partials-admin/CRUD/server-crud.php">
  	<?php include('../../errors.php'); ?>
<?php
        $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mydb');
        mysqli_set_charset($db, 'utf8');
        $email = $_SESSION['email'];
        $query="select * from asesor where email='$email'";
        $result= mysqli_query($db, $query);
        $nombre="";
        $descripcion="";
     if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $nombre= $row['nombre'];
                $id= $row['idasesor'];
                $apellidop = $row['apellido_paterno'];
                $apellidom = $row['apellido_materno'];
                $direccion = $row['direccion'];
                $celular = $row['celular'];
                $carrera = $row['carrera'];
                $horas = $row['horas'];
            }
        }
          ?>
           <label>Id</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="id" ria-describedby="sizing-addon1" value="<?php 
echo $id;
?>"  readonly>
</div>
                <label>Nombre</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="nombre" aria-describedby="sizing-addon1" value="<?php
echo $nombre;                                                                                                
?>">
</div>
               <label>Apellido Paterno</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="apellido_paterno" aria-describedby="sizing-addon1" value="<?php
echo $apellidop;                                                                                                
?>">
</div>
               <label>Apellido Materno</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="apellido_materno" aria-describedby="sizing-addon1" value="<?php
echo $apellidom;                                                                                                
?>">
</div>
               <label>Dirección</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="direccion" aria-describedby="sizing-addon1" value="<?php
echo $direccion;                                                                                                
?>">
</div>
               <label>Celular</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="celular" aria-describedby="sizing-addon1" value="<?php
echo $celular;                                                                                                
?>">
</div>
               <label>Horas impartidas</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="horas" aria-describedby="sizing-addon1" value="<?php
echo $horas;                                                                                                
?>">
</div>
               <label>Carrera</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="carrera" aria-describedby="sizing-addon1" value="<?php
echo $carrera;                                                                                                
?>">
</div>
                    <label>Email</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="email" aria-describedby="sizing-addon1" value="<?php
echo $email;                                                                                                    
?>" readonly>
</div>
        <br>
  	<div class="input-group">
  		<button type="submit" class="btn btn-info btn-lg btn2" name="actualizar">Cambiar datos</button>
  	</div>
      	<br>
         <a href="index-admin.php#!/Actualizar">¿Deseas regresar?</a>
  </form>     
</div>
    </div>
<!--<a role="button" class="btn btn-success btn-lg btn-block" href="#!Registro">Registrar Alumno</a>-->
    <?php endif ?>