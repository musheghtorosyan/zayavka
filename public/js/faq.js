$(document).ready(function(){
  $('.question').click(function(){
    $('.answer').slideUp();
    $(".question_text").removeClass("question_active");
    $(".question_mark").children('img').attr('src','/logos/plus.svg');
    $(this).children(".question_text").addClass("question_active");
    $(this).children(".question_mark").children('img').attr('src','/logos/minus.svg');
    if(!($(this).next().is(":visible"))){
      $(this).next().slideToggle();
    }else{
      $(this).children(".question_mark").children('img').attr('src','/logos/plus.svg');
      $(this).children(".question_text").removeClass("question_active");
    };
  });
});