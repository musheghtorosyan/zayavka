$('.pp').on("click",function(){
    var x = $(this).parent().children('span').text();
    x--;
    if(x<1) { x = 1; }
    $(this).parent().children('span').text(x);
    
    var id = $(this).data('id');
    var count = $(this).parent().children('span').text();
    var sid = $(this).data('style');
    var one = $(this).data('one');
    var total = one*count;
    total = numberWithSpaces(total);
    $('.it[data-id="'+id+'"]').text(total);
    $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    $.ajax({
      type:"post",
      url:"/basketajax2",
      data:{id:id,sid:sid,count:count}
    }).done(function(res){
        $('.basket_icon .pointer').text(res);
        getTotal(sid);
    });
    
  });



  $('.mm').on("click",function(){
    var x = $(this).parent().children('span').text();
    x++;
    $(this).parent().children('span').text(x);

    var id = $(this).data('id');
    var count = $(this).parent().children('span').text();
    var sid = $(this).data('style');
    var one = $(this).data('one');
    var total = one*count;
    total = numberWithSpaces(total);
    $('.it[data-id="'+id+'"]').text(total);
    $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    $.ajax({
      type:"post",
      url:"/basketajax2",
      data:{id:id,sid:sid,count:count}
    }).done(function(res){
        $('.basket_icon .pointer').text(res);
        getTotal(sid);
    });
  });



  $(window).resize(function(){
    document.location.reload(true);
  });


  function numberWithSpaces(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, " ");
    return parts.join(".");
}



function getTotal(uid){
      $.ajax({
        type:"post",
        url:"/gettotal",
        data:{uid:uid}
      }).done(function(res){
        res = numberWithSpaces(res);
          $('.all_price_number span').text(res);
      });
}