  $(document).ready(function(){
    $(".dropdown-button").dropdown();
    $('.scrollspy').scrollSpy();
    $('.carousel').carousel();
    $('.parallax').parallax();
    $('.collapsible').collapsible();
  });

  
 $(document).ready(function(){

  var pageHeader = $('#navbar');
  var start = pageHeader.offset().top;
  var contentBody = $('.content');
  var aboutContent = $('.about');

  $.event.add(window,'scroll',function(){
      var p=$(window).scrollTop();
      pageHeader.css('position',(p>start)?'fixed':'static');
      pageHeader.css('top',(p>start)?'0px':'');
      contentBody.css('margin-top',(p>start)?'5%':'');
      aboutContent.css('margin-top',(p>start)?'10%':'');
  }); 
});