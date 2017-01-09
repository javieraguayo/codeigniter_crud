<!-- aqui va el crud-->

<h1>Formulario de registro </h1>


<form method="POST" action="<?php echo base_url('usuario/insert') ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Perfil</label>
   <select name=txtIdper class="form-control">
      <?php foreach ($selPerfil as $value) {?>
       <option value="<?php echo $value->per_id ?>"><?php echo $value->per_nombre; ?></option>
      <?php }?>

   </select>
  </div>
  <div class="form-group">
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
