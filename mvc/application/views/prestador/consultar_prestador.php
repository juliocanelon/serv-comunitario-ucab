<!--Consultar / modificar prestador-->



<style>



  #info{
    margin-top: 20px;
  float: right;
  width:70%;
  

  }

  .form-control1 {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.428571429;
  color: #555555;
  vertical-align: middle;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
          transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}

#form{

  width:75%;
  height:50%;
}

button a {

  text-decoration: none;
  color: #FFF;
}

button a:hover{

  text-decoration: none;
  color: #FFF;

}


</style>


<div class="container">
<div id="d_prestador">
<h4>Nombre: <span class="nombre_prestador"></span></h4>
<h4>Apellido : <span class="apellido_prestador"></span></h4>

</div>

<br><br>

<ol class="breadcrumb">
  <h5> Proyecto actuales</h5>
 <select id="l_proyectos" class="form-control">
  <option value="">Seleccione proyecto</option>
  
</select>

<div id="consultar_proyecto">

    <ol class="breadcrumb">

        <fieldset disabled>
            
          <label>Nombre del proyecto </label>          
             
          <input  id="nombre_proyecto" type="text"  class="form-control">  

          <label>Fecha de creacion </label> 

          <input id="fecha_creacion" type="text"  class="form-control">

          <label>Estado  </label> 

          <input id="estado_proyecto" type="text"  class="form-control">

          <label>Codigo </label> 

          <input  id="codigo_proyecto" type="text"  class="form-control">

        </fieldset>

    </ol>
</div>


</ol>


    <center><h3 id="texto">Listado de horas guardadas</h3></center>

  <table id="informacion_proyecto" class="table table-hover">
    <thead>
      <tr>
        <th>Observacion</th>
        <th>Realizado por</th>
        <th>Horas</th>
        <th>Fecha Modif.</th>
      </tr>
    </thead>
    <tbody>

       <tr>
        <td id="tabla_proy_observacion"></td>
        <td id="tabla_proy_realizado"></td>
        <td id="tabla_proy_horas"></td>
        <td id="tabla_proy_fecha"></td>
      </tr>
    </tbody>
</table>

<h4>Total</h4>

<br><br>
<center>

<button type="button" class="btn btn-success" data-toggle="modal" href="#myModal">Reportar Horas</button>

<!-- Indicates a successful or positive action -->
<button type="button" id="btn_consultar_proyecto" class="btn btn-success" >Consultar Proyecto</a></button>


</center>

<br><br><br><br>


<!--tabla horario de trabajo-->

    <center><h3 id="texto">Horario de trabajo</h3></center>

    <br></br>

    <table class="table" id="tabla_consulta">

      <tr>            

       <td><p class="navbar-text" >Lunes</p></td><td class="lunes"><p class="navbar-text" >Hola</p></td>

       <td><p class="navbar-text" >Martes</p></td><td class="martes"><p class="navbar-text" >Hola</p></td>

      </tr>

      <tr>

        <td><p class="navbar-text" >Miercoles</p></td><td class="miercoles"><p class="navbar-text" >Hola</p></td>

        <td><p class="navbar-text" >Jueves</p></td><td class="jueves"><p class="navbar-text" >Hola</p></td>

      </tr>

      <tr>

        <td><p class="navbar-text" >Viernes</p></td><td class="viernes" ><p class="navbar-text" >Hola</p></td>

      </tr>

    </table>

    <br></br>
  </div>

  <center>
    <p>
    
      <button  id= "btn_finalizar" type="button" class="btn btn-info">Finalizar Prestacion en este Proyecto </button>
      
      <button id= "btn_imprimir" type="button" class="btn btn-info">Imprimir Notificacion Culminacion</button>
    
    </p>
  </center>

<!-- Modal -->

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

          <center><h4 class="modal-title">Reporte de Horas</h4></center>

        </div>

        <div class="modal-body">

          <label>Realizado por </label> 

          <fieldset disabled>

          <input type="text" id="nombre_prestador_modal" class="form-control" placeholder="Nombre del Alumno">

         </fieldset>

          <label>Horas realizadas </label> 

          <input type="text" id="horas_realizadas_modal" class="form-control" placeholder="Ingrese horas realizadas">

          <label>Fecha </label>

          <input type="text" id="fecha_modal" class="form-control" placeholder="Fecha de Actividad">

          <label>Observación </label>

          <textarea  id="observacion_modal" class="form-control" rows="2"></textarea>



        </div>

        

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

          <button type="submit" id="enviar_datos_modal" class="btn btn-primary">Guardar</button>



        </div>

      </div><!-- /.modal-content -->

    </div><!-- /.modal-dialog -->

  </div><!-- /.modal -->


