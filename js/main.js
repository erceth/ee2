$(document).ready(function() {
    $(".hamburger").on("click", function(e) {
        $(".mobile-navigation").slideToggle();
        e.stopPropagation();
    });
    $("body").on("click", function() {
    	$(".mobile-navigation").slideUp();
    });
    setTimeout(function() {
    	$("body").removeClass("preload");	
    }, 2000);

    $(".logo").one("mouseover click", {}, function() {
    	$(this).append("<img class='flame flame1' src='../img/flame.gif''>");
    	$(this).append("<img class='flame flame2' src='../img/flame.gif''>");
    	$(this).append("<img class='flame flame3' src='../img/flame.gif''>");
    	$(this).append("<img class='flame flame4' src='../img/flame.gif''>");
    	$(this).append("<img class='flame flame5' src='../img/flame.gif''>");
    	$(this).append("<audio autoplay><source src='/sound/missle_launch.ogg' type='audio/ogg'><source src='missle_launch.mp3' type='audio/mpeg'><source src='missle_launch.wav' type='audio/wav'></audio>");

    	$(this).animate({
    		position: "relative",
    		top: "-100px",
    		left: "63px"
    	}, 1000);
    });
    
});

