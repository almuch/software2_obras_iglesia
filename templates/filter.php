<?php
	include 'includes/headerFiltro.php';
?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							Filtrar por:
						</div>
					</div>
					<div class="panel panel-default">
					<div class="panel-body">
                    <b> Departamento: </b>
                    <br>
                    <select class="form-control">
                        <option>Todos los departamentos</option>
                        <option>La Paz</option>
                        <option>Cochabamba</option>
                    </select>
                	</div>

                	<div class="panel-body">
                    <b> Tipo de Obra: </b>
                    <br>
                    <select class="form-control">
                        <option>Todas las obras</option>
                        <option>Parroquia</option>
                        <option>Casa religiosa</option>
                    </select>
                	</div>

	                <div class="panel-body">
                    <b> Jurisdicción Eclesiástica: </b>
                    <br>
                    <select class="form-control">
                        <option>Todas las jurisdicciones</option>
                        <option>Arquidiócesis de Cochabamba</option>
                        <option>Arquidiócesis de La Paz</option>
                    </select>
    	            </div>
					<div class="panel-body">
	                    <b> Estado de obra: </b>
	                    <div class="checkbox">
						  <label><input type="checkbox" value="a1">Concluida</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" value="a2">En ejecucion</label>
						</div>
                	</div>	

					<div class="panel-body">
	                    <b> Encargado de la obra: </b>
	                    <br>
	                    <ul class="list-group">
						  <li class="list-group-item">P. Jaime Viscarra Villanueva <span class="badge">6</span></li>
						  <li class="list-group-item">P. Roque Adalid Troche Salazar<span class="badge">4</span></li> 
						  <li class="list-group-item">P. Jorge Masai<span class="badge">5</span></li> 
						  <li class="list-group-item">Ver más</li>						
						</ul>
                	</div>

					</div>
				</div>
				<div class="col-md-9">
					<div class="panel panel-default">
						<div class="panel-heading">
							Obras de la Iglesia
						</div>

						<div class="panel-body">
							<form action="" class="search-form">
								<div class="form-group has-feedback">
									<label for="search" class="sr-only">Search</label>
									<input type="text" class="form-control" name="search" id="search" placeholder="search">
									<span class="glyphicon glyphicon-search form-control-feedback"></span>
								</div>
							</form>
						</div>
					</div>

					<div class="panel panel-default">
					  	<div class="panel-body">
					  		<div class="col-md-4">
					  			<img src="templates/images/parroquia.jpg" class="img-responsive" alt="Responsive image">
							</div>
							<div class="col-md-8">
								<div class="panel-body">
									<b> Nombre: </b> Parroquia 1
								</div>
								<div class="panel-body">
									<b> Jurisdicción: </b> Arquidiócesis de Cochabamba
								</div>
								<div class="panel-body">
									<b> Tipo de obra: </b> Parróquia
								</div>
							</div>
					  	</div>
					</div>
					<div class="panel panel-default">
					  	<div class="panel-body">
					  		<div class="col-md-4">
					  			<img src="templates/images/parroquia.jpg" class="img-responsive" alt="Responsive image">
							</div>
							<div class="col-md-8">
								<div class="panel-body">
									<b> Nombre: </b> Parroquia 2
								</div>
								<div class="panel-body">
									<b> Jurisdicción: </b> Arquidiócesis de Cochabamba
								</div>
								<div class="panel-body">
									<b> Tipo de obra: </b> Parróquia
								</div>
							</div>
					  	</div>
					</div>
						<center>
						  	<ul class="pagination">
							  	<li class="previous"><a href="#">Previous</a></li>
							  <li><a href="#">1</a></li>
							  <li><a href="#">2</a></li>
							  <li><a href="#">3</a></li>
							  <li><a href="#">4</a></li>
							  <li><a href="#">5</a></li>
						  		<li class="next"><a href="#">Next</a></li>
							</ul>
						</center>

				</div>

			</div>
		</div>
	</body>
</html>