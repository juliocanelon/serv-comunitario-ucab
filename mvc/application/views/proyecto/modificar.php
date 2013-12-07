<!--/Consultar/Modificar proyecto-->
<style>
#accordion{
	
	margin-top: 30px;
}

#results{
	
	display: none;
}

#results label {

	margin-top:10px;
	margin-bottom:10px;
}

.search{

	

	height: auto;

}

.button-generar{

	margin-top: 10px;

}
.result-search{

	height: auto;
}
</style>




<div class="container">

	<div class="panel panel-default">
		<div class="panel-heading">Formulario de Búsqueda </div>
		<div class="result-search panel-body">
		
			<div class="input-group input-group-sm">
                <input id="query_proyecto" type="text" class="query form-control" placeholder="Nombre del proyecto"></input>
                <span class="input-group-btn">
                  <button id="buscar_proyecto" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
              </div><!-- /input-group -->
		

			<div id="results">
				<label>Resultados</label>
				<div id="search_results">
				

				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">Descripción del proyecto</div>
		<div class="panel-body">


			<!--Fecha de inicio, Estado , ID proyecto -->

			<label for="proyecto">Nombre del proyecto</label>
			<h5 id="nombre_proyecto">xxxxxxxx</h5>

			<label for="proyecto">Fecha de creacion del proyecto</label>
			<h5 id="fecha_ini">xxxxxxxx</h5>

			<label for="proyecto">Estado del proyecto</label>
			<h5 id="estado_proyecto">xxxxxxxx</h5>	
			
			<label for="proyecto">Codigo del proyecto</label>
			<h5 id="id_proyecto">xxxxxxxx</h5>	

			<!--Descripcion /textarea -->	
			<h3>General</h3>

			<!--Acorddion-->	
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
								Descripción
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse ">
						<div class="panel-body">

							<label class="content-label"> Diagnostico</label>
							<div id="diagnostico_proyecto">

							</div>


							<label class="content-label">Justificacion</label>
							<div id="justificacion_proyecto">
							</div>
                           
                           <label class="content-label">Impacto</label>
							<div id="impacto_proyecto">
							</div>

						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
								Objetivos
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
						<div class="panel-body">

							<label class="content-label">Objetivo General</label>
							<div id="obj_generales_proyecto">
							</div>

							<label class="content-label">Objetivos especificos</label>
							<div id="obj_especificos_proyecto">
							</div>

							<label class="content-label">Metas</label>
							<div id="metas_proyecto">
							</div>

							<label class="content-label">Producto</label>
							<div id="producto_proyecto">
							</div>

						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
								Estrategias
							</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse">
						<div class="panel-body">

							<label class="content-label">Plan de trabajo</label>
							<div id="plan_trabajo_proyecto">
							</div>

							<label class="content-label">Recursos requeridos</label>
							<div id="recursos_requeridos_proyecto">
							</div>

							<label class="content-label">Cronograma</label>
							<div id="cronograma_proyecto">
							</div>
						</div>
					</div>
				</div>
			</div>
						<!-- boton para generar reporte -->

			<button id="gen_reporte_proy" type="button" class="button-generar pull-right btn btn-success" data-loading-text="Generando reporte" >Generar reporte PDF</button>
		</div>

	</div>


	<div class="panel panel-default">
		<div class="panel-heading"> Listado de Prestadores</div>
		<div class="listado_prestadores panel-body">
			
		</div>
	</div>


	<div class="panel panel-default">
		<div class="panel-heading"> Horario de Trabajo</div>
		<div class="panel-body">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Domingo</th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miércoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
        <th>Sábado</th>
      </tr>
    </thead>
  <tbody>
    <tr>
      <td>7:00 - 8:00</td>
    </tr>
    <tr>
      <td>8:00 - 9:00</td>
    </tr>
    <tr>
      <td>9:00 - 10:00</td>
    </tr>
    <tr>
      <td>10:00 - 11:00</td>
    </tr>
    <tr>
      <td>11:00 - 12:00</td>
    </tr>

    </tbody>
</table>
</div>
	</div>



</div>	<!--/container-->

<script>

 $(document).ready(function () {

	$("#buscar_proyecto").on("click",function(e){

			e.preventDefault();

			$("#results").css("display","block");

			$("#results").css("height","auto");


			var query = $(".query").val();

				//Realiza la busqueda

						busqueda("buscar_proyecto",query);

			});


	
	

	$("#gen_reporte_proy").on("click",function(){


			var id_proy = $("#id_proyecto").text();

			generar_reporte("generar_reporte_proyecto",0,id_proy);


	});

});
</script>