/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).on('click', '#create-incidencia', (function () {
    $.get(
            $(this).data('url'),
            function (data) {
                $('.modal-body').html(data);
                //$('#modal').find('button[type="submit"]').addClass('btn btn-danger').click(function(recibirParametros){console.log('Mostrando');recibirParametros.preventDefault()});
                $('#modal').modal();
            }
    );
}));

$(document).on('click', 'a[data-action ="update"]', (function () {
    $.get(
            $(this).data('url'),
            function (data) {
                $('.modal-body').html(data);
                $('#modal').modal();
            }
    );
}));

$(document).on('click', '#newSeguimientojs', (function () {
    $.get(
            $(this).data('url'),
            function (data) {
                $('.modal-body').html(data);
                $('#modal').modal();
            }
    );
})
        );

$(document).on('click', '#create-profesional', (function () {
    $.get(
            $(this).data('url'),
            function (data) {
                $('.modal-body').html(data);
                //$('#modal').find('button[type="submit"]').addClass('btn btn-danger').click(function(recibirParametros){console.log('Mostrando');recibirParametros.preventDefault()});
                $('#modal').modal();
            }
    );
}));

$(document).on('click', '#create-sector', (function () {
    $.get(
            $(this).data('url'),
            function (data) {
                $('.modal-body').html(data);
                //$('#modal').find('button[type="submit"]').addClass('btn btn-danger').click(function(recibirParametros){console.log('Mostrando');recibirParametros.preventDefault()});
                $('#modal').modal();
            }
    );
}));

$(document).on('click', '#create-lugar', (function () {
    $.get(
            $(this).data('url'),
            function (data) {
                $('.modal-body').html(data);
                //$('#modal').find('button[type="submit"]').addClass('btn btn-danger').click(function(recibirParametros){console.log('Mostrando');recibirParametros.preventDefault()});
                $('#modal').modal();
            }
    );
}));

$(document).on('click', '#create-edificio', (function () {  //llamo a la funcion cuando hay un click en el id create-edificio que es un boton
    var create_url = $(this).data('url');                   //se guarda la url del tag (data-url) (/prueba/web/index.php?r=cli-edificio%2Fcreate)
    $.get(                                                  //solicitud ajax por la cual se envian los datos
            create_url,                     
            function (data) {                               //recibo por parametro la respuesta html
                $('.modal-body').html(data);                //muestro los campos que traigo en data a traves de un modal
                var form = $('.modal-body').find('form');   //busco los campos que estan contenidos en el form y los guardo **********<<<<<---------------
                $('.modal-body').find('button[type="submit"]').addClass('btn btn-danger').click( //en el modal busco al unico submit que hay y al hacer click muestro el 1er error
                        
                        function (ev) {
                            console.log("1");
                            ev.preventDefault();            //cancela la accion por defecto 
                            $.post(create_url, $(form).serialize(), function (data) { //envia a la url los datos que estan en el formulario
                                if (data) {                 //verifica si hay contenido html
                                    console.log("2");
                                    
                                    
                                                    $('.modal-body').html(data);//devuelve el contenido con errores al modal
                                                    var form = $('.modal-body').find('form');//***********repite de lo de arriba

                                                    $('.modal-body').find('button[type="submit"]').addClass('btn btn-danger').click(
                                                            function (ev) {
                                                                console.log("3");
                                                                ev.preventDefault();
                                                                $.post(create_url, $(form).serialize(), function (data) {
                                                                    if (data) {
                                                                        $('.modal-body').html(data);
                                                                        var form = $('.modal-body').find('form');
                                                                        console.log("estoy en el if");
                                                                        //es por que me vuelve el formulario con errores
                                                                    } else {
                                                                        //es por que se creo el registro de forma exitosa
                                                                        console.log("se creo con exito");
                                                                    }
                                                                    console.log("exito1");
                                                                }).error(function () {
                                                                    console.log("error");
                                                                });
                                                            }
                                                    );
                                                    //es por que me vuelve el formulario con errores
                                    
                                    
                                } else {
                                    //es por que se creo el registro de forma exitosa
                                }
                                console.log("exito2");
                            }).error(function () {
                                console.log("error");
                            });
                        }
                );
                $('#modal').modal();
            }
    );
}));

