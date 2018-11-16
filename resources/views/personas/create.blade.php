<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2><strong>Registro de personas</strong></h2><br/>
      <form method="post" action="{{url('/persona')}}" enctype="multipart/form-data">
      {!! csrf_field()!!}
    
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Nombre Completo:</label>
            <input type="text" class="form-control" name="nombres">
          </div>
        </div>

                <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable>Sexo</lable>
                <select name="sexo">
                  <option value="hombre">Hombre</option>
                  <option value="mmujer">Mujer</option>  
                </select>
            </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Telefono:</label>
              <input type="text" class="form-control" name="telefono">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable>Tipo de sangre</lable>
                <select name="sangre">
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                  <option value="A+">A+</option>  
                  <option value="A-">A-</option>  
                </select>
            </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Estatura:</label>
              <input type="text" class="form-control" name="estatura">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">CI:</label>
              <input type="text" class="form-control" name="ci">
            </div>
          </div>
        
       
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Peso : </strong>  
            <input class="date form-control"  type="text" id="datepicker" name="peso">   
         </div>
        </div>
         
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Registrar</button>
          </div>
        </div>
      </form>
    </div>
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
  </body>
</html>