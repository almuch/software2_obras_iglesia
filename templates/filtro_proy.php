<?php

include 'includes/headerUser.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Parametros de busqueda
                </div>
                <div class="panel-body">
                    <b> Ingrese su busqueda </b>
                    <br><br>
                    <input class="form-control" name="fname"><br>

                </div>
                <div class="panel-body">
                    <b> buscar por: </b>
                    <br><br>
                    <select class="form-control">
                        <option>ID</option>
                        <option>Nombre</option>
                        <option>Tipo</option>
                        <option>Juriccion</option>
                    </select>
                </div>
                <div class="panel-body">

                    <button class="form-control">
                        Realizar busqueda
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Resultado de Busqueda personalizada de obras
                </div>


                <?php
                // aqui debe ir el data grid  y se debe elminar la tabla de muestra
                ?>

                <table class="table" >
                    <thead>
                    <tr>
                        <th data-options="field:'id'">ID</th>
                        <th data-options="field:'nombre'">Nombre</th>
                        <th data-options="field:'poblacion'">Poblacion</th>
                        <th data-options="field:'fecha_entrega'">fecha_entrega</th>
                        <th data-options="field:'tipo_obra'">Tipo_obra</th>
                        <th data-options="field:'juridiccion'">Juridiccion</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>001</td><td>name1</td><td>2323</td><td>2/5/2008</td><td>escuela</td><td>la Paz</td>
                    </tr>
                    <tr>
                        <td>002</td><td>name1</td><td>2323</td><td>2/5/2008</td><td>escuela</td><td>la Paz</td>
                    </tr>
                    <tr>
                        <td>003</td><td>name1</td><td>2323</td><td>2/5/2008</td><td>escuela</td><td>la Paz</td>
                    </tr>
                    <tr>
                        <td>004</td><td>name1</td><td>2323</td><td>2/5/2008</td><td>escuela</td><td>la Paz</td>
                    </tr>
                    <tr>
                        <td>005</td><td>name1</td><td>2323</td><td>2/5/2008</td><td>escuela</td><td>la Paz</td>
                    </tr>
                    <tr>
                        <td>006</td><td>name1</td><td>2323</td><td>2/5/2008</td><td>escuela</td><td>la Paz</td>
                    </tr>
                    <tr>
                        <td>007</td><td>name1</td><td>2323</td><td>2/5/2008</td><td>escuela</td><td>la Paz</td>
                    </tr>
                    </tbody>
                </table>

                <script type="text/javascript">

                </script>
            </div>
        </div>

    </div>
</div>
</body>
</html>