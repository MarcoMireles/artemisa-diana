
$( document ).ready(function() {
    var btn = $('#dale-duro');

    btn.on('click', function(e){
        e.preventDefault();
        var numero = $('#numero').val();
        $('#error').html('El valor debe ser entre 1 y 3999 beibi').hide();
        if(numero >=1 && numero <= 3999){
            $.ajax({
                url: 'romanos.php',
                type: 'post',
                data: {
                    num:numero
                },success: function(result) {
                    $('#resultado').html(result);
                }
            });
        }else{
            $('#error').html('El valor debe ser entre 1 y 3999 beibi').show();
        }

    })
});