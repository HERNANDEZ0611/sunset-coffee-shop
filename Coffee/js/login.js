$(function() {
    $('.btn-registro,.btn-sesion').click(function() {
        $('.regis').toggleClass('active')
        $('.inicio').toggleClass('active')
        console.log('clic en el boton')
    })
})

function registrar() {
    $.ajax({
        url: 'controlador.php',
        type: 'POST',
        data: $('#formRegistro').serialize()+'&metodo=registrar',
        dataType: 'json',
        success: function(response) {
            console.log(response)
        }
    })
}

function login() {
    $.ajax({
        url: 'controlador.php',
        type: 'POST',
        data: $('#formLogin').serialize()+'&metodo=login',
        dataType: 'json',
        success: function(response) {
            console.log(response)
        }
    })
}