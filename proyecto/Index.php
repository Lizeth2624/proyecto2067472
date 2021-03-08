<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Control de Acceso </title>
  </head>
  <body>
  <div class ="container">
    <div class ="row">
    
        <h1>Control de Acceso</h1>
    </div>
    <div class="row">

       <form id="registro" name"registro" method="POST" action="Guardar.php">
      <div class "form group">
        <label for ="Codigo_Per"> 1.Codigo_Per</label>
        <input type ="text" class="form-control"id "Codigo_Per" name "Codigo_Per"
        placeholder="Introduce un codigo de dos digitos" autofocus required>
      </div>

      <div class "form group">
        <label for ="Codigo_Rol"> 2. Codigo_Rol</label>
        <input type ="text" class="form-control"id "Codigo_Rol" name "Codigo_Rol"
        placeholder="Vinculo al codigo de rol" required>
      </div>

      <div class "form group">
        <label for ="Codigo_Programa"> 3.Codigo_Programa</label>
        <input type ="text" class="form-control"id "Codigo_Programa" name "Codigo_Programa"
        placeholder=" Conexion Con Codigo programa" required>
      </div>
       <div class "form group">
        <label for ="Nombres"> 4.Nombres</label>
        <input type ="text" class="form-control"id "Nombres" name "Nombres"
        placeholder="Introduce tus nombres" required>
      </div>

       <div class "form group">
        <label for ="Apellidos"> 5.Apellidos</label>
        <input type ="text" class="form-control"id "Apellidos" name "Apellidos"
        placeholder="Introduce tus apellidos" required>
      </div>
       <div class "form group">
        <label for ="Correo_Institucional"> 6.Correo_Institucional</label>
        <input type ="text" class="form-control"id "Correo_Institucional" name "Correo_Institucional"
        placeholder="Introduce el correo institucional" required>
      </div>
       <div class "form group">
        <label for ="Telefono"> 7.Telefono</label>
        <input type ="text" class="form-control"id "Telefono" name "Telefono"
        placeholder="Introduce un numeo de telefono" required>
      </div>
       <div class "form group">
        <label for ="Fecha_nacimiento"> 8.Fecha_nacimiento</label>
        <input type ="date" class="form-control"id "Fecha_nacimiento" name "Fecha_nacimiento"
        placeholder="Introduce tu fecha de nacimiento" required>
      </div>
      <div class "form-group">
       <button class="form-control" id="Guardar" name "Guardar" type"submit"> Guardar el registro</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        <div class "form-group">
       <button class="form-control" id="Cancelar" name "Cancelar" type"submit"> Cancelar registro</button>
        <button type="submit" class="btn btn-primary">Cancelar</button>
        </div>
        </form>
    </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>