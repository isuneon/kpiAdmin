function cargarformulario(arg)
//funcion que carga todos los formularios del sistema
{
    if(arg==1){ var url = "scheduleConfig"; }
	if(arg==2){ var url = "scheduleDays"; }
    if(arg==3){ var url = "notification"; }
    if(arg==4){ var url = "config"; }
    if(arg==5){ var url = "email"; }
    if(arg==6){ var url = "day"; }
    if(arg==7){ var url = "scheduleHours"; }
    if(arg==8){ var url = "user"; }

		//$("#contenido_principal").html($("#cargador_empresa").html());   
		$("#contenido_principal").html();   
		  
		$.get(url,function(resul){
    	$("#contenido_principal").html(resul);
    })
}

function cargarDatos(route)
//funcion que carga todos los formularios del sistema
{
    
    var url = route;
        //$("#contenido_principal").html($("#cargador_empresa").html());   
        $("#contenido_principal").html();   
        $.get(url,function(resul){
        $("#contenido_principal").html(resul);
    })
}


$(document).on("click",".pagination li a",function(e){
    //para que la pagina se cargen los elementos
    e.preventDefault();
    var url =$( this).attr("href");
    $("#contenido_principal").html();
    $.get(url,function(resul){
        $("#contenido_principal").html(resul); 
    })
})

$(document).on("submit",".form_entrada",function(e){

    //funcion para atrapar los formularios y enviar los datos

       e.preventDefault();
        
        $('html, body').animate({scrollTop: '0px'}, 200);
        
        var formu=$(this);
        var quien=$(this).attr("id");
        
        if(quien=="form_crea_usuario"){ var varurl="user"; var divresul="notificacion_resul_fanu"; }
        if(quien=="form_edita_usuario"){ var varurl="editar_usuario"; var divresul="notificacion_resul_fanu"; }
   
        $("#"+divresul+"").html();
              $.ajax({
                    type: "POST",
                    url : varurl,
                    datatype:'json',
                    data : formu.serialize(),
                    success : function(resul){
                        $("#"+divresul+"").html(resul);
                        if(quien=="form_crea_usuario")
                        {
                            $('#'+quien+'').trigger("reset");    
                        }
                        
                    }
                });
})


function cargarlistado(listado){

    //funcion para cargar los diferentes  en general
    if(listado==1){ var url = "listado_usuarios"; }

    $("#contenido_principal").html();
    $.get(url,function(resul){
            $("#contenido_principal").html(resul); 
    })

}

function mostrarficha(id_usuario) {
  //funcion para mostrar y etditar la informacion del usuario
  var url = "form_editar_usuario/"+id_usuario+""; 
  $("#contenido_principal").html();  
  $.get(url,function(resul){
  $("#contenido_principal").html(resul); 
  })
}