/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).on('click', '#create-incidencia', (function() {
        $.get(
            $(this).data('url'),
            function (data) {
                $('.modal-body').html(data);
                //$('#modal').find('button[type="submit"]').addClass('btn btn-danger').click(function(recibirParametros){console.log('Mostrando');recibirParametros.preventDefault()});
                $('#modal').modal();
            }
        );
    }));
    
$(document).on('click', 'a[data-action ="update"]', (function() {
        $.get(
            $(this).data('url'),
            function (data) {
                $('.modal-body').html(data);
                $('#modal').modal();
            }
        );
    }));

$(document).on('click', '#newSeguimientojs',(function() {
        $.get(
                $(this).data('url'),
                function (data) {
                    $('.modal-body').html(data);
                    $('#modal').modal();
                }
            );
        })
    );