<?php
session_start();
?>
<html>
<title>Add Top Offers</title>
<script src="jquery-1.12.4.js"></script>
<script src="script.js"></script>
<?php
error_reporting(0);
if ($_SESSION['login'] == "")
{
	header("location:login.php");	
}
?>
<?php
include("menu.php");
?>
<!-- CHAT WITH FB OPTION -->
<body style="margin:0 auto;">
<script>

window.fbAsyncInit = function() {
FB.init({
appId: "312339728800370",
xfbml: true,
version: "v2.6"
});

};

(function(d, s, id){
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) { return; }
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

/*FB.Event.subscribe('auth.statusChange', function(response) {
  // do something with response
	alert(JSON.stringify(response));
	//alert("Login needed");
	    
});*/

/*FB.Event.subscribe('send_to_messenger', function(response) {
    if ( response.event == 'clicked' ) {	    
	
          // callback for events triggered by the plugin
          //  window.top.location = 'https://www.messenger.com/t/himantmusic/';
    }
      });*/
//};

</script>    

<div id="content">

<form method="POST" action="index.php" name="form1">
<table cellspacing="0" cellpadding="10">
<tbody>
<tr>
<td>Offer Name</td><td><input type="text" name="offer_name" value="" /></td>
</tr>
<tr>
<td>Description / Link</td><td><input type="text" name="link" value="" /></td>
</tr>
<tr>
<td>&nbsp;</td><td><input type="submit" value="Submit" /></td>
</tr>
</tbody>
</table>
</form>

<div class="chat_window" style="margin-left:20px; float:left; display:none;">

<div style="float:left;">
<div id="response" style="background-color:#ffffff; overflow:auto; border:1px solid #aaaaaa; border-bottom:none; padding:20px; width:255px; height:170px;"></div>
<input size="26" id="input" type="text"> <button id="rec">Speak</button>
</div>

<div class="fb-messenger-checkbox"  
  origin='https://www.facebook.com/himantmusic/'
  page_id=165157840188738
  messenger_app_id=312339728800370
  user_ref="usernumdummy" 
  prechecked="true" 
  allow_login="true" 
  size="standard">
</div> 

<!-- <div style="margin-left:20px;" class="fb-page" 
	 data-href="https://www.facebook.com/himantmusic/" 
	 data-tabs="messages" 
	 data-width="340" 
	 data-height="300" 
	 hide_cover="true"
	 data-small-header="true">
<div class="fb-xfbml-parse-ignore">
<blockquote></blockquote>
</div>
</div> -->

     
<!--<div class="fb-messenger-checkbox"  
  origin="https://php-web.herokuapp.com/edit.php"
  page_id="165157840188738"
  messenger_app_id="312339728800370"
  user_ref="Yes" 
  prechecked="true" 
  allow_login="true" 
  size="large"></div>  -->
  
<!--<div class="fb-send-to-messenger" style="float:right; margin-left:40px;" 
          messenger_app_id="312339728800370" 
		  page_id="165157840188738" 
		  data-ref="Yes" 
		  color="blue" 
		  size="standard">
</div>-->


</div>

	</div>
<div style="clear:both;"></div>
</body>
</html>
