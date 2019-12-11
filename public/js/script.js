$(document).ready(function() {
    /*Le damos el formato a la tabla con datatable.net */
    $('#poketable').DataTable();
    /*Mostramos un modal con los pokemones selccionados*/
    $("#boton").click(function() {
        $('#myModal').modal({ backdrop: 'static', keyboard: false })
        var arrTodo = new Array();
        /*Agrupamos todos los input checkbox con name='nombrepokemon'*/
        $('input[name="seleccion[]"]:checked').each(function(element) {
            var item = {};
            item.id = this.value;
            arrTodo.push(item);
        });
        /*Pedimos que al menos seleccione por lo menos 1*/
        if (arrTodo.length == 0) {
            $("#alert").append('<b class="alert alert-warning">Seleccione al menos 1 </b>');
            $('#guardar').hide();
        } 
        /*Si hay mas de uno seleccionado mandamos el arreglo al modal*/
        else {
            $('#guardar').show();
            if (arrTodo.length <= 10) {
                for (var i = 0; i < arrTodo.length; i++) {
                    $("#demo").append('<b class="alert-info">'+arrTodo[i].id+ '</b></br>');
                }
            } 
            /*Si son mas de 10 seleccionados le informamos y no permitimos guardar estos*/
            else {
                alert("Solo puedes seleccionar 10");
                $('#myModal').modal('hide');
            }
        }
    });
    /*Limpiamos los datos una vez que se cierra el modal para no repetir estos*/
    $("#limpiar").click(function() {
        $(".dem").empty();
        $(".mens").empty();
    });
});
