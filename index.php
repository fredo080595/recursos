<!doctype html>
<html lang="es">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="js/alertifyjs/css/alertify.css">
    <script src="js/alertifyjs/alertify.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Aplición de prueba</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

    </ul>
  </div>
</nav>
    
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-12 pb-3">
          <button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Insertar Usuario</button>
        </div>
      </div>
      <div class="row">
          <div class="col-md-12">
            

            <div id="tabla">
            </div>
                      


          </div>
      </div>
    </div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              
              <form id="formulario"> 
                <div class="form-row">
                  <div class="form-group col-sm-6">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="nom" id="nom">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="">Apellido paterno</label>
                    <input type="text" class="form-control" name="aPa" id="aPa">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-sm-6">
                    <label for="">Apellido materno</label>
                    <input type="text" class="form-control" name="aMa" id="aMa">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="">edad</label>
                    <input type="text" class="form-control" name="edad" id="edad">
                  </div>
                </div>
              


            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="insertar">Insertar</button>
        </form>
      </div>
    </div>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  
  <script>
    
    $(document).ready(function(){

        $('#tabla').load('tablaDatos.php');

    });

  </script>

  <script>
  
    $('#insertar').on('click', function(e) {
      e.preventDefault();
        
        var datos = $('#formulario').serialize();

        $.ajax({
          type:'POST',
          url:'ajax/insertar.php',
          data:datos,
          success: function(r){

            if (r == 1) {
              console.log(r);
              alertify.success("agregado con exito");
              $("#exampleModal").modal("hide");
               $('#tabla').load('tablaDatos.php');
            }else{
              console.log(r);
              alertify.error("error al agregar");
              $("#exampleModal").modal("hide");
            }

          }


        });

    });    


    
  </script>

  <script>
    

    function eliminar(id){

        $.ajax({
          type:'POST',
          url:'ajax/eliminar.php',
          data:'id='+id,
          success: function(r){
            if (r==1) {
              console.log(r);
              alertify.success("eliminado con exito");
              $('#tabla').load('tablaDatos.php');
            }else{
              console.log(r);
              alertify.error("no se pudo eliminar");
            }
          }

        });

    }
    

  </script>


  </body>
</html>