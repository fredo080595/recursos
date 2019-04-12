

  


 <table class="table table-striped pt-5">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido paterno</th>
                <th scope="col">Apellido materno</th>
                <th scope="col">Edad</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tbody>
          <?php foreach ($muestra as $value): ?>
              <tr>
                <th scope="row"><?php echo $value['id'] ?></th>
                <td><?php echo $value['nombre'] ?></td>
                <td><?php echo $value['aPaterno'] ?></td>
                <td><?php echo $value['aMaterno'] ?></td>
                <td><?php echo $value['edad'] ?></td>
                <td><button class="btn btn-primary" data-toggle="modal" data-target="#example" onclick="muestraDatos('<?php echo $value['id'] ?>')">Editar</button></td>
                <td><button class="btn btn-secondary" onclick="eliminar('<?php echo $value['id'] ?>')">Eliminar</button></td>
              </tr>
          <?php endforeach ?>
            </tbody>
          </table>