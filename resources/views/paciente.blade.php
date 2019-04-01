<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class ="container">
    <br>
<div class="jumbotron text-center">
    <h3> Inicio Servicio</h3><br>
</div>
<div class="container">
  <!--<button id="btn_informe" type="button" class="btn btn-primary btn-lg btn-rounded">Nuevo Informe</button>-->
  <a href="{{ route('formulario.index') }}" class="btn btn-success rounded">
</div>
<div class="container">
<h2>Tabla de datos </h2>
  <p>Realizar busqueda digitando rut, nombre de la persona o numero de informe</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Busqueda..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Numero de biopsia</th>
        <th>Rut</th>
        <th>Nombre</th>
        <th>Servicio</th>
        <th>Fecha</th>
        <th>Accion</th>   
      </tr>
    </thead>
    <tbody id="myTable">
        
    </tbody>
  </table>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>