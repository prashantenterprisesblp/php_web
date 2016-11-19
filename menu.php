<style>
html, body, div, span, applet, object, iframe,h1, h2, h3, h4, h5, h6, p, blockquote, pre,a, abbr, acronym, address, big, cite, code,del, dfn, em, font, img, ins, kbd, q, s, samp,small, strike, strong, sub, sup, tt, var,b, u, i, center,dl, dt, dd, ol, ul, li,fieldset, form, label, legend,table, caption, tbody, tfoot, thead, tr, th, td {margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;vertical-align: baseline;background: transparent;}body {line-height: 1;}ol, ul {list-style: none;}blockquote, q {quotes: none;}blockquote:before, blockquote:after,q:before, q:after {content: '';content: none;} /* remember to define focus styles! */ :focus {outline: 0;} /* remember to highlight inserts somehow! */ins {text-decoration: none;}del {text-decoration: line-through;} /* tables still need 'cellspacing="0"' in the markup */ table {border-collapse: collapse;border-spacing: 0;}


/*---------- BODY --------------------------------*/

body {
	text-align: center;
	background: #e0e0e0;
	padding-bottom: 200px;
}

a {
	text-decoration: none;
}

/*---------- Wrapper --------------------*/

nav {
	width: 100%;
	height: 80px;
	background: #222;
}

ul {
	text-align: center;
}

ul li {
	font: 13px Verdana, 'Lucida Grande';
	cursor: pointer;
	-webkit-transition: padding .05s linear;
	-moz-transition: padding .05s linear;
	-ms-transition: padding .05s linear;
	-o-transition: padding .05s linear;
	transition: padding .05s linear;
}
ul li.drop {
	position: relative;
}
ul > li {
	display: inline-block;
}
ul li a {
	line-height: 80px;
	padding: 0 20px;
	height: 80px;
	color: #777;
	-webkit-transition: all .1s ease-out;
	-moz-transition: all .1s ease-out;
	-ms-transition: all .1s ease-out;
	-o-transition: all .1s ease-out;
	transition: all .1s ease-out;
}
ul li a:hover {
	color: #eee;
}

.dropOut .triangle {
	width: 0;
	height: 0;
	position: absolute;
	border-left: 8px solid transparent;
	border-right: 8px solid transparent;
	border-bottom: 8px solid white;
	top: -8px;
	left: 50%;
	margin-left: -8px;
}
.dropdownContain {
	width: 160px;
	position: absolute;
	z-index: 2;
	left: 50%;
	margin-left: -80px; /* half of width */
	top: -400px;
}
.dropOut {
	width: 160px;
	background: white;
	float: left;
	position: relative;
	margin-top: 0px;
	opacity: 0;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: 0 1px 6px rgba(0,0,0,.15);
	-moz-box-shadow: 0 1px 6px rgba(0,0,0,.15);
	box-shadow: 0 1px 6px rgba(0,0,0,.15);
	-webkit-transition: all .1s ease-out;
	-moz-transition: all .1s ease-out;
	-ms-transition: all .1s ease-out;
	-o-transition: all .1s ease-out;
	transition: all .1s ease-out;
}

.dropOut ul {
	float: left;
	padding: 10px 0;
}
.dropOut ul li {
	text-align: left;
	float: left;
	width: 125px;
	padding: 12px 0 10px 15px;
	margin: 0px 10px;
	color: #777;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-transition: background .1s ease-out;
	-moz-transition: background .1s ease-out;
	-ms-transition: background .1s ease-out;
	-o-transition: background .1s ease-out;
	transition: background .1s ease-out;
}

.dropOut ul li:hover {
	background: #f6f6f6;
}

ul li:hover a { color: white; }
ul li:hover .dropdownContain { top: 65px; }
ul li:hover .underline { border-bottom-color: #777; }
ul li:hover .dropOut { opacity: 1; margin-top: 8px; }
</style>
<!-- CHANGE for site header and code -->
<nav>
		<ul>
			<li class="drop">
				<a href="#">Bot Performance and Analytics</a>
				
				<div class="dropdownContain">
					<div class="dropOut">
						<div class="triangle"></div>
						<ul>
							<li><a href="https://www.dashbot.io/login">Analytics</a></li>                            
						</ul>
					</div>
				</div>
			
			</li>
			<li class="drop">
				<a href="#">Bot Training</a>
				
				<div class="dropdownContain">
					<div class="dropOut">
						<div class="triangle"></div>
						<ul>
							<li><a href="https://console.api.ai/api-client/#/login">API.AI</a></li>
						</ul>
					</div>
				</div>
			
			</li>
			<li class="drop">
				<a href="#">You</a>
				
				<div class="dropdownContain">
					<div class="dropOut">
						<div class="triangle"></div>
						<ul>
							<li>Plan</li>
							<li>Account Settings</li>
							<li>Switch Account</li>
							<li>Sign Out</li>
						</ul>
					</div>
				</div>
			
			</li>

			<li class="drop">
				<a href="#">Business Use Cases</a>
				
				<div class="dropdownContain">
					<div class="dropOut">
						<div class="triangle"></div>
						<ul>
							<li><a href="index.php">Top Selling Offers</a></li>
			    				<li><a href="fb_campaign.php">Broadcast to FB users</a></li>                            
						</ul>
					</div>
				</div>
			
			</li>
			<li class="drop">
				<a href="#">Controls</a>
				
				<div class="dropdownContain">
					<div class="dropOut">
						<div class="triangle"></div>
						<ul>
							<li><a href="logout.php">SignOut</a></li>
			    				
						</ul>
					</div>
				</div>
			
			</li>
		</ul>
</nav>
<!--<div id="body" class="clear">
			<div id="sidebar" class="column-left">
			<ul>
                	<li>
			<h4>Bot Performance and Analytics</h4>
                        <ul class="blocklist">
                            <li><a href="https://www.dashbot.io/login">Dashbot Analytics</a></li>                            
                        </ul>
			</li>
			<li>
			<h4>Bot Training</h4>
                        <ul class="blocklist">
                            <li><a href="https://console.api.ai/api-client/#/login">API.AI</a></li>
                           </ul>
			</li>
			<li>
			<h4>Business Usecases</h4>
                        <ul class="blocklist">
                            <li><a href="index.php">Top Selling Offers</a></li>
			    <li><a href="fb_campaign.php">Broadcast to FB users</a></li>
                           </ul>
			</li>
			<li>
			<h4>Session Controls</h4>
                        <ul class="blocklist">
                            <li><a href="logout.php">Sign Out</a></li>
			                    </ul>
			</li>
			</ul>
			</div>
	

<!-- CHANGE ENDS here -->

