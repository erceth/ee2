<?php
	$f3 = require("../includes/f3/base.php");

	//paths used
	define("template_path", "../includes/templates");
	define("snippets_path", "../includes/snippets");
	define("description_path", "../includes/snippets/descriptions");
	define("meta_data_path", "../includes/snippets/meta_data");

	//path to navigation html for header
	$f3->set("navigation_path", "../includes/snippets/navigation.html");

	//descriptions for projects page and sub pages
	$f3->set("web_crawler_short_description", description_path . "/web_crawler_short_description.html");
	$f3->set("web_crawler_medium_description", description_path . "/web_crawler_medium_description.html");
	$f3->set("web_crawler_long_description", description_path . "/web_crawler_long_description.html");
	$f3->set("jsflags_short_description", description_path . "/jsflags_short_description.html");
	$f3->set("jsflags_medium_description", description_path . "/jsflags_medium_description.html");
	$f3->set("jsflags_long_description", description_path . "/jsflags_long_description.html");
	$f3->set("sms_tracker_short_description", description_path . "/sms_tracker_short_description.html");
	$f3->set("sms_tracker_medium_description", description_path . "/sms_tracker_medium_description.html");
	$f3->set("sms_tracker_long_description", description_path . "/sms_tracker_long_description.html");

	$f3->set("freedom_festival_short_description", description_path . "/freedom_festival_short_description.html");
	$f3->set("freedom_festival_medium_description", description_path . "/freedom_festival_medium_description.html");
	$f3->set("freedom_festival_long_description", description_path . "/freedom_festival_long_description.html");

	$f3->set("filer_short_description", description_path . "/filer_short_description.html");
	$f3->set("filer_medium_description", description_path . "/filer_medium_description.html");
	$f3->set("filer_long_description", description_path . "/filer_long_description.html");

	$f3->set("space_shooter_short_description", description_path . "/space_shooter_short_description.html");
	$f3->set("space_shooter_medium_description", description_path . "/space_shooter_medium_description.html");
	$f3->set("space_shooter_long_description", description_path . "/space_shooter_long_description.html");

	//path to social media html for footer
	$f3->set("social_media_links", snippets_path . "/social_media_links.html");


	$template = new Template;

	$f3->route('GET /',
	    function($f3) {
	    	global $template;
		    $datetime1 = new DateTime('2012-04-01');
			$datetime2 = new DateTime('now');
			$interval = $datetime1->diff($datetime2);
		    $f3->set("timeExperience", $interval->format('%y years %m month(s)'));

		    //meta data
		    $f3->set("title", meta_data_path . "/home_title.html");
		    $f3->set("description", meta_data_path . "/home_description.html");

		    //header
		    echo $template->render(template_path . "/header.html");

	        echo $template->render(template_path ."/home.html");
	    }
	);
	$f3->route('GET /about',
	    function($f3) {
	        $view=new View;
	        global $template;

	        //meta data
	        $f3->set("title", meta_data_path . "/about_title.html");
		    $f3->set("description", meta_data_path . "/about_description.html");

		    //header
		    echo $template->render(template_path . "/header.html");

	        echo $view->render(template_path ."/about.html");
	    }
	);
	// $f3->route('GET /resume',
	//     function() {
	//         $view=new View;
	//         echo $view->render(template_path ."/resume.html");
	//     }
	// );
	$f3->route('GET /projects',
	    function($f3) {
	    	global $template;

	    	//meta data
	        $f3->set("title", meta_data_path . "/projects_title.html");
		    $f3->set("description", meta_data_path . "/projects_description.html");

		    //header
		    echo $template->render(template_path . "/header.html");

	        echo $template->render(template_path ."/projects.html");
	    }
	);

	$f3->route('GET /contact',
	    function($f3) {
	    	global $template;

	    	//meta data
	    	$f3->set("title", meta_data_path . "/contact_title.html");
		    $f3->set("description", meta_data_path . "/contact_description.html");

		    //header
		    echo $template->render(template_path . "/header.html");

	    	echo $template->render(template_path ."/contact.html");
	    }
	);

	$f3->route('POST /contact',
	    function($f3) {
	    	global $template;
	    	
	    	$post = $f3->get('POST');

	    	if (isset($post["message"])) {
	    		$message = urlencode($post["message"]);
	    		$logger = new Log('../messages/messages.log');
	    		$logger->write($message);
	    	}

	        $view=new View;

	        //meta data
	        $f3->set("title", meta_data_path . "/contact_title.html");
		    $f3->set("description", meta_data_path . "/contact_description.html");

		    //header
		    echo $template->render(template_path . "/header.html");

	        echo $view->render(template_path ."/contact_submit.html");
	    }
	);

	$f3->route('GET /sms-tracker',
	    function($f3) {
	    	global $template;

	    	$f3->set("title", meta_data_path . "/sms_tracker_title.html");
		    $f3->set("description", meta_data_path . "/sms_tracker_description.html");
		    echo $template->render(template_path . "/header.html");

	    	echo $template->render(template_path ."/sms_tracker.html");
	    }
	);

	$f3->route('GET /web-crawler',
	    function($f3) {
	        global $template;

	        //meta data
	        $f3->set("title", meta_data_path . "/web_crawler_title.html");
		    $f3->set("description", meta_data_path . "/web_crawler_description.html");

		    //header
		    echo $template->render(template_path . "/header.html");

	        echo $template->render(template_path ."/web_crawler.html");
	    }
	);

	$f3->route('GET /jsflags',
	    function($f3) {
	        global $template;

	        //meta data
	        $f3->set("title", meta_data_path . "/jsflags_title.html");
		    $f3->set("description", meta_data_path . "/jsflags_description.html");

		    //header
		    echo $template->render(template_path . "/header.html");

	        echo $template->render(template_path ."/jsflags.html");
	    }
	);

	$f3->route('GET /freedom-festival',
	    function($f3) {
	        global $template;

	        //meta data
	        $f3->set("title", meta_data_path . "/freedom_festival_title.html");
		    $f3->set("description", meta_data_path . "/freedom_festival_description.html");

		    //header
		    echo $template->render(template_path . "/header.html");

	        echo $template->render(template_path ."/freedom-festival.html");
	    }
	);

	$f3->route('GET /filer',
	    function($f3) {
	        global $template;

	        //meta data
	        $f3->set("title", meta_data_path . "/filer_title.html");
		    $f3->set("description", meta_data_path . "/filer_description.html");

		    //header
		    echo $template->render(template_path . "/header.html");

	        echo $template->render(template_path ."/filer.html");
	    }
	);

	$f3->route('GET /space-shooter',
	    function($f3) {
	        global $template;

	        //meta data
	        $f3->set("title", meta_data_path . "/space_shooter_title.html");
		    $f3->set("description", meta_data_path . "/space_shooter_description.html");

		    //header
		    echo $template->render(template_path . "/header.html");

	        echo $template->render(template_path ."/space_shooter.html");
	    }
	);

	


	$f3->run();



 	include template_path . "/footer.html";
?>


