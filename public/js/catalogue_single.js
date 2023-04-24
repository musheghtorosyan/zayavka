// var turn=true;
// var clickedSelect;
// var selNext;
// $('.structureSelect').click(function(ev){
//     clickedSelect=ev.currentTarget.nextElementSibling;
//     selNext=ev.target;
//     $('.structureOptions').stop().slideToggle();
//     if(turn==true){
//             $('#dropDown').css({"transform":"rotateX(180deg)"});
//             turn=false;
//         }else{
//             $('#dropDown').css({"transform":"rotateX(0)"});
//             turn=true;
//         }
// });

// $('*').click(function(eq){
//     if(turn==false){
//         if(eq.target==clickedSelect || eq.target!==selNext ){
//             $('.structureOptions').slideUp();
//             $('#dropDown').css({"transform":"rotateX(0)"});
//             turn=true;
//         }
//     }
// });
// var turn=true;
// var target;
// $('*').click(function(evo){
//         if(evo.target == target){
//             $('.product_delivery_hover_block').hide();
//         }
// })
// if($(window).width() < 1200){
//     $('.product_delivery').removeClass('product_delivery_hover');
//     }
//     else{
//         $('.product_delivery').addClass('product_delivery_hover');
//     }

$(window).resize(function(){
    delivery();
});
    
function delivery(){
    if($(window).width() < 1024){
        $('.product_delivery').removeClass('product_delivery_hover');
    } 
    else{
        $('.product_delivery').addClass('product_delivery_hover');
    }
}
if($(window).width() < 1024){
    $('.product_delivery').removeClass('product_delivery_hover');
} 
else{
    $('.product_delivery').addClass('product_delivery_hover');
}




$('.addtobasket').click(function(){
    var th = $(this);
    var id = $(this).data('id');
    var count = $('.products_count span').text();
    var sid = $(this).data('style');
    $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    $.ajax({
      type:"post",
      url:"/basketajax",
      data:{id:id,sid:sid,count:count}
    }).done(function(res){
        $('.basket_icon .pointer').text(res);
        th.addClass('bads');
        setTimeout(function(){
          th.removeClass('bads');
        },200);
    });
  });

  $('.products_count img:eq(0)').click(function(){
    var x = $('.products_count span').text();
    x--;
    if(x<1) { x = 1; }
    $('.products_count span').text(x);
  });

  $('.products_count img:eq(1)').click(function(){
    var x = $('.products_count span').text();
    x++;
    $('.products_count span').text(x);
  });