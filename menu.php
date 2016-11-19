<style>
/* Define the body style */
body {
    font-family:Arial;
    font-size:12px;
}

/* We remove the margin, padding, and list style of UL and LI components */
#menuwrapper ul, #menuwrapper ul li{
    margin:0;
    padding:0;
    list-style:none;
}

/* We apply background color and border bottom white and width to 150px */
#menuwrapper ul li{
    background-color:#7f95db;
    border-bottom:solid 1px white;
    width:150px;
    cursor:pointer;
}

/* We apply the background hover color when user hover the mouse over of the li component */
#menuwrapper ul li:hover{
    background-color:#6679e9;
    position:relative;
}

/* We apply the link style */
#menuwrapper ul li a{
    padding:5px 15px;
    color:#ffffff;
    display:inline-block;
    text-decoration:none;
}

/**** SECOND LEVEL MENU ****/
/* We make the position to absolute for flyout menu and hidden the ul until the user hover the parent li item */
#menuwrapper ul li ul{
    position:absolute;
    display:none;
}

/* When user has hovered the li item, we show the ul list by applying display:block, note: 150px is the individual menu width.  */
#menuwrapper ul li:hover ul{
    left:150px;
    top:0px;
    display:block;
}

/* we apply different background color to 2nd level menu items*/
#menuwrapper ul li ul li{
    background-color:#cae25a;
}

/* We change the background color for the level 2 submenu when hovering the menu */
#menuwrapper ul li:hover ul li:hover{
    background-color:#b1b536;
}

/* We style the color of level 2 links */
#menuwrapper ul li ul li a{
    color:#454444;
    display:inline-block;
    width:120px;
}

/**** THIRD LEVEL MENU ****/
/* We need to hide the 3rd menu, when hovering the first level menu */
#menuwrapper ul li:hover ul li ul{
    position:absolute;
    display:none;
}

/* We show the third level menu only when they hover the second level menu parent */
#menuwrapper ul li:hover ul li:hover ul{
    display:block;
    left:150px;
    top:0;
}

/* We change the background color for the level 3 submenu*/
#menuwrapper ul li:hover ul li:hover ul li{
    background:#86d3fa;
}

/* We change the background color for the level 3 submenu when hovering the menu */

#menuwrapper ul li:hover ul li:hover ul li:hover{
    background:#358ebc;
}

/* We change the level 3 link color */
#menuwrapper ul li:hover ul li:hover ul li a{
    color:#ffffff;
}

/* Clear float */
.clear{
    clear:both;
}
</style>
<!-- CHANGE for site header and code -->
<div id="menuwrapper">
		<ul id="menu">
		<li>
		<a href="#">Bot Analytics</a>
		<ul>
			<li>
				<li><a href="https://www.dashbot.io/login">Dashbot Analytics</a>         
			</li>
			
		</ul>
	<li>
	<li>
		<a href="#">Training Bot</a>
		<ul>
			<li>
				<a href="https://console.api.ai/api-client/#/login">API.AI</a>
			</li>
			
		</ul>
	<li>
	<li>
		<a href="#">Business Cases</a>
		<ul>
			 <li><a href="index.php">Top Selling Offers</a></li>
			 <li><a href="fb_campaign.php">Broadcast to FB users</a></li>
		</ul>
	<li>
	<li>
		<a href="#">Controls</a>
		<ul>
			<li>
				<a href="logout.php">Sign Out</a>
			</li>
			
		</ul>
	<li>
</ul>
</div>
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

