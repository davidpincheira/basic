/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$(document).on('click', 'a[data-action ="update"]', (function () {
    $.get(
            $(this).data('url'),
            function (data) {
                $('.modal-body').html(data);
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


//////////////////////////Edificios/////////////////////
var cli_edificio_controller = {
    create_url:'',
    form: null,
    getFormCreate: function(){
        var controller = this;
        $.get(                                                  //solicitud ajax por la cual se envian los datos
            controller.create_url,                     
            function (data) {                               //recibo por parametro la respuesta html
                $('.modal-body').html(data);                //muestro los campos que traigo en data a traves de un modal
                controller.form = $('.modal-body').find('form');   //busco los campos que estan contenidos en el form y los guardo **********<<<<<---------------
                $('.modal-body').find('button[type="submit"]').addClass('btn btn-success').click( //en el modal busco al unico submit que hay y al hacer click muestro el 1er error
                    function(ev){
                        ev.preventDefault();
                        controller.sendFormCreate();
                    }
                );
            });
    },
    sendFormCreate: function(){
        var controller = this;
        $.post(controller.create_url, $(controller.form).serialize()).done( 
                function (data) {
                    if (data) {
                           $('.modal-body').html(data);
                           controller.form = $('.modal-body').find('form');
                           $('.modal-body').find('button[type="submit"]').addClass('btn btn-success').click( //en el modal busco al unico submit que hay y al hacer click muestro el 1er error
                                function(ev){
                                    ev.preventDefault();
                                    controller.sendFormCreate();
                                }
                           );
                       } else {
                           console.log("se creo con exito");
                       }
                }).error(function () {
                    console.log("error");
                });
    },
    init: function(){
        var controller = this;
        $('#create-edificio').click(function(){
            controller.create_url = $(this).data('url');
            controller.getFormCreate();
        });
    }
};
$(document).ready(function(){
    cli_edificio_controller.init();
});

//////////////////////////LugaresCentrales/////////////////////
var lugar_central_controller = {
    create_url:'',
    form: null,
    getFormCreate: function(){
        var controller = this;
        $.get(                                                  //solicitud ajax por la cual se envian los datos
            controller.create_url,                     
            function (data) {                               //recibo por parametro la respuesta html
                $('.modal-body').html(data);                //muestro los campos que traigo en data a traves de un modal
                controller.form = $('.modal-body').find('form');   //busco los campos que estan contenidos en el form y los guardo **********<<<<<---------------
                $('.modal-body').find('button[type="submit"]').addClass('btn btn-success').click( //en el modal busco al unico submit que hay y al hacer click muestro el 1er error
                    function(ev){
                        ev.preventDefault();
                        controller.sendFormCreate();
                    }
                );
            });
    },
    sendFormCreate: function(){
        var controller = this;
        $.post(controller.create_url, $(controller.form).serialize()).done( 
                function (data) {
                    if (data) {
                           $('.modal-body').html(data);
                           controller.form = $('.modal-body').find('form');
                           $('.modal-body').find('button[type="submit"]').addClass('btn btn-success').click( //en el modal busco al unico submit que hay y al hacer click muestro el 1er error
                                function(ev){
                                    ev.preventDefault();
                                    controller.sendFormCreate();
                                }
                           );
                       } else {
                           console.log("se creo con exito");
                       }
                }).error(function () {
                    console.log("error");
                });
    },
    init: function(){
        var controller = this;
        $('#create-lugar').click(function(){
            controller.create_url = $(this).data('url');
            controller.getFormCreate();
        });
    }
};
$(document).ready(function(){
    lugar_central_controller.init();
});

//////////////////////////Profesionales/////////////////////
var profesional_controller = {
    create_url:'',
    form: null,
    getFormCreate: function(){
        var controller = this;
        $.get(                                                  //solicitud ajax por la cual se envian los datos
            controller.create_url,                     
            function (data) {                               //recibo por parametro la respuesta html
                $('.modal-body').html(data);                //muestro los campos que traigo en data a traves de un modal
                controller.form = $('.modal-body').find('form');   //busco los campos que estan contenidos en el form y los guardo **********<<<<<---------------
                $('.modal-body').find('button[type="submit"]').addClass('btn btn-success').click( //en el modal busco al unico submit que hay y al hacer click muestro el 1er error
                    function(ev){
                        ev.preventDefault();
                        controller.sendFormCreate();
                    }
                );
            });
    },
    sendFormCreate: function(){
        var controller = this;
        $.post(controller.create_url, $(controller.form).serialize()).done( 
                function (data) {
                    if (data) {
                           $('.modal-body').html(data);
                           controller.form = $('.modal-body').find('form');
                           $('.modal-body').find('button[type="submit"]').addClass('btn btn-success').click( //en el modal busco al unico submit que hay y al hacer click muestro el 1er error
                                function(ev){
                                    ev.preventDefault();
                                    controller.sendFormCreate();
                                }
                           );
                       } else {
                           console.log("se creo con exito");
                       }
                }).error(function () {
                    console.log("error");
                });
    },
    init: function(){
        var controller = this;
        $('#create-profesional').click(function(){
            controller.create_url = $(this).data('url');
            controller.getFormCreate();
        });
    }
};
$(document).ready(function(){
    profesional_controller.init();
});

//////////////////////////Incidencias/////////////////////
var incidencia_controller = {
    create_url:'',
    form: null,
    getFormCreate: function(){
        var controller = this;
        $.get(                                                  //solicitud ajax por la cual se envian los datos
            controller.create_url,                     
            function (data) {                               //recibo por parametro la respuesta html
                $('.modal-body').html(data);                //muestro los campos que traigo en data a traves de un modal
                controller.form = $('.modal-body').find('form');   //busco los campos que estan contenidos en el form y los guardo **********<<<<<---------------
                $('.modal-body').find('button[type="submit"]').addClass('btn btn-success').click( //en el modal busco al unico submit que hay y al hacer click muestro el 1er error
                    function(ev){
                        ev.preventDefault();
                        controller.sendFormCreate();
                    }
                );
            });
    },
    sendFormCreate: function(){
        var controller = this;
        $.post(controller.create_url, $(controller.form).serialize()).done( 
                function (data) {
                    if (data) {
                           $('.modal-body').html(data);
                           controller.form = $('.modal-body').find('form');
                           $('.modal-body').find('button[type="submit"]').addClass('btn btn-success').click( //en el modal busco al unico submit que hay y al hacer click muestro el 1er error
                                function(ev){
                                    ev.preventDefault();
                                    controller.sendFormCreate();
                                }
                           );
                       } else {
                           console.log("se creo con exito");
                       }
                }).error(function () {
                    console.log("error");
                });
    },
    init: function(){
        var controller = this;
        $('#create-incidencia').click(function(){
            controller.create_url = $(this).data('url');
            controller.getFormCreate();
        });
    }
};
$(document).ready(function(){
    incidencia_controller.init();
});

//////////////////////////NewSeguimiento/////////////////////
var seguimiento_controller = {
    create_url:'',
    form: null,
    getFormCreate: function(){
        var controller = this;
        $.get(                                                  //solicitud ajax por la cual se envian los datos
            controller.create_url,                     
            function (data) {                               //recibo por parametro la respuesta html
                $('.modal-body').html(data);                //muestro los campos que traigo en data a traves de un modal
                controller.form = $('.modal-body').find('form');   //busco los campos que estan contenidos en el form y los guardo **********<<<<<---------------
                $('.modal-body').find('button[type="submit"]').addClass('btn btn-success').click( //en el modal busco al unico submit que hay y al hacer click muestro el 1er error
                    function(ev){
                        ev.preventDefault();
                        controller.sendFormCreate();
                    }
                );
            });
    },
    sendFormCreate: function(){
        var controller = this;
        $.post(controller.create_url, $(controller.form).serialize()).done( 
                function (data) {
                    if (data) {
                           $('.modal-body').html(data);
                           controller.form = $('.modal-body').find('form');
                           $('.modal-body').find('button[type="submit"]').addClass('btn btn-success').click( //en el modal busco al unico submit que hay y al hacer click muestro el 1er error
                                function(ev){
                                    ev.preventDefault();
                                    controller.sendFormCreate();
                                }
                           );
                       } else {
                           console.log("se creo con exito");
                       }
                }).error(function () {
                    console.log("error");
                });
    },
    init: function(){
        var controller = this;
        $('#newSeguimientojs').click(function(){
            controller.create_url = $(this).data('url');
            controller.getFormCreate();
        });
        $('#updateSeguimientojs').click(function(){
            controller.create_url = $(this).data('url');
            controller.getFormCreate();
        });
    }
};
$(document).ready(function(){
    seguimiento_controller.init();
});