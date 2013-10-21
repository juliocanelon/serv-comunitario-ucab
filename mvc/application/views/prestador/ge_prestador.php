
<script>

$(document).ready(function() {

// run ajax request
    $.ajax({
   
       beforeSend: function(){
               // Handle the beforeSend event
                  $('#inscribir').html('<div id="loading"><img src="./loading.gif"></div>');
    
             },

        
         
        type: "GET",
        url: $('a[href$="#inscribir"]').attr("data-url"),
        success: function (data) {
                  // replace div's content with returned data
                  $('a[href$="#inscribir"]').tab('show');
                   
                  setTimeout(function() {
            
                    $("#inscribir").html(data);
                  },1000);
                }

          });


  $('#myTab li a').click(function (e) {
    e.preventDefault();

    var url = $(this).attr("data-url");
    var href = this.hash;
    var pane = $(this);

    // add loading image to div
    $(href).html('<div id="loading"><img src="./loading.gif"></div>');

    pane.tab('show');
    
    // run ajax request
    $.ajax({
    type: "GET",
     url: url,
            success: function (data) {
                  // replace div's content with returned data

                  setTimeout(function() {
                    $(href).html(data);
                  },1000);
                }

              });

      });

});


</script>

<style>

.tab-content{

  margin-top: 30px;
}
</style>

<!-- listado de tabs -->

<div class="header">
  <h1>Gestión de Prestadores</h1>
  <ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#inscribir" data-url="insertar_prestador" >Inscribir</a></li>
    <li class=""><a href="#consultar" data-url="consultar_prestador">Consultar/Modificar</a></li>
    <li class=""><a href="#asignar_pro" data-url="asignar_proyecto">Asignar Proyecto</a></li>
    <li class=""><a href="#hola" data-url="hola">Hola Juan</a></li>
  </ul>
</div>

<div class="tab-content">
  <div class="tab-pane active" id="inscribir"></div>
<div class="tab-pane" id="consultar"></div>
<div class="tab-pane" id="asignar_pro"></div>
<div class="tab-pane" id="hola"></div>

</div>

