<div class="col-xs-12">
    <div class="sms-tracker page">
        <div class="col-xs-12">
            <h2>SMS Attendance Tracker</h2>
        </div>
        <div>
        	<div class="col-xs-12 col-lg-5">
        		<div>
        			<h4>Technologies used:</h4>
        			<p><a href="https://nodejs.org/" target="_blank">Node.js</a>, <a href="http://expressjs.com/" target="_blank">Express</a>, <a href="https://www.twilio.com/" target="_blank">Twillio</a>, <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a>, <a href="http://gruntjs.com/" target="_blank">Grunt</a>, <a href="https://angularjs.org" target="_blank">Angular</a>, <a href="http://mongoosejs.com/" target="_blank">Mongoose</a>, <a href="https://developers.google.com/apps-script/" target="_blank">Google Apps Script</a>, Javascript, HTML, CSS</p>
        		</div>
        		<h4>Description</h4>
	            
	            <p class="long-description"><?php echo $this->render($sms_tracker_long_description,$this->mime,get_defined_vars()); ?></p>

	            <h3>Github repo:</h3>
        		<p><a target="_blank" href="https://github.com/erceth/attendance-tracker">SMS attendance-tracker</a></p>
        		<h3>Google Doc</h3>
                <div><a href="https://docs.google.com/spreadsheets/d/1BKtDlT-R3nlqEIMLs0XvrFGBAsqFqzSbAnzKaHJfJ-8/edit#gid=2132167194" target="_blank">Google spreadsheet</a></div>

	        </div>
	        <div class="col-xs-12 col-lg-6 col-lg-offset-1">
	        	<h3>Screenshots</h3>
		         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	                <!-- Indicators -->
	                <ol class="carousel-indicators">
	                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	                </ol>
	                <!-- Wrapper for slides -->
	                <div class="carousel-inner" role="listbox">
	                    <div class="item active">
	                        <img src="img/google-sheets.png" alt="google spreadsheet">
	                        <a ui-sref="jsflags">
	                            <div class="carousel-caption">
	                            	Google app script pulls the role from the Mongo database and displays on an easy to share spreadsheet.
	                            </div>
	                        </a>
	                    </div>
	                    <div class="item">
	                    	<img src="img/google-app-script.png" alt="google app script code editor">
	                        <a ui-sref="jsflags">
	                            <div class="carousel-caption">
	                                Google app script pulls the role from the Mongo database and displays on an easy to share spreadsheet.
	                            </div>
	                        </a>
	                    </div>
	                    <div class="item">
	                        <img src="img/twillio_screenshot.png" alt="twillio sms text log">
	                        <a ui-sref="sms-tracker">
	                            <div class="carousel-caption">
	                                Twillio log of recent text messages it has recieved from attendees.
	                            </div>
	                        </a>
	                    </div>
	                </div>
	                <!-- Controls -->
	                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	                    <span class="sr-only">Previous</span>
	                </a>
	                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	                    <span class="sr-only">Next</span>
	                </a>
	            </div>
	        </div>
        </div>
    </div>
</div>
