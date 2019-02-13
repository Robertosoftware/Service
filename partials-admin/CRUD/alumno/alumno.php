<?php include('session.php') ?>
<?php session_start();?>
<?php
$db = mysqli_connect('localhost', 'id8502144_root', '254088Ma!', 'id8502144_mydb');
mysqli_set_charset($db, 'utf8')
          ?>
<div class="jumbotron">
      <div class="container">
                       <h1><strong>ACTUALIZA </strong>TUS ALUMNOS</h1>
        <div class="row">
             <div class="col-md-2"></div>
            <div class="col-md-8">
        <div class="panel panel-primary">
         <div class="panel-heading"><strong>Insertar alumno</strong></div>
        <div class="panel-body">
          <form method="post" action="partials-admin/CRUD/server-crud.php">
            <table class="table table-hover">
              <tr>
                <td>Nombre completo del alumno</td>
                <td><input type="text" name="nombre_alumno" class="form-control" placeholder="Nombre" required></td>
                </tr>
                <tr>
                <td>Edad del alumno</td>
                <td><input type="number" name="edad" class="form-control" placeholder="Edad"></td>
                </tr>
                <tr>
                <td>Responsable</td>
                <td><input type="text" name="nombre_responsable" class="form-control" placeholder="Responsable"></td>
                </tr>
                <tr>
                <td>Celular responsable</td>
                <td><input type="number" name="celular_responsable" class="form-control" placeholder="Celular del responsable"></td>
                </tr>
                <tr>
                <td>Correo responsable</td>
                <td><input type="email" name="correo_responsable" class="form-control" placeholder="Correo del responsable"></td>
                </tr>
                <tr>
                <td>Dirección</td>
                <td><input type="text" name="direccion" class="form-control" placeholder="Dirección del responsable"></td>
                </tr>
                <tr>
                <td>Parentesco responsable</td>
                <td><input type="text" name="parentesco_responsable" class="form-control" placeholder="Parentesco del responsable"></td>
                </tr>
                <tr>
                <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="alumno" value="Generar"></td>
                </tr>
              </table>
            </form>
    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
                   </div>
    </div>
                   <div class="container">
    <div class="row">
             <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                    <th>#</th>
                    <th>Asesor</th>
                    <th>Alumno</th>
                    <th>Responsable</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </tr>
                            <?php
        
        $query="select * from alumno order by idalumno";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $asesor= $row['idasesor'];
                $query2="select a.idasesor, a.nombre, a.apellido_paterno, a.apellido_materno from alumno al, asesor a where a.idasesor=al.idasesor and a.idasesor='$asesor'";
                $result2= mysqli_query($db, $query2);
                $row2=mysqli_fetch_array($result2);
                echo'<tr>
                <td>'.$row['idalumno'].'</td>
                <td>'.$row2['nombre'].
                    ' '.$row2['apellido_paterno'].' '.$row2['apellido_materno'].'</td>
                <td>'.$row['nombre_alumno'].'</td>
                <td>'.$row['nombre_responsable'].'</td>
                 <td><a href="partials-admin/CRUD/server-crud.php?ealumno='.$row['idalumno'].'" class="btn btn-info">Editar</a></td>
                    <td><a href="partials-admin/CRUD/server-crud.php?dalumno='.$row['idalumno'].'" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                ';
            }
        }
        ?>
                </table>
</div>
</div>
                   </div>
                   </div>