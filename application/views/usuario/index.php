<!-- aqui va el crud-->

<h1>Formulario de registro </h1>

<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Listar</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Registrar</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
    <table class="table table-hover"><!-- estilo para que se vea correcta la lista-->
      <thead>
        <th>ID</th>
        <th>Perfil</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Acciones</th>
      </thead>
      </tbody>
        <?php foreach ($listUsuario as $value) {?><!-- necesario para listar recorre los datos con un for-->
          <tr>
            <td><?php echo $value->usu_id; ?></td>
             <td><?php echo $value->per_nombre; ?></td>
             <td><?php echo $value->usu_nombres; ?></td>
             <td><?php echo $value->usu_apellidos; ?></td>
             <td><?php echo $value->usu_correo; ?></td>
             <td><?php echo $value->usu_telefono; ?></td>
             <td><!-- funcion editar y eliminar en el controlador concatena el id para usarlo-->
               <a href="<?php echo base_url('usuario/delete')."/".$value->usu_id; ?>" title="Eliminar"><span class="glyphicon glyphicon-trash"></span></a>
                <a href="<?php echo base_url('usuario/edit')."/".$value->usu_id; ?>" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
             </td>
          </tr>
       <?php }?>
      </tbody>
    </table>

    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
      <form method="POST" action="<?php echo base_url('usuario/insert') ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Perfil</label>
   <select name=txtIdper class="form-control">
      <?php foreach ($selPerfil as $value) {?><!-- se usar para traer el nombre del rol desde la bd-->
       <option value="<?php echo $value->per_id ?>"><?php echo $value->per_nombre; ?></option>
      <?php }?>

   </select>
  </div>
  <div class="form-group"><!-- name necesario pasa usar los input-->
    <label for="exampleInputEmail1">Nombres</label>
    <input type="text" name="txtnombres" class="form-control" id="exampleInputEmail1" placeholder="nombres ">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellidos</label>
    <input type="text" name="textApellidos" class="form-control" id="exampleInputPassword1" placeholder="Apellidos">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Correo</label>
    <input type="text" name="textCorreo" class="form-control" id="exampleInputEmail1" placeholder="Correo">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Telefono</label>
    <input type="text" name="textTelefono" class="form-control" id="exampleInputEmail1" placeholder="Telefono">
  </div>


  <button type="submit" class="btn btn-default">Registrar</button>
</form>


    </div>

  </div>

</div>

