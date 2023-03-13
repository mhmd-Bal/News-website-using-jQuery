$.getJSON("GetAllNews.js", function(result){

  let news_block = $("<div></div>");
  $(".Wrapper").append(news_block);

  $.each(result, function(i, field){
    news_block.append(field + "</br>");
  });
});
