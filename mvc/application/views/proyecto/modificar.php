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

	

	height: 100px;

}

.button-generar{

	margin-top: 10px;

}
</style>


<script>



	$("#buscar_proyecto").on("click",function(e){

			e.preventDefault();

			$("#results").css("display","block");
			$("#results").css("height","100px");


			$.post("buscar_proyecto",{query:$("#query").val()},function(data){

						var listado = JSON.parse(data);

						console.log(data);

						$("div#search_results ul.list-group li").remove();

						if(data==="-1"){


							$("div#search_results ul.list-group").html('<li class="list-group-item"> No se econtraron resultados </li>');

						}else{


							$.each(listado, function(){

							
								$("div#search_results ul.list-group").append('<li class="list-group-item"> <a href="' + this.id_proyecto + '">' + this.nombre_proyecto + "</a> </li>");
								

							});

						}


			});



			jQuery(document).unbind().on('click', 'div#search_results ul li a', function (ev) {
    		
    			ev.preventDefault();
  				
				$.post("listar_datos_proyecto",{id_proyecto:$(this).attr("href")},function(data){

						var listado = JSON.parse(data);

						var elementos = ["nombre_proyecto",
										 "fecha_ini",
										 "estado_proyecto",
										 "id_proyecto",
										 "diagnostico_proyecto",
										 "justificacion_proyecto",
										 "impacto_proyecto",
										 "obj_generales_proyecto",
										 "obj_especificos_proyecto",
										 "metas_proyecto",
										 "producto_proyecto",
										 "plan_trabajo_proyecto",
										 "recursos_requeridos_proyecto",
										 "cronograma_proyecto"];
									
						

							$.each(elementos, function(i){

									$("#"+elementos[i]).html(listado[0][elementos[i]]);


							});


							
					});

				ev.stopPropagation();
							
			});
	


	});
</script>

<script type="text/javascript">
	
	$("#gen_reporte_proy").on("click",function(){


			var id_proy = $("#id_proyecto").text();

			var html = "";


			$.post("generar_reporte_proyecto",{state:1,id_proyecto:id_proy},function(data){


				
			var button = $(this);

				$(button).button('loading');

				 $.post("ver_reporte",{state:1,reporte:data},function (data){
				           
             				window.open(data, '_blank', 'fullscreen=yes');
			        		

							$(button).button('reset');      
     		 	});

			});




	});
		
</script>

<div class="container">

	<div class="panel panel-default">
		<div class="panel-heading">Formulario de Búsqueda </div>
		<div class="panel-body">
		
			<div class="input-group input-group-sm">
                <input id="query" type="text" class="form-control" placeholder="Nombre del proyecto"></input>
                <span class="input-group-btn">
                  <button id="buscar_proyecto" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
              </div><!-- /input-group -->
		

			<div id="results">
				<label>Resultados</label>
				<div id="search_results">
					<ul class="list-group">
					

					</ul>

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
					<div id="collapseOne" class="panel-collapse collapse in">
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
			<button id="gen_reporte_proy" type="button" class="button-generar pull-right btn btn-success">Generar reporte PDF</button>

		</div>

	</div>


	<div class="panel panel-default">
		<div class="panel-heading"> Listado de Prestadores</div>
		<div class="panel-body">
			blank
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