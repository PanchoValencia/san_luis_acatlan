<?php
    include 'conexion.php';
    include 'layout.php';
?>

<div class="row">
    <div class="col-md-12">
        <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">
                Agregar licencia
            </div>
            <div class="card-body">
                <form class="row" action="bd-nueva_licencia.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-6 col-lg-4 form-group">
                        <label class="" for="add_numero">Numero de Licencia</label>
                        <input type="text" id="add_numero" class="form-control form-control-sm" name="numero" placeholder="Número de licencia" required>
                    </div>
                    <div class="col-md-6 col-lg-4 form-group">
                        <label class="" for="add_tipo">Tipo de Licencia</label>
                        <select class="form-control form-control-sm" required name="tipo" id="add_tipo">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="automovilista">automovilista</option>
                            <option value="motociclista">motociclista</option>
                            <option value="chofer">chofer</option>
                            <option value="permiso menor de edad">permiso menor de edad</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-lg-4 form-group">
                        <label class="" for="add_foto">Foto de Licencia</label>
                        <input type="file" id="add_foto" class="form-control form-control-sm" name="foto" accept="image/jpg,image/jpeg,image/png," required>
                    </div>
                    <div class="col-md-6 col-lg-4 form-group">
                        <label class="" for="add_nombre">Nombre del titular</label>
                        <input type="text" id="add_nombre" class="form-control form-control-sm" name="nombre" placeholder="Nombre del titular de la Licencia" required>
                    </div>
                    <div class="col-md-6 col-lg-4 form-group">
                        <label class="" for="add_dom">Domicilio del titular</label>
                        <input type="text" id="add_dom" class="form-control form-control-sm" name="domicilio" placeholder="Domicilio del titular de la Licencia" required>
                    </div>
                    <div class="col-md-6 col-lg-4 form-group">
                        <label class="" for="add_fr">Fecha de registro</label>
                        <input type="date" id="add_fr" class="form-control form-control-sm" name="fecha_alta" placeholder="Fecha de registro de la Licencia" required>
                    </div>
                    <div class="col-md-6 col-lg-4 form-group">
                        <label class="" for="add_fv">Fecha de vencimiento</label>
                        <input type="date" id="add_fv" class="form-control form-control-sm" name="fecha_vencimiento" placeholder="Fecha de vencimiento de la Licencia" required>
                    </div>
                    <div class="col-12 form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="Agregar Licencia">
                    </div>
                </form>
            </div>
        </div>

        <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">
                Licencias registradas activas
            </div>
            <div class="card-body">
                <?php
                    $result = mysqli_query($enlazarBD, "SELECT * FROM licencia WHERE status='Activo' ORDER BY id DESC");
                    if ( mysqli_num_rows($result) > 0 )
                    {
                        ?>
                        <div class="table-responsive">
                            <table class="table table-borderless table-striped table-hover datatables">
                                <thead>
                                    <tr>
                                        <th hidden class="no-sort"></th>
                                        <th class="no-sort">Numero de Licencia</th>
                                        <th class="no-sort">Tipo</th>
                                        <th class="no-sort">Foto</th>
                                        <th class="no-sort">Nombre</th>
                                        <th class="no-sort">Domicilio</th>
                                        <th class="no-sort">Fecha de registro</th>
                                        <th class="no-sort">Fecha de vencimiento</th>
                                        <th class="no-sort">Estatus</th>
                                        <th class="no-sort"></th>
                                        <th class="no-sort"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            ?>
                                            <tr>
                                                <form id="edit-<?php echo $row["id"] ?>" action="bd-editar-licencia.php" method="GET">
                                                    <td hidden><input required type="hidden" name="id" value="<?php echo $row['id'] ?>"></td>
                                                    <td><input required type="text" name="numero" value="<?php echo $row['numero'] ?>"></td>
                                                    <td>
                                                        <select style="width:170px;" class="form-control form-control-sm" name="tipo" value="<?php echo $row['tipo'] ?>">
                                                            <?php
                                                                switch ($row['tipo']) {
                                                                    case "automovilista":
                                                                        ?>
                                                                        <option value="automovilista" selected>automovilista</option>
                                                                        <option value="motociclista">motociclista</option>
                                                                        <option value="chofer">chofer</option>
                                                                        <option value="permiso menor de edad">permiso menor de edad</option>
                                                                        <?php
                                                                        break;
                                                                    case "motociclista":
                                                                        ?>
                                                                        <option value="automovilista">automovilista</option>
                                                                        <option value="motociclista" selected>motociclista</option>
                                                                        <option value="chofer">chofer</option>
                                                                        <option value="permiso menor de edad">permiso menor de edad</option>
                                                                        <?php
                                                                        break;
                                                                    case "chofer":
                                                                        ?>
                                                                        <option value="automovilista">automovilista</option>
                                                                        <option value="motociclista">motociclista</option>
                                                                        <option value="chofer" selected>chofer</option>
                                                                        <option value="permiso menor de edad">permiso menor de edad</option>
                                                                        <?php
                                                                        break;
                                                                    case "permiso menor de edad":
                                                                        ?>
                                                                        <option value="automovilista">automovilista</option>
                                                                        <option value="motociclista">motociclista</option>
                                                                        <option value="chofer">chofer</option>
                                                                        <option value="permiso menor de edad" selected>permiso menor de edad</option>
                                                                        <?php
                                                                        break;
                                                                }
                                                            ?>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <img style="height:50px;" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']) ?>" alt="">
                                                    </td>
                                                    <td><input required type="text" name="nombre" value="<?php echo $row['nombre'] ?>"></td>
                                                    <td><input required type="text" name="domicilio" value="<?php echo $row['domicilio'] ?>"></td>
                                                    <td><input required type="date" name="fecha_alta" value="<?php echo $row['fecha_alta'] ?>"></td>
                                                    <td><input required type="date" name="fecha_vencimiento" value="<?php echo $row['fecha_vencimiento'] ?>"></td>
                                                    <td><?php echo $row['status'] ?></td>
                                                    <td><input type="submit" for="edit-<?php echo $row["id"] ?>" value="Editar" class="btn btn-success"/></td>
                                                </form>
                                                <td>
                                                    <form id="delete-<?php echo $row["id"] ?>" action="bd-borrar-licencia.php" method="POST">
                                                        <input type="hidden" for="delete-<?php echo $row["id"] ?>" name="id" value="<?php echo $row["id"] ?>">
                                                        <input type="submit" for="delete-<?php echo $row["id"] ?>" value="Eliminar" class="btn btn-warning"/>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <?php
                    }
                    else{
                        ?>
                        <div class="alert alert-danger" role="alert">
                            <div class="icon">
                                <span class="zmdi zmdi-alert-triangle"></span>
                            </div>
                            <div class="message">
                                <strong>Aviso! </strong>
                                No hay registro de licencias.
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>

        <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">
                Licencias registradas inactivas
            </div>
            <div class="card-body">
                <?php
                    $result = mysqli_query($enlazarBD, "SELECT * FROM licencia WHERE status='Inactivo' ORDER BY id DESC");
                    if ( mysqli_num_rows($result) > 0 )
                    {
                        ?>
                        <div class="table-responsive">
                            <table class="table table-borderless table-striped table-hover datatables">
                                <thead>
                                    <tr>
                                        <th class="no-sort">Numero de Licencia</th>
                                        <th class="no-sort">Tipo</th>
                                        <th class="no-sort">Foto</th>
                                        <th class="no-sort">Nombre</th>
                                        <th class="no-sort">Domicilio</th>
                                        <th class="no-sort">Fecha de registro</th>
                                        <th class="no-sort">Fecha de vencimiento</th>
                                        <th class="no-sort">Estatus</th>
                                        <th class="no-sort"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['numero'] ?></td>
                                                <td><?php echo $row['tipo'] ?></td>
                                                <td>
                                                    <img style="height:50px;" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']) ?>" alt="">
                                                </td>
                                                <td><?php echo $row['nombre'] ?></td>
                                                <td><?php echo $row['domicilio'] ?></td>
                                                <td><?php echo $row['fecha_alta'] ?></td>
                                                <td><?php echo $row['fecha_vencimiento'] ?></td>
                                                <td><?php echo $row['status'] ?></td>
                                                <td>
                                                    <form id="activar-<?php echo $row["id"] ?>" action="bd-activar-licencia.php" method="POST">
                                                        <input type="hidden" for="activar-<?php echo $row["id"] ?>" name="id" value="<?php echo $row["id"] ?>">
                                                        <input type="submit" for="activar-<?php echo $row["id"] ?>" value="Activar" class="btn btn-warning"/>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <?php
                    }
                    else{
                        ?>
                        <div class="alert alert-danger" role="alert">
                            <div class="icon">
                                <span class="zmdi zmdi-alert-triangle"></span>
                            </div>
                            <div class="message">
                                <strong>Aviso! </strong>
                                No hay licencias inactivas.
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>
