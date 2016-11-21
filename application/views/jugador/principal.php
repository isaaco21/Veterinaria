<!DOCTYPE html>
<html>
  <head>
    <title>Aplicacion Lidom</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <h3>Jugadores</h3>
      <div class="row">
      <form method="post" action="<?php echo base_url('Jugador/Guardar'); ?>">
      <div class="col-md-6">
        <div class="form-group input-group">
          <span class="input-group-addon">id:</span>
          <input type="text" readonly class="form-control" name="id"/>
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Nombre:</span>
          <input type="text" class="form-control" name="equipo"/>
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Fecha de nacimiento:</span>
          <input type="text" class="form-control" name="nombre"/>
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">tipo:</span>
          <input type="text" class="form-control" name="apodo"/>
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Raza:</span>
          <input type="text" class="form-control" name="posicion"/>
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">color:</span>
          <input type="text" class="form-control" name="numero"/>
        </div>

        <div class="text-ce</div>nter">
          <button class="btn btn-primary" type="submit">Guardar</button>
        </div>

      </div>
      </form>
      </div>
      <div class="clear">

      </div>
      <h3>Registros Anteriores</h3>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha de nacimiento</th>
            <th>Tipo</th>
            <th>Raza</th>
            <th>Color</th>
            <td>
              --
            </td>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($jugadores as $jugador) {

              $linkEdit = base_url("/Jugador/?id={$jugador->id}");
              $linkDelete = base_url("/Jugador/Delete/?id={$jugador->id}");

              echo "<tr>
                <td>{$jugador->id}</td>
                <td>{$jugador->equipo}</td>
                <td>{$jugador->nombre}</td>
                <td>{$jugador->apodo}</td>
                <td>{$jugador->posicion}</td>
                <td>{$jugador->numero}</td>
                <td>
                  <a href='{$linkEdit}' class='btn btn-info btn-sm'>edit</a>
                  <a href='{$linkDelete}' class='btn btn-warning btn-sm'>del</a>
                </td>
              </tr>";
            }

           ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
