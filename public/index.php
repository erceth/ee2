<?php
	$f3 = require("../includes/f3/base.php");

	define("template_path", "../includes/templates");
	define("snippets_path", "../includes/snippets");

	$f3->set("navigation_path", "../includes/snippets/navigation.html");
	$template = new Template;
	echo $template->render(template_path . "/header.html");


	$f3->set("web_crawler_short_description", snippets_path . "/web_crawler_short_description.html");
	$f3->set("web_crawler_medium_description", snippets_path . "/web_crawler_medium_description.html");
	$f3->set("web_crawler_long_description", snippets_path . "/web_crawler_long_description.html");
	$f3->set("jsflags_short_description", snippets_path . "/jsflags_short_description.html");
	$f3->set("jsflags_medium_description", snippets_path . "/jsflags_medium_description.html");
	$f3->set("jsflags_long_description", snippets_path . "/jsflags_long_description.html");
	$f3->set("sms_tracker_short_description", snippets_path . "/sms_tracker_short_description.html");
	$f3->set("sms_tracker_medium_description", snippets_path . "/sms_tracker_medium_description.html");
	$f3->set("sms_tracker_long_description", snippets_path . "/sms_tracker_long_description.html");

	$f3->set("freedom_festival_short_description", snippets_path . "/freedom_festival_short_description.html");
	$f3->set("freedom_festival_medium_description", snippets_path . "/freedom_festival_medium_description.html");
	$f3->set("freedom_festival_long_description", snippets_path . "/freedom_festival_long_description.html");

	$f3->set("filer_short_description", snippets_path . "/filer_short_description.html");
	$f3->set("filer_medium_description", snippets_path . "/filer_medium_description.html");
	$f3->set("filer_long_description", snippets_path . "/filer_long_description.html");

	$f3->set("social_media_links", snippets_path . "/social_media_links.html");
	


	$f3->route('GET /',
	    function($f3) {
	    	global $template;
		    $datetime1 = new DateTime('2012-04-01');
			$datetime2 = new DateTime('now');
			$interval = $datetime1->diff($datetime2);
		    $f3->set("timeExperience", $interval->format('%y years %m month(s)'));
	        echo $template->render(template_path ."/home.html");
	    }
	);
	$f3->route('GET /about',
	    function() {
	        $view=new View;
	        echo $view->render(template_path ."/about.html");
	    }
	);
	$f3->route('GET /resume',
	    function() {
	        $view=new View;
	        echo $view->render(template_path ."/resume.html");
	    }
	);
	$f3->route('GET /projects',
	    function($f3) {
	    	global $template;

	        echo $template->render(template_path ."/projects.html");
	    }
	);

	$f3->route('GET /contact',
	    function($f3) {
	    	global $template;
	    	echo $template->render(template_path ."/contact.html");
	    }
	);

	$f3->route('POST /contact',
	    function($f3) {
	    	
	    	$post = $f3->get('POST');

	    	if (isset($post["message"])) {
	    		$message = urlencode($post["message"]);
	    		$logger = new Log('../messages/messages.log');
	    		$logger->write($message);
	    	}

	        $view=new View;
	        echo $view->render(template_path ."/contact_submit.html");
	    }
	);

	$f3->route('GET /sms-tracker',
	    function() {
	    	global $template;
	    	echo $template->render(template_path ."/sms_tracker.html");
	    }
	);

	$f3->route('GET /web-crawler',
	    function() {
	        global $template;
	        echo $template->render(template_path ."/web_crawler.html");
	    }
	);

	$f3->route('GET /jsflags',
	    function() {
	        global $template;
	        echo $template->render(template_path ."/jsflags.html");
	    }
	);

	$f3->route('GET /freedom-festival',
	    function() {
	        global $template;
	        echo $template->render(template_path ."/freedom-festival.html");
	    }
	);

	$f3->route('GET /filer',
	    function() {
	        global $template;
	        echo $template->render(template_path ."/filer.html");
	    }
	);

	


	$f3->run();



 	include template_path . "/footer.html";
?>


