
$( document ).ready(function(){

  $(".portrait-1").mousemove(function(e){
      var divWidth = $(this).width();
      var imageSrcArray = ["portraits/marnix-5.jpg", "portraits/marnix-4.jpg", "portraits/marnix-3.jpg", "portraits/marnix-2.jpg", "portraits/marnix-1.jpg"];
  		var relativeXPosition = (e.pageX - $(this).offset().left );
      var currentImage = imageSrcArray[parseInt(relativeXPosition / divWidth * imageSrcArray.length)];
      $(this).attr("src", currentImage);
  		// console.log (relativeXPosition);
    });

  $(".portrait-2").mousemove(function(e){
      var divWidth = $(this).width();
      var imageSrcArray = ["portraits/harmen-5.jpg", "portraits/harmen-4.jpg", "portraits/harmen-3.jpg", "portraits/harmen-2.jpg", "portraits/harmen-1.jpg"];
  	  var relativeXPosition = (e.pageX - $(this).offset().left );
      var currentImage = imageSrcArray[parseInt(relativeXPosition / divWidth * imageSrcArray.length)];
      $(this).attr("src", currentImage);
  	  // console.log (relativeXPosition);
    });

  $(".portrait-3").mousemove(function(e){
      var divWidth = $(this).width();
      var imageSrcArray = ["portraits/peter-5.jpg", "portraits/peter-4.jpg", "portraits/peter-3.jpg", "portraits/peter-2.jpg", "portraits/peter-1.jpg"];
    	var relativeXPosition = (e.pageX - $(this).offset().left );
      var currentImage = imageSrcArray[parseInt(relativeXPosition / divWidth * imageSrcArray.length)];
      $(this).attr("src", currentImage);
    	// console.log (relativeXPosition);
    });

});
