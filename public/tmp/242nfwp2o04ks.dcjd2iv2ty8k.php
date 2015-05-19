<!DOCTYPE html>
<head>
	<title>Eric Ethington</title>
	<meta name="description" content="Eric Ethington's website.  This is the root domain for all ericethington.com subdomain sites.  This site has links to all the projects that make up ericethington.com.">
	<meta name="keywords" content="Eric Ethington ericethington.com">
	<meta name="author" content="Eric Ethington">

    <script type="text/javascript" src="js/lib.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<link href="styles/lib.css" rel="stylesheet" type="text/css">
	<link href="styles/main.css" rel="stylesheet" type="text/css">

</head>

<body class="preload">
    <div class="wrapper">
        <header class="col-xs-12" ng-hide="hideFooterHeader()">
        	<div class="header-container">
	            <div class="col-xs-2 col-sm-4 site-title">
	            	<h1>Eric<span class="hidden-sm hidden-xs"> Ethington</span></h1>
	            </div>
	            <div class="navigation hidden-xs hidden-sm col-sm-8">
	                <?php echo $this->render($navigation_path,$this->mime,get_defined_vars()); ?>
	            </div>
	            <span class="hamburger hidden-md hidden-lg">===</span>
	            <div class="mobile-navigation hidden-md hidden-lg col-xs-12">
	                <?php echo $this->render($navigation_path,$this->mime,get_defined_vars()); ?>
	            </div>
	            
	        </div>
        </header>
        <div class="mid">
