<?php
    /**
     * Created by PhpStorm.
     * User: Fernando
     * Date: 09/14/2016
     * Time: 3:42 PM
     */
    include 'includes/headerUser.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Filtros
                </div>
                <div class="panel-body">
                    <b> Jurisdicción Eclesiástica: </b>
                    <br><br>
                    <select class="form-control">
                        <option>Todas las jurisdicciones</option>
                        <option>Arquidiócesis de Cochabamba</option>
                        <option>Arquidiócesis de La Paz</option>
                    </select>
                </div>
                <div class="panel-body">
                    <b> Departamento: </b>
                    <br><br>
                    <select class="form-control">
                        <option>Cualquier departamento</option>
                        <option>La Paz</option>
                        <option>Oruro</option>
                    </select>
                </div>
                <div class="panel-body">
                    <b> Tipo de Obra: </b>
                    <br><br>
                    <select class="form-control">
                        <option>Obras de la iglesia</option>
                        <option>Parroquia</option>
                        <option>Casa religiosa</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Obras de la Iglesia
                </div>
                <div class="panel-body" id="map">
                    <?php
                    /**
                     * AQUI VIENE EL MAPA
                     */
                    ?>
                </div>
                <script type="text/javascript">
                    var map;
                    function initMap() {
                        map = new google.maps.Map(document.getElementById('map'), {
                            center: {lat: -16.4827386, lng: -64.9922457},
                            zoom: 6
                        });
                    }
                </script>
                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwCdPO48O_RjGJrQD68A_Z8IE3i7JeXzk&callback=initMap">
                </script>
            </div>
        </div>
    </div>
</div>
</body>
</html>