</div> <!-- /container-->


<script>
$(document).ready(function(){

//configuracion de las ventanas de alerta

   var ci =  main_datos.prestador.cedula;
   
   //Inserto los datos del Prestador
   $(".nombre_prestador").html(main_datos.prestador.nombre);
   $(".apellido_prestador").html(main_datos.prestador.apellido);
   $("#nombre_prestador_modal").val(main_datos.prestador.nombre);

   //listo los proyectos del prestador
   
    listar_proyecto(ci,1);

  $(".collapse").collapse();


  $('#myModal').modal("hide");



$("#btn_consultar_proyecto").click(function(){

  $("#consultar_proyecto").fadeToggle(1000);

  $("#consultar_detalles_proyecto").fadeToggle(1000);

  $("#tabla_consulta").fadeToggle(1000);

  $("#texto").fadeToggle(1000);

});



$("#modificar_datos").on("click",function(){

   $(".form-modificar-datos").attr("disabled",false);

});
  

      
  $('body').on('change','#l_proyectos',function(){ 


    var option= $('#l_proyectos option:selected').val();
    var id_proy ;
    var id = main_datos.prestador.cedula;

    if(option){
        
      $.post("ver_detalles_proyecto",{id:option,estado:1},function(data){
        
        
        var datos_proyecto=JSON.parse(data); 
   
        $("#nombre_proyecto").val(datos_proyecto[0]["nombre_proyecto"]);
        $("#fecha_creacion").val(datos_proyecto[0]["fecha_ini"]);
        $("#estado_proyecto").val(datos_proyecto[0]["estado_proyecto"]);
        $("#codigo_proyecto").val(datos_proyecto[0]["id_proyecto"]);
              // console.log(buscar_proyectos_prestador);

              id_proy=datos_proyecto[0]["id_proyecto"];

        $.post("horario_trabajo",{id_proyecto:id_proy ,id_prestador:id },function(data){

            var horas=JSON.parse(data);
            
              console.log(horas[0]);

              var horas;

              $.each(horas[0],function(index){

                  $("#tabla_consulta").find("td."+index).text(horas[0][index]);


              });

          });

      });
        
    }
            
  });
    


$("#enviar_datos_modal").on("click",function () {


  //e.preventDefault();

   // var datos = $(this).serialize();
  var ci =  main_datos.prestador.cedula;
  //var nombre=$("#nombre_prestador_modal").val();
  var n_horas=$("#horas_realizadas_modal").val();
  var fecha=$("#fecha_modal").val();
  var observacion=$("#observacion_modal").val();
  var idproyecto = $("#codigo_proyecto").val();
  var estado = $("#estado_proyecto").val();

 

  $("#horas_realizadas_modal").val("");
  $("#fecha_modal").val("");
  $("#observacion_modal").val("");


    $.post("insertar_datos_reportar_horas",{
    
    id_prestador:ci,
    horas_realizadas_proyecto:n_horas,
    fecha_avance:fecha,
    observaciones_proyecto:observacion,
    idproyecto: idproyecto,
    estadoact: estado,

    },
    function(data){
        if(data=="0"){

               toastr.success(mensajes.success.reporte_horas);

                 $("#tabla_proy_observacion").text(observacion);
                 $("#tabla_proy_realizado").text(ci);
                 $("#tabla_proy_horas").text(n_horas);
                 $("#tabla_proy_fecha").text(fecha);

               
          }else{

              toastr.error(mensajes.error.error_reporte_horas);
        
            }
      });

    $.post("datos_horas_insertadas",{id_proyecto:idproyecto ,id_prestador:ci },function(data){

    var horas_insertadas=JSON.parse(data);
            
              console.log(horas_insertadas[0]);

              var horas_insertadas;

              $.each(horas_insertadas[0],function(index){

                  
                $("#informacion_proyecto").find("td."+index).text(horas_insertadas[0][index]);
              });

            });

  

});


});

 
</script>
