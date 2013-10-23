

<script type="text/javascript">

$(document).ready(function() {
      // This call can be placed at any point after the
      // <textarea>, or inside a <head><script> in a
      // window.onload event handler.

      // Replace the <textarea id="editor"> with an CKEditor
      // instance, using default configurations.


//Inicializdor para los editores de texto enriquecido para cada text-area


  // "Text-area para la descripcion del proyecto.

var editor1 = CKEDITOR.inline( 'text-diagnostico' );
  
var editor2 = CKEDITOR.inline( 'text-justificacion' );
    
var editor3 = CKEDITOR.inline( 'text-impacto' );
  
  // "Text-area para los objetivos del proyecto.
  
var editor4 = CKEDITOR.inline( 'text-objetivos-g' );
  
var editor5 = CKEDITOR.inline( 'text-objetivos-e' );
    
var editor6 = CKEDITOR.inline( 'text-metas' );

var editor7 = CKEDITOR.inline( 'text-producto' );
  
  // "Text-area para la descripcion del proyecto.
  
var editor8 = CKEDITOR.inline( 'text-plan-trabajo' );
  
var editor9 = CKEDITOR.inline( 'text-recursos' );
    
var editor10 = CKEDITOR.inline( 'text-cronograma' );
  
    
//Inicializdor y handler para el validador del form insertar-proyecto

   $("#addform-proyecto").validate({

    rules:{

      email:"required",
      descripcion:"required",
      diagnostico : "required"
    },
    messages: {
      email: {
        required: 'El campo es requerido'
      },
       titulo_proyecto: {
        required: 'El campo es requerido'
      },
       descripcion: {
        required: 'El campo es requerido'
      },
       diagnostico: {
        required: 'El campo es requerido'
      }
    }
  });

 //carga via ajax el listado de localidades 
        $.get("listar_loc", function (data) {

              // update the section with the {categorie's list}

              $("#ejecuta,#suscribe").html(data);
            });

    });

</script>

<style>
.text-area{

    width: 100%;
    height: auto;



}
</style>
<div class="container">

<!-- Custom rules and messages via data- attributes -->
<form class="cmxform" id="addform-proyecto" method="post" action="">

     <div class="panel panel-default">
               <div class="panel-heading"> Datos basicos del proyecto </div>
               <div class="panel-body">
                   <div class="form-group">
                       <label for="titulo_proyecto">Título del proyecto</label>
                       <input  name="titulo_proyecto" type="text" class="form-control" id="titulo_proyecto" data-rule-required="true">
                  </div>
                  
                  <div class="form-group">
                       <label for="suscribe">Organización o comunidad quien suscribe convenio</label>
                       <select class="form-control" id="suscribe">
                           <option value="">Seleccione</option>
                      </select>
                 </div>
                 <div class="form-group">
                     <label for="ejecuta">Organización o comunidad donde se ejecuta el proyecto</label>
                     <select class="form-control" id="ejecuta">
                         <option value="">Seleccione</option>
                    </select>
               </div>

          </div>

      </div>

      </br>
<center>
<button type="button" class="btn btn-primary" data-toggle="modal" href="#myModal">Reportar Horas</button>

<!-- Indicates a successful or positive action -->
<button type="button" id="consultar_proyecto" class="btn btn-success" >Consultar Proyecto</a></button>

<!-- Contextual button for informational alert messages -->
<button type="button" class="btn btn-info">Inscribir Proyeto</button>

<!-- Indicates caution should be taken with this action -->
<button type="button" class="btn btn-warning">Carta Culminacion</button>
</center>

</br>
          <div class="panel panel-default">
              <div class="panel-heading"> Descripcion del proyecto </div>
              <div class="panel-body">


                  <div  class="form-group">
                      <label for="descripcion">Diagnostico</label>
                      <div   id="text-diagnostico"  contenteditable="true" name="diagnostico" class="text-area form-control"  placeholder="Diagnóstico de la situación, justificación, impacto.">
                        <textarea id="ccomment" name="comment" required></textarea>
                      </div>
                 </div>
                 <div class="form-group">
                      <label for="justificacion">Justificacion</label>
                      <div id="text-justificacion" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
                        Objetivos generales, objetivos específicos, metas, producto.
                      </div>
                 </div>

                 <div class="form-group">
                      <label for="impacto">Impacto</label>
                     
                       <div id="text-impacto" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
                        Producto, plan de trabajom recursos requeridos, cronograma.
                      </div>
                 </div>
            </div>

       </div>  

           <div class="panel panel-default">
              <div class="panel-heading"> Objetivos</div>
              <div class="panel-body">


                  <div class="form-group">
                      <label for="text-objetivos-g">Objetivos generales</label>
          
                       <div id="text-objetivos-g" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
                        Producto, plan de trabajom recursos requeridos, cronograma.
                      </div>

                 </div>

                 <div class="form-group">
                      <label for="text-objetivos-e">Objetivos especificos</label>
                       <div id="text-objetivos-e" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
                        Producto, plan de trabajom recursos requeridos, cronograma.
                      </div>
                
                </div>

                 <div class="form-group">

                      <label for="text-metas">Metas</label>
                      <div id="text-metas" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
                        Producto, plan de trabajom recursos requeridos, cronograma.
                      </div>
                 
                 </div>
            
                 <div class="form-group">
                      <label for="text-producto">Producto</label>
                       <div id="text-producto" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
                        Producto, plan de trabajom recursos requeridos, cronograma.
                      </div>

                 </div>
            

            </div>

       </div>  


 <div class="panel panel-default">
              <div class="panel-heading"> Estrategias</div>
              <div class="panel-body">


      
                 
                 <div class="form-group">
                      <label for="text-plan-trabajo">Plan de trabajo</label>
                    <div id="text-plan-trabajo" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
                        Producto, plan de trabajom recursos requeridos, cronograma.
                      </div>
                 
                 </div>
                 
                 <div class="form-group">
                      <label for="text-recursos">Recursos requeridos</label>
                      <div id="text-recursos" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
                        Producto, plan de trabajom recursos requeridos, cronograma.
                      </div>
                 
                 </div>
                 
                 <div class="form-group">
                      <label for="text-cronograma">Cronograma</label>
                      <div id="text-cronograma" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
                        Producto, plan de trabajom recursos requeridos, cronograma.
                      </div>
                 
                 </div>
           


            </div>

       </div> 
  <br><input type="submit" class="btn btn-default" id="enviar" value="Crear Proyecto"></input><br><br> 
</form>

</div> <!--/container-->