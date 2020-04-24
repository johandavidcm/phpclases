$(document).ready(function(){
    $('#Formulario1').submit(function(e){
        e.preventDefault();
        var data = $(this).serializeArray();
        data.push({name: 'tag', value:'formulario1'});
        $.ajax({
            type: "POST",
            url: "Back/validar.php",
            data: data,
            success: function(resp){
                $('#respuesta').html(resp);
                console.log(data[0].value);
                if(resp == ""){
                    $(data).each(function(i){
                        document.cookie= data[i].name+"="+data[i].value;
                    });
                    location.href = 'ReciboDeDatos.php';
                }
            }
        });
    });
});