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
                document.getElementById('respuesta').innerHTML = "";
                if(resp == null){
                    $(data).each(function(i){
                        document.cookie= data[i].name+"="+data[i].value;
                    });
                    location.href = 'ReciboDeDatos.php';
                }
                else{
                    var arrayCadena = resp.split(',');
                    for (var i = 0; i < arrayCadena.length; i++) {
                        document.getElementById('respuesta').innerHTML += arrayCadena[i] +"<br>";
                    }
                    document.getElementById('txtnombres').focus();
                }
            }
        });
    });
});