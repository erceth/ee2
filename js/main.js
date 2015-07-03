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

    console.log('%c Isn\'t this a pleasant surprise.', 'background: #F55641; color: #fff; font: 20px/50px arial; padding: 10px 20px');console.log('%c ', 'font-size: 100px; padding: 10px 150px; background: url(http://cdn.nyanit.com/nyan2.gif) no-repeat');
    
});

