<?php
    /**
     * Created by PhpStorm.
     * User: Alvaro
     * Date: 17/09/2016
     * Time: 21:40 PM
     */
    include 'includes/headerUser.php';
?>
<html>


<html>
  <head>
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
  </head>
  <body>
    <script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
    <script type="text/javascript">
                  $(function() {
                    $('#time1').datetimepicker({
                      pickDate: false
                    });
                  });
    </script>
    <script type="text/javascript">
                  $(function() {
                    $('#time2').datetimepicker({
                      pickDate: false
                    });
                  });
    </script>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Imagen
                </div>
                <div class="panel-body">
                    <b>  <img src="templates/images/parroquia.jpg" class="img-responsive" alt="Responsive image"> </b>
                    <br><br>
                    <center><button type="button" class="btn btn-success">AGREGAR IMAGEN</button></center>
                    
                </div>
                
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Registro de proyecto
                </div>
                <div class="form-group input-group-sm padding">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group input-group-sm">
                <label for="hora-i">Hora inicio de atencion:</label>
                    <div id="time1" class="input-append">
                        <input data-format="hh:mm:ss" type="text"></input>
                        <span class="add-on">
                          <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                          </i>
                        </span>
                    </div>
                </div>
                <div class="form-group input-group-sm">
                <label for="hora-f">Hora fin de atencion:</label>
                    <div id="time2" class="input-append">
                        <input data-format="hh:mm:ss" type="text"></input>
                        <span class="add-on">
                          <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                          </i>
                        </span>
                    </div>
                </div>
                <div class="form-group input-group-sm">
                        <label for="pob">Poblacion neta:</label>
                        <input type="number" class="form-control" id="pob">
                </div>
                <div class="form-group input-group-sm">
                <label for="lat">Latitud:</label>
                <input type="text" class="form-control" id="lat">
                </div>
                <div class="form-group input-group-sm">
                <label for="lon">Longitud:</label>
                <input type="text" class="form-control" id="lon">
                </div>
                <div class="form-group input-group-sm">
                <label for="date">Fecha de entrega</label>
                <input type="text" class="form-control" id="date">
                </div>
                <div class="panel-heading">
                    Encargado
                    </div>
                    <div class="form-group input-group-sm">
                    <input type="text" class="form-control" id="enc">
                    </div>
                <div class="panel-heading">
                    Tipo de obra
                </div>
                <div class="panel-body">
                    <select class="form-control">
                        <option>TIPO DE OBRA 1</option>
                        <option>TIPO DE OBRA 2</option>
                        <option>TIPO DE OBRA 3</option>
                    </select>
                </div>
                <div class="panel-heading">
                    Jurisdicción
                </div>
                <div class="panel-body">
                    <select class="form-control">
                        <option>DIÓCESIS DE COROICO</option>
                        <option>DIÓCESIS DE CARANAVI</option>
                        <option>DIÓCESIS DE EL ALTO</option>
                    </select>
                </div>
                    <div class="form-group input-group-sm">
                        <center><button type="button" class="btn btn-success">GUARDAR CAMBIOS</button></center>
                    </div>

                </div>
        </div>
    </div>
</div>
</body>
</html>