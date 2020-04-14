// //FUNÇÃO PARA TEMPORIZAR OS ALERTAS // 

$(document).ready(function() {
    window.setTimeout(function() {
            $(".fade").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 3000)
    });  