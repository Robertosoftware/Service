<?php include('session.php') ?>
<?php session_start();?>
<?php
$db = mysqli_connect('localhost', 'root', '254088Ma!', 'mydb');
mysqli_set_charset($db, 'utf8')
          ?>
<div class="jumbotron">
    <div class="container">
    <div class="row">
             <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                    <th>Contacto</th>
                    <th>Alumno</th>
                    <th>Responsable</th>
                    <th>Edad del Alumno</th>
                    <th>Ver Alumno</th>
                    </tr>
                            <?php
        $email = $_SESSION['email'];
        $query = "SELECT * FROM asesor WHERE email='$email'";
        $result=  mysqli_query($db, $query);
        $row= mysqli_fetch_array($result);
        $number= $row['idasesor'];
        $query2="select distinct(idalumno) from venta where idasesor='$number' order by idalumno";
        $result2= mysqli_query($db, $query2);
        if($result2)
        {
            while($row2=mysqli_fetch_array($result2)){
                $number2= $row2['idalumno'];
                 $query="select * from alumno where idalumno='$number2'";
                $result= mysqli_query($db, $query);
            $row= mysqli_fetch_array($result);
                echo'<tr><td>'.$row['celular_responsable'].'</td>
                <td>'.$row['nombre_alumno'].'</td>
                <td>'.$row['nombre_responsable'].'</td>
                <td>'.$row['edad'].'</td>
                 <td><a href="partials/CRUD/server-crud.php?ealumno='.$row['idalumno'].'" class="btn btn-info">Ver</a></td>
                    </tr>
                ';
            }
        }
        ?>
                </table>
</div>
</div>