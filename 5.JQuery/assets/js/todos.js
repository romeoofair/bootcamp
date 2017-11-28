//Check off specific todos by Clicking
 $("li").click(function(){ 
    // //if li is gray
    // if($(this).css("color") === "rgb(128, 128, 128)") {
    //   //turn it black
    //   $(this).css({
    //     color: "black",
    //     textDecoration: "none"
    //    });
    // }
    // //else
    // else{
    //   $(this).css({
    //     //turn it gray 
    //     color: "gray",
    //     textDecoration: "line-through"
    //   });
    // }
    $(this).toggleClass("completed");
  });

//click on x to delete todo
  $("span").click(function(e){
    $(this).parent().fadeOut(500,function(){
      $(this).remove();
    });
    e.stopPropagation();
  });

  $("input[type= 'text']").keypress(function(event){
    if(event.which === 13){
      var todoText = $(this).val();
      $(this).val("");
      //create a new li and add to ul
      $("ul").append("<li><span>X</span> "+ todoText +"</li>");
    }
  });