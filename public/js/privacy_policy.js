$(".condition").click(function(){
    var number = $(this).index();
    condition(number);
});

function condition(number){
    $(".condition_content").hide();
    $(".condition").removeClass("condition_active");
    $(".condition_content").eq(number).show();
    $(".condition").eq(number).addClass("condition_active");
}

var hash = window.location.hash.substring(1);
if (window.location.hash ){
    var hash = window.location.hash.substring(1);
    condition(hash);    
}
$(document).ready();    
