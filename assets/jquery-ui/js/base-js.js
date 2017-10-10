$(document).ready(function(){
    $("#secciones li button").click(function(){
        $("#secciones li button").each(function(){
            $(this).removeClass("active");
        });
        $(this).addClass("active");
        console.log("detalles");
    });
    $(".maximize").click(function(){
        console.log("maximize");
    });
    $( "#sortable" ).sortable({
        update: function(event, ui) {
            var ids = "";
            $("#sortable").children().each(function(){
                ids = ids + $(this).attr("data-id")+", ";
            });
            console.log(ids.substring(0, ids.length-2));
        }
    });
    $( "#sortable" ).disableSelection();
    $(".panel-minimizable .panel-heading").click(function(){
        var status = $(this).attr("data-status");
        var body = $(this).parent().find(".panel-body");
        if (status == 1) {
            $(this).attr("data-status", 2);
            $(body).slideUp();
        }
        else {
            $(this).attr("data-status", 1);
            $(body).slideDown();
        }
        console.log(body);
    });
    $("abbr").click(function(){
        var content = $(this).attr("title");
        var title = $(this).text();
        $('#global-modal .modal-title').text(title);
        $('#global-modal .modal-body').text(content);
        $('#global-modal').modal('show');
    });
});