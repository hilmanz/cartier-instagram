<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta charset="utf-8" />
<meta name = "viewport" content = "width=device-width, maximum-scale = 1, minimum-scale=1" />
<meta name="keywords" content="social media monitoring, social media monitoring indonesia,media monitoring indonesia,sentiment analysis bahasa indonesia,sonar media monitoring,sonar social media monitoring" />
<meta name="robots" content="index,all"/>
<link type="text/css" href="css/heineken.css" rel="stylesheet" />
<!-- Add jQuery library -->
<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/heineken.js"></script>
<title>HEINEKEN</title>
<!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="js/selectivizr-min.js"></script>
<![endif]-->
</head>

<body>
    <div id="body">
	<div id="fb-root"></div>
	<div id="user-info"></div>
        <a id="logo fb-auth">
        	<img src="images/logo.png" />
        </a><!-- end #logo -->
	
    </div><!-- end #body -->
</body>
<script>
window.fbAsyncInit = function() {
FB.init({ appId: '687862134568198',
status: true,
cookie: true,
xfbml: true,
oauth: true});

function updateButton(response) {
var button = document.getElementById('fb-auth');
if (response.authResponse) {
//user is already logged in and connected
var userInfo = document.getElementById('user-info');

FB.api('/me', function(response) {

 
FB.api('/me/likes/7174672354', function(responselike) {
		if(responselike.data.length){
					self.location='success.html';
				 
		}else{
					self.location='like.html';
					 
		}
});
 
});

button.onclick = function() {
FB.logout(function(response) {
var userInfo = document.getElementById('user-info');
userInfo.innerHTML="";
});
};
} else {
//user is not connected to your app or logged out
button.onclick = function() {
FB.login(function(response) {
if (response.authResponse) {
	FB.api('/me', function(response) {
	//var userInfo = document.getElementById('user-info');
	 
		FB.api('/me/likes/7174672354', function(responselike) {
			 if(responselike.data.length){
					self.location='success.html';
				 
				}else{
					self.location='like.html';
					 
				}
		});
		
	});
} else {
	//user cancelled login or did not grant authorization
	//self.location='loginface.html';
}
}, {scope:'email'});
}
}
}
// run once with current status and whenever the status changes
FB.getLoginStatus(updateButton);
FB.Event.subscribe('auth.statusChange', updateButton);
};
 (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

</html>