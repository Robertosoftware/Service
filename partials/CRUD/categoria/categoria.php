<?php include('session.php') ?>
<div class="jumbotron">
               <div class="container">
                       <h1><strong>CRUD</strong> CATEGORÍA</h1>
        <div class="row">
             <div class="col-md-3"></div>
            <div class="col-md-6">
        <div class="panel panel-primary">
         <div class="panel-heading">Insertar dato</div>
        <div class="panel-body">
          <form method="post" action="partials/admin/action.php">
            <table class="table table-hover">
              <tr>
                <td>Nombre de la categoría</td>
                <td><input type="text" name="nombre" class="form-control" placeholder="Nombre"></td>
                </tr>
                <tr>
                <td>Descripción de la categoría</td>
                <td><input type="text" name="descripcion" class="form-control" placeholder="Descripción"></td>
                </tr>
                <tr>
                <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="submit" value="Generar"></td>
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
                    <th>nombre</th>
                    <th>Descripción</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    </tr>
                            <?php
        $query="select * from categoria order by idcategoria";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<tr><td>'.$row['idcategoria'].'</td>
                <td>'.$row['nombre'].'</td>
                <td>'.$row['descripcion'].'</td>
                 <td><a href="partials/admin/action.php?ecategoria='.$row['idcategoria'].'" class="btn btn-info">Editar</a></td>
                    <td><a href="partials/admin/action.php?dcategoria='.$row['idcategoria'].'" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                ';
            }
        }
        ?>
                   <!-- <tr>
                    <td>1</td>
                    <td>Ingeneir</td>
                    <td>Nel</td>
                    <td><a href="#" class="btn btn-info">Editar</a></td>
                    <td><a href="#" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                    -->
                </table>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
            <div class="col-md-2"></div>
    </div>
</div>