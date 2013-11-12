<!--Consultar / modificar prestador-->

<script>
$(document).ready(function(){

//configuracion de las ventanas de alerta

toastr.options = {
  "closeButton": true,
  "debug": false,
  "positionClass": "toast-top-right",
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}


  $(".collapse").collapse();


  $('#myModal').modal("hide");

  $("#consultar_proyecto").css("display", "none");
  $("#tabla_consulta").css("display", "none");

$("#btn_consultar_proyecto").click(function(){
  $("#consultar_proyecto").fadeToggle(2000);
  $("#tabla_consulta").fadeToggle(2000);

});



    $("#c_datos_prestador").click(function(){


       // alert($("#id_cedula").val());
          
          var cedula=$("#id_prestador_cedula").val();

                  if(!cedula){

                          toastr.warning("No envies campos vacios");
                  }else{

                      $.post("consultar_datos_prestador",{id:cedula},function(data){

                            var estado =JSON.parse(data)["estado"]; 

                                   console.log(JSON.parse(data));

                             
                              if(estado === "-1"){

                                  toastr.error("prestador no encontrado");


                              }else{

                                 toastr.success("Prestador encontrado");



                              var datos_personales =JSON.parse(data)["datos_personales"][0];
                            
                              var datos_academicos =JSON.parse(data)["datos_academicos"][0];
                              
                      

                            $("#nombre_prestador").val(datos_personales.nombre_prestador);


                            $("#apellido_prestador").val(datos_personales.Apellido_prestador);


                            $("#celular_prestador").text(datos_personales.celular_prestador);


                            $("#telefono_prestador").text(datos_personales.telefono_prestador);


                            $("#email_prestador").text(datos_personales.email_prestador);


                            $("#cedula_prestador").text(datos_personales.ci_prestador);


                            $("#direccion_prestador").text(datos_personales.direccion_prestador);


                              //datos academicos


                            $("#nro_exp_prestador").text(datos_academicos.no_exp_prestador);


                            $("#escuela_prestador").text(datos_academicos.escuela_prestador);


                            $("#mencion_prestador").text(datos_academicos.mencion_prestador);


                            $("#semestre_prestador").text(datos_academicos.semestre_prestador);

                         
                        }
                         });
                    
                        }  
    });


  });

 
</script>


<style>


  #cont{

    width:100%;
    height:200px;
   
  }

  #foto{
    margin-top: 20px;

    float:left;
    
    margin-right: 20px;
  }


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

    <div class="panel panel-default">

            <div class="panel-heading">
              <h3 class="panel-title">Buscar prestador</h3>
            </div>
            <div class="panel-body">
              
              <div class="input-group input-group-sm">
                <input id="id_prestador_cedula" type="text" class="form-control" placeholder="Introduzca nombre o c&eacute;dula del prestador"></input>
                <span class="input-group-btn">
                  <button id="c_datos_prestador" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
              </div><!-- /input-group -->


            </div>


          </div>
      <div id="cont">
      
      <div id="foto">
        <img  style="width: 140px; height: 140px;" src="http://1120.gogiro.com/wp-content/uploads/2012/04/facebook-profile-picture-no-pic-avatar.jpg" alt="Avatar" class="img-thumbnail">

      </div>

      <div id="info">
        <form class="form-inline" role="form">
          <fieldset disabled>
            <div class="form-group">
              <label>Nombre</label>
              <input type="text" id="nombre_prestador" class="form-control" placeholder="Nombre del Alumno">
              <label>Apellido</label>
              <input type="text" id="apellido_prestador" class="form-control" placeholder="Apellido del Alumno">
            </div>
          </fieldset>
        </form>
      </div>

      


    </div>

      <br><br>

   <div id="cont1">       
  
    <div class="panel-group" id="accordion">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
           Datos Personales
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        

            <ul>
                <li>Cedula : <span id="cedula_prestador"></span></li>
                <li>Telefono :<span id="telefono_prestador"></span></li>
                <li>Email :<span id="email_prestador"></span></li>
                <li>Celular :<span id="celular_prestador"></span></li>
                <li>Direccion :<span id="direccion_prestador"></span></li>
            </ul>

      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Datos Academicos
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in">
      <div class="panel-body">
       
            
         <ul>
                <li>Nro. Expendiente : <span id="nro_exp_prestador"></span></li>
                <li>Escuela :<span id="escuela_prestador"></span></li>
                <li>Mencion :<span id="mencion_prestador"></span></li>
                <li>Semestre :<span id="semestre_prestador"></span></li>
            </ul>


      </div>
    </div>
  </div>
</div>
</div>


<br><br>
<br><br>
<br><br>

<ol class="breadcrumb">
  <h5> Proyecto actuales</h5>
 <select class="form-control">
  <option>Seleccione proyecto</option>
  <option>CompuBus 1 </option>
  <option>CompuBus 2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
</ol>

  <table class="table table-hover">
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
        <td>Datos</td>
        <td>Extraidos</td>
        <td>de</td>
        <td>B.Datos</td>
      </tr>
       <tr>
        <td>Datos</td>
        <td>Extraidos</td>
        <td>de</td>
        <td>B.Datos</td>
      </tr>
       <tr>
        <td>Datos</td>
        <td>Extraidos</td>
        <td>de</td>
        <td>B.Datos</td>
      </tr>
       <tr>
        <td>Datos</td>
        <td>Extraidos</td>
        <td>de</td>
        <td>B.Datos</td>
      </tr>
    </tbody>
</table>

<h4>Total</h4>

<br><br>
<center>
<button type="button" class="btn btn-success" data-toggle="modal" href="#myModal">Reportar Horas</button>

<!-- Indicates a successful or positive action -->
<button type="button" id="btn_consultar_proyecto" class="btn btn-success" >Consultar Proyecto</a></button>

<!-- Contextual button for informational alert messages -->
<button type="button" class="btn btn-success">Inscribir Proyeto</button>

<!-- Indicates caution should be taken with this action -->
<button type="button" class="btn btn-success">Carta Culminacion</button>
</center>

<br><br><br><br>

<div id="consultar_proyecto">
<ol class="breadcrumb">
  <h5> Nombre del Proyecto </h5>

 <select class="form-control">
  <option>Seleccione proyecto</option>
  <option>CompuBus 1 </option>
  <option>CompuBus 2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
<center><button type="button" class="btn btn-link" data-toggle="modal" href="#myModal">Ver detalle</button></center>


<h5>Inicio prestacion del servicio:</h5>

<div class="row">
  <div class="col-lg-2">
  <h5>Periodo:</h5>
    <select class="form-control">
      <option>1</option>
    </select>
    
 </div>
  <center>
  <div class="col-lg-3">
    <h5>Fecha:</h5> 
   </center>
   </div>
 </div>

</ol>


  <table id="tabla_consulta" class="table table-bordered">
    <thead>
      <tr>
        <th>Domingo</th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miercoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
        <th>Sabado</th>
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

<center><p>
  <button type="button" class="btn btn-info">Finalizar Prestacion en este Proyecto </button>
  <button type="button" class="btn btn-info">Imprimir Notificacion Culminacion</button>
</p></center>

<!-- Modal -->


<!-- Button trigger modal -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Reporte de Horas</h4>
        </div>
        <div class="modal-body">
          
          <label>Registrar</label> 
          <ol class="breadcrumb">
            <select class="form-control">
              <option>Seleccione</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
            </select>

          </ol>
          <label>horas</label><br><br>
          <label>Comentarios</label>
          <textarea class="form-control" rows="2"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</div> <!-- /container-->

