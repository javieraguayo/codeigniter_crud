 <form method="POST" action="<?php echo base_url('usuario/update') ?>">
<!-- llama al metodo del controlador-->
 <?php foreach ($datosUsuario as $value) {?>
 	
	<input type="hidden" name="txtUsuid" value="<?php echo $value->usu_id; ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Perfil</label>
  		<!-- configurar autoload helper 'form'-->
      
      <?php 
      $lista = array();//dentro del array lista estoy asignando el id de su perfil
      foreach ($selPerfil as $registro) {
       	$lista[$registro->per_id] = $registro->per_nombre;	
       }

       echo form_dropdown('txtPerid', $lista, $value->per_id, 'class="form-control"');
       ?>

   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombres</label>
    <input type="text" name="txtnombres" class="form-control" id="exampleInputEmail1" value="<?php echo $value->usu_nombres; ?>"><!-- trae los datos para editarlos value-->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellidos</label>
    <input type="text" name="textApellidos" class="form-control" id="exampleInputPassword1" value="<?php echo $value->usu_apellidos; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Correo</label>
    <input type="text" name="textCorreo" class="form-control" id="exampleInputEmail1" value="<?php echo $value->usu_correo; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Telefono</label>
    <input type="text" name="textTelefono" class="form-control" id="exampleInputEmail1" value="<?php echo $value->usu_telefono; ?>">
  </div>

 <?php  }?>
  <button type="submit" class="btn btn-default">Actualizar Usuarios</button>
</form>