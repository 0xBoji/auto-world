$(".nav").click(function(){
  $("#mySidenav").css('width','70px');
  $("#main").css('margin-left','70px');
  $(".logo").css('visibility', 'hidden');
  $(".logo span").css('visibility', 'visible');
   $(".logo span").css('margin-left', '-10px');
   $(".icon-a").css('visibility', 'hidden');
   $(".icons").css('visibility', 'visible');
   $(".icons").css('margin-left', '-8px');
    $(".nav").css('display','none');
    $(".nav2").css('display','block');
});

$(".nav2").click(function(){
  $("#mySidenav").css('width','300px');
  $("#main").css('margin-left','300px');
  $(".logo").css('visibility', 'visible');
   $(".icon-a").css('visibility', 'visible');
   $(".icons").css('visibility', 'visible');
   $(".nav").css('display','block');
    $(".nav2").css('display','none');
});