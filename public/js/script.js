const body = document.body;
const scrollUp = "scroll-up";
const initialView = "initial-view";
const scrollDown = "scroll-down";
let lastScroll = 0;

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll <= 50) {
    body.classList.remove(scrollUp);
    body.classList.add(initialView);
      return;
  }

  if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
    // down
    body.classList.remove(scrollUp);
    body.classList.add(scrollDown);
    body.classList.remove(initialView);
  } else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
    // up
    body.classList.remove(scrollDown);
    body.classList.add(scrollUp);
    body.classList.remove(initialView);
  }
  lastScroll = currentScroll;
});


$('.act').click(function(){
  $('.act').removeClass('act2');
  $(this).addClass('act2');
  var t = $(this).attr('type');
  $('#usertype').val(t);
  if(t=="manager"){
    $('.hidefrom').show();
    $('.changeplace').attr('placeholder','Имя');
  } else {
    $('.hidefrom').hide();
    $('.changeplace').attr('placeholder','Название организации');
  }
});



$('.click').click(function(){
  if($(this).hasClass('btn_favourite')){
    $(this).removeClass('btn_favourite').addClass('btn_favourite_active');
  }else{
    $(this).removeClass('btn_favourite_active').addClass('btn_favourite');
  }
  var id = $(this).data('id');
  var sid = $(this).data('style');
  $.ajaxSetup({
		headers: {
		  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
  $.ajax({
    type:"post",
    url:"/favajax",
    data:{id:id,sid:sid}
  });
});


$(document).ready(function(){
  $('.general_slider').slick({
    dots:true,
    arrows:false,
  });

  $('.ardibook_advantages_slider').slick({
    arrows:false,
    dots:false,
    infinite:false,
    slidesToShow:2,
    responsive:[
      {
        breakpoint:768,
        settings:{
          slidesToShow:1.5
        }
      },{
        breakpoint:480,
        settings:{
          slidesToShow:1.2,
        }
      }
    ]
  });

  $('.products_slider').slick({
    arrows:false,
    dots:false,
    infinite:false,
    slidesToShow:2,
    responsive:[
      {
        breakpoint:768,
        settings:{
          slidesToShow:1.5,
        }
      },{
        breakpoint:480,
        settings:{
          slidesToShow:1.2,
        }
      }
    ]
  });

  $('.product_slider').slick({
    arrows:true,
    dots:false,
    infinite:false,
    slidesToShow:3,
    responsive:[
      {
        breakpoint:960,
        settings:{
          arrows:false,
          slidesToShow:2,
        }
      },{
        breakpoint:768,
        settings:{
          arrows:false,
          slidesToShow:1.4,
        }
      },{
        breakpoint:480,
        settings:{
          arrows:false,
          slidesToShow:1.2,
        }
      }
    ]
  });

  $('.product_image_slider').slick({
    infinite:false,
    slidesToShow:1,
  });

  $('.reviews_slider').slick({
    infinite:false,
    slidesToShow:3,
    responsive:[
        {
        breakpoint:960,
        settings:{
          slidesToShow:2,
        }
      },
      {
        breakpoint:768,
        settings:{
          slidesToShow:1.3,
        }
      },{
        breakpoint:480,
        settings:{
          slidesToShow:1.1,
        }
      }
    ]

  });
  

  $('.where_find_slider').slick({
    arrows:false,
    dots:false,
    infinite:false,
    slidesToShow:2,
    responsive:[
      {
        breakpoint:768,
        settings:{
          slidesToShow:1.5,
        }
      },{
        breakpoint:480,
        settings:{
          slidesToShow:1.2,
        }
      }
    ]
  });

});

$('.profile_icon').click(function(){
  $('.profile_hover_block').show();
});

$('.hamburger').click(function(){ 
  $('body').css('overflow-y','hidden');
  $('.burger_menu,.popup').fadeIn();
});

$('.close ,.popup').click(function(){
  $('body').css('overflow-y','auto');
  $('.burger_menu,.popup').fadeOut();
});


var vid=$('.video_showing')[0];

function playVid(){
  var vid=$('.video_showing').eq(0);
  vid.trigger('play');
  $('.btn_player_white').hide();
}

function videoEnded(){
  vid.currentTime=0;
  $('.btn_player_white').show(); 
}
function pauseVid(){
  vid.pause();
  $('.btn_player_white').show();
}

$('.btn_player').click(function(){
  $('body').css('overflow-y','hidden');
  $('.popup,.popup_video').fadeIn();
});

$('.popup_close,.popup').click(function(){
  $('body').css('overflow-y','auto');
  $('.popup_video,.popup').fadeOut();
  pauseVid();
  vid.currentTime=0; 
});


$('#vvv6').click(function(){
  var vvv=$('#vv6');
  vvv.trigger('play');
  $('#vvv6').hide();
});
$('#vv6').click(function(){
  var vvv=$('#vv6');
  vvv.currentTime=0;
  vvv.trigger('pause');
  $('#vvv6').show();
});

$('#vvv7').click(function(){
  var vvv=$('#vv7');
  vvv.trigger('play');
  $('#vvv7').hide();
});
$('#vv7').click(function(){
  var vvv=$('#vv7');
  vvv.currentTime=0;
  vvv.trigger('pause');
  $('#vvv7').show();
});

var video2=$('.video2')[0];
function playVid2(){
  video2.play();
  $('.btn_player_white').hide();
}
function videoEnded2(){
  video2.currentTime=0;
  $('.btn_player_white').show(); 
}
function pauseVid2(){
  video2.pause();
  $('.btn_player_white').show();
}
$('.start2').click(function(){
  $('body').css('overflow-y','hidden');
  $('.popup,.popup_video2').fadeIn();
});
$('.popup_close,.popup').click(function(){
  $('body').css('overflow-y','auto');
  $('.popup_video2,.popup').fadeOut();
  pauseVid2();
  video2.currentTime=0;
});


var video3=$('.video3')[0];
function playVid3(){
  video3.play();
  $('.btn_player_white').hide();
}
function videoEnded3(){
  video3.currentTime=0;
  $('.btn_player_white').show(); 
}
function pauseVid3(){
  video3.pause();
  $('.btn_player_white').show();
}
$('.start3').click(function(){
  $('body').css('overflow-y','hidden');
  $('.popup,.popup_video3').fadeIn();
});
$('.popup_close,.popup').click(function(){
  $('body').css('overflow-y','auto');
  $('.popup_video3,.popup').fadeOut();
  pauseVid3();
  video3.currentTime=0;
});

var video4=$('.video4')[0];
function playVid4(){
  video4.play();
  $('.btn_player_white').hide();
}
function videoEnded4(){
  video4.currentTime=0;
  $('.btn_player_white').show(); 
}
function pauseVid4(){
  video4.pause();
  $('.btn_player_white').show();
}
$('.start4').click(function(){
  $('body').css('overflow-y','hidden');
  $('.popup,.popup_video3').fadeIn();
});
$('.popup_close,.popup').click(function(){
  $('body').css('overflow-y','auto');
  $('.popup_video3,.popup').fadeOut();
  pauseVid4();
  video4.currentTime=0;
});

var video5=$('.video5')[0];
function playVid5(){
  video5.play();
  $('.btn_player_white').hide();
}
function videoEnded5(){
  video5.currentTime=0;
  $('.btn_player_white').show(); 
}
function pauseVid5(){
  video5.pause();
  $('.btn_player_white').show();
}

// var tosp=$('.little_about_us').first().offset().top-$(window).height();

// var t=tosp-$(window).scrollTop();
// if( $(window).scrollTop()+$(window).height()<tosp){
//   console.log('success');
// }
// else{console.log('false');}

$(window).resize(function(){
  profile_hover();
});
  
function profile_hover(){
  if($(window).width() < 1024){
    $('.profile_icon').removeClass('prof_icon_hover');
  } 
  else{
      $('.profile_icon').addClass('prof_icon_hover');
  }
}
  if($(window).width() < 1024){
    $('.profile_icon').removeClass('prof_icon_hover');
  } 
  else{
      $('.profile_icon').addClass('prof_icon_hover');
  }

// var o=true;
// var g;
// var s;
// $('.prof_icon').on("click",function(r){
//   g=r.currentTarget.nextElementSibling;
//   s=r.target;
//   if($(window).width() < 1024){
//     if(o==true){
//        $('.profile_hover_block').removeClass('hide');
//        o=false;
//     }else{
//       $('.profile_hover_block').addClass('hide');
//       o=true;
//     }
//   }
// });

// $('*').on("click",function(re){
//   if(o==false){
//     if(re.target==g || re.target!==s){
//       $('.profile_hover_block').addClass('hide');
//       o=true;
//     }
//   }
// });
// $(document).ready(function(){
//   profHoverScroll();
// });
// function profHoverScroll(){
//   $(window).scroll(function(){
//     if(o==false){
//       var scrltp=$(window).scrollTop();
//       if(scrltp > $('header').height()+132){
//         $('.profile_hover_block').addClass('hide');
//         o=true;
//       }
//     }
//   })
// }
















function popupSlider(){
  $('.popup_review_slider').slick({
    slidesToShow:1,
    infinite:false,
  });
}
$('.read_all').click(function(){
  popupSlider();
  $('body').css('overflow-y','hidden');
  $('.popup_slider,.popup').fadeIn();
});
$('.popup_review_close,.popup').click(function(){
  $('body').css('overflow-y','auto');
  $('.popup_slider,.popup').fadeOut();
  if($('.popup_review_slider').hasClass('slick-initialized')){
    setTimeout(function(){$('.popup_review_slider').slick('unslick');},500);
  }
});




$('.footer_form button').click(function(){
      $('.emm').hide();
      $('.emm2').hide();
      $('.smm').hide();
  var val = $('.footer_form input').val();
  $.ajaxSetup({
		headers: {
		  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
  $.ajax({
    type:"post",
    url:"/subscribeajax",
    data:{val:val}
  }).done(function(res){
    if(res==0){
      $('.emm').fadeIn();
    } else if(res==1){
      $('.emm2').fadeIn();
    } else if(res==2){
      $('.smm').fadeIn();
      $('.footer_form input').val('');
    } 
    setTimeout(function(){
      $('.emm').fadeOut();
      $('.emm2').fadeOut();
      $('.smm').fadeOut();
    },5000);
  });
});

