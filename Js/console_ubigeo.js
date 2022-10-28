function listar_departamento(){
    $.ajax({
        url:'../Controllers/controlador_listar_departamento.php',
        type:'POST'
    }).done(function(resp){
        var data = JSON.parse(resp);
        var cadena="";
        if(data.length>0){
            for (var i =0; i < data.length; i++) {
                cadena +="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
                
            }
            $("#sel_departamento").html(cadena);
            var iddepartamento = $("#sel_departamento").val();
            listar_pronvincia(iddepartamento);
        }else{
            cadena +="<option value=''>'NO SE ENCONTRARON REGISTROS'</option>";
            $("#sel_departamento").html(cadena);
        }
    })
}
function listar_pronvincia(iddepartamento){
    $.ajax({
        url:'../Controllers/controlador_listar_provincia.php',
        type:'POST',
        data:{
            iddepartamento:iddepartamento
        }
    }).done(function(resp){
        var data = JSON.parse(resp);
        var cadena="";
        if(data.length>0){
            for (var i =0; i < data.length; i++) {
                cadena +="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
                
            }
            $("#sel_provincia").html(cadena);
            var idprovincia = $("#sel_provincia").val();
            listar_distrito(idprovincia);
        }else{
            cadena +="<option value=''>'NO SE ENCONTRARON REGISTROS'</option>";
            $("#sel_provincia").html(cadena);
        }
    })
}



function listar_distrito(idprovincia){
    $.ajax({
        url:'../Controllers/controlador_listar_distrito.php',
        type:'POST',
        data:{
            idprovincia:idprovincia
        }
    }).done(function(resp){
        var data = JSON.parse(resp);
        var cadena="";
        if(data.length>0){
            for (var i =0; i < data.length; i++) {
                cadena +="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
                
            }
            $("#sel_distrito").html(cadena);
        }else{
            cadena +="<option value=''>'NO SE ENCONTRARON REGISTROS'</option>";
            $("#sel_distrito").html(cadena);
        }
    })
}