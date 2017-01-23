$(document).ready(function(){

  $(document).keypress("u",function(e) {
  if(e.ctrlKey)
    alert("Not allowed");
});
  //Initially hiding the 'News' list item
  $("#topFix").hide();
  $("#news_li").hide();
  $("#sections").addClass("col-lg-9");
  $("#btn_news").click(function(e){  //Upon clicking the 'Close' button in the news Bulletim
    $("#news_li").fadeIn();
    $("#news").fadeOut();
    $("#sections").removeClass("col-lg-9");
    $("#sections").addClass("col-lg-12");
    $('.addGradient').addClass('text-center');
    e.preventDefault();
  });
  $("#news_li").click(function(e){ 
    $("#news").fadeIn();
    $("#news_li").fadeOut();
    $("#sections").removeClass("col-lg-12");
    $("#sections").addClass("col-lg-9");
    $('.addGradient').removeClass('text-center');
    e.preventDefault();
  });

  $('.news_article').on('click',function(e){
    e.preventDefault();
    var index = $(this).attr('id');;
    $.ajax( 
           {
            type: "POST",
            url: "http://localhost/Stryker/index.php/Stryker_home/getNews",
            data: 'index='+index,
            dataType: "json",
            cache: false,
            success: function(response){            
              try{    
                 document.getElementById("news-title").innerHTML = response['title'];
                  document.getElementById("news-article").innerHTML = response['article'];
                           
              }catch(e) {   
                console.log(e);
              }   
            },
            error: function(jqXHR, textStatus, errorThrown) { console.log('Status: ' + textStatus, 'Error: ' + errorThrown); }           
          });        
  });


});